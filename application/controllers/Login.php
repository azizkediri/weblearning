<?php 
defined('BASEPATH') OR exit('No direct acces allowed');

	/**
	* 
	*/
class Login extends CI_Controller{

	  public function __construct(){
    parent::__construct();    
    $this->load->library('form_validation','firebase');    
    
  }


	public function index(){
		$firebase = $this->firebase->init();
		$db = $firebase->getDatabase();
		$this->load->view('login');
	}

	public function auth(){
		$firebase = $this->firebase->init();
		$db = $firebase->getDatabase();
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		// echo $user;
			$data['aktif'] = 1;
			// redirect('Beranda/index');
			$this->load->view('header');
			$this->load->view('menu',$data);
			$this->load->view('beranda');
			$this->load->view('footer');
			
	}

	public function logout()
	{
		redirect('Login/index');
	}

}