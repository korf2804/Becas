<?php

	class Ingreso_becas_model extends CI_Model {

		public function __construct(){
			parent::__construct();
		}

		public function fotocopias($matricula){
			$this->db->where('SB_MatriculaBecado', $matricula);
			$this->db->where('SB_BecasFotocopia >', 0);
			$this->db->limit(1);
			$consulta = $this->db->get('sb_becados');

			if ($consulta->num_rows() == 1) {
				return $consulta;
			}
			else{
				return FALSE;
			}
		}

		public function impresion($matricula){
			$this->db->where('SB_MatriculaBecado', $matricula);
			$this->db->where('SB_BecasImpresion >', 0);
			$this->db->limit(1);
			$consulta = $this->db->get('sb_becados');

			if ($consulta->num_rows() == 1) {
				return $consulta;
			}
			else{
				return FALSE;
			}
		}

		public function actualizar_copias($matricula, $fotocopiadas){
			$this->db->where('SB_MatriculaBecado', $matricula);
			$consulta = $this->db->get('sb_becados');

			if($consulta->num_rows() != 0):
				$consultas = $consulta->row();
				$restantes = $consultas->becas_fotocopias - $consultas->fotocopiadas;
				if(!($fotocopiadas > $restantes)):
					$datos = array(
						'fotocopiadas' => $fotocopiadas + $consultas->fotocopiadas
					);
					if(!($datos['fotocopiadas'] <= $consultas->fotocopiadas)):
						$this->db->where('matricula', $consultas->matricula);
						if($update = $this->db->update('becas', $datos)):
							$this->db->where('matricula', $matricula);
							$consulta = $this->db->get('becas');
							return $consulta;
						else:
							return FALSE;
						endif;
					else:
						return FALSE;
					endif;
				else:
					return FALSE;
				endif;
			else:
				return FALSE;
			endif;
		}

		public function actualizar_impresion($matricula, $impresion){
			
			$this->db->where('matricula', $matricula);
			$consulta = $this->db->get('becas');

			if($consulta->num_rows() != 0)://si consuta es mayor a cero
				$consultas = $consulta->row();
				$restantes = $consultas->becas_impresion - $consultas->impresas;
				if(!($impresion > $restantes))://si input impresion es mayor a impresas
					$datos = array(
						'impresas' => $impresion + $consultas->impresas
					);
					if(!($datos['impresas'] <= $consultas->impresas)):
						$this->db->where('matricula', $consultas->matricula);
						if($update = $this->db->update('becas', $datos)):
							$this->db->where('matricula', $matricula);
							$consulta = $this->db->get('becas');
							return $consulta;
						else:
							return FALSE;
						endif;
					else:
						return FALSE;
					endif;
				else:
					return FALSE;
				endif;
			else:
				return FALSE;
			endif;//fin mayor cero
				$consulta->free_result();
			
			

		}
	}
