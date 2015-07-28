<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class cangkuModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add($data){
        $this->db->insert('Warehouse',$data);
    }
    public function del($id){
        $this->db->delete('Warehouse',array('Id'=>$id));
    }
    public function edit($id,$data){
        $this->db->where('Id',$id);
        $this->db->update('Warehouse',$data);
    }
    public function getListCondition($offset,$pagesize){
        $this->db->limit($pagesize,$offset);
        $query = $this->db->get('Warehouse');
        $result = $query->result();
        return !empty($result) ? $result : false;
    }    
    public function getList(){
        $query = $this->db->get('Warehouse');
        $result = $query->result();
        return !empty($result) ? $result : false;
    }
    public function getById($id){
        $this->db->where('Id',$id);
        $query = $this->db->get('Warehouse');
        $result = $query->row();
        return !empty($result) ? $result : false;
    }
    public function getListNum(){
        $this->db->select('id');
        $query = $this->db->get('Warehouse');
        return $query->num_rows();
    }
    
}