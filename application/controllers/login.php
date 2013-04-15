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
        $this->load->library(array('session'));
    }

    public function index() {
        $this->load->view('headLogin');
        if (!$this->session->userdata('YO')) {
            $this->load->view('login_views');
        } else {
            $this->load->view('scaffolding');
        }

        $this->load->view('footer');
    }

    public function success() {
        $this->load->library(array('form_validation', 'encrypt'));
        $val = FALSE;
        if ($this->form_validation->run('signup') == TRUE) {
            $user = $this->encrypt->sha1($this->input->post('user'));
            $passw = $this->encrypt->sha1($this->input->post('passw'));
            if (($user == $this->config->item('key_user')) && ($passw == $this->config->item('key_passw'))) {

                $this->session->set_userdata('YO', 'vivo');
                $this->load->model('frasesModel');
                $this->
                $this->load->view('headLogin');
                $this->load->view('scaffolding');
                $val = TRUE;
            }
        }
        if (!$val) {
            redirect('login/index');
        }
        $this->load->view('footer');
    }

    public function cerrar() {
        $this->session->sess_destroy();
        redirect('login/index');
    }

}

