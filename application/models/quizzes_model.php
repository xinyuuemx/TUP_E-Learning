<?php
class Quizzes_model extends CI_Model {

	private $table = "questions";

	// Constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function read_questionID() {
		$this->db->select("Question_ID");
		$this->db->from($this->table);
		$this->db->order_by('Question_ID',"DESC");
		$query=$this->db->get();
		return $query->result();
	}

	public function submit_question($data) {
		$this->db->insert($this->table, $data);
	}

	public function read_questions($profid) {
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('Prof_ID', $profid);
		$query=$this->db->get();
		return $query->result();
	}

}

?>
