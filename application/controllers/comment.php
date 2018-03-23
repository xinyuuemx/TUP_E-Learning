<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Comment extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->model('comment_model','comments'); //pre load all models
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function create($data){
		if(isset($_SESSION['prof_id'])){
			$pass = array(
			'Account_ID' => $_SESSION['prof_id'],
			'Topic_ID' => $data,
			'Comment' => $_POST['comment']);
		}
		else
		{
			$pass = array(
			'Account_ID' => $_SESSION['student_id'],
			'Topic_ID' => $data,
			'Comment' => $_POST['comment']);		
		}
		
		$this->comments->create_comment($pass); 
    	redirect($_SESSION['location']);
	}
}
?>