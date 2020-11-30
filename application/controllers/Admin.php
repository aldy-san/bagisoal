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
        $data['pengguna'] = $this->m_admin->jumlah_baris('users');
        $data['soal'] = $this->m_admin->jumlah_baris('soal');
        $data['kompetisi'] = $this->m_admin->jumlah_baris('kompetisi');
        $data['mitra'] = $this->m_admin->jumlah_baris('mitra');
        $data['admin'] = $this->m_admin->jumlah_baris('admin');
        $data['log'] = $this->m_admin->tampil_data_limit('log_admin', 12, 'id')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
    //PROFIL
    public function profil()
    {
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['log'] = $this->m_admin->tampil_log_admin(6, $this->session->userdata('id_admin'))->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/side_bar');
        $this->load->view('admin/profil');
        $this->load->view('admin/footer');
    }
    public function edit_profil()
    {
        if (!$this->session->userdata('email')) {
            redirect('');
        }
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
        );
        $this->form_validation->set_rules(
            'no_hp',
            'Nomor Handphone',
            'required',
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Profil';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/edit_profil', $data);
            $this->load->view('admin/footer');
        } else {
            $this->_edit_profil();
        }
    }
    public function _edit_profil()
    {
        $user = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $pass = $this->input->post('password');
        $cek = strcmp($pass, $user);
        if ($cek == 0) {
            $foto = $_FILES['foto']['name'];
            if ($foto != '') {
                $config['upload_path'] = './assets/foto';
                $config['allowed_types'] = 'jpg|png';
                $config['max_filename']     = '30';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $foto = $this->upload->data('file_name');
                }
            } else {
                $foto = $this->input->post('old');
            }
            $data = array(
                'nama_admin'          => htmlspecialchars($this->input->post('nama', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'no_hp'         => $this->input->post('no_hp'),
                'alamat'        => $this->input->post('alamat', true),
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'foto'          => $foto,
            );
            $where = array(
                'id_admin' => $this->input->post('id_admin')
            );

            $this->m_admin->edit_data('admin', $data, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di ubah</div>');
            redirect('profil-admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
            redirect('profil-admin/edit');
        }
    }
    //DAFTAR PENGGUNA
    public function daftar_pengguna()
    {
        //PAGINATION
        $config['base_url'] = 'http://localhost/bagisoal/daftar/pengguna/';
        $config['total_rows'] = $this->m_admin->jumlah_baris('users');
        $config['per_page'] = 9;
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
        $config['per_page'] = 9;
        $config['start'] = $this->uri->segment(3);
        $config['first_url'] = $config['base_url'] . '?' . http_build_query($_GET);
        if ($this->input->get('materi')) {
            $where = [
                'materi' => $this->input->get('materi')
            ];
            $config['total_rows'] = $this->m_admin->jumlah_baris_soal('soal', $where);
            $data['soal'] = $this->m_admin->tampil_data_soal('soal', $config['per_page'], $config['start'], 'kode_soal', $where)->result();
            $this->pagination->initialize($config);
        } else {
            $config['total_rows'] = $this->m_admin->jumlah_baris('soal');
            $data['soal'] = $this->m_admin->tampil_data('soal', $config['per_page'], $config['start'], 'kode_soal')->result();
            $this->pagination->initialize($config);
        }
        // $data['soal'] = $this->m_admin->tampil_data('soal', $config['per_page'], $config['start'], 'kode_soal')->result();
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
            'jawaban',
            'Jawaban',
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
            'jawaban'       => $this->input->post('jawaban'),
            'sumber'        => $this->input->post('sumber'),
            'materi'        => $this->input->post('materi'),
            'poin'          => $this->input->post('poin'),
            'pembahasan'    => $this->input->post('pembahasan')
        );
        //log
        $id = $this->session->userdata('id_admin');
        $last_id = $this->m_admin->tambah_data('soal', $data);
        $log = array(
            'id_admin'      => $id,
            'keterangan'    => 'Tambah',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Soal',
            'id_data'       => $last_id
        );
        $this->m_admin->tambah_data('log_admin', $log);
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
        $this->form_validation->set_rules(
            'soal1',
            'Soal 1',
            'required',
        );
        $this->form_validation->set_rules(
            'soal2',
            'Soal 2',
            'required',
        );
        $this->form_validation->set_rules(
            'soal3',
            'Soal 3',
            'required',
        );
        $this->form_validation->set_rules(
            'soal4',
            'Soal 4',
            'required',
        );
        $this->form_validation->set_rules(
            'soal5',
            'Soal 5',
            'required',
        );
        $data['soal'] = $this->db->get('soal')->result_array();
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
        $banner = $_FILES['banner']['name'];

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
            'soal1'                  => $this->input->post('soal1'),
            'soal2'                  => $this->input->post('soal2'),
            'soal3'                  => $this->input->post('soal3'),
            'soal4'                  => $this->input->post('soal4'),
            'soal5'                  => $this->input->post('soal5'),
            'banner'                 => $banner
        );
        //log
        $id = $this->session->userdata('id_admin');
        $last_id = $this->m_admin->tambah_data('kompetisi', $data);
        $log = array(
            'id_admin'      => $id,
            'keterangan'    => 'Tambah',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Kompetisi',
            'id_data'       => $last_id
        );
        $this->m_admin->tambah_data('log_admin', $log);
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
        //log
        $id = $this->session->userdata('id_admin');
        $last_id = $this->m_admin->tambah_data('mitra', $data);
        $log = array(
            'id_admin'      => $id,
            'keterangan'    => 'Tambah',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Mitra',
            'id_data'       => $last_id
        );
        $this->m_admin->tambah_data('log_admin', $log);
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
            $this->_edit_soal();
        }
    }
    public function _edit_soal()
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
        $where = array(
            'kode_soal' => $this->input->post('kode_soal')
        );
        //log
        $id = $this->session->userdata('id_admin');
        $last_id = $this->m_admin->edit_data('soal', $data, $where);
        $log = array(
            'id_admin'      => $id,
            'keterangan'    => 'Edit',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Soal',
            'id_data'       => $this->input->post('kode_soal')
        );
        $this->m_admin->tambah_data('log_admin', $log);

        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Berhasil di ubah</div>');
        redirect('daftar/soal');
    }
    //EDIT KOMPETISI
    public function edit_kompetisi()
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
        $this->form_validation->set_rules(
            'soal1',
            'Soal 1',
            'required',
        );
        $this->form_validation->set_rules(
            'soal2',
            'Soal 2',
            'required',
        );
        $this->form_validation->set_rules(
            'soal3',
            'Soal 3',
            'required',
        );
        $this->form_validation->set_rules(
            'soal4',
            'Soal 4',
            'required',
        );
        $this->form_validation->set_rules(
            'soal5',
            'Soal 5',
            'required',
        );
        $data['soal'] = $this->db->get('soal')->result_array();
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit kompetisi';
            $config['base_url'] = 'http://localhost/bagisoal/edit/kompetisi/';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['kompetisi'] = $this->db->get_where('kompetisi', ['kode_kompetisi' => $this->uri->segment(3)])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/edit_kompetisi', $data);
            $this->load->view('admin/footer');
        } else {
            $this->_edit_kompetisi();
        }
    }
    public function _edit_kompetisi()
    {
        $banner = $_FILES['banner']['name'];

        if ($banner != '') {
            var_dump($banner);
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
            $banner = $this->input->post('old');
        }

        $data = array(
            'nama'                   => $this->input->post('nama'),
            'penyelenggara'          => $this->input->post('penyelenggara'),
            'batasPendaftaran'       => $this->input->post('batasPendaftaran'),
            'mulai'                  => $this->input->post('mulai'),
            'berakhir'               => $this->input->post('berakhir'),
            'soal1'                  => $this->input->post('soal1'),
            'soal2'                  => $this->input->post('soal2'),
            'soal3'                  => $this->input->post('soal3'),
            'soal4'                  => $this->input->post('soal4'),
            'soal5'                  => $this->input->post('soal5'),
            'banner'                 => $banner
        );
        $where = array(
            'kode_kompetisi' => $this->input->post('kode_kompetisi')
        );
        //log
        $id = $this->session->userdata('id_admin');
        $last_id = $this->m_admin->edit_data('kompetisi', $data, $where);
        $log = array(
            'id_admin'      => $id,
            'keterangan'    => 'Edit',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Kompetisi',
            'id_data'       => $this->input->post('kode_kompetisi')
        );
        $this->m_admin->tambah_data('log_admin', $log);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Berhasil di ubah</div>');
        redirect('daftar/kompetisi');
    }
    //EDIT MITRA
    public function edit_mitra()
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
            $data['title'] = 'Edit Mitra';
            $config['base_url'] = 'http://localhost/bagisoal/edit/mitra/';
            $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['mitra'] = $this->db->get_where('mitra', ['id_mitra' => $this->uri->segment(3)])->row_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/side_bar');
            $this->load->view('admin/edit_mitra', $data);
            $this->load->view('admin/footer');
        } else {
            $this->_edit_mitra();
        }
    }
    public function _edit_mitra()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'bidang'        => $this->input->post('bidang'),
            'alamat'        => $this->input->post('alamat'),
            'email'         => $this->input->post('email')
        );
        $where = array(
            'id_mitra' => $this->input->post('id_mitra')
        );
        //log
        $id = $this->session->userdata('id_admin');
        $last_id = $this->m_admin->edit_data('mitra', $data, $where);
        $log = array(
            'id_admin'      => $id,
            'keterangan'    => 'Edit',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Mitra',
            'id_data'       => $this->input->post('id_mitra')
        );
        $this->m_admin->tambah_data('log_admin', $log);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Berhasil di ubah</div>');
        redirect('daftar/mitra');
    }
    //HAPUS SOAL
    public function hapus_soal($id)
    {
        $this->m_admin->hapus_data('soal', $id, 'kode_soal');
        //log
        $id_admin = $this->session->userdata('id_admin');
        $log = array(
            'id_admin'      => $id_admin,
            'keterangan'    => 'Hapus',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Soal',
            'id_data'       => $id
        );
        $this->m_admin->tambah_data('log_admin', $log);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/soal');
    }
    //HAPUS MITRA
    public function hapus_mitra($id)
    {
        $this->m_admin->hapus_data('mitra', $id, 'id_mitra');
        //log
        $id_admin = $this->session->userdata('id_admin');
        $log = array(
            'id_admin'      => $id_admin,
            'keterangan'    => 'Hapus',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Mitra',
            'id_data'       => $id
        );
        $this->m_admin->tambah_data('log_admin', $log);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/mitra');
    }
    //HAPUS KOMPETISI
    public function hapus_kompetisi($id)
    {
        $this->m_admin->hapus_data('kompetisi', $id, 'kode_kompetisi');
        //log
        $id_admin = $this->session->userdata('id_admin');
        $log = array(
            'id_admin'      => $id_admin,
            'keterangan'    => 'Hapus',
            'tanggal'       => date('Y-m-d'),
            'data'          => 'Kompetisi',
            'id_data'       => $id
        );
        $this->m_admin->tambah_data('log_admin', $log);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect('daftar/kompetisi');
    }
}
