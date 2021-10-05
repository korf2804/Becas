<?php 
	session_start();
	class Buscar extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('Searchalum_model');
		}

		public function busqueda_matricula(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Busqueda por Matricula',
	                    'nombre_subtitulo' => 'Completa los campos del formulario',
	                    'imagen' => base_url('assets/img/busqueda-bg.jpg'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                  );

	          	$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/buscar_matricula');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function busqueda_nombre(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Busqueda por Nombre',
	                    'nombre_subtitulo' => 'Completa los campos del formulario',
	                    'imagen' => base_url('assets/img/busqueda-bg.jpg'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                  );

	          	$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/buscar_nombre');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function busqueda_apellidos(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Sesion '.$session_data['perfil'],
	                    'nombre_titulo' => 'Busqueda por Apellidos',
	                    'nombre_subtitulo' => 'Completa los campos del formulario',
	                    'imagen' => base_url('assets/img/busqueda-bg.jpg'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                  );

	          	$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/buscar_apellido');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}
		public function resultado_busqueda_matricula(){
			if($this->session->userdata('logged_in')){
				$datos = array();
				$session_data = $this->session->userdata('logged_in');
				$matricula =  $this->security->xss_clean(strip_tags($this->input->post('matricula')));
				$carrera =  $this->security->xss_clean(strip_tags($this->input->post('carrera')));
				$result = $this->Searchalum_model->consulta_matricula(trim($matricula), trim($carrera));
	       		if($result != FALSE){
	         		$datos = array(
	         			'usuario' => $session_data['usuario'],
	         			'perfil' => $session_data['perfil'],
	         			'result' => $result,
 						'par_busqueda' => $matricula,
 						'carrera' => $carrera,
	                    'titulo' => 'Resultados de busqueda',
	                    'nombre_titulo' => 'Resultados para matricula '. $matricula,
	                    'nombre_subtitulo' => 'Arrojo '. $result->num_rows().' filas.',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'anio' => date('Y')
 						);
	         	}
	         	else{
	         		$datos = array ('result' => '');
	         	}

	         	$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/resultado_busqueda');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function resultado_busqueda_nombre()
		{
			if($this->session->userdata('logged_in')){
				$datos = array();
				$session_data = $this->session->userdata('logged_in');
				$nombre =  $this->security->xss_clean(strip_tags($this->input->post('nombre')));
				$carrera =  $this->security->xss_clean(strip_tags($this->input->post('carrera')));
				$result = $this->Searchalum_model->consulta_nombre(trim($nombre), $carrera);
	       		if($result != FALSE){
	         		$datos = array(
	         			'usuario' => $session_data['usuario'],
	         			'perfil' => $session_data['perfil'],
	         			'result' => $result,
 						'par_busqueda' => $nombre,
 						'carrera' => $carrera,
	                    'titulo' => 'Resultados de busqueda',
	                    'nombre_titulo' => 'Resultados para el nombre '. $nombre,
	                    'nombre_subtitulo' => 'Arrojo '. $result->num_rows().' filas.',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'anio' => date('Y')
 						);
	         	}
	         	else{
	         		$datos = array ('result' => '');
	         	}

	         	$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/resultado_busqueda');
	          	$this->load->view('plantilla/front_end/footer');
	            
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

		public function resultado_busqueda_apellido()
		{
			if($this->session->userdata('logged_in')){
				$datos = array();
				$session_data = $this->session->userdata('logged_in');
				$apellido =  $this->security->xss_clean(strip_tags($this->input->post('apellido')));
				$carrera =  $this->security->xss_clean(strip_tags($this->input->post('carrera')));
				$result = $this->Searchalum_model->consulta_apellido(trim($apellido), $carrera);
	       		if($result != FALSE){
	         		$datos = array(
	         			'usuario' => $session_data['usuario'],
	         			'perfil' => $session_data['perfil'],
	         			'result' => $result,
 						'par_busqueda' => $apellido,
 						'carrera' => $carrera,
	                    'titulo' => 'Resultados de busqueda',
	                    'nombre_titulo' => 'Resultados para el apellido '. $apellido,
	                    'nombre_subtitulo' => 'Arrojo '. $result->num_rows().' filas.',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'anio' => date('Y')
 						);
	         	}
	         	else{
	         		$datos = array ('result' => '');
	         	}

	         	$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/resultado_busqueda');
	          	$this->load->view('plantilla/front_end/footer');
	            
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}
	}
