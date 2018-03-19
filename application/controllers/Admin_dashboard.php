<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Admin_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('admin_model','adminn');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes'); //pre load all models
		$this->load->library('session');
                $this->load->library('pagination');
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
			//$this->load->view('template/admin_dashboard_header',$_SESSION);
			switch ($scene) {
				
				case 'manageclasses':
                                $data['info']=$this->getTable();
                                var_dump($data['info']);
                                //$data['']
                                //$this->getTable();
                                $this->load->view('admin/admin_manageclasses',$data);
				break;
				
				case 'createclass':
				$this->load->view('admin/admin_createclass');
				break;
				
				case 'searchclass':

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
	
	/*public function manageclasses(){
		$this->load->view('template/admin_dashboard_header',$_SESSION);
		$this->load->view('admin/admin_manageclasses');
	}*/
	
	public function logout(){
		session_destroy();
		redirect(base_url().'pages');
	}
        
        public function getTable(){
            $none=null;
            $config['total_rows'] = $this->adminn->count_classes();
            $config['per_page'] = 10;
            $this->pagination->initialize($config);
            $data = $this->adminn->read_classes($config['per_page'],$this->uri->segment(3));
            foreach($data as $datas){
                $array['class']=$datas->Class_ID;
                echo $array['class'].' ';
                $data1=$this->classes->read_desc($datas->Subject_code);
                foreach($data1 as $datas1){
                    $array['subj']=$datas1['S_description'];
                    echo $array['subj'].'    ';
                }
                $data2=$this->classes->read_professors($datas->Prof_ID);
                foreach($data2 as $datas2){
                    $array['prof']=$datas2['L_name'].', '.$datas2['F_name'].' '.$datas2['M_name'].'.';
                    echo $array['prof'].'<br/>';
                }
            }
            if(isset($data)){
                return $array;
            }
            else return $none;
        }
	
//	public function searchClasses(){
//		$textInput=$this->input->post('searchtext');
//		$searchBy=$this->input->post('radio');
//		switch($searchBy){
//			case '1': 
//				$i=0;
//				$none=null;
//				$result=$this->adminn->read_classesByProfID($textInput);
//				foreach($result as $results){
//					$array['classID']=$results['Class_ID'];
//					$array['profID']=$results['Prof_ID'];
//					$array['scode']=$results['Subject_code'];
//					$result1=$this->classes->read_desc($array['scode']);
//					foreach($result1 as $results1){
//						$array['desc']=$results1['S_Description'];
//					}
//					$result2=$this->pages->read_profaccount($array['profID']);
//					foreach($result2 as $results2){
//						$array['Lname']=$results2['L_name'];
//						$array['Fname']=$results2['F_name'];
//						$array['Mname']=$results2['M_name'];
//					}
//					$i=$i+1;
//				}
//				if(isset($array)){
//					return $array;
//				}
//				else{
//					return $none;
//				}
//		}
//	}

}
