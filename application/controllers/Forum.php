<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $admin = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($admin) {
            redirect('admin');
        }
    }
    public function index()
    {
        $data['title'] = 'Forum';
        $config['base_url'] = 'http://localhost/bagisoal/komunitas/forum/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('forum');
        $config['per_page'] = 5;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);
        //$data['pertanyaan'] = $this->db->get('forum')->result_array();
        $data['pertanyaan'] = $this->m_soal->tampil_data_join_user('forum', $config['per_page'], $config['start'], 'id_pertanyaan')->result();
        // foreach ($data['pertanyaan'] as $p) {
        // }
        $this->load->view('template_home/header', $data);
        $data['top_user'] = $this->m_user->tampil_data_limit('users', 5, 'total_poin')->result_array();
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/forum/forum_main');
        $this->load->view('template_home/footer');
    }

    public function showforum($id)
    {
        $this->form_validation->set_rules(
            'jawaban',
            'Jawaban',
            'required',
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tanya Sesuatu';
            $data['pertanyaan'] = $this->m_soal->tampil_data_join_where('forum', 'id_pertanyaan', ['id_pertanyaan' => $id])->row_array();
            $data['jawaban'] = $this->m_soal->tampil_data_join_where('jawaban', 'id_jawaban', ['id_pertanyaan' => $id])->result_array();
            $data['vote'] = $this->db->get_where('votes', ['id_pertanyaan' => $id, 'id_user' => $this->session->userdata('id_user')])->row_array();
            if ($data['vote'] == null) {
                $data['vote'] = ['up_down' => 0];
            }
            $vote_up = $this->db->get_where('votes', ['id_pertanyaan' => $id, 'up_down' => 1])->num_rows();
            $vote_down = $this->db->get_where('votes', ['id_pertanyaan' => $id, 'up_down' => -1])->num_rows();
            $data['vote_row'] = $vote_up - $vote_down;
            $this->m_forum->update_forum($id, 'melihat', $data['pertanyaan']['melihat']);
            $this->load->view('template_home/header', $data);
            if ($this->session->userdata('email')) {
                $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
                $this->load->view('template_home/header_user', $data);
            } else {
                $this->load->view('template_home/header_umum', $data);
            }
            $this->load->view('user/forum/show-forum');
            $this->load->view('template_home/footer');
        } else {
            if (!$this->session->userdata('id_user')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login terlebih dahulu!</div>');
                redirect('auth');
            }
            $jawaban = [
                'id_user'       => $this->session->userdata('id_user'),
                'id_pertanyaan'    => $id,
                'jawaban'       => $this->input->post('jawaban')
            ];

            $this->db->insert('jawaban', $jawaban);
            $data['pertanyaan'] = $this->m_soal->tampil_data_join_where('forum', 'id_pertanyaan', ['id_pertanyaan' => $id])->row_array();
            $this->m_forum->update_forum($id, 'jawaban', $data['pertanyaan']['jawaban']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Berhasil Ditulis !</div>');
            redirect('forum/showforum/' . $id);
        }
    }
    public function voteup($id)
    {
        $id_user = $this->session->userdata('id_user');
        $cekVote = $this->db->get_where('votes', ['id_user' => $id_user, 'id_pertanyaan' => $id])->row_array();
        // var_dump();
        if (!$cekVote) {
            $votes = [
                'id_user'       => $id_user,
                'id_pertanyaan' => $id,
                'up_down'       => 1
            ];
            $this->db->insert('votes', $votes);
        } else {
            if ($cekVote['up_down'] != 1) {
                $this->m_forum->update_votes($id, 'up_down', 1, $id_user);
            } else {
                $this->m_forum->update_votes($id, 'up_down', 0, $id_user);
            }
        }
        redirect('forum/showforum/' . $id);
    }
    public function votedown($id)
    {
        $id_user = $this->session->userdata('id_user');
        $cekVote = $this->db->get_where('votes', ['id_user' => $id_user, 'id_pertanyaan' => $id])->row_array();
        // var_dump();
        if (!$cekVote) {
            $votes = [
                'id_user'       => $id_user,
                'id_pertanyaan' => $id,
                'up_down'       => -1
            ];
            $this->db->insert('votes', $votes);
        } else {
            if ($cekVote['up_down'] != -1) {
                // var_dump("asdas");
                // die;
                $this->m_forum->update_votes($id, 'up_down', -1, $id_user);
            } else {
                $this->m_forum->update_votes($id, 'up_down', 0, $id_user);
            }
        }
        redirect('forum/showforum/' . $id);
    }
    // public function voteme()
    // {
    //     $id_vote = $this->input->post('id_vote');
    //     $upOrDown = $this->input->post('upOrDown');
    //     $status = "false";
    //     $updateRecords = 0;
    //     if ($upOrDown == 'upvote') {
    //         //   $updateRecords = $this->m_forum - > updateUpVote($id_vote);
    //     }
    //     if ($updateRecords > 0) {
    //         $status = "true";
    //     }
    //     echo $status;
    //     // check for ajax request
    //     if (!$this->input->is_ajax_request()) { // if not ajax request
    //         $data['id_vote'] = $id_vote;
    //         redirect('home', $data); // redirect it
    //     }
    //     exit;
    // }
    public function tulis()
    {
        if (!$this->session->userdata('id_user')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login terlebih dahulu!</div>');
            redirect('auth');
        }
        $this->form_validation->set_rules(
            'judul_pertanyaan',
            'Judul Pertanyaan',
            'required',
        );

        $this->form_validation->set_rules(
            'pertanyaan',
            'Pertanyaan',
            'required',
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tulis pertanyaan';
            $this->load->view('template_home/header', $data);
            if ($this->session->userdata('email')) {
                $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
                $this->load->view('template_home/header_user', $data);
            } else {
                $this->load->view('template_home/header_umum', $data);
            }
            $this->load->view('user/forum/tulis_pertanyaan');
            $this->load->view('template_home/footer');
        } else {
            $this->_tulis_pertanyaan();
        }
    }

    private function _tulis_pertanyaan()
    {
        if (!$this->session->userdata('id_user')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'judul_pertanyaan' => $this->input->post('judul_pertanyaan'),
            'pertanyaan'        => $this->input->post('pertanyaan')
        ];
        $this->db->insert('forum', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Catatan Berhasil Ditulis !</div>');
        redirect('forum');
    }
}
