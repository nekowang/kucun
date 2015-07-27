<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
        }

	public function index(){
            $this->load->view('login');
	}
        
        public function verify(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $url = preg_replace('/\?error=false/', '', $_SERVER['HTTP_REFERER']);
            
            if($username == 'admin' && $password =='admin'){
                header("location:/fahuo/index");
            } else {
                header("location:$url?error=false");
            }
        }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */