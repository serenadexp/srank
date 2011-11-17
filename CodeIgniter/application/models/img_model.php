<?php 

class Img_model extends CI_Model {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	
	function getpic()
	{
/* 			ORDER BY imgid DESC */

		$query = $this->db->query("
		SELECT path
		FROM images
		 
		"
		);
	
	return $query->result();
	}
	
	function insertImg($cap)/* receieve data fromthe upload controller that will give us the path then we can input it to the database */
	{
		print_r($cap);
	
$query = $this->db->query("
		INSERT into images(path)
		value('imgs/$cap')
		 
		"
		);
	
/* 	return $query->result(); */

	
	}
	
	
}

?>