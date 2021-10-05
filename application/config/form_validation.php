<?php

$config = array(
    'consulta_becas' => array(
        array(
            'field' => 'matricula',
            'label' => 'Matricula',
            'rules' => 'required|numeric|max_length[10]|min_length[10]'
        )
    ),
    'login' => array(
        array(
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|min_length[5]'
        ),
        array(
        	'field' => 'password',
        	'label' => 'Contraseña',
        	'rules' => 'required|min_length[5]|callback_validar'
        )
    )
);
