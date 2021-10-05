<?php

class Sesion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->library('form_validation');
        }

    public function index() {

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');       
        if ($this->form_validation->run('login') === FALSE) {
            $datos = array(
                'titulo' => 'Inicio de Sesion',
                'anio' => date('Y'),
                'error' => 'El nombre de Usuario o la Contraseña son invalidos.'
            );
            $this->load->view('plantilla/front_end/head', $datos);
            $this->load->view('plantilla/front_end/nav');
            $this->load->view('front_end/sesion');
        }
        else{
            redirect(base_url('index.php/userhome'));
        }
    }

    public function validar($password){
        $usuario = $this->security->xss_clean(strip_tags($this->input->post('usuario')));
        $password = md5($this->security->xss_clean(strip_tags($this->input->post('password'))));
        $consulta = $this->Usuario_model->login($usuario, $password);
        if($consulta){
            $sess_array = array();
            foreach($consulta as $row){
                $sess_array = array(
                                    'perfil' => $row->SB_CargoUsuario,
                                    'usuario' => $row->SB_Username,
                                    'nombre' => $row->SB_NomUsuario,
                                    'departamento' => $row->SB_DeptoUsuario,
                                    'tipo' => $row->SB_CargoUsuario
                                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else{
            $this->form_validation->set_message('validar', 'Error en el nombre de Usuario o la Contraseña ');
            return FALSE;    
        }
   }
}
