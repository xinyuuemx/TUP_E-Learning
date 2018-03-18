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

	public function add_class(){
		$this->load->view('template/admin_dashboard_header',$_SESSION);
		$result = $this->pages->read_subject($_POST['subcode']);
		$result2 = $this->pages->read_profaccount($_POST['profid']);
		$result3 = $this->pages->read_class($_POST['subcode'], $_POST['profid']);

		if(!empty($result) and !empty($result2))
		{
			if(empty($result3))
			{
				$data = array(
					'Class_ID' => NULL,
					'Subject_code' =>$_POST['subcode'],
					'Prof_ID' =>$_POST['profid']
				);
				$this->pages->submit_class($data);
				redirect(base_url().'admin/manage_classes');
			}
			else{
				$this->session->set_flashdata('error', 'Class already exist');
				redirect(base_url().'admin/manage_classes/create');
			}
		}

		else if(empty($result) and !empty($result2)){
			$this->session->set_flashdata('error2', 'Subject Code does not exist');
			redirect(base_url().'admin/manage_classes/create');
		}
		else if(empty($result2) and !empty($result)){
			$this->session->set_flashdata('error3', 'Professor ID does not exist');
			redirect(base_url().'admin/manage_classes/create');
		}
		else{
			$this->session->set_flashdata('error4', 'Subject code and Professor ID does not exist');
			redirect(base_url().'admin/manage_classes/create');
			}
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
