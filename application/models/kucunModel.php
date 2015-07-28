<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class kucunModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add($data){
        $this->db->insert('Stock',$data);
    }
    public function del($id){
        $this->db->delete('Stock',array('Id'=>$id));
    }
    public function edit($id,$data){
        $this->db->where('Id',$id);
        $this->db->update('Stock',$data);
    }
    public function getList($offset, $pagesize){
        $this->db->limit($pagesize,$offset);
        $query = $this->db->get('Stock');
        $result = $query->result();
        return !empty($result) ? $result : false;
    }
    public function getListCondition($offset,$pagesize){
        $this->db->limit($pagesize,$offset);
        $query = $this->db->get('Stock');
        $result = $query->result();
        return !empty($result) ? $result : false;
    } 
    public function getById($id){
        $this->db->where('Id',$id);
        $query = $this->db->get('Stock');
        $result = $query->row();
        return !empty($result) ? $result : false;
    }
    
    public function getListNum(){
        $this->db->select('id');
        $query = $this->db->get('Stock');
        return $query->num_rows();
    }
    
}