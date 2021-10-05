<?php 
    session_start();
    class Userhome extends CI_Controller {
   
          function __construct(){
            parent::__construct();
          }
          
          public function index(){
            if($this->session->userdata('logged_in')){
              $session_data = $this->session->userdata('logged_in');
              switch ($session_data['tipo']):
                case '1':
                  $datos = array(
                    'usuario' => $session_data['usuario'],
                    'titulo' => 'Sesion '.$session_data['perfil'],
                    'nombre_titulo' => 'Bienvenido(a) '.$session_data['nombre'],
                    'nombre_subtitulo' => 'has iniciado como  '. $session_data['departamento'],
                    'imagen' => 'assets/img/login_operario.png'
                  );
                  $data['usuario'] = $session_data['usuario'];
                  $this->load->view('front_end/administrador/home', $data);
                break;
                case '3':
                  $datos = array(
                    'usuario' => $session_data['usuario'],
                    'titulo' => 'Sesion '.$session_data['usuario'],
                    'nombre_titulo' => 'Bienvenido(a) <br />'.$session_data['nombre'],
                   'nombre_subtitulo' => 'has iniciado como  Operador',
                    'imagen' => 'assets/img/login_operario.png',
                    'perfil' => $session_data['nombre'],
                    'anio' => date('Y')
                  );

                  $this->load->view('plantilla/front_end/head', $datos);
                  $this->load->view('front_end/operario/nav');
                  $this->load->view('plantilla/front_end/header');
                  $this->load->view('front_end/operario/nav_operario');
                  $this->load->view('front_end/operario/home');
                  $this->load->view('plantilla/front_end/footer');
                break;
                case '2':
                 $datos = array(
                    'usuario' => $session_data['usuario'],
                    'titulo' => 'Sesion '.$session_data['perfil'],
                    'nombre_titulo' => 'Bienvenido(a) <br />'.$session_data['nombre'],
                    'nombre_subtitulo' => 'has iniciado como  '. $session_data['departamento'],
                    'imagen' => 'assets/img/jefatura-bg.jpg',
                    'perfil' => $session_data['perfil'],
                    'anio' => date('Y')
                  );

                  $this->load->view('plantilla/front_end/head', $datos);
                  $this->load->view('front_end/jefatura/nav');
                  $this->load->view('plantilla/front_end/header');
                  $this->load->view('front_end/jefatura/nav_jefatura');
                  $this->load->view('front_end/jefatura/home');
                  $this->load->view('plantilla/front_end/footer');
                break;
                default:
                  redirect('error/error_401', 'refresh');
                break;
              endswitch;
              
            }
            else{//si no existe la variable de sesion, redireccionamos al login
              redirect('error/error_401', 'refresh');
            }
          }
   
          public function logout(){
            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('index.php/home', 'refresh');
          }
  }