<?php 
	session_start();
	class Resultados extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Ingreso_becas_model');
		}
		public function fotocopias()
		{
			if($this->session->userdata('logged_in')):
				$tupla = array();
				$session_data = $this->session->userdata('logged_in');
				$matricula = $this->security->xss_clean(strip_tags($this->input->post('matricula')));
				$fotocopias = $this->security->xss_clean(strip_tags($this->input->post('fotocopiadas')));
				$result = $this->Ingreso_becas_model->actualizar_copias($matricula, $fotocopias);
				if($result != FALSE):
					$tupla = array(
						'result' => $result,
						'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Becas de Fotocopias',
	                    'nombre_subtitulo' => 'ACTUALIZADAS',
	                    'imagen' => base_url('assets/img/update-bg.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'),  
						);
				else:
					$tupla = array('result' => '');
				endif;
				$this->load->view('plantilla/front_end/head', $tupla);
				$this->load->view('front_end/operario/nav');
				$this->load->view('plantilla/front_end/header');
				$this->load->view('front_end/operario/nav_operario');
	        	$this->load->view('front_end/operario/actualizacion_fotocopia');
	        	$this->load->view('plantilla/front_end/footer');
	     	else:
	        	redirect('error/error_401', 'refresh');
	        endif;
	        
		}
		public function impresion()
		{
			if($this->session->userdata('logged_in')):
				$tupla = array();
				$session_data = $this->session->userdata('logged_in');
				$matricula = $this->security->xss_clean(strip_tags($this->input->post('matricula')));
				$impresas = $this->security->xss_clean(strip_tags($this->input->post('impresas')));
				$result = $this->Ingreso_becas_model->actualizar_impresion($matricula, $impresas);
				if($result != FALSE):
					$tupla = array(
						'result' => $result,
						'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Becas de Impresion',
	                    'nombre_subtitulo' => 'ACTUALIZADAS',
	                    'imagen' => base_url('assets/img/update-bg.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'),  
						);
				else:
					$tupla = array('result' => '');
				endif;
				$this->load->view('plantilla/front_end/head', $tupla);
				$this->load->view('front_end/operario/nav');
				$this->load->view('plantilla/front_end/header');
				$this->load->view('front_end/operario/nav_operario');
	        	$this->load->view('front_end/operario/actualizacion_impresion');
	        	$this->load->view('plantilla/front_end/footer');
	     	else:
	        	redirect('error/error_401', 'refresh');
	        endif;
	        
		}
	}
