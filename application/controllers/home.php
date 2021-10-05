<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Articulos_model');
    }

    function index() {
        $result = $this->Articulos_model->lista_articulos();
        $datos = array(
            'titulo' => 'Centro Fotocopiado San Sebastian',
            'anio' => date('Y'),
            'result' => $result,
            'fecha' => date('d / m / Y'),
            'nombre_titulo' => 'SAN SEBASTIAN',
            'nombre_subtitulo' => 'Centro de Fotocopiado e Impresión',
            'imagen' => 'assets/img/home-bg.jpg'
        );
        $this->load->view('plantilla/front_end/head', $datos);
        $this->load->view('plantilla/front_end/nav');
        $this->load->view('plantilla/front_end/header');
        $this->load->view('front_end/home');
        $this->load->view('plantilla/front_end/footer');
    }

}
