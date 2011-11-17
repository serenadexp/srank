<?php

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');

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
	}	
		function signup()
		{
			$data['main_content'] = 'signup_form';
			$this->load->view('signup_form',$data);
/* 			echo $this->unit->run($data); */
		}
		
		function create_member()
		{
		$this->load->library('form_validation');
			
			$this->form_validation->set_rules('first_name','Name','trim|required' );
			$this->form_validation->set_rules('last_name','Last Name','trim|required' );
			$this->form_validation->set_rules('email_address','Email Address','trim|requiredvalid_email' );

			$this->form_validation->set_rules('username','Username','trim|required|min_length[4]' );
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|maxlength[32]' );
			$this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]' );
			if($this->form_validation->run() == FALSE)
			{
/* 				$this->load->view('signup_form'); */
			$this->signup();
			}
			
			else
			{
				$this->load->model('membership_model');
				if($query = $this->membership_model->create_member())
				{
					$data['main_content'] ='signup_successful';
					$this->load->view('usercreated_view',$data);
				}
				else{
					$this->load->view('signup_form');
				}	
			}

		}
		
	}
?>