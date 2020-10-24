<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
        $this->load->view('index');
        $this->load->view('template_home/footer');
    }
    public function login()
    {
        $data['title'] = 'Login';
        $this->load->view('template_home/header', $data);
        $this->load->view('auth/login');
        $this->load->view('template_home/footer');
    }
    public function register()
    {
        $this->form_validation->set_message('required', '{field} harus diisi!');
        $this->form_validation->set_message('valid_email', '{field} harus menggunakan email yang valid!');
        $this->form_validation->set_message('matches', 'password tidak sama!');
        $this->form_validation->set_message('is_unique', '{field} sudah terdaftar!');
        $this->form_validation->set_message('min_length', '{field} harus memiliki panjang 6-12 karakter!');
        $this->form_validation->set_message('max_length', '{field} harus memiliki panjang 6-12 karakter!');
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[users.email]',
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|min_length[6]|max_length[12]|matches[password2]',
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|matches[password1]',
        );
        $this->form_validation->set_rules(
            'syarat',
            'Syarat',
            'required',
            array('required' => 'Anda harus menyetujui syarat dan ketentuan yang berlaku!')
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('template_home/header', $data);
            $this->load->view('auth/register');
            $this->load->view('template_home/footer');
        } else {
            $data = [

                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'total_poin' => '0'
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Anda telat berhasil mendaftar!</div>');
            redirect('auth/login');
        }
    }
}
