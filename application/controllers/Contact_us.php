<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Contact_us extends CI_Controller {

		public function __construct(){
				parent::__construct();
				$this->load->helper('form');
				$this->load->model('pages_model','pages'); //pre load all models
		}

    public function index(){
				$this->load->view('Contact_us');
    }
}
