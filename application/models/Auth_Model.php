<?php 
defined('BASEPATH') OR exit('No direct acces allowed');

	/**
	* 
	*/
class Auth_Model extends CI_Model{
	public function __construct(){
		
	}

	public function get_login($username,$password){
		$user = $username;
		$passw = $password;

		$result = shell_exec('py C:/xampp/htdocs/webinstabot/bot/login.py '.$user.' '.$passw.' 2>&1');

	

		if ($result) {
			return $result;
		}else{
			echo "Gagal Membuka File Bot";
			$gagal = "gagal";
			return $gagal;
		}
		
	}

}
