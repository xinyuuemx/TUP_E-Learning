<?php
class Pages_model extends CI_Model {

	private $table = "accounts";

	// Constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function read_users($uname,$psw)
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('Account_ID', $uname);
		$this->db->where('Password', $psw);
		$query=$this->db->get();
		return $query->result_array();
	}

}

?>
