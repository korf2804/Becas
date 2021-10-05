<?php

	session_start();
	class Operario extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Usuario_model');
		}

		public function datos_operario(){
			if($this->session->userdata('logged_in')):
				$session_data = $this->session->userdata('logged_in');
				$usuario = $session_data['usuario'];
				$perfil = $session_data['perfil'];
				$result = $this->Usuario_model->seleccionar_usuario($usuario, $perfil); 
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Mis Datos',
	                    'nombre_titulo' => 'Modificar mis Datos',
	                    'nombre_subtitulo' => '',
	                    'result' => $result,
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y')
	                  );

				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/form_operario');
	          	$this->load->view('plantilla/front_end/footer');
	        else:
	        	redirect('error/error_401', 'refresh');
	        endif;
		}

		public function update_datos(){
			if($this->session->userdata('logged_in')):
				$session_data = $this->session->userdata('logged_in');
				$usuario = $session_data['usuario'];
				$nombre = $this->security->xss_clean(strip_tags($this->input->post('nombre')));
				$apellidos = $this->security->xss_clean(strip_tags($this->input->post('apellidos')));
				$correo = $this->security->xss_clean(strip_tags($this->input->post('correo')));
				$result = $this->Usuario_model->actualizar_usuario($usuario, $nombre, $apellidos, $correo);
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Mis Datos',
	                    'nombre_titulo' => 'Modificar mis Datos',
	                    'nombre_subtitulo' => 'Datos Actualizados',
	                    'result' => $result,
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y')
	                  );

				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/form_operario');
	          	$this->load->view('plantilla/front_end/footer');
	        else:
	        	redirect('error/error_401', 'refresh');
	        endif;
		}

		public function password(){
			if($this->session->userdata('logged_in')):
				$session_data = $this->session->userdata('logged_in');
				$datos = array(
	                    'usuario' => $session_data['usuario'],
	                    'titulo' => 'Mis Datos',
	                    'nombre_titulo' => 'Modificar mi Contraseña',
	                    'nombre_subtitulo' => '',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y')
	                  );

				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/form_password');
	          	$this->load->view('plantilla/front_end/footer');
	        else:
	        	redirect('error/error_401', 'refresh');
	        endif;
		}

		public function update_password(){
			if($this->session->userdata('logged_in')):
				$session_data = $this->session->userdata('logged_in');
				$usuario = $session_data['usuario'];
				$password = $this->security->xss_clean(strip_tags($this->input->post('lastPassword')));
				$newpassword = $this->security->xss_clean(strip_tags($this->input->post('newPassword')));
				$newpassword2 = $this->security->xss_clean(strip_tags($this->input->post('newPassword2')));
				if($newpassword === $newpassword2):
					$result = $this->Usuario_model->actualizar_password($password, $newpassword, $usuario);
					if($result != FALSE)://si la contraseña existe en la base de datos
			            redirect('sesion','refresh');
					else:
						$datos = array(
						'usuario' => $session_data['usuario'],
	                    'titulo' => 'Error en las Contraseñas',
	                    'nombre_titulo' => 'La contraseña antigua esta equivocada',
	                    'nombre_subtitulo' => 'Error en la Contraseña',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y')
						);
					endif;//fin si no hay resultado en la base de taos
				else:
					$datos = array(
						'usuario' => $session_data['usuario'],
	                    'titulo' => 'Error en las Contraseñas',
	                    'nombre_titulo' => 'Error en la Contraseña Nueva',
	                    'nombre_subtitulo' => 'Las Contraseñas no Coinciden',
	                    'imagen' => base_url('assets/img/login_operario.png'),
	                    'perfil' => $session_data['perfil'],
	                    'anio' => date('Y')
						);
				endif;
				$this->load->view('plantilla/front_end/head', $datos);
	          	$this->load->view('front_end/operario/nav');
	          	$this->load->view('plantilla/front_end/header');
	          	$this->load->view('front_end/operario/nav_operario');
	          	$this->load->view('front_end/operario/form_password');
	          	$this->load->view('plantilla/front_end/footer');
	        else:
	        	redirect('error/error_401', 'refresh');
	        endif;
		}

	}	