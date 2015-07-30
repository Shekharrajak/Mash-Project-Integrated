<?php
	
	class Team_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_team($limit =false){
			$query = $this->db->get('team',$limit);
			return $query->result_array();
		}
		//$team_data['present'] = 'present';
		//$team_data['past'] = 'past';
		public function get_team_present(){
			$condition = "team_status =" . "'" . "present" . "'";
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where($condition);
			//$this->db->limit(1);
			$query = $this->db->get();


			return $query->result_array();

		}
		public function get_team_past(){
			$condition = "team_status =" . "'" . "past" . "'";
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where($condition);
			//$this->db->limit(1);
			$query = $this->db->get();


			return $query->result_array();

		}
	}
?>

