<?php

class Consulta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Becas_model');
    }

    function index() {
        $datos = array(
            'titulo' => 'Consulta tus Becas',
            'anio' => date('Y'),
            'nombre_titulo' => '¿Cuantas Tengo?',
            'nombre_subtitulo' => 'Consulta cuantas becas te quedan',
            'imagen' => base_url() . 'assets/img/query_bg.png'
        );
        $this->load->view('plantilla/front_end/head', $datos);
        $this->load->view('plantilla/front_end/nav');
        $this->load->view('plantilla/front_end/header');
        $this->load->view('front_end/consulta_becas');
        $this->load->view('plantilla/front_end/footer');
    }

    function validar() {
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run('consulta_becas') === FALSE) {
            $datos = array(
                'titulo' => 'Consulta tus Becas',
                'anio' => date('Y'),
                'nombre_titulo' => '¿Cuantas Tengo?',
                'nombre_subtitulo' => 'Consulta cuantas becas te quedan',
                'imagen' => base_url() . 'assets/img/query_bg.png'
            );
            $this->load->view('plantilla/front_end/head', $datos);
            $this->load->view('plantilla/front_end/nav');
            $this->load->view('plantilla/front_end/header');
            $this->load->view('front_end/consulta_becas');
            $this->load->view('plantilla/front_end/footer');
        } else {
            $matricula = $this->input->post('matricula');
            $this->Becas_model->consulta_becas($matricula);
            $datos = array(
                'titulo' => 'Consulta tus Becas',
                'anio' => date('Y'),
                'nombre_titulo' => '¿Cuantas Tengo?',
                'nombre_subtitulo' => 'Resultados de tu consulta',
                'imagen' => base_url() . 'assets/img/queryanswer-bg.png',
            );
            $this->load->view('plantilla/front_end/head', $datos);
            $this->load->view('plantilla/front_end/nav');
            $this->load->view('plantilla/front_end/header');
            $query['query'] = $this->Becas_model->consulta_becas($matricula);
            $this->load->view('front_end/consulta_correcta', $query);
            $this->load->view('plantilla/front_end/footer');
        }
    }
}
