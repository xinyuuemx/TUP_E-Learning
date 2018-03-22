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

	//function for pagination data fetching
	public function read_classes($limit,$offset){
		$this->db->limit($limit,$offset);
		$this->db->from('class');
		$this->db->join('professors', 'class.Prof_ID = professors.Prof_ID');
		$this->db->join('subjects', 'class.Subject_code = subjects.Subject_code');
		$query=$this->db->get();
		//var_dump($query->result());			
		if($query->num_rows > 0){
			return $query->result();            
		}
		else{
			return $query->result();
		}
	}

	public function read_classmembers($cid){	
		$this->db->from('class_members');
		$this->db->join('students', 'class_members.Student_ID = students.Student_ID');
		$this->db->where('class_members.Class_ID',$cid);
		$query=$this->db->get();
		if($query->num_rows > 0){
			return $query->result();            
		}
		else{
			return $query->result();
		}
	}
		
	public function search_classes($searchkey,$type){
		switch($type){
			//if input is prof_ID
			case '1':
				$this->db->from('class');
				$this->db->join('professors', 'class.Prof_ID = professors.Prof_ID');
				$this->db->join('subjects', 'class.Subject_code = subjects.Subject_code');
				$this->db->where('class.Prof_ID',$searchkey);
				$query = $this->db->get();
				//var_dump($query);
				if($query->num_rows > 0){
					return $query->result();
				}
				else{
					return $query->result();
				}
			//if input is class_ID
			case '2':
				$this->db->from('class');
				$this->db->join('professors', 'class.Prof_ID = professors.Prof_ID');
				$this->db->join('subjects', 'class.Subject_code = subjects.Subject_code');
				$this->db->where('class.Class_ID',$searchkey);
				$query = $this->db->get();
				
				if($query->num_rows > 0){
					return $query->result();
				}
				else{
					return $query->result();
				}
			//if input is subject code
			case '3':
				$this->db->from('class');
				$this->db->join('professors', 'class.Prof_ID = professors.Prof_ID');
				$this->db->join('subjects', 'class.Subject_code = subjects.Subject_code');
				$this->db->where('class.Subject_code',$searchkey);
				$query = $this->db->get();
				
				if($query->num_rows > 0){
					return $query->result();
				}
				else{
					return $query->result();
				}
		}
	}
}