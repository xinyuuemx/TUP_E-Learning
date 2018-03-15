<?php
class Pages_model extends CI_Model {

	private $table = "accounts";
	private $table2 = "students";

	// Constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_image($account_id){
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('Account_ID', $account_id);
		$query=$this->db->get();
		return $query->result_array();
	}

}

?>