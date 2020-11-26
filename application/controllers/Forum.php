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
    public function showforum()
    {
        $data['title'] = 'Forum';
        $this->load->view('template_home/header', $data);
        $data['top_user'] = $this->m_admin->tampil_data_limit('users', 5, 'total_poin')->result_array();
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/forum/show-forum');
        $this->load->view('template_home/footer');
    }
}
