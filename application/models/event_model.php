<?php
	
	class Event_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_event($limit =false){
			$query = $this->db->get('event',$limit);
			return $query->result_array();
		}
	}
?>
