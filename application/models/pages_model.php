<?php
class Pages_model extends CI_Model {

	private $table = "accounts";
	private $table2 = "students";
	private $table3 = "profile_elements";
	private $table4 = "professors";
	private $table5 = "subjects";
	private $table6 = "class";
	private $table7 = "class_members";
	private $table8 = "school_years";
	private $table9 = "sy_subjects";
	// Constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function read_users($uname) {
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('Account_ID', $uname);
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

	public function read_sy_subjects($code, $syid) {
		$this->db->select("*");
		$this->db->from($this->table9);
		$this->db->where('Subject_code', $code);
		$this->db->where('SY_ID', $syid);
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
		$this->db->order_by('Class_ID',"DESC");
		$query=$this->db->get();
		$ret = $query->row();
		return $ret->Class_ID;
	}

	public function submit_class($data) {
		$this->db->insert($this->table6, $data);
	}

	public function submit_class_members($data) {
		$this->db->insert($this->table7, $data);
	}
	public function read_schoolyear($curdate, $cursem) {
		$this->db->select("*");
		$this->db->from($this->table8);
		$this->db->where('SY_Start <=', $curdate);
		$this->db->where('SY_End >=', $curdate);
		$this->db->where('Semester', $cursem);
		$query=$this->db->get();
		$ret = $query->row();
		return $ret->SY_ID;
	}

}

?>
