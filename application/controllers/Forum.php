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
        $config['per_page'] = 9;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);
        //$data['pertanyaan'] = $this->db->get('forum')->result_array();
        $data['pertanyaan'] = $this->m_soal->tampil_data_join_user('forum', $config['per_page'], $config['start'], 'id_pertanyaan')->result();
        $this->load->view('template_home/header', $data);
        $data['top_user'] = $this->m_admin->tampil_data_limit('users', 5, 'total_poin')->result_array();
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
            $data['pertanyaan'] = $this->m_soal->tampil_data_join('forum', 'id_pertanyaan')->row_array();
            $data['jawaban'] = $this->m_soal->tampil_data_join_where('jawaban', 'id_jawaban', ['id_pertanyaan' => $id])->result_array();

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
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Berhasil Ditulis !</div>');
            redirect('forum/showforum/' . $id);
        }
    }

    public function tulis()
    {
        if (!$this->session->userdata('id_user')) {
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
