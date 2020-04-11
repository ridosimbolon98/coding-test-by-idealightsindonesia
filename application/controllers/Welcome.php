<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('homepage');
	}

	// FUNGSI UNTUK LOAD HALAMAN PROFILE
	public function profile()
	{
		
		$this->load->view('profile');
	}
}
