<?php
	
	class Con_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_con($limit =false){
			$query = $this->db->get('contributors',$limit);
			return $query->result_array();
		}
	}
?>
