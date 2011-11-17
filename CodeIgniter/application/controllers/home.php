<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation','simplelogin');
		

/* 		$this->load->model('user_model'); */
/* 		$this->load->helper('form'); */
		
		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{
	/*
$is_logged_in = $this->session->userdata('is_logged_in');
	if(!isset($is_logged_in)|| $is_logged_in| true)
	{
	$this->home();

	}
*/$this->home();
	/*
else{
	
	redirect('thumb');
	}
		
*/		

	}
	
	public function home()
	{
	$this->load->model(array('img_model','user_model'));
	$searchatt =array('classS'=>'hFont','idS'=>'roundS','valueS'=>'search');

	$useratt =array('class'=>'login','idU'=>'user','nameU'=>'username');
	$passatt =array('class'=>'login','idP'=>'pass','nameP'=>'userPassword');

	$data['query']=$this->img_model->getpic(1);/* we are looking for just one pic right now can be more but i hav a limit on the orginal function */
		$myvar =array_merge($data,$useratt,$passatt,$searchatt);/* we can take 2 arrays or more and pass them to the view the view then treats the key value pair as vars  */
	$this->load->view('home_view',$myvar);

	
	}
	
	
	public function login()
	{
			
	
		redirect('login');
	}
	
	
}

