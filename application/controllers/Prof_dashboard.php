<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Prof_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->model('topics_model','topics'); //pre load all models
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index($scene = null) {
		if(!isset($_SESSION['prof_id'])){
			// Load Login Page
			$this->load->view('template/header');
			$this->load->view('login_page_prof');
			$this->load->view('template/footer');
		}
		else{
			// Load Dashboard
			$scene_data['scene'] = $scene;
			$this->load->view('template/prof_dashboard_header',$_SESSION);
			switch ($scene) {
				case 'classes':
				$data = $this->get_classes();
				$this->session->set_userdata('error','');
				$this->load->view('professor/prof_classes',$data);
				break;
				case 'modules':
				$this->load->view('professor/prof_modules',$_SESSION);
				break;

				default:
				echo $scene;
				$this->load->view('professor/prof_dashboard',$_SESSION);
				break;

			}
			$this->load->view('template/prof_dashboard_footer');
		}

	}
	public function login_validate(){
	$password = $this->input->post('psw');
	$result = $this->pages->read_users($_POST['uname'],$_POST['psw']);
	$result3 = $this->pages->read_profaccount($_POST['uname']);
	$result4 = $this->pages->read_account($_POST['uname']);
	//if user is attempting to login as professor
	if(!empty($result) and !empty($result3))
	{

		foreach($result as $pass){
			// Get the DATA
			$data['username']=$pass['Account_ID'];
			$account_result = $this->pages->read_profaccount($pass['Account_ID']);
			$result2 = $this->pages->get_image($pass['Account_ID']);
		}
		foreach ($account_result as $account_pass) {
			$data['prof_id']=$account_pass['Prof_ID'];
			$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
		}
		foreach($result2 as $pas){
			$data['img_id'] = $pas['img_ID'];
		}
		$session_data = array(
			'prof_id' => $data['username'],
			'password' => $password,
			'name' => $data['name'],
			'img_id' => $data['img_id'],
			'error' => ' '
		);
		$this->session->set_userdata($session_data);
		redirect(base_url().'professor');

	}
	//if user attempting to login is admin
	else if(!empty($result) && (empty($result4) && empty($result3))){
		foreach($result as $results){
			$data['username']=$results['Account_ID'];
			$account_result = $this->pages->read_users($results['Account_ID'],$password);
			$result2 = $this->pages->get_image($results['Account_ID']);
		}
		foreach ($account_result as $account_pass) {
			$data['admin_id']=$account_pass['Account_ID'];
			$data['name']="ADMINISTRATOR";
		}
		foreach($result2 as $pass3){
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
	}
	else{
		$this->session->set_flashdata('error', 'Invalid Username and Password');
		redirect(base_url().'loginprof');
		}
	}
	public function logout(){
		session_destroy();
		redirect(base_url().'pages');
	}

	public function get_classes(){
		$dummy = null;
		$x=0;
		$result = $this->classes->read_subjects($_SESSION['prof_id']);
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

	public function homepage(){
		$this->load->view('template/prof_homepage_header',$_SESSION);
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	public function contact(){
		$this->load->view('template/prof_homepage_header',$_SESSION);
		$this->load->view('contact_us');
		$this->load->view('template/footer');
	}
	public function about(){
		$this->load->view('template/prof_homepage_header',$_SESSION);
		$this->load->view('about_us');
		$this->load->view('template/footer');
	}
	public function add_class(){
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('student/prof_add_class');
		$this->load->view('template/prof_dashboard_footer');
	}
	public function view_class($scene){
		$data = $this->search_topics($scene);
		$this->session->set_userdata('subject',$data);
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('professor/prof_modules',$data);
		$this->load->view('template/prof_dashboard_footer');
	}
	public function search_topics($raw_data){
		$class_id = $this->classes->read_class_id(urldecode($raw_data));
		$data['code'] = urldecode($raw_data);
		$counter = 0;
		foreach ($class_id as $key) {
			//Get class ID to get the topics in the class
			$topics = $this->classes->read_topic($key['Class_ID']);
			$this->session->set_userdata('class_id',$key['Class_ID']);
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
	public function upload()
    {
        $config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'pdf|jpg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata('error',$error['error']);
                $this->load->view('template/prof_dashboard_header',$_SESSION);
                $this->load->view('professor/prof_modules',$_SESSION['subject']);
                $this->load->view('template/prof_dashboard_footer',$_SESSION);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $pass = $data['upload_data']['file_name'];
            	$this->session->set_userdata('error','Successfully uploaded the file!');
            	$counter = 0;
            	$y = $this->topics->count_all_topic();
				foreach ($y as $key) {
					$counter = $counter + 1;
				}
				$this->session->set_userdata('last',$counter+1);
                $ins = array(
                	'Topic_ID' => $_SESSION['last'],
                	'Class_ID' => $_SESSION['class_id'],
                	'T_file' => $pass,
                	'T_description' => $_POST['description']
                	);          
                $this->load->view('template/prof_dashboard_header',$_SESSION);
                $this->topics->upload_topic($ins);
                $this->load->view('professor/prof_modules',$_SESSION['subject']);
                $this->load->view('template/prof_dashboard_footer',$_SESSION);
                $location = 'Prof_dashboard/view_class/'.$_SESSION['subject']['code'];
    			redirect($location, 'refresh'); 
        }
    }
    public function delete($raw_data,$raw_data2){
    	$del = urldecode($raw_data);
    	$this->topics->delete($del);
    	$path = './assets/files/'.$raw_data2;
    	unlink($path);
    	$location = 'Prof_dashboard/view_class/'.$_SESSION['subject']['code'];
    	redirect($location, 'refresh');
    }
    public function update_topic($data){
    	$config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'pdf|jpg';

        $this->load->library('upload', $config);
    	print_r($_POST);	
    	if($_POST['file']!=null){
    		$this->upload->do_upload($_POST['file']);
	    	$update_data = Array(
	    		'T_file' => $_POST['file'],
	    		'T_description' => $_POST['desc']);
	    }
	    else{
	    	$update_data = Array(
	    		'T_description' => $_POST['desc']);
	    }
    	$this->topics->update_topic($data,$update_data);
    }
}
