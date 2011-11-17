<?php

class Joinup extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->joinup();
	}
	public function joinup()
	{
		$makeuser =array('class'=>'login','idU'=>'newuser','nameU'=>'username');
		$makepass =array('class'=>'login','idP'=>'newpass','nameP'=>'password');
		$myvar =array_merge($makeuser,$makepass);

		$this->load->view('join_view',$myvar);
	}

	}
?>