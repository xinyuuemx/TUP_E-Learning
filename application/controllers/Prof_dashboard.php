<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Prof_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->model('topics_model','topics'); //pre load all models
		$this->load->model('quizzes_model','quizzes'); //pre load all models
		$this->load->model('comments_model','comments'); //pre load all 
		$this->load->model('comment_model','commenting'); //pre load all 
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index($scene = null) {
		if(!isset($_SESSION['prof_id'])){ // Load Login Page
			$this->load->view('template/header');
			$this->load->view('login_page_prof');
			$this->load->view('template/footer');
		} else { // Load Dashboard
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
				case 'quizzes':
					$this->load->view('professor/prof_quizzes',$_SESSION);
					break;
				default:
					echo $scene;
					$this->load->view('professor/prof_dashboard',$_SESSION);
					break;
			}
			$this->load->view('template/prof_dashboard_footer');
		}
	}

	public function login_validate() {
		$password = $this->input->post('psw');
		$result = $this->pages->read_users($_POST['uname']);
		$result3 = $this->pages->read_profaccount($_POST['uname']);
		$result4 = $this->pages->read_account($_POST['uname']);
		foreach($result as $results) {
			$dbp = $results['Password'];
		} //if user is attempting to login as professor
		if(password_verify($password,$dbp) and !empty($result3)) {
			foreach($result as $pass) { // Get the DATA
				$data['username']=$pass['Account_ID'];
				$account_result = $this->pages->read_profaccount($pass['Account_ID']);
				$result2 = $this->pages->get_image($pass['Account_ID']);
			}
			foreach ($account_result as $account_pass) {
				$data['prof_id']=$account_pass['Prof_ID'];
				$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
			}
			foreach($result2 as $pas) {
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
		} else {
			$this->session->set_flashdata('error', 'Invalid Username and Password');
			redirect(base_url().'loginprof');
		}
	}

	public function logout() {
		session_destroy();
		redirect(base_url().'pages');
	}

	public function get_classes() {
		$dummy = null;
		$x=0;
		$result = $this->classes->read_subjects($_SESSION['prof_id']);
		foreach($result as $pass) { 	// Get the DATA
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

	public function homepage() {
		$this->load->view('template/prof_homepage_header',$_SESSION);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function contact() {
		$this->load->view('template/prof_homepage_header',$_SESSION);
		$this->load->view('contact_us');
		$this->load->view('template/footer');
	}

	public function about() {
		$this->load->view('template/prof_homepage_header',$_SESSION);
		$this->load->view('about_us');
		$this->load->view('template/footer');
	}

	public function add_class() {
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('student/prof_add_class');
		$this->load->view('template/prof_dashboard_footer');
	}

	public function view_class($scene) {
		$data = $this->search_topics($scene);
		$this->session->set_userdata('subject',$data);
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('professor/prof_modules',$data);
		$this->load->view('template/prof_dashboard_footer');
	}

	public function view_quizzes() {
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('professor/prof_quizzes',$_SESSION);
		$this->load->view('template/prof_dashboard_footer');
	}

	public function view_topic($topic,$file) {
		$data = array('topic' => $topic,'file'=>$file);
		$this->load->view('template/prof_dashboard_header',$_SESSION);
		$this->load->view('main/view_topic',$data);
		$pass = $this->get_comments($topic);
		$this->load->view('main/comments',$pass);
		$this->load->view('template/prof_dashboard_footer');
	}

	public function search_topics($raw_data) {
		$class_id = $this->classes->read_class_id(urldecode($raw_data));
		$data['code'] = urldecode($raw_data);
		foreach ($class_id as $key) { //Get class ID to get the topics in the class
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

	public function get_topics($raw_data) {
		$result = $this->topics->get_topic_info($raw_data);
		if(isset($result)) {
			foreach ($result as $key) {
				$data = array(
					'file' => $key['T_file'],
					'description' => $key['T_description'],
					'class_id' => $key['Class_ID'],
					'topic_id' => $raw_data
				);
			}
		}
		else
			$data = null;
		return $data;
	}

	public function upload() {
        $config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'pdf|jpg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata('error',$error['error']);
                $this->load->view('template/prof_dashboard_header',$_SESSION);
                $this->load->view('professor/prof_modules',$_SESSION['subject']);
                $this->load->view('template/prof_dashboard_footer',$_SESSION);
      } else {
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
    	$result = $this->get_topics($data);
    	$this->load->view('template/prof_dashboard_header',$_SESSION);
        $this->load->view('professor/prof_update',$result);
        $this->load->view('template/prof_dashboard_footer');
    }
    public function edit_data(){
    	$result = $this->get_topics($_POST['topic_id']);
    	$config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'pdf|jpg';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('file')){
    		$data = array(
    			'T_file' => $result['file'],
    			'T_description' => $_POST['description']
    			 );
        }
    	else{
    		$date = array('upload_data' => $this->upload->data());
    		$data = array(
    			'T_file' => $date['upload_data']['file_name'],
    			'T_description' => $_POST['description']
    			 );
    		$path = './assets/files/'.$result['file'];
    		unlink($path);
    	}
    	$this->topics->update_topic($_POST['topic_id'],$data);
    	$location = 'Prof_dashboard/view_class/'.$_SESSION['subject']['code'];
    	redirect($location, 'refresh');

    }

		public function add_question(){
			$this->load->view('template/prof_dashboard_header',$_SESSION);
			$this->load->view('professor/prof_addquestions',$_SESSION);
			$this->load->view('template/prof_dashboard_footer',$_SESSION);
		}

		public function do_question(){
			$result =  $this->classes->read_subjectsavail($_SESSION['prof_id'], $_POST['subcode']);
			if(!empty($result)){
				$choices = array(
					'Choice1' =>$_POST['c1'],
					'Choice2' =>$_POST['c2'],
					'Choice3' =>$_POST['c3'],
					'Choice4' =>$_POST['c4'],
				);
					if (in_array($_POST['answer'], $choices)) {
						$data = array(
							'Question_ID' => NULL,
							'Prof_ID' => $_SESSION['prof_id'],
							'Subject_Code' => $_POST['subcode'],
							'Question' => $_POST['question'],
							'Choice1' =>$_POST['c1'],
							'Choice2' =>$_POST['c2'],
							'Choice3' =>$_POST['c3'],
							'Choice4' =>$_POST['c4'],
							'Answer' =>$_POST['answer']
						);
						$this->quizzes->submit_question($data);
						redirect('Prof_dashboard/view_quizzes');
					}
					else {
						$this->session->set_flashdata('error', 'Answer not available in choices');
						redirect('Prof_dashboard/add_question');
					}
			}
			else{
				$this->session->set_flashdata('error2', 'You have no classes on this subject');
				redirect('Prof_dashboard/add_question');
			}

	}
		public function get_comments($data) {
		$result = $this->comments->read($data);
		$x = 0;
		$y=0;
		foreach ($result as $key) {
			$result2 = $this->pages->get_image($key['Account_ID']);
			//$get_data = $this->comment->get_name($key['Account_ID']);
			$pics[$x] = $result2;
			//$name[$x] = $get_data;
			$x = $x + 1;
		}
		$x = 0;
		foreach ($result as $key) {
			$get_data = $this->commenting->get_name($key['Account_ID']);
			$name[$x] = $get_data[0]['F_name'];
			$x = $x + 1;
		}
		foreach ($result as $key) {
			$data_pass = array(
			'account_id' => $result,
			'name' =>$name,
			'pic'	  => $pics
			);
		}
		return $data_pass;
	}
}
