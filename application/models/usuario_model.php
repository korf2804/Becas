<?php

class Usuario_model extends CI_Model {


    function __construct() {
        parent::__construct();
    }

    public function login($usuario, $password) {
        
     
        $this->db->where('SB_Username', $usuario);
        $this->db->where('SB_Password', $password);
        $this->db->limit(1);
        $consulta = $this->db->get('sb_usuarios');

        if ($consulta->num_rows() == 1) {            
            return $consulta->result();            
        } else {
            return FALSE;
        }
    }

    public function seleccionar_usuario($usuario, $perfil){
        $this->db->where('SB_Username', $usuario);
        $this->db->where('SB_CargoUsuario', $perfil);
        $consulta = $this->db->get('sb_usuarios', 1);
        return $consulta;
    }

    public function actualizar_usuario($usuario, $nombre, $apellidos, $correo){
        $datos = array(
            'SB_Username' => $usuario,
            'SB_NomUsuario' => $nombre,
            'SB_ApePatUsuario' => $apellidos,
            'SB_EmailUsuario' => $correo
            );
        $this->db->where('SB_Username', $usuario);
        $update = $this->db->update('sb_usuarios', $datos);
        if($update):
            $this->db->where('SB_Username', $usuario);
            $consulta = $this->db->get('sb_usuarios');
            return $consulta;
        endif;

        
    }

    public function actualizar_password($password, $newpassword, $usuario){
        $this->db->where('usuario', $usuario);
        $this->db->where('password', md5($password));
        $consulta = $this->db->get('user', 1);

        if($consulta->num_rows() == 1):
            $password = array(
                    'password' => md5($newpassword)
                );
            $this->db->where('usuario', $usuario);
            $this->db->update('user', $password);
            return TRUE;
        else:
            return FALSE;
        endif;

    }

}
