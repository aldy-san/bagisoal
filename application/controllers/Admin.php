<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //jika sudah login
        if ($this->session->userdata('email')) {
            //jika sudah login sebagai admin
            $email = $this->session->userdata('email');
        } else {
            redirect('auth_admin');
        }
    }
    public function index()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
    public function tambah_soal()
    {
        $data['title'] = 'Tambah Soal';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/tambah_soal');
        $this->load->view('admin/footer');
    }
    public function input_soal()
    {
        $data = array(
            'soal'          => $this->input->post('soal'),
            'opsi1'         => $this->input->post('opsi1'),
            'opsi2'         => $this->input->post('opsi2'),
            'opsi3'         => $this->input->post('opsi3'),
            'opsi4'         => $this->input->post('opsi4'),
            'sumber'        => $this->input->post('sumber'),
            'materi'        => $this->input->post('materi'),
            'poin'          => $this->input->post('poin'),
            'pembahasan'    => $this->input->post('pembahasan')
        );
        $this->load->model('m_soal');
        $this->m_soal->tambah_data($data);
    }
}
