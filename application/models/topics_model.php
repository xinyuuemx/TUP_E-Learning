<?php
class Topics_model extends CI_Model {

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

	public function upload_topic($ins){
		$this->db->insert($this->table6,$ins);
	}

	public function count_all_topic(){
		$this->db->select("Topic_ID");
		$this->db->from($this->table6);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function get_topic_info($data){
		$this->db->select("*");
		$this->db->from($this->table6);
		$this->db->where('Topic_ID',$data);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function delete($data){
		$this->db->where('Topic_ID', $data);
		$this->db->delete($this->table6);
	}

	public function update_topic($path,$data){
		$this->db->where('Topic_ID',$path);
		$this->db->update($this->table6, $data);
	}
}
?>
