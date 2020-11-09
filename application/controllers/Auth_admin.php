<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //jika sudah login
        if ($this->session->userdata('email')) {
            //jika sudah login sebagai admin

            $email = $this->session->userdata('email');
            $admin = $this->db->get_where('admin', ['email' => $email])->row_array();
            if (!$admin) {
                redirect('');
            } else {
                redirect('admin');
            }
        }
    }
    public function index()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Login';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_umum');
            $this->load->view('admin/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('admin', ['email' => $email])->row_array();
        //usernya ada
        if ($user) {
            //cek password
            if ($password === $user['password']) {
                $data = [
                    'id_admin'  => $user['id_admin'],
                    'email'     => $user['email']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth_admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth_admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda telah Logout</div>');
        redirect('auth_admin');
    }
}
