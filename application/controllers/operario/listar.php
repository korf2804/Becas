<?php 
	session_start();
	class Listar extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Listas_model');
		}
		
		public function lista_antropologia(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Lista de Becados',
	                    'nombre_subtitulo' => 'Carrera de Antropologia',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                    'query' => $this->Listas_model->listaAntropologia(),
	                    'carrera' => 'Antropologia'
	                  );
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/listas');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function lista_periodismo(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Lista de Becados',
	                    'nombre_subtitulo' => 'Carrera de Periodismo',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'),
	                    'query' => $this->Listas_model->listaPeriodismo(),
	                    'carrera' => 'Periodismo'
	                  );
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/listas');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function lista_psicologia(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Lista de Becados',
	                    'nombre_subtitulo' => 'Carrera de Psicología',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                    'query' => $this->Listas_model->listaPsicologia(),
	                    'carrera' => 'Psicología'
	                  );
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/listas');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function lista_sociologia(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Lista de Becados',
	                    'nombre_subtitulo' => 'Carrera de Sociología',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                    'query' => $this->Listas_model->listaSociologia(),
	                    'carrera' => 'Sociología'
	                  );
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/listas');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function lista_trabajosocial(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Lista de Becados',
	                    'nombre_subtitulo' => 'Carrera de Trabajo Social',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                    'query' => $this->Listas_model->listaTrabajoSocial(),
	                    'carrera' => 'Trabajo Social'
	                  );
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/listas');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

	}

