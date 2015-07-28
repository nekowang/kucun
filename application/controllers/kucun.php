<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kucun extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
                //$this->load->model('admin_model');
        $this->load->helper('url');
        $this->load->model('cangkuModel');
        $this->load->model('kucunModel');
        $this->load->view('header');
        }

    public function index(){
        $kucunObj = $this->kucunModel->getList();
        if($kucunObj){
            foreach($kucunObj as $row){
                $house = $this->cangkuModel->getById($row->HouseId); //把仓库名查出来放到库存对象的HouseId里
                $row->HouseId = $house->Name;
            }
        }
            $data['products']=$kucunObj;
            $this->load->view('kucun',$data);
        
            //$this->load->view('footer');
    }

    public function add(){
        $kucun = $this->input->post();
        if(!$kucun){
            $houses = $this->cangkuModel->getList();
            foreach ($houses as $house){
                $cangku[$house->Id] = $house->Name;
            }
            $data['cangku'] = $cangku;
            $this->load->view('addkucun',$data);
        }else{
            $this->kucunModel->add($kucun);
            //$this->load->view('footer');
            redirect('/kucun/index');
        }
    }
    
    public function edit($id=false){
        if($id){
            $house = $this->kucunModel->getById($id);
            $houses = $this->cangkuModel->getList();
            foreach ($houses as $val){
                $cangku[$val->Id] = $val->Name;
            }
            $data['cangku'] = $cangku;
            $data['product'] = $house;
            $this->load->view('editkucun',$data);
        }else{
            $kucun = $this->input->post();
            $id = $kucun['Id'];
            unset($kucun['Id']);
            $this->kucunModel->edit($id,$kucun);
            redirect('/kucun/index');
        }
    }
    
    public function del($id){
        $this->kucunModel->del($id);
        redirect('/kucun/index');
    }

        
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */