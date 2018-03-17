<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Pages extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('pages_model','pages'); //pre load all models
	}
    public function index() {
				$this->load->view('template/header');
				$this->load->view('home');
				$this->load->view('template/footer');
    }

	public function view(){
        if(!file_exists(APPPATH.'views/home.php'))
			{
                    show_404();
			}
	}
	public function contact(){
		$this->load->view('template/header');
		$this->load->view('contact_us');
		$this->load->view('template/footer');
	}
	public function about(){
		$this->load->view('template/header');
		$this->load->view('about_us');
		$this->load->view('template/footer');
	}

}
