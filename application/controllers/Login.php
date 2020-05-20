<?php 
defined('BASEPATH') OR exit('No direct acces allowed');

	/**
	* 
	*/
class Login extends CI_Controller{

	  public function __construct(){
    parent::__construct();    
    $this->load->library('form_validation');    
    
  }


	public function index(){
		$this->load->view('login');
	}

	public function auth(){

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