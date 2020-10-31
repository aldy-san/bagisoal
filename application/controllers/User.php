<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
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
        $data['title'] = 'Edit Profil';
        $this->load->view('template_home/header', $data);
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template_home/header_user', $data);

        $this->load->view('user/edit_profil', $data);
        $this->load->view('template_home/footer');
    }
}
