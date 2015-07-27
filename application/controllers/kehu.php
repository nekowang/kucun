<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kehu extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
        }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('kehu');
                $this->load->view('footer');
	}
        
        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */