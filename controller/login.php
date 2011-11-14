<?php

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$data['main_content'] = 'login_form';
		$this->load->view('login_form',$data);
	}
	
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query=$this->membership_model->validate();
		
		if($query)
		{
			$data = array(
				'username' =>$this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('thumb',$data);
		}
		else
		{
			$this->index();
		}
		
		function signup()
		{
		
		}
	
		}
	}
?>