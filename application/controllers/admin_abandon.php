<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
        }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('fahuo');
                $this->load->view('footer');
	}
        
        public function kucun()
	{
		$this->load->view('header');
		$this->load->view('kucun');
                $this->load->view('footer');
	}        
        
        public function cangku()
	{
		$this->load->view('header');
		$this->load->view('cangku');
                $this->load->view('footer');
	}
        
        public function gongyingshang()
	{
		$this->load->view('header');
		$this->load->view('gongyingshang');
                $this->load->view('footer');
	}
        
        public function kehu()
	{
		$this->load->view('header');
		$this->load->view('kehu');
                $this->load->view('footer');
	}
        
        public function yewuyuan()
	{
		$this->load->view('header');
		$this->load->view('yewuyuan');
                $this->load->view('footer');
	}
        
        public function system()
	{
		$this->load->view('header');
		$this->load->view('system');
	}
        
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */