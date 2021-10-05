<?php
class Estadisticas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Cierre_model');
	}

	public function  anuales(){
		if($this->session->userdata('logged_in')):
		$session_data = $this->session->userdata('logged_in');
		$result       = $this->Cierre_model->cierreActual($session_data['perfil'], $session_data['departamento'], 'Segundo - 2017');
		$monto        = $this->Cierre_model->montos($session_data['perfil'], $session_data['departamento']);
		$valor        = $this->Cierre_model->valor();
		$mes          = array(
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
		$datos = array(
			'usuario'          => $session_data['usuario'],
			'titulo'           => 'ESTADISTICAS ANUALES',
			'result'           => $result,
			'monto'            => $monto,
			'valor'            => $valor,
			'nombre_titulo'    => 'Estadisticas Anuales',
			'nombre_subtitulo' => 'Becas '. $session_data['departamento'],
			'imagen'           => base_url('assets/img/jefatura-bg.jpg'),
			'perfil'           => $session_data['perfil'],
			'anio'             => date('Y'),
			'mes'              => $mes[date('m')-1],
		);
		$this->load->view('plantilla/front_end/head', $datos);
		$this->load->view('front_end/jefatura/nav');
		$this->load->view('plantilla/front_end/header');
		$this->load->view('front_end/jefatura/nav_jefatura');
		$this->load->view('front_end/jefatura/estadisticas/anuales');
		$this->load->view('plantilla/front_end/footer');
		else :
		redirect('error/error_401', 'refresh');
		endif;
	}

}