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
        //jika sudah login di tendang
        if ($this->session->userdata('email')) {
            redirect('');
        }
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
            $data['title'] = 'Login';
            $this->load->view('template_home/header', $data);
            $this->load->view('template_home/header_umum', $data);
            $this->load->view('auth/login');
            $this->load->view('template_home/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        //usernya ada
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'email' => $user['email']
                ];
                $this->session->set_userdata($data);
                redirect('');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        //jika sudah login di tendang
        if ($this->session->userdata('email')) {
            redirect('');
        }

        $this->form_validation->set_message('matches', 'password tidak sama!');
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
            $this->load->view('template_home/header_umum', $data);
            $this->load->view('auth/register');
            $this->load->view('template_home/footer');
        } else {
            $data = [

                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'total_poin' => '0'
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Anda telat berhasil mendaftar!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda telah Logout</div>');
        redirect('auth');
    }
}
