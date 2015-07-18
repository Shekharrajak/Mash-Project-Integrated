<?php
	
	class Project_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_project($limit =false){
			$query = $this->db->get('project',$limit);
			return $query->result_array();
		}
	}
?>
