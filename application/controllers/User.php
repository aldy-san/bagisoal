<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $admin = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            if ($admin) {
                redirect('admin');
            } else {
                $this->load->view('template_home/header_user', $data);
            }
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/index');
        $this->load->view('template_home/footer');
    }

    public function soal_main()
    {
        $data['title'] = 'Soal';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/soal_main');
        $this->load->view('template_home/footer');
    }

    public function kompetisi_main()
    {
        $data['title'] = 'Kompetisi';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/kompetisi_main');
        $this->load->view('template_home/footer');
    }

    public function forum_main()
    {
        $data['title'] = 'Forum';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/forum_main');
        $this->load->view('template_home/footer');
    }

    public function catatan_main()
    {
        $data['title'] = 'Bagi Catatan';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/catatan_main');
        $this->load->view('template_home/footer');
    }
    // PROFIL
    public function profil()
    {
        if (!$this->session->userdata('email')) {
            redirect('');
        }
        $data['title'] = 'Profil saya';
        $this->load->view('template_home/header', $data);
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
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
            redirect('profil');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
            redirect('edit_profil');
        }
    }
}
