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
            $admin = $this->db->get_where('admin', ['email' => $email])->row_array();
            if (!$admin) {
                redirect('');
            }
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
    //DAFTAR PENGGUNA
    public function daftar_pengguna()
    {

        $data['pengguna'] = $this->m_admin->tampil_data('users')->result();
        $data['title'] = 'Daftar Pengguna';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/daftar_pengguna', $data);
        $this->load->view('admin/footer');
    }
    //DAFTAR SOAL
    public function daftar_soal()
    {

        $data['soal'] = $this->m_admin->tampil_data('soal')->result();
        $data['title'] = 'Daftar Soal';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/daftar_soal', $data);
        $this->load->view('admin/footer');
    }
    //DAFTAR KOMPETISI
    public function daftar_kompetisi()
    {

        $data['kompetisi'] = $this->m_admin->tampil_data('kompetisi')->result();
        $data['title'] = 'Daftar kompetisi';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/daftar_kompetisi', $data);
        $this->load->view('admin/footer');
    }
    //DAFTAR mitra
    public function daftar_mitra()
    {

        $data['mitra'] = $this->m_admin->tampil_data('mitra')->result();
        $data['title'] = 'Daftar mitra';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/daftar_mitra', $data);
        $this->load->view('admin/footer');
    }
    //DAFTAR ADMIN
    public function daftar_admin()
    {

        $data['admin'] = $this->m_admin->tampil_data('admin')->result();
        $data['title'] = 'Daftar Admin';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/daftar_admin', $data);
        $this->load->view('admin/footer');
    }

    //TAMBAH SOAL
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
        $this->m_admin->tambah_data('soal', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
        redirect('tambah/soal');
    }
    //TAMBAH KOMPETISI
    public function tambah_kompetisi()
    {
        $data['title'] = 'Tambah kompetisi';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/tambah_kompetisi');
        $this->load->view('admin/footer');
    }
    public function input_kompetisi()
    {
        $banner = $_FILES['banner'];
        if ($banner != '') {
            $config['upload_path'] = './assets/banner';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('banner')) {
                echo "Upload Gagal";
                die();
            } else {
                $banner = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama'                   => $this->input->post('nama'),
            'penyelenggara'          => $this->input->post('penyelenggara'),
            'batasPendaftaran'       => $this->input->post('batasPendaftaran'),
            'mulai'                  => $this->input->post('mulai'),
            'berakhir'               => $this->input->post('berakhir'),
            'banner'                 => $banner
        );
        $this->m_admin->tambah_data('kompetisi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
        redirect('tambah/kompetisi');
    }
    //TAMBAH MITRA
    public function tambah_mitra()
    {
        $data['title'] = 'Tambah Mitra';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/tambah_mitra');
        $this->load->view('admin/footer');
    }
    public function input_mitra()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'bidang'        => $this->input->post('bidang'),
            'alamat'        => $this->input->post('alamat'),
            'email'         => $this->input->post('email')
        );
        $this->m_admin->tambah_data('mitra', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
        redirect('tambah/mitra');
    }

    //HAPUS SOAL
    public function hapus_soal($id)
    {
        $this->m_admin->hapus_soal($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/soal');
    }
    //HAPUS SOAL
    public function hapus_users($id)
    {
        $this->m_admin->hapus_users($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/pengguna');
    }
}
