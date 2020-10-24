<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umum extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		} else {
			$this->load->view('template_home/header');
			$this->load->view('index');
			$this->load->view('template_home/footer');
		}
	}
}
