<?php

class Cierre_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function cierreActual($perfil, $departamento, $semestre) {
		switch ($perfil):
		case 'Jefatura Decanato':
			$this->db->select('carrera, SUM(montoTotal_im) AS `Timpresas`, SUM(montototal_fo) AS `Tfotocopiadas`,semestre');
			$this->db->where('semestre', $semestre);
			$this->db->group_by('carrera');
			$this->db->order_by('carrera', 'asc');
			$query = $this->db->get('cierre');
			if ($query->result() == 0):
			$dato = FALSE;
		 	else :
			return $query;
			endif;

			break;
		case 'Jefatura Periodismo':
			$this->db->where('carrera', $departamento);
			$query = $this->db->get('cierre');

			break;
		case 'Jefatura Psicologia':
			$this->db->where('carrera', $departamento);
			$query = $this->db->get('cierre');
			return $query;
			break;
		case 'Jefatura Trabajo Social':
			$this->db->where('carrera', $departamento);
			$query = $this->db->get('cierre');
			return $query;
			break;
		case 'Jefatura Sociologia':
			$this->db->where('carrera', $departamento);
			$query = $this->db->get('cierre');
			return $query;
			break;
		case 'Jefatura Antropologia':
			$this->db->where('carrera', $departamento);
			$query = $this->db->get('cierre');
			return $query;
			break;
			endswitch;
		}

		public function valor() {
			$valor = $this->db->get('valores');
			return $valor;
		}

		public function montos($perfil, $departamento) {
			$mes = array(
				'Enero',
				'Febrero',
				'Marzo',
				'Abril',
				'Mayo',
				'Junio',
				'Julio',
				'Agosto',
				'Septiembre',
				'Octubre',
				'Noviembre',
				'Diciembre',
			);
			$mes = $mes[date('m')-1];
			switch ($perfil):
		case 'Jefatura Decanato':
				$this->db->select('carrera, SUM(impresas) AS impresas, SUM(fotocopiadas) AS fotocopiadas', 'semestre');
				$this->db->group_by('carrera');
				$this->db->order_by('carrera', 'asc');
				$suma = $this->db->get('becas');
				return $suma;
				break;
		case 'Jefatura Periodismo':
				$this->db->select('carrera, SUM(impresas) AS impresas, SUM(fotocopiadas) AS Fotocopiadas');
				$this->db->where('carrera', $departamento);
				$suma = $this->db->get('becas');
				return $suma;
				break;
		case 'Jefatura Psicologia':
				$this->db->select('carrera, SUM(impresas) AS impresas, SUM(fotocopiadas) AS Fotocopiadas');
				$this->db->where('carrera', $departamento);
				$suma = $this->db->get('becas');
				return $suma;
				break;
		case 'Jefatura Trabajo Social':
				$this->db->select('carrera, SUM(impresas) AS impresas, SUM(fotocopiadas) AS Fotocopiadas');
				$this->db->where('carrera', $departamento);
				$suma = $this->db->get('becas');
				return $suma;
				break;
		case 'Jefatura Sociologia':
				$this->db->select('carrera, SUM(impresas) AS impresas, SUM(fotocopiadas) AS Fotocopiadas');
				$this->db->where('carrera', $departamento);
				$suma = $this->db->get('becas');
				return $suma;
				break;
		case 'Jefatura Antropologia':
				$this->db->select('carrera, SUM(impresas) AS impresas, SUM(fotocopiadas) AS Fotocopiadas');
				$this->db->where('carrera', $departamento);
				$suma = $this->db->get('becas');
				return $suma;
				break;
				endswitch;
			}

			public function mes() {
				$this->db->select('mes');
				$this->db->group_by('mes');
				$this->db->order_by('id_cierre', 'asc');
				$mes = $this->db->get('cierre');
				return $mes;
			}

			public function mensual($perfil, $departamento, $mes) {
				switch ($perfil):
		case 'Jefatura Decanato':
					$this->db->where('mes', $mes);
					$suma = $this->db->get('cierre');
					return $suma;
					break;
		case 'Jefatura Periodismo':
					$this->db->where('mes', $mes);
					$this->db->where('carrera', $departamento);
					$suma = $this->db->get('cierre');

					break;
		case 'Jefatura Psicologia':
					$this->db->where('mes', $mes);
					$this->db->where('carrera', $departamento);
					$suma = $this->db->get('cierre');
					return $suma;
					break;
		case 'Jefatura Trabajo Social':
					$this->db->where('mes', $mes);
					$this->db->where('carrera', $departamento);
					$suma = $this->db->get('cierre');
					return $suma;
					break;
		case 'Jefatura Sociologia':
					$this->db->where('mes', $mes);
					$this->db->where('carrera', $departamento);
					$suma = $this->db->get('cierre');
					return $suma;
					break;
		case 'Jefatura Antropologia':
					$this->db->where('mes', $mes);
					$this->db->where('carrera', $departamento);
					$suma = $this->db->get('cierre');
					return $suma;
					break;
					endswitch;
				}
			}
