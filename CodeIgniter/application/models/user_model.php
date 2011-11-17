<?php 

class User_model extends CI_Model {

	

	 function __construct()
	{
		parent::__construct();	
	}
	
	
	function check_login($username,$userPassword)
	{
		$query_str = 'SELECT userID FROM users WHERE username = ? AND userPassword = ?';
		$result =$this->db->query($query_str,array($username,$userPassword));
		
		if($result->num_rows()==1){
			return $result->row(0)->userID;
		}	
		else{
			$this->session->set_flashdata('login_error',TRUE);
			
		}
	}
	
	function newUser($username,$userPassword,$userEmail)	
	{
		$data=array('username'=>$username,
					'userPassword'=>$userPassword,
					'userEmail'=>$userEmail	
		);
		$this->db->insert('users',$data);			
	}
	
}

?>