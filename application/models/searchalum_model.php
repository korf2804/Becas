<?php  

	class Searchalum_model extends CI_Model{

		public function __construct(){
			parent::__construct();
		}

		public function consulta_matricula($matricula, $carrera) {
        
	        $this->db->like('SB_MatriculaBecado', $matricula);   
	        $this->db->where('SB_CarreraBecado', $carrera);  
	        $this->db->order_by('SB_MatriculaBecado', 'asc');           
	        $consulta = $this->db->get('sb_becados');
		        if($consulta->num_rows() > 0){
		        	return $consulta;
		        }
		        else{
		        	return FALSE;
		        }     
		}

		public function consulta_nombre($nombre, $carrera) {
        
	        $this->db->like('SB_NomBecado', $nombre);   
	        $this->db->where('SB_CarreraBecado', $carrera);  
	        $this->db->order_by('SB_NomBecado', 'asc');          
	        $consulta = $this->db->get('sb_becados');
		        if($consulta->num_rows() > 0){
		        	return $consulta;
		        }
		        else{
		        	return FALSE;
		        }     
		}

		public function consulta_apellido($apellido, $carrera) {
        
	        $this->db->like('SB_ApePatBecado', $apellido); 
	        $this->db->where('SB_CarreraBecado', $carrera);  
	        $this->db->order_by('SB_ApePatBecado', 'asc');  
	       	$this->db->order_by('SB_ApeMatBecado', 'asc');          
	        $consulta = $this->db->get('sb_becados');
		        if($consulta->num_rows() > 0){
		        	return $consulta;
		        }
		        else{
		        	return FALSE;
		        }     
		}
	}
