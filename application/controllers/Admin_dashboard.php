<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Admin_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->library('session');
	}
	public function index($scene = null) {
		if(!isset($_SESSION['admin_id'])){
			// Load Login Page
			$this->load->view('template/header');
			$this->load->view('login_page_prof');
			$this->load->view('template/footer');
		}
		else{
			$scene_data['scene'] = $scene;
			$this->load->view('template/admin_dashboard_header',$_SESSION);
			switch ($scene) {
				
				case 'manageclasses':
				$this->load->view('admin/admin_manageclasses');
				break;
				
				case 'createclass':
				$this->load->view('admin/admin_createclass');
				break;
				
				default:
				echo $scene;
				$this->load->view('admin/admin_dashboard',$_SESSION);
				break;

			}
			$this->load->view('template/student_dashboard_footer');
		}

	}

	public function administrator(){
		$this->load->view('template/admin_dashboard_header',$_SESSION);
		$this->load->view('admin/admin_dashboard');
	}
	
	public function create_class(){
		$this->load->view('template/admin_dashboard_header',$_SESSION);
		$this->load->view('admin/admin_create_class');
	}
	
	public function manageclasses(){
		$this->load->view('template/admin_dashboard_header',$_SESSION);
		$this->load->view('admin/admin_manageclasses');
	}
	
	public function logout(){
		session_destroy();
		redirect(base_url().'pages');
	}

}
