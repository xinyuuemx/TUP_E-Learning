<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Student_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pages_model','pages'); //pre load all models
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->library('session');
		$this->load->library('form_validation'); 
	}
	public function index($scene = null) {
		if(!isset($_SESSION['student_id'])){
			// Load Login Page
			$this->load->view('template/header');
			$this->load->view('main/login_page');
			$this->load->view('template/footer');
		}
		else{
			$scene_data['scene'] = $scene;
			// Load Dashboard 
			$this->load->view('template/student_dashboard_header',$_SESSION);
			$this->load->view('template/student_dashboard_nav',$scene_data);
			switch ($scene) {
				case 'classes':
				$data = $this->get_classes();
				$this->load->view('student/stud_classes',$data);
				break; 
				
				case 'modules':
				$this->load->view('student/stud_modules',$_SESSION);
				break; 
				
				default:
				echo $scene;
				$this->load->view('student/stud_dashboard',$_SESSION);
				break; 
				
			}
			$this->load->view('template/student_dashboard_footer');
		}
		
	}
	public function login_validate(){			
		$password = $this->input->post('psw');
		$result = $this->pages->read_users($_POST['uname'],$_POST['psw']);
		if(!empty($result)){
			foreach($result as $pass){
				// Get the DATA
				$data['username']=$pass['Account_ID'];
				$account_result = $this->pages->read_account($pass['Account_ID']);
				$result2 = $this->pages->get_image($pass['Account_ID']);
			}
			foreach ($account_result as $account_pass) {
				$data['student_id']=$account_pass['Student_ID'];
				$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
				$data['d_name']=$account_pass['F_name'];
			}
			foreach($result2 as $pass3){
				$data['img_id']=$pass3['img_ID'];
			}
			$session_data = array(
				'student_id' => $data['student_id'],
				'password' => $password,
				'name' => $data['name'],
				'img_id' => $data['img_id'],
				'link_name' => $data['d_name']
			);
			$this->session->set_userdata($session_data);
			$this->homepage();
			
		}	
		else{
			$this->session->set_flashdata('error', 'Invalid Username or Password');
			redirect(base_url().'student');
		}
	}	
	public function logout(){
		session_destroy();
		redirect(base_url().'pages');
	}
	public function get_classes(){
		$dummy = null;
		$x=0;
		$result = $this->classes->read_classes($_SESSION['student_id']);
		foreach($result as $pass){
			// Get the DATA
			$data['classes'][$x]= $pass['Class_ID'];
			
				$result2 = $this->classes->read_details($pass['Class_ID']);
				foreach($result2 as $code){
					$data['code'][$x] = $code['Subject_code']; 
					$desc_result = $this->classes->read_desc($data['code'][$x]);
					foreach($desc_result as $desc_pass){
						$data['description'][$x] = $desc_pass['S_description'];
						}
				}
			$x = $x+1;
		}
		if(isset($data)){
			return $data;
		}
		else
			return $dummy;
	}
	public function search_class(){
		$class_id = $this->input->post('class_ID');
		if(isset($class_id)){
		$result2 = $this->classes->read_details($class_id);
			foreach ($result2 as $key) {
				$data['subject_code']= $key['Subject_code'];
			}
			$desc_result = $this->classes->read_desc($data['subject_code']);
			foreach ($desc_result as $key) {
				$data['description'] = $key['S_description'];
			}
		}
		else
			$data = null;
		$this->result_class($data);
	}
	public function result_class($data){
		$this->load->view('template/student_dashboard_header',$_SESSION);
		$scene_data['scene']='classes';
		$this->load->view('template/student_dashboard_nav',$scene_data);
		$this->load->view('student/stud_result_class',$data);
		$this->load->view('template/student_dashboard_footer');
	}
	public function homepage(){
		$this->load->view('template/student_homepage_header',$_SESSION);
		$this->load->view('main/home');
		$this->load->view('template/footer');
	}
	public function contact(){
		$this->load->view('template/student_homepage_header',$_SESSION);
		$this->load->view('main/contact_us');
		$this->load->view('template/footer');
	}
	public function about(){
		$this->load->view('template/student_homepage_header',$_SESSION);
		$this->load->view('main/about_us');
		$this->load->view('template/footer');
	}
	public function add_class(){
		$this->load->view('template/student_dashboard_header',$_SESSION);
		$this->load->view('student/stud_add_class');
		$this->load->view('template/student_dashboard_footer');
	}
}