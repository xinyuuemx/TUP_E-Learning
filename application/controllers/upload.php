<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('trial/upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './assets/files';
                $config['allowed_types']        = 'pdf|jpg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('trial/upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        print_r($data['upload_data']['file_name']);
                        echo 'sucess';
                }
        }
}
?>