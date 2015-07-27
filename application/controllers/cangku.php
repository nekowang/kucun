<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cangku extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
        $this->load->helper('url');
        $this->load->model('cangkuModel');
        $this->load->view('header');
        }

    public function index(){
        $cangkuObj = $this->cangkuModel->getList();
        $data['houses']=$cangkuObj;
        $this->load->view('cangku',$data);
            //$this->load->view('footer');
    }

    public function add(){
        $cangku = $this->input->post();
        if(!$cangku){
            $this->load->view('addcangku');
        }else{
            $this->cangkuModel->add($cangku);
            //$this->load->view('footer');
            redirect('/cangku/index');
        }
    }
    
    public function edit($id=false){
        if($id){
            $house = $this->cangkuModel->getById($id);
            $data['house'] = $house;
            $this->load->view('editcangku',$data);
        }else{
            $cangku = $this->input->post();
            $id = $cangku['Id'];
            unset($cangku['Id']);
            $this->cangkuModel->edit($id,$cangku);
            redirect('/cangku/index');
        }
    }
    
    public function del($id){
        $this->cangkuModel->del($id);
        redirect('/cangku/index');
    }

        
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */