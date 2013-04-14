<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of portada
 *
 * @author ngodoy
 */
class Login extends CI_Controller {

//put your code here
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
    }

    public function index() {
        $this->load->view('head');
        $this->load->view('login_views');
        $this->load->view('footer');
    }

    public function success() {
                $this->load->view('head');

        $this->load->library('form_validation');
        $date = array(
            'user' => $this->input->post(),
            'passw' => $this->input->post());

        if ($this->form_validation->run('signup') == FALSE) {
            $this->load->view('login_views');
        } else {
            echo "sadsad";
        }
        $this->load->view('footer');
    }

}

