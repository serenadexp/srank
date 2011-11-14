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
			
	
		$this->load->view('thumb_view');//we're passing in the data to the pic_view that gives it access to the info

	}
	
		public function logout()
	{
		$this->session->set_userdata('is_logged_in',FALSE);
		$this->session->sess_destroy();
		redirect('home');
	
	}
}

