<?php 

	class Error extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		}

		public function error_401(){
			$datos = array(
                    'titulo' => 'ERROR 401',
                    'nombre_titulo' => 'ERROR 401 ',
                    'nombre_subtitulo' => 'Acceso Restringido solo para Usuarios',
                    'imagen' => base_url('assets/img/error-401.jpg'),
                    'anio' => date('Y')
                  );

          	$this->load->view('plantilla/front_end/head', $datos);
          	$this->load->view('plantilla/front_end/nav');
          	$this->load->view('plantilla/front_end/header');
          	$this->load->view('front_end/error/error_401');
          	$this->load->view('plantilla/front_end/footer');
		}

          public function error_404()
          {
               
               if($this->session->userdata('logged_in')):
                    $session_data = $this->session->userdata('logged_in');
                    $datos = array(
                         'usuario' => $session_data['usuario'],
                         'titulo' => 'ERROR 404',
                         'nombre_titulo' => 'ERROR 404',
                         'nombre_subtitulo' => 'OOOPPPSSS, Archivos no encontrados...',
                         'imagen' => base_url('assets/img/error-401.jpg'),
                         'anio' => date('Y'),
                         'perfil' => $session_data['perfil']
                         );

                    $this->load->view('plantilla/front_end/head', $datos);
                    $this->load->view('front_end/operario/nav');
                    $this->load->view('plantilla/front_end/header');
                    switch($session_data['tipo']):
                         case 'admin':
                              $this->load->view('front_end/administrador/nav_operario');
                         break;
                         case 'user':
                              $this->load->view('front_end/jefatura/nav_jefatura');
                         break;
                         case 'oper':
                              $this->load->view('front_end/operario/nav_operario');
                         break;
                    endswitch;
                    $this->load->view('front_end/error/error_404');
                    $this->load->view('plantilla/front_end/footer');
               else:
                    redirect('error/error_401','refresh');
               endif;
          }

           public function error_801()
          {
               
               if($this->session->userdata('logged_in')):
                    $session_data = $this->session->userdata('logged_in');
                    $datos = array(
                         'usuario' => $session_data['usuario'],
                         'titulo' => 'Sesion '.$session_data['perfil'],
                         'titulo' => 'ERROR 801',
                         'nombre_titulo' => 'ERROR 801',
                         'nombre_subtitulo' => 'Los Parametros Son Incorrectos',
                         'imagen' => base_url('assets/img/error-401.jpg'),
                         'anio' => date('Y'),
                         'perfil' => $session_data['perfil']
                         );

                    $this->load->view('plantilla/front_end/head', $datos);
                    $this->load->view('front_end/operario/nav');
                    $this->load->view('plantilla/front_end/header');
                    $this->load->view('front_end/operario/nav_operario');
                    $this->load->view('front_end/error/error_801');
                    $this->load->view('plantilla/front_end/footer');
               else:
                    redirect('error/error_401','refresh');
               endif;
          }

           public function error_802()
          {
               
               if($this->session->userdata('logged_in')):
                    $session_data = $this->session->userdata('logged_in');
                    $datos = array(
                         'usuario' => $session_data['usuario'],
                         'titulo' => 'Sesion '.$session_data['perfil'],
                         'titulo' => 'ERROR 802',
                         'nombre_titulo' => 'ERROR 802',
                         'nombre_subtitulo' => 'Los Montos Ingresados Son Incorrectos',
                         'imagen' => base_url('assets/img/error-401.jpg'),
                         'anio' => date('Y'),
                         'perfil' => $session_data['perfil']
                         );

                    $this->load->view('plantilla/front_end/head', $datos);
                    $this->load->view('front_end/operario/nav');
                    $this->load->view('plantilla/front_end/header');
                    $this->load->view('front_end/operario/nav_operario');
                    $this->load->view('front_end/error/error_802');
                    $this->load->view('plantilla/front_end/footer');
               else:
                    redirect('error/error_401','refresh');
               endif;
          }
	}