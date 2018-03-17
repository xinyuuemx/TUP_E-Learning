<?php
class Pages_model extends CI_Model {

	private $table = "accounts";
	private $table2 = "students";
	private $table3 = "profile_elements";
	private $table4 = "professors";
	// Constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function read_users($uname,$psw) {
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('Account_ID', $uname);
		$this->db->where('Password', $psw);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function read_account($acc) {
		$this->db->select("*");
		$this->db->from($this->table2);
		$this->db->where('Student_ID', $acc);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function get_image($account_id){
		$this->db->select("*");
		$this->db->from($this->table3);
		$this->db->where('Account_ID', $account_id);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_profaccount($acc) {
		$this->db->select("*");
		$this->db->from($this->table4);
		$this->db->where('prof_ID', $acc);
		$query=$this->db->get();
		return $query->result_array();
	}
}

?>
