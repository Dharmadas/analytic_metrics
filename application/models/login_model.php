<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function check_session(){
        
		if($this->session->userdata('username') != ""){
			return TRUE;
		}else{
			return FALSE;
		}
		
    }
	
	public function check_auth($username, $password){
		
		if($username == "dharmadas.m" && $password == "password"){
			return TRUE;
		}else{
			return FALSE;
		}
		
	}
	
	public function create_session($username){
		
		$this->session_data = array('username' => $username);
		$this->session->set_userdata($this->session_data);
		
	}
}
?>