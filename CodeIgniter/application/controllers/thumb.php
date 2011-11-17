<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();


class Thumb extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->helper(array('url','html'));
		
		$this->load->model(array('img_model'));
	}
	public function index()
	{
		$this->thumb();
		
	}
		
	public function thumb()
	{		
			$all=$this->session->all_userdata();
			$images=$this->img_model->getpic();
		$this->load->view('thumb_view',array('all'=>$all,'img'=>$images));//we're passing in the data to the pic_view that gives it access to the info
/* 			echo $this->unit->run($all); */
	}
			public function logout()
	{
		$this->session->set_userdata('is_logged_in',FALSE);
		$this->session->sess_destroy();
		redirect('home');
	
	}
}

