<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class My_students_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->model('topics_model','topics'); //pre load all models
		$this->load->model('quizzes_model','quizzes'); //pre load all models
		$this->load->model('comments_model','comments'); //pre load all 
		$this->load->model('comment_model','commenting'); //pre load all 
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index($data){
	}
	public function classes($data){
		$date = $this->get_classid($data); 
		
		foreach ($date as $key) {
			$tata = $this->classes->get_memebers($key['Class_ID']);
		}
		$x = 0;
		foreach ($tata as $key) {
			$name['name'][$x] = $this->pages->read_account($key['Student_ID']);
			$x = $x + 1;
		}
		
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('professor/stud_table',$name);
		$this->load->view('template/prof_dashboard_footer');
	}
	public function get_classid($data){
		$date = $this->classes->get_class_id(urldecode($data));
		return $date;
	}
}
?>