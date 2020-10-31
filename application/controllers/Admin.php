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
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/daftar/pengguna/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('users');
        $config['per_page'] = 2;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['pengguna'] = $this->m_admin->tampil_data('users', $config['per_page'], $config['start'], 'id_user')->result();
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
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/daftar/soal/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('soal');
        $config['per_page'] = 9;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['soal'] = $this->m_admin->tampil_data('soal', $config['per_page'], $config['start'], 'kode_soal')->result();
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

        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/daftar/kompetisi/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('kompetisi');
        $config['per_page'] = 9;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['kompetisi'] = $this->m_admin->tampil_data('kompetisi', $config['per_page'], $config['start'], 'kode_kompetisi')->result();
        $data['title'] = 'Daftar kompetisi';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/daftar_kompetisi', $data);
        $this->load->view('admin/footer');
    }
    //DAFTAR MITRA
    public function daftar_mitra()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/daftar/mitra/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('mitra');
        $config['per_page'] = 9;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['mitra'] = $this->m_admin->tampil_data('mitra', $config['per_page'], $config['start'], 'id_mitra')->result();
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
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/daftar/admin/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('admin');
        $config['per_page'] = 9;
        $config['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['admin'] = $this->m_admin->tampil_data('admin', $config['per_page'], $config['start'], 'id_admin')->result();
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
        $this->form_validation->set_rules(
            'soal',
            'Soal',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi1',
            'Opsi 1',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi2',
            'Opsi 2',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi3',
            'Opsi 3',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi4',
            'Opsi 4',
            'required',
        );
        $this->form_validation->set_rules(
            'sumber',
            'Sumber',
            'required',
        );
        $this->form_validation->set_rules(
            'materi',
            'Materi',
            'required',
        );
        $this->form_validation->set_rules(
            'poin',
            'Poin',
            'required',
        );
        $this->form_validation->set_rules(
            'pembahasan',
            'Pembahasan',
            'required',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Soal';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/tambah_soal');
            $this->load->view('admin/footer');
        } else {
            $this->input_soal();
        }
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
        redirect('daftar/soal');
    }
    //TAMBAH KOMPETISI
    public function tambah_kompetisi()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Kompetisi',
            'required',
        );
        $this->form_validation->set_rules(
            'penyelenggara',
            'Penyelenggara',
            'required',
        );
        $this->form_validation->set_rules(
            'batasPendaftaran',
            'Batas',
            'required',
        );
        $this->form_validation->set_rules(
            'mulai',
            'Mulai',
            'required',
        );
        $this->form_validation->set_rules(
            'berakhir',
            'Berakhir',
            'required',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah kompetisi';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/tambah_kompetisi');
            $this->load->view('admin/footer');
        } else {
            $this->input_kompetisi();
        }
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
        } else {
            $banner = 'default_banner.jpg';
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
        redirect('daftar/kompetisi');
    }
    //TAMBAH MITRA
    public function tambah_mitra()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Mitra',
            'required',
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
        );
        $this->form_validation->set_rules(
            'bidang',
            'Bidang',
            'required',
        );
        $this->form_validation->set_rules(
            'email',
            'Email Mitra',
            'required|valid_email',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Mitra';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/tambah_mitra');
            $this->load->view('admin/footer');
        } else {
            $this->input_mitra();
        }
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
        redirect('daftar/mitra');
    }

    //EDIT SOAL
    public function edit_soal()
    {
        $this->form_validation->set_rules(
            'soal',
            'Soal',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi1',
            'Opsi 1',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi2',
            'Opsi 2',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi3',
            'Opsi 3',
            'required',
        );
        $this->form_validation->set_rules(
            'opsi4',
            'Opsi 4',
            'required',
        );
        $this->form_validation->set_rules(
            'sumber',
            'Sumber',
            'required',
        );
        $this->form_validation->set_rules(
            'materi',
            'Materi',
            'required',
        );
        $this->form_validation->set_rules(
            'poin',
            'Poin',
            'required',
        );
        $this->form_validation->set_rules(
            'pembahasan',
            'Pembahasan',
            'required',
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Soal';
            $config['base_url'] = 'http://localhost/bagisoal/edit/soal/';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['soal'] = $this->db->get_where('soal', ['kode_soal' => $this->uri->segment(3)])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/edit_soal', $data);
            $this->load->view('admin/footer');
        } else {
            $this->input_soal();
        }
    }
    //EDIT KOMPETISI

    //EDIT MITRA

    //HAPUS SOAL
    public function hapus_soal($id)
    {
        $this->m_admin->hapus_data('soal', $id, 'kode_soal');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/soal');
    }
    //HAPUS MITRA
    public function hapus_mitra($id)
    {
        $this->m_admin->hapus_data('mitra', $id, 'id_mitra');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/mitra');
    }
    //HAPUS KOMPETISI
    public function hapus_kompetisi($id)
    {
        $this->m_admin->hapus_data('kompetisi', $id, 'kode_kompetisi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/kompetisi');
    }
}
