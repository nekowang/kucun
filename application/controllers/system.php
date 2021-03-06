<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
               $this->load->model('systemModel');
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
            $this->load->view('system');
	}
        
        public function confirm()
        {
            $adminname = trim($this->input->post('adminname'));
            $oldpwd_ori = trim($this->input->post('oldpwd'));
            $newpwd_ori = trim($this->input->post('newpwd'));
            
            if(empty($newpwd_ori)){
                $url = preg_replace('/\?error=false/', '', $_SERVER['HTTP_REFERER']);
                header("location:$url");exit();
            }else{
            
                $oldpwd = md5($oldpwd_ori);
                $newpwd = md5($newpwd_ori);

                $url = preg_replace('/\?error=false/', '', $_SERVER['HTTP_REFERER']);

                $res1 = $this->systemModel->confirm_id($adminname,$oldpwd);
                if(!empty($res1)){
                    $res2 = $this->systemModel->modify_password($adminname,$newpwd);
                    $this->load->view('header');
                    $this->load->view('modifypwd');
                }else{
                    header("location:$url?error=false");
                }
            }
           
            
        }
        
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */