<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Contact_us extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->helper('form');		
		//pre load all models
		$this->load->model('pages_model','pages');
		}
		
        public function index(){
			$this->load->view('Contact_us');
        }
}