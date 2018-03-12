<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
		public function __construct() {
				parent::__construct();
				$this->load->helper('form');
				$this->load->model('pages_model','pages'); //pre load all models
		}

    public function index() {
				$this->load->view('include/header');
				$this->load->view('home');
				$this->load->view('include/footer');
    }

		public function view(){
			if(!file_exists(APPPATH.'views/home.php')) {
						show_404();
			}
		}
       	public function login_authorize(){
			$result = $this->pages->read_users($_POST['uname'],$_POST['psw']);
			if(!empty($result))
			{

				foreach($result as $pass){
					//Get the DATA
					$data['username']=$pass['Account_ID'];
					$account_result = $this->pages->read_account($pass['Account_ID']);
					$result2 = $this->pages->get_image($pass['Account_ID']);
				}
				foreach ($account_result as $account_pass) {
					$data['student_id']=$account_pass['Student_ID'];
					$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
				}
				foreach($result2 as $pass3){
					$data['img_id']=$pass3['img_ID'];
				}
				$this->Dboard($data);

			}
			else{
				$data['msg']='<font color=red>Invalid username and/or password.</font><br />';
				$data['username']=$_POST['uname'];
				$data['password']=$_POST['psw'];
				$this->load->view('home',$data);
			}
		}
		public function Dboard($data){
			$this->load->view('stud_dashboard',$data);
		}

		public function SNav_Bar($data){
				$this->load->view('stud_nav',$data);
		}
		public function student_classes(){
				$this->load->view('stud_classes');
		}
}
