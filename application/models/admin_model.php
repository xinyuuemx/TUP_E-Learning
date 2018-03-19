<?php
class Admin_model extends CI_Model {
	private $classtable = "class";
	private $table2 = "class_members";
	private $table4 = "professors";
	private $table5 = "subjects";
	private $table6 = "topics";
        
	// Constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
        
        public function count_classes(){
            return $this->db->count_all('class');
        }
        
	public function read_classesByProfID($prof_ID) {
		$this->db->select("*");
		$this->db->from($this->classtable);
		$this->db->where('Prof_ID', $prof_ID);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function read_classByClassID($class_ID) {
		$this->db->select("*");
		$this->db->from($this->classtable);
		$this->db->where('Class_ID', $class_ID);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function read_classesBySubjectID($class_ID) {
		$this->db->select("*");
		$this->db->from($this->classtable);
		$this->db->where('Class_ID', $class_ID);
		$query=$this->db->get();
		return $query->result_array();
	}
        //function for pagination data fetching
        public function read_classes($limit,$offset){
            $this->db->limit($limit,$offset);
            $query=$this->db->get('class');
            if($query->num_rows > 0){
                return $query->result();
            }else{
                return $query->result();
            }
        }

}