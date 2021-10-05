<?php 
	session_start();
	class Becas extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Ingreso_becas_model');
			 $this->load->library('form_validation');
		}

		public function ingreso_fotocopias(){
			if($this->session->userdata('logged_in')):
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
                    'usuario' => $session_data['usuario'],
                    'titulo' => 'Ingresar Fotocopias',
                    'nombre_titulo' => 'Becas Fotocopias',
                    'nombre_subtitulo' => '',
                    'imagen' => base_url('assets/img/login_operario.png'),
                    'perfil' => $session_data['perfil'],
                    'anio' => date('Y'), 
         			'busqueda' => 'resultado_fotocopias'
                  	);
				$this->load->view('plantilla/front_end/head', $datos);
          		$this->load->view('front_end/operario/nav');
          		$this->load->view('plantilla/front_end/header');
          		$this->load->view('front_end/operario/nav_operario');
          		$this->load->view('front_end/operario/ingreso_becas');
          		$this->load->view('plantilla/front_end/footer'); 
	        else:
	        	redirect('error/error_401', 'refresh');
	        endif;
		}

		public function resultado_fotocopias(){
			if($this->session->userdata('logged_in')){
				$datos = array();
				$session_data = $this->session->userdata('logged_in');
				$matricula =  $this->security->xss_clean(strip_tags($this->input->post('matricula')));
				$result = $this->Ingreso_becas_model->fotocopias(trim($matricula));
	       		if($result != FALSE){
	         		$datos = array(
	         			'usuario' => $session_data['usuario'],
	         			'perfil' => $session_data['perfil'],
	         			'result' => $result,
 						'par_busqueda' => $matricula,
	                    'titulo' => 'Ingresar Fotocopias',
	                    'nombre_titulo' => 'Ingresar Fotocopias',
	                    'nombre_subtitulo' => 'Matricula '. $matricula,
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
	          	$this->load->view('front_end/operario/ingresar_monto_fotocopias');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}
 
		public function ingreso_impresion(){
			if($this->session->userdata('logged_in')):
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Ingresar Impresión',
	                    'nombre_titulo' => 'Becas Impresion',
	                    'nombre_subtitulo' => '',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y'), 
	                    'busqueda' => 'resultado_impresion'
	                  );
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/ingreso_becas');
	          	$this->load->view('plantilla/front_end/footer');
	        else:
	        	redirect('error/error_401', 'refresh');
	        endif;
	    }

	    public function resultado_impresion(){
			if($this->session->userdata('logged_in')){
				$datos = array();
				$session_data = $this->session->userdata('logged_in');
				$matricula =  $this->security->xss_clean(strip_tags($this->input->post('matricula')));
				$result = $this->Ingreso_becas_model->impresion(trim($matricula));
	       		if($result != FALSE){
	         		$datos = array(
	         			'usuario' => $session_data['usuario'],
	         			'perfil' => $session_data['perfil'],
	         			'result' => $result,
 						'par_busqueda' => $matricula,
	                    'titulo' => 'Ingresar Impresiones',
	                    'nombre_titulo' => 'Ingresar Impresiones',
	                    'nombre_subtitulo' => 'Matricula '. $matricula,
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
	          	$this->load->view('front_end/operario/ingresar_monto_impresion');
	          	$this->load->view('plantilla/front_end/footer');
	        }
	        else{
	        	redirect('error/error_401', 'refresh');
	        }
		}

	}

