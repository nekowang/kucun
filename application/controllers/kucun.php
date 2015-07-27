<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kucun extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
        }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('kucun');
                $this->load->view('footer');
	}

	public function addkucun()
	{
		$this->load->view('header');
		$this->load->view('addkucun');
	}        
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */