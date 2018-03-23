<?php
class Comment_model extends CI_Model {
	private $comment = "comments";
        
	// Constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create_comment($data){
		$this->db->insert($this->comment,$data);
	}

	public function get_name($data){
		$this->db->select('F_name');
		$this->db->from('professors');
		$this->db->where('Prof_ID',$data);
		$query1=$this->db->get()->result_array();

		$this->db->select('F_name');
		$this->db->from('students');
		$this->db->where('Student_ID',$data);

		$query2=$this->db->get()->result_array();

		$query = array_merge($query1,$query2);
		return $query;
	}
}
?>