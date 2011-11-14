<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();


class Thumb extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->thumb();
		

	}
	
	public function thumb()
	{
			
	
		$this->load->view('thumb_view');//the thumb controller gets the data but  i wanna set the data it gets into a var
	}
	
		public function logout()
	{
		$this->session->set_userdata('is_logged_in',FALSE);
		$this->session->sess_destroy();
		redirect('home');
	
	}
}

