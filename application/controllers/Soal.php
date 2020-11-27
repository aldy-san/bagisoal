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
        $config['base_url'] = 'http://localhost/bagisoal/soal/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('soal');
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(2);
        $this->pagination->initialize($config);

        $id = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');
        $data['id'] = $id;

        $data['soal'] = $this->m_admin->tampil_data('soal', $config['per_page'], $config['start'], 'kode_soal')->result();
        $data['title'] = 'Soal';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/soal/soal_main', $data);
        $this->load->view('template_home/footer');
    }
    public function matematika()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/soal/matematika/';
        $config['total_rows'] = $this->m_soal->jumlah_baris('soal', ['materi' => 'Matematika']);
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $id = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');
        $data['id'] = $id;

        $data['soal'] = $this->m_soal->tampil_data_where('soal', $config['per_page'], $config['start'], 'kode_soal', ['materi' => 'Matematika'])->result();
        $data['title'] = 'Soal Matematika';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/soal/soal_main', $data);
        $this->load->view('template_home/footer');
    }
    public function fisika()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/soal/fisika/';
        $config['total_rows'] = $this->m_soal->jumlah_baris('soal', ['materi' => 'Fisika']);
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $id = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');
        $data['id'] = $id;

        $data['soal'] = $this->m_soal->tampil_data_where('soal', $config['per_page'], $config['start'], 'kode_soal', ['materi' => 'Fisika'])->result();
        $data['title'] = 'Soal Fisika';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/soal/soal_main', $data);
        $this->load->view('template_home/footer');
    }
    public function biologi()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/soal/biologi/';
        $config['total_rows'] = $this->m_soal->jumlah_baris('soal', ['materi' => 'Biologi']);
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $id = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');
        $data['id'] = $id;

        $data['soal'] = $this->m_soal->tampil_data_where('soal', $config['per_page'], $config['start'], 'kode_soal', ['materi' => 'Biologi'])->result();
        $data['title'] = 'Soal Biologi';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/soal/soal_main', $data);
        $this->load->view('template_home/footer');
    }
    public function kimia()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/soal/kimia/';
        $config['total_rows'] = $this->m_soal->jumlah_baris('soal', ['materi' => 'Kimia']);
        $config['per_page'] = 12;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $id = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');
        $data['id'] = $id;

        $data['soal'] = $this->m_soal->tampil_data_where('soal', $config['per_page'], $config['start'], 'kode_soal', ['materi' => 'Kimia'])->result();
        $data['title'] = 'Soal Kimia';
        $this->load->view('template_home/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template_home/header_user', $data);
        } else {
            $this->load->view('template_home/header_umum', $data);
        }
        $this->load->view('user/soal/soal_main', $data);
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
            $id = $this->session->userdata('id_user');
            $email = $this->session->userdata('email');
            $data['id'] = $id;
            if ($this->session->userdata('email')) {
                $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();
                $data['cekTerjawab'] = $this->m_soal->cekTerjawab($id, $this->uri->segment(3));
                $this->load->view('template_home/header_user', $data);
            } else {
                $this->load->view('template_home/header_umum', $data);
            }
            $this->load->view('user/soal/soal_jawab', $data);
            $this->load->view('template_home/footer');
        } else {
            if (!$this->session->userdata('email')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login terlebih dahulu!</div>');
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
