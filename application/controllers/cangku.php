<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cangku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('admin_model');
        $this->load->helper('url');
        $this->load->model('cangkuModel');
        $this->load->view('header');
    }

    public function index($page = 1) {
        $cangkunum = $this->cangkuModel->getListNum();
        $pagesize = 20;
        $pagenum = ceil($cangkunum / $pagesize);
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
        $data['page'] = $page;
        $data['pagenum'] = $pagenum;
        $data['init'] = $init;
        $data['max_p'] = $max_p;
        $data['cangkunum'] = $cangkunum;
        
        $cangkuObj = $this->cangkuModel->getList($offset, $pagesize);
        $data['houses'] = $cangkuObj;
        $this->load->view('cangku', $data);
        //$this->load->view('footer');
    }

    public function add() {
        $cangku = $this->input->post();
        if (!$cangku) {
            $this->load->view('addcangku');
        } else {
            $this->cangkuModel->add($cangku);
            //$this->load->view('footer');
            redirect('/cangku/index');
        }
    }

    public function edit($id = false) {
        if ($id) {
            $house = $this->cangkuModel->getById($id);
            $data['house'] = $house;
            $this->load->view('editcangku', $data);
        } else {
            $cangku = $this->input->post();
            $id = $cangku['Id'];
            unset($cangku['Id']);
            $this->cangkuModel->edit($id, $cangku);
            redirect('/cangku/index');
        }
    }

    public function del($id) {
        $this->cangkuModel->del($id);
        redirect('/cangku/index');
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */