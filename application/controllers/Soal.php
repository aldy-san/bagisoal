<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
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
        $config['base_url'] = 'http://localhost/bagisoal/daftar/soal/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('soal');
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['soal'] = $this->m_admin->tampil_data('soal', $config['per_page'], $config['start'], 'kode_soal')->result();
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
    public function jawab()
    {
        $this->form_validation->set_rules(
            'opsi',
            'Jawaban',
            'required',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Soal';
            $data['soal'] = $this->db->get_where('soal', ['kode_soal' => $this->uri->segment(3)])->row_array();
            $this->load->view('template_home/header', $data);
            if ($this->session->userdata('email')) {
                $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
                $id = $data['user']['id_user'];
                $data['cekTerjawab'] = $this->m_soal->cekTerjawab($id, $this->uri->segment(3));
                $this->load->view('template_home/header_user', $data);
            } else {
                $this->load->view('template_home/header_umum', $data);
            }
            $this->load->view('user/soal_jawab', $data);
            $this->load->view('template_home/footer');
        } else {
            if (!$this->session->userdata('email')) {
                redirect('auth');
            }
            $this->_jawab();
        }
    }
    public function _jawab()
    {
        $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $user['id_user'];
        $cekTerjawab = $this->m_soal->cekTerjawab($id, $this->input->post('kode_soal'));
        $cekJawaban = $this->m_soal->cekJawaban($this->input->post('kode_soal'), $this->input->post('opsi'));

        $hasil = "";
        if ($cekJawaban) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
        $data = array(
            'id_user'        => $user['id_user'],
            'kode_soal'      => $this->input->post('kode_soal'),
            'jawaban'        => $this->input->post('opsi'),
            'tanggal'        => date('Y-m-d'),
            'hasil'          => $hasil
        );
        $this->m_soal->jawab($data);
        if ($cekJawaban) {
            //tambah poin
            if (!$cekTerjawab) {
                $this->m_soal->tambah_poin($id, $this->input->post('kode_soal'));
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jawaban Benar</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jawaban Salah</div>');
        }
        redirect('soal/jawab/' . $this->input->post('kode_soal'));
    }
}
