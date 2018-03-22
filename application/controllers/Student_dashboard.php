<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Student_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->model('comments_model','comments'); //pre load all models
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index($scene = null) {
		if(!isset($_SESSION['student_id'])){
			// Load Login Page
			$this->load->view('template/header');
			$this->load->view('login_page');
			$this->load->view('template/footer');
		} else {
			// Load Dashboard
			$scene_data['scene'] = $scene;
			$this->load->view('template/student_dashboard_header',$_SESSION);
			$this->load->view('template/student_dashboard_nav',$scene_data);
			switch ($scene) {
				case 'classes':
				$data = $this->get_classes();
				$this->load->view('student/stud_classes',$data);
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
		$result = $this->pages->read_users($_POST['uname']);
		$result3 = $this->pages->read_account($_POST['uname']);
		$result4 = $this->pages->read_profaccount($_POST['uname']);
		//if user attempting to login is a student
		foreach($result as $results) {
			$dbp = $results['Password'];
		}
		//if user attempting to login is a student
		if (password_verify($password,$dbp) && !empty($result3)) {
		foreach($result as $pass) {
			// Get the DATA
			$data['username']=$pass['Account_ID'];
			$account_result = $this->pages->read_account($pass['Account_ID']);
			$result2 = $this->pages->get_image($pass['Account_ID']);
		}
		foreach ($account_result as $account_pass) {
			$data['student_id']=$account_pass['Student_ID'];
			$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
		}
		foreach($result2 as $pass3) {
			$data['img_id']=$pass3['img_ID'];
		}
		$session_data = array(
			'student_id' => $data['username'],
			'password' => $password,
			'name' => $data['name'],
			'img_id' => $data['img_id']
		);
		$this->session->set_userdata($session_data);
		redirect(base_url().'student');
	} else if(!empty($result) && (empty($result4) && empty($result3))) { //if user attempting to login is admin
		foreach($result as $results){
			$data['username']=$results['Account_ID'];
			$account_result = $this->pages->read_users($results['Account_ID'],$password);
			$result2 = $this->pages->get_image($results['Account_ID']);
		}
		foreach ($account_result as $account_pass) {
			$data['admin_id']=$account_pass['Account_ID'];
			$data['name']="ADMINISTRATOR";
		}
		foreach($result2 as $pass3) {
			$data['img_id']=$pass3['img_ID'];
		}
		$session_data = array(
			'admin_id' => $data['username'],
			'password' => $password,
			'name' => $data['name'],
			'img_id' => $data['img_id']
		);
		$this->session->set_userdata($session_data);
		redirect(base_url().'admin');
	} else { //if user attempting to login is professor
		$this->session->set_flashdata('error', 'Invalid Username and Password');
		redirect(base_url().'login');
		}
	}

	public function logout() {
		session_destroy();
		redirect(base_url().'pages');
	}

	public function get_classes() {
		$dummy = null;
		$x=0;
		$result = $this->classes->read_classes($_SESSION['student_id']);
		foreach($result as $pass) { // Get the DATA
			$data['classes'][$x]= $pass['Class_ID'];
				$result2 = $this->classes->read_details($pass['Class_ID']);
				foreach($result2 as $code) {
					$data['code'][$x] = $code['Subject_code'];
					$desc_result = $this->classes->read_desc($data['code'][$x]);
					foreach($desc_result as $desc_pass) {
						$data['description'][$x] = $desc_pass['S_description'];
					}
				}
			$x = $x+1;
		}
		if(isset($data)) {
			return $data;
		}
		else
			return $dummy;
	}

	public function search_class() {
		$class_id = $this->input->post('class_ID');
		if(isset($class_id)) {
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

	public function search_topics($raw_data) {
		$class_id = $this->classes->read_class_id(urldecode($raw_data));
		$data['code'] = $raw_data;
		foreach ($class_id as $key) { //Get class ID to get the topics in the class
			$topics = $this->classes->read_topic($key['Class_ID']);
			$x = 0;
			foreach ($topics as $key) {
				$data['topic_id'][$x] = $key['Topic_ID'];
				$data['file'][$x] = $key['T_file'];
				$data['description'][$x] = $key['T_description'];
				$x = $x + 1;
			}
		}
		return $data;
	}

	public function result_class($data) {
		$this->load->view('template/student_dashboard_header',$_SESSION);
		$scene_data['scene']='classes';
		$this->load->view('template/student_dashboard_nav',$scene_data);
		$this->load->view('student/stud_result_class',$data);
		$this->load->view('template/student_dashboard_footer');
	}

	public function homepage() {
		$this->load->view('template/student_homepage_header',$_SESSION);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function contact() {
		$this->load->view('template/student_homepage_header',$_SESSION);
		$this->load->view('contact_us');
		$this->load->view('template/footer');
	}

	public function about() {
		$this->load->view('template/student_homepage_header',$_SESSION);
		$this->load->view('about_us');
		$this->load->view('template/footer');
	}

	public function view_class($scene) {
		$data = $this->search_topics($scene);
		$this->load->view('template/student_dashboard_header',$_SESSION);
		$scene_data['scene'] = 'classes';
		$this->load->view('template/student_dashboard_nav',$scene_data);
		$this->load->view('student/stud_modules',$data);
		$this->load->view('template/student_dashboard_footer');
	}

	public function view_topic($topic,$file) {
		$data = array('topic' => $topic,'file'=>$file);
		$this->load->view('template/student_dashboard_header',$_SESSION);
		$scene_data['scene'] = 'classes';
		$this->load->view('template/student_dashboard_nav',$scene_data);
		$this->load->view('main/view_topic',$data);
		$pass = $this->get_comments($topic);
		$this->load->view('main/comments',$pass);
		$this->load->view('template/student_dashboard_footer');
	}

	public function get_comments($data) {
		$result = $this->comments->read($data);
		$x = 0;
		foreach ($result as $key) {
			$result2 = $this->pages->get_image($key['Account_ID']);
			$pics[$x] = $result2;
			$x = $x + 1;
		}
		foreach ($result as $key) {
			$data_pass = array(
			'account_id' => $result,
			'pic'	  => $pics
			);
		}
		return $data_pass;
	}
}
