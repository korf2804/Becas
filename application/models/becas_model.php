<?php

class Becas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function consulta_becas($matricula) {
        
        $this->db->where('SB_MatriculaBecado', $matricula);               
        $query = $this->db->get('sb_becados');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

}
