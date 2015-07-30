<?php
	
	class Partner_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_partner($limit =false){
			$query = $this->db->get('partner',$limit);
			return $query->result_array();
		}
	}
?>
