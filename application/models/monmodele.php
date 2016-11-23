<?php 

class monmodele extends CI_Model {


function getAll(){
        $this->db->select('*');
        $q = $this->db->get('table1');
        if($q->num_rows() > 0){
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
}