<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form', 'url');
	}

	public function index()
	{
		$data['aktif'] = 4;

		$this->load->view('header');
		$this->load->view('menu', $data);
		$this->load->view('download/download_view');
		$this->load->view('footer');
	}

	
}
