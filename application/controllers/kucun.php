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

    public function index($order='id',$page = 1){
        //分页开始
        $kucunnum = $this->kucunModel->getListNum();
        $pagesize = 20;
        $pagenum = ceil($kucunnum / $pagesize);
        if (empty($page)) {
            $page = 1;
        } else {
            $page = $page;
        }
        $init = 1; 
        $max_p = $pagenum;         
        $offset = ($page - 1) * $pagesize;

        $page_len = 7;
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数 
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量 

        if ($pagenum > $page_len) {
            if ($page <= $pageoffset) {  //如果当前页小于等于左偏移 
                $init = 1;
                $max_p = $page_len;
            } else { //如果当前页大于左偏移
                if ($page + $pageoffset > $pagenum) {  //如果当前页码右偏移超出最大分页数 
                    $init = $pagenum - $page_len + 1;
                    $max_p = $pagenum;
                } else {  //左右偏移都存在时的计算 
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        $all_url = $order.'/'.$page.'/';
        $data['page'] = $page;
        $data['pagenum'] = $pagenum;
        $data['init'] = $init;
        $data['max_p'] = $max_p;
        $data['kucunnum'] = $kucunnum;
        $data['order'] = $order;
        
        //分页结束
        if($this->input->post() != false){
            $form=$this->input->post();
            if(isset($form['search']) && !empty($form['search'])){
                $filter = array(
                    'search'=>$form['search'],
                    'title'=>$form['title']
                    );
            }else{
                $from = substr($form['date'],0,10);
                $to = substr($form['date'],13);
                switch ($form['pay']){
                    case 0:
                        $pay = "";
                        break;
                    case 1:    
                        $pay = "1";
                        break;
                    case 2:
                        $pay = "0";
                        break;
                }
                $filter = array(
                    'date'=>"BuyingDate BETWEEN '$from' AND '$to'",
                    'pay'=>$pay
                );
              $footer['date'] = $from." - ".$to;
              $footer['pay'] = $form['pay'];
            }
        }else{
            $filter = "";
            $footer = "";
        }
        $kucunObj = $this->kucunModel->getListCondition($offset, $pagesize,$order,$filter);
        if($kucunObj){
            foreach($kucunObj as $row){
                $house = $this->cangkuModel->getById($row->HouseId); //把仓库名查出来放到库存对象的HouseId里
                $row->HouseId = $house->Name;
            }
        }
            $data['products']=$kucunObj;
            $this->load->view('kucun',$data);
        if($filter = "") { $this->load->view('footer');
        }else{
              $this->load->view('footer',$footer);
          }
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
            $data['addinfo'] = 'sucess';
            $this->load->view('addkucun',$data);
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