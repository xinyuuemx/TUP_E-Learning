<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class My_students extends CI_Controller {

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
	public function indecx($data){
		echo $data;	
	}
}
?>