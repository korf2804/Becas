<?php
class Cierre extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Cierre_model');
	}

	public function actual() {
		if ($this->session->userdata('logged_in')):
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
			'titulo'           => 'Cierre de Mes',
			'result'           => $result,
			'monto'            => $monto,
			'valor'            => $valor,
			'nombre_titulo'    => 'Cierre de Mes',
			'nombre_subtitulo' => 'SALDOS ACTUALES',
			'imagen'           => base_url('assets/img/jefatura-bg.jpg'),
			'perfil'           => $session_data['perfil'],
			'anio'             => date('Y'),
			'mes'              => $mes[date('m')-1],
		);
		$this->load->view('plantilla/front_end/head', $datos);
		$this->load->view('front_end/jefatura/nav');
		$this->load->view('plantilla/front_end/header');
		$this->load->view('front_end/jefatura/nav_jefatura');
		$this->load->view('front_end/jefatura/cierre_actual');
		$this->load->view('plantilla/front_end/footer');
		 else :
		redirect('error/error_401', 'refresh');
		endif;

	}
	public function mensual() {
		if ($this->session->userdata('logged_in')):
		$session_data = $this->session->userdata('logged_in');
		$mes          = $this->Cierre_model->mes();
		$datos        = array(
			'usuario'          => $session_data['usuario'],
			'titulo'           => 'Cierre de Mes',
			'mes'              => $mes,
			'nombre_titulo'    => 'Cierre de Mes',
			'nombre_subtitulo' => 'ELIJA MES PARA VER EL CIERRE',
			'imagen'           => base_url('assets/img/jefatura-bg.jpg'),
			'perfil'           => $session_data['perfil'],
			'anio'             => date('Y'),
		);

		$this->load->view('plantilla/front_end/head', $datos);
		$this->load->view('front_end/jefatura/nav');
		$this->load->view('plantilla/front_end/header');
		$this->load->view('front_end/jefatura/nav_jefatura');
		$this->load->view('front_end/jefatura/cierre_mensual_select');
		$this->load->view('plantilla/front_end/footer');
		 else :
		redirect('error/error_401', 'refresh');
		endif;
	}

	public function mensualSelect() {
		if ($this->session->userdata('logged_in')):
		$session_data = $this->session->userdata('logged_in');
		$mes          = $this->security->xss_clean(strip_tags($this->input->post('mes')));
		if ($mes == ''):
		$mes   = $this->Cierre_model->mes();
		$datos = array(
			'usuario'          => $session_data['usuario'],
			'titulo'           => 'Cierre de Mes',
			'mes'              => $mes,
			'nombre_titulo'    => 'POR FAVOR ELIJA MES',
			'nombre_subtitulo' => 'ELIJA MES PARA VER EL CIERRE',
			'imagen'           => base_url('assets/img/jefatura-bg.jpg'),
			'perfil'           => $session_data['perfil'],
			'anio'             => date('Y'),
		);

		$this->load->view('plantilla/front_end/head', $datos);
		$this->load->view('front_end/jefatura/nav');
		$this->load->view('plantilla/front_end/header');
		$this->load->view('front_end/jefatura/nav_jefatura');
		$this->load->view('front_end/jefatura/cierre_mensual_select');
		$this->load->view('plantilla/front_end/footer');
		 else :
		$result = $this->Cierre_model->mensual($session_data['perfil'], $session_data['departamento'], $mes);
		$datos  = array(
			'usuario'          => $session_data['usuario'],
			'titulo'           => 'Cierre de Mes',
			'result'           => $result,
			'nombre_titulo'    => 'Cierre de Mes',
			'nombre_subtitulo' => 'INFORME MENSUAL',
			'imagen'           => base_url('assets/img/jefatura-bg.jpg'),
			'perfil'           => $session_data['perfil'],
			'anio'             => date('Y'),
		);

		$this->load->view('plantilla/front_end/head', $datos);
		$this->load->view('front_end/jefatura/nav');
		$this->load->view('plantilla/front_end/header');
		$this->load->view('front_end/jefatura/nav_jefatura');
		$this->load->view('front_end/jefatura/cierre_mensual');
		$this->load->view('plantilla/front_end/footer');
		endif;
		 else :
		redirect('error/error_401', 'refresh');
		endif;
	}
}