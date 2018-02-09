<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Pages extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->helper('form');		
		//pre load all models
		$this->load->model('pages_model','pages');
		}
        public function index(){
			$this->load->view('home');
        }
        public function view(){

              if ( ! file_exists(APPPATH.'views/home.php')){
                      // Whoops, we don't have a page for that!
                      show_404();
              }
              $this->load->view('home');
        }
		public function login_authorize(){	
			$result = $this->pages->read_users($_POST['uname'],$_POST['psw']);
			if(!empty($result)){

				//echo $mom['emp_name'];
				$usernameee['uname']=$mom['username'];
			}
			echo $usernameee['uname'];
			//$this->load->view('dashboard',$usernameee);
			}	
			else{
				$data['msg']='<font color=red>Invalid username and/or password.</font><br />';
				$data['username']=$_POST['uname'];
				$data['password']=$_POST['psw'];
				$this->load->view('home',$data);
			}
}
}