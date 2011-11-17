<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();


class Pic extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->pic();
		

	}
	
	public function pic()
	{
/* 		print_r($_GET['image']); */
		$big['bigp']=$_GET['image'];
/* 		print_r($big['bigp']=$_GET['image']); */
		$data['piccontent']="this is a pic";//we put items in data we namethe array and the you equal it to your value
		$data['piccomment']="this is a comment";
/* 		$uPic['urPic']= */
		$allU['al']=$this->session->all_userdata();
/* 		print_r($this->session->all_userdata()); */
		$dataarray=array_merge($data,$allU);
		$this->load->view('pic_view',$dataarray,$big);//we're passing in the data to the pic_view that gives it access to the info

	}
}

