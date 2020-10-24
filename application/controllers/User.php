<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Beranda';
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
            $this->load->view('index');
            $this->load->view('template_home/footer');
        } else {
            redirect('umum');
        }
    }
    public function soal_main()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template_home/header_user', $data);
        $this->load->view('index');
        $this->load->view('template_home/footer');
    }
}
