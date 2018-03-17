<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pages_model','pages');
		$this->load->library('session');
		$this->load->library('form_validation');
		//pre load all models
	}
    public function index(){
		$this->load->view('template/header');
  		$this->load->view('login_page');
  		$this->load->view('template/footer');
    }
	
	public function professor(){
		$this->load->view('template/header');
  		$this->load->view('login_page_prof');
  		$this->load->view('template/footer');	
	}
}