<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function login_form()
	{
		$this->load->view('welcome_message');
	}
    
    public function login_submit()
	{
		$this->load->view('welcome_message');
	}
    
    public function register_form()
	{
		$this->load->view('welcome_message');
	}
    
    public function register_submit()
	{
		$this->load->view('welcome_message');
	}
    
    public function logout()
	{
		$this->load->view('welcome_message');
	}
}


