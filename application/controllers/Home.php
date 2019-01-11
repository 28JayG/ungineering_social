<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function home()
	{
		$this->load->view('welcome_message');
	}
    
    public function status_submit()
	{
		$this->load->view('welcome_message');
	}
    
    public function dashboard()
	{
		$this->load->view('welcome_message');
	}
    
    public function dashboard_submit()
	{
		$this->load->view('welcome_message');
	}
    
}
