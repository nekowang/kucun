<?php

class systemModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function confirm_id($adminname,$oldpwd){
        $this->db->select('Id');
        $this->db->where('Name',$adminname);
        $this->db->where('Password',$oldpwd);
        $query = $this->db->get('admin');
        return $query->num_rows();
    }
    function modify_password($adminname,$newpwd){
        $this->db->where('Name',$adminname);
        $this->db->set('Password',$newpwd);
        $this->db->update('admin');
        return $query = $this->db->affected_rows();
        
    }
    
}

?>