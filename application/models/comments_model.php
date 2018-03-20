<?php
class Comments_model extends CI_Model {

	private $table = "comments";

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function read($data){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('Topic_ID',$data);
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>
