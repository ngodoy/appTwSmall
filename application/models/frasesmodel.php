<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FrasesModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->name = 'frases';
    }

    function listarTodo($paginas = 0) {
        if ($paginas != 0) {
            $paginasB = $paginas * PAGINACION;
            $paginasA = $paginasB - PAGINACION;
            return $this->db->get($this->name, $paginasA, $paginasB);
        } else {
            return $this->db->get($this->name);
        }
    }

    function nuevaFrase($datos) {
        $this->db->insert($this->name, $datos);
        return $this->db->insert_id();
    }

    function borrarFrase($datos) {
        $this->db->delete();
    }

}

