<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		$this->load->helper('form','url');
    	 
		
	 }

	public function index()
	{
		$data['aktif']=1;
		
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('beranda');
		$this->load->view('footer');

	}

}
