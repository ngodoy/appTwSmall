<?php

$config = array(
    'signup' => array(
        array(
            'field' => 'user',
            'rules' => 'required|alpha_numeric'
        ),
        array(
            'field' => 'passw',
            'rules' => 'required|alpha_numeric'
        )),
    'validateFrases' => array(
        array(
            'field' => 'descripcion',
            'rules' => 'required|alpha_numeric'
        ),
        array(
            'field' => 'Autor',
            'rules' => 'required|alpha_numeric'
        ),
        array(
            'field' => 'status',
            'rules' => 'required|numeric'
        ))
);