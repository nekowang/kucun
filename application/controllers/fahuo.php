<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fahuo extends CI_Controller {
    
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
        
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */