<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('template_home/header');
		$this->load->view('index');
		$this->load->view('template_home/footer');
	}
}
