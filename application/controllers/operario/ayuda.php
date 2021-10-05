<?php

	session_start();

	class Ayuda extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Usuario_model');
		}
    class function index(){
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
}