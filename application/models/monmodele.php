<?php 

class monmodele extends CI_Model {


function getAll(){
        $this->db->select('*');
        $q = $this->db->get('user');
        if($q->num_rows() > 0){
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
}