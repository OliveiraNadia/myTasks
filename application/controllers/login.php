<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
	
		if($this->session->userdata('login') == true){
			redirect('login/tasks');
		}
		
		if (isset($_GET['code'])) {
			
			$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('user_login',$this->googleplus->getUserInfo());
			redirect('login/tasks');
			
		} 
			
		$contents['login_url'] = $this->googleplus->loginURL();
		$this->load->view('tasks',$contents);
		
	}
	
	public function profile(){
		
		if($this->session->userdata('login') != true){
			redirect('');
		}
		
		$contents['user_login'] = $this->session->userdata('user_login');
		$this->load->view('tasks',$contents);
		
	}
	
	public function logout(){
		
		$this->session->sess_destroy();
		$this->googleplus->revokeToken();
		redirect('');
		
	}
	
}	