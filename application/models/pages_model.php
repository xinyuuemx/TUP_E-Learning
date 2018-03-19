<?php
class Pages_model extends CI_Model {

	private $table = "accounts";
	private $table2 = "students";
	private $table3 = "profile_elements";
	private $table4 = "professors";
	private $table5 = "subjects";
	private $table6 = "class";
	private $table7 = "class_members";
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
		$this->db->where('Prof_ID', $acc);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_subject($code) {
		$this->db->select("*");
		$this->db->from($this->table5);
		$this->db->where('Subject_code', $code);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_class($sid, $pid) {
		$this->db->select("*");
		$this->db->from($this->table6);
		$this->db->where('Subject_code', $sid);
		$this->db->where('Prof_ID', $pid);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_classID($sid, $pid) {
		$this->db->select("Class_ID");
		$this->db->from($this->table6);
		$this->db->where('Subject_code', $sid);
		$this->db->where('Prof_ID', $pid);
		$query=$this->db->get();
		$ret = $query->row();
		return $ret->Class_ID;
	}
	public function submit_class($data)
	{

		$this->db->insert($this->table6, $data);
	}
	public function submit_class_members($data)
	{

		$this->db->insert($this->table7, $data);
	}
}

?>
