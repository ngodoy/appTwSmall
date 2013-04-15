<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FrasesModel extends CI_Model {

    private static $name = 'frases';

    function __construct() {
        parent::__construct();
    }

    function listarTodo($paginas = 0) {
        if ($paginas != 0) {
            $paginasB = $paginas * PAGINACION;
            $paginasA = $paginasB - PAGINACION;
            return $this->db->get(self::name, $paginasA, $paginasB);
        } else {
            return $this->db->get(self::name);
        }
    }

}

