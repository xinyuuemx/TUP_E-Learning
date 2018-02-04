<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Pages extends CI_Controller {

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
}
