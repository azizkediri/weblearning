<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form', 'url');
	}

	public function index()
	{
		$data['aktif'] = 3;

		$this->load->view('header');
		$this->load->view('menu', $data);
		$this->load->view('pelajar/pelajar_view');
		$this->load->view('footer');
	}


}
