<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
               $this->load->model('systemModel');
        }

	public function index(){
            $this->load->view('login');
	}
        
        public function verify(){
            $username = trim($this->input->post('username'));
            $password_ori = trim($this->input->post('password'));
            $password = md5($password_ori);
            
            $url = preg_replace('/\?error=false/', '', $_SERVER['HTTP_REFERER']);
            
            $res = $this->systemModel->login_verify($username);
            if(empty($res)){
                header("location:$url?error=false"); 
                exit();
            }else{
                $password_search = $res['Password'];

                if($password == $password_search){
                    $this->session->set_userdata('username',$username);
                    header("location:/kucun/index");
                }else{
                    header("location:$url?error=false");
                }
            }
        }
        
        public function logoff(){
            $this->session->unset_userdata('username');
            header("location:/login/index");
            
        }
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */