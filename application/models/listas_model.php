<?php

	class Listas_model extends CI_Model {
		public function __construct(){
			parent::__construct();
		}
	
		public function listaAntropologia(){
			$this->db->where('SB_CarreraBecado', '5');
			$this->db->order_by('SB_MatriculaBecado', 'asc');
			$query = $this->db->get('sb_becados');
			if($query->num_rows() > 0){
				return $query;
			}
			else{
				return FALSE;
			}
		}

		public function listaPeriodismo(){
			$this->db->where('SB_CarreraBecado', '1');
			$this->db->order_by('SB_MatriculaBecado', 'asc');
			$query = $this->db->get('sb_becados');
			if($query->num_rows() > 0){
				return $query;
			}
			else{
				return FALSE;
			}
		}

		public function listaPsicologia(){
			$this->db->where('SB_CarreraBecado', '2');
			$this->db->order_by('SB_MatriculaBecado', 'asc');
			$query = $this->db->get('sb_becados');
			if($query->num_rows() > 0){
				return $query;
			}
			else{
				return FALSE;
			}
		}

		public function listaTrabajoSocial(){
			$this->db->where('SB_CarreraBecado', '3');
			$this->db->order_by('SB_MatriculaBecado', 'asc');
			$query = $this->db->get('sb_becados');
			if($query->num_rows() > 0){
				return $query;
			}
			else{
				return FALSE;
			}
		}

		public function listaSociologia(){
			$this->db->where('SB_CarreraBecado', '4');
			$this->db->order_by('SB_MatriculaBecado', 'asc');
			$query = $this->db->get('sb_becados');
			if($query->num_rows() > 0){
				return $query;
			}
			else{
				return FALSE;
			}
		}
	}
