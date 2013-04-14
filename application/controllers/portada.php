<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of portada
 *
 * @author ngodoy
 */
class Portada extends CI_Controller {

//put your code here
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('head');

        $this->load->view('footer');
    }

}

