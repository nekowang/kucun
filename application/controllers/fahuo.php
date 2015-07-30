<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fahuo extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
            $this->load->helper('url');
            $session_id = $this->session->userdata('username');
            if(empty($session_id)){
                header("location:/login/index");
                exit();
            }
        }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('fahuo');
                //$this->load->view('footer');
	}
        
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */