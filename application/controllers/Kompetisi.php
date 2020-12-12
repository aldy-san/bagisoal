<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kompetisi extends CI_Controller
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
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/kompetisi/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('kompetisi');
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(2);
        $this->pagination->initialize($config);

        $data['title'] = 'Kompetisi';
        $data['kompetisi'] = $this->m_admin->tampil_data('kompetisi', $config['per_page'], $config['start'], 'kode_kompetisi')->result();
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/kompetisi/kompetisi_main', $data);
        $this->load->view('template_home/footer');
    }
    public function show()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $kode_kompetisi = $this->uri->segment(3);
        $data['kompetisi'] = $this->db->get_where('kompetisi', ['kode_kompetisi' => $kode_kompetisi])->row_array();
        $data['pendaftar'] = $this->m_kompetisi->tampil_pendaftar($kode_kompetisi)->result_array();
        $data['title'] = $data['kompetisi']['nama'];
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/kompetisi/show-kompetisi');
        $this->load->view('template_home/footer');
    }
    public function daftar()
    {
        $id_user = $this->session->userdata('id_user');
        $kode_kompetisi = $this->uri->segment(3);
        $data = [
            'id_user' => $id_user,
            'kode_kompetisi' => $kode_kompetisi
        ];
        $this->db->insert('user_kompetisi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mendaftar</div>');
        redirect('kompetisi/show/' . $kode_kompetisi);
    }
}
