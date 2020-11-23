<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['title'] = 'Beranda';
        $this->load->view('template_home/header', $data);
        $data['soal'] = $this->m_admin->tampil_data_limit('soal', 5, 'kode_soal')->result();
        $data['user_terbaik'] = $this->m_admin->tampil_data_limit('users', 5, 'total_poin')->result();
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum');
        }
        $this->load->view('user/index', $data);
        $this->load->view('template_home/footer');
    }

    // PROFIL
    public function profil()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/profil-saya/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('user_soal');
        $config['per_page'] = 10;
        $config['start'] = $this->uri->segment(2);
        $this->pagination->initialize($config);
        $id = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');
        if (!$id) {
            redirect('');
        }
        $data['title'] = 'Profil saya';
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();
        $data['log'] = $this->m_soal->tampil_data_log('user_soal', $config['per_page'], $config['start'], 'id_jawaban', array('id_user' => $id));
        $data['total_jawab'] = $this->m_soal->user_jumlah_jawab($id);
        $data['total_benar'] = $this->m_soal->user_jumlah_hasil($id, 'BENAR');
        $data['total_salah'] = $this->m_soal->user_jumlah_hasil($id, 'SALAH');
        if ($data['total_jawab'] > 0) {
            $data['rasio']   = $data['total_benar'] / $data['total_jawab'] * 100;
        } else {
            $data['rasio'] = 0;
        }

        $this->load->view('template_home/header', $data);
        $this->load->view('template_home/header_user', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('template_home/footer');
    }
    public function edit_profil()
    {
        if (!$this->session->userdata('email')) {
            redirect('');
        }
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Profil';
            $this->load->view('template_home/header', $data);
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
            $this->load->view('user/edit_profil', $data);
            $this->load->view('template_home/footer');
        } else {
            $this->_edit_profil();
        }
    }
    public function _edit_profil()
    {
        $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $pass = $this->input->post('password');
        if (password_verify($pass, $user['password'])) {
            $foto = $_FILES['foto']['name'];
            if ($foto != '') {
                $config['upload_path'] = './assets/foto';
                $config['allowed_types'] = 'jpg|png';
                $config['max_filename']     = '30';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $foto = $this->upload->data('file_name');
                }
            } else {
                $foto = $this->input->post('old');
            }
            $data = array(
                'nama'          => htmlspecialchars($this->input->post('nama', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'foto'          => $foto,
                'total_poin'    => $this->input->post('poin')
            );
            $where = array(
                'id_user' => $this->input->post('id_user')
            );

            $this->m_user->edit_data('users', $data, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di ubah</div>');
            redirect('profil-saya');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
            redirect('edit_profil');
        }
    }
}
