<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Bagi Catatan';

		//PAGINATION
		$config['base_url'] = 'http://localhost/bagisoal/komunitas/catatan/';
		$config['total_rows'] = $this->m_admin->jumlah_baris('catatan');
		$config['per_page'] = 9;
		$config['start'] = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['catatan'] = $this->m_soal->tampil_data_join_user('catatan', $config['per_page'], $config['start'], 'id_catatan')->result();

		$data['top_user'] = $this->m_admin->tampil_data_limit('users', 5, 'id_user')->result_array();
		$this->load->view('template_home/header', $data);
		if ($this->session->userdata('email')) {
			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('template_home/header_user', $data);
		} else {
			$this->load->view('template_home/header_umum', $data);
		}
		$this->load->view('user/catatan/catatan_main', $data);
		$this->load->view('template_home/footer');
	}

	public function tulis()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('auth');
		}
		$this->form_validation->set_rules(
			'judul_catatan',
			'Judul Catatan',
			'required',
		);

		$this->form_validation->set_rules(
			'konten',
			'Konten',
			'required',
		);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Tulis Catatan';
			$this->load->view('template_home/header', $data);
			if ($this->session->userdata('email')) {
				$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
				$this->load->view('template_home/header_user', $data);
			} else {
				$this->load->view('template_home/header_umum', $data);
			}
			$this->load->view('user/catatan/tulis-catatan');
			$this->load->view('template_home/footer');
		} else {
			$this->_tulis_catatan();
		}
	}

	private function _tulis_catatan()
	{
		$data = [
			'id_user'		=> $this->session->userdata('id_user'),
			'judul_catatan' => $this->input->post('judul_catatan'),
			'konten'		=> $this->input->post('konten')
		];
		$this->db->insert('catatan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Catatan Berhasil Ditulis !</div>');
		redirect('catatan');
	}

	public function showcatatan($id)
	{
		$this->form_validation->set_rules(
			'komentar',
			'Komentar',
			'required',
		);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Bagikan Catatan';
			$data['catatan'] = $this->m_soal->tampil_data_join('catatan', 'id_catatan')->row_array();
			$data['komentar'] = $this->m_soal->tampil_data_join_where('komentar', 'id_komentar', ['id_catatan' => $id])->result_array();

			$this->load->view('template_home/header', $data);
			if ($this->session->userdata('email')) {
				$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
				$this->load->view('template_home/header_user', $data);
			} else {
				$this->load->view('template_home/header_umum', $data);
			}
			$this->load->view('user/catatan/show-catatan');
			$this->load->view('template_home/footer');
		} else {
			if (!$this->session->userdata('id_user')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login terlebih dahulu!</div>');
				redirect('auth');
			}
			$komentar = [
				'id_user'		=> $this->session->userdata('id_user'),
				'id_catatan'	=> $id,
				'komentar'		=> $this->input->post('komentar')
			];

			$this->db->insert('komentar', $komentar);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Berhasil Ditulis !</div>');
			redirect('catatan/showcatatan/' . $id);
		}
	}
}
