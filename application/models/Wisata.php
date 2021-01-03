<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Model {

    public function getDataWisata(){
        $this->db->select('*');
        $this->db->from('wisata');
        $query = $this->db->get();
        return $query->result();
    }

}