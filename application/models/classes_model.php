<?php
class Classes_model extends CI_Model {
	private $table = "accounts";
	private $table2 = "class_members";
	private $table3 = "class";
	private $table4 = "professors";
	private $table5 = "subjects";
	private $table6 = "topics";
	
	// Constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function read_classes($student_ID) {
		$this->db->select("*");
		$this->db->from($this->table2);
		$this->db->where('Student_ID', $student_ID);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_details($class_id) {
		$this->db->select("*");
		$this->db->from($this->table3);
		$this->db->where('Class_ID', $class_id);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_professors($prof_id) {
		$this->db->select("*");
		$this->db->from($this->table4);
		$this->db->where('Prof_ID', $prof_id);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_desc($code) {
		$this->db->select("*");
		$this->db->from($this->table5);
		$this->db->where('Subject_code', $code);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_subjects($prof_id) {
		$this->db->select("*");
		$this->db->from($this->table3);
		$this->db->where('Prof_ID', $prof_id);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_class_id($subject_code)
	{
		$this->db->select("*");
		$this->db->from($this->table3);
		$this->db->where('Subject_code', $subject_code);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function read_topic($class_id){
		$this->db->select("*");
		$this->db->from($this->table6);
		$this->db->where('Class_ID', $class_id);
		$query=$this->db->get();
		return $query->result_array();
	}

}
