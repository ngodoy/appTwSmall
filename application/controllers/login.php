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
        $this->load->library(array('session', 'form_validation', 'encrypt'));
        $this->load->model('frasesModel');
    }

    public function index() {
        $this->load->view('headLogin');
        if (!$this->session->userdata('YO')) {
            $this->load->view('login_views');
        } else {
            $this->_scaffolding();
        }

        $this->load->view('footer');
    }

    public function nuevo() {
        $this->load->library('dateclass');
        $this->load->library('dateclass');

        $dateclass = new DateClass();
        $this->load->view('headLogin');
        if (!$this->session->userdata('YO')) {
            redirect('login/index');
        }

        if (empty($_POST)) {
            $this->load->view('nuevofrases');
        } else {
            if ($this->form_validation->run('validateFrases') == TRUE) {
                $data['descripcion'] = $this->input->post('descripcion');
                $data['fecha'] = $dateclass->ToString(DateClass::formatosSQl());
                $data['status'] = $this->input->post('status');
                $data['Autor'] = $this->input->post('Autor');
                //  var_dump($data);
                $this->frasesModel->nuevaFrase($data);
                $this->_scaffolding();
            } else {
                var_dump($this->form_validation->error_string());
            }

            //    $this->load->view('nuevofrases');
            $this->load->view('footer');
        }
    }

    public function success() {


        $val = FALSE;
        if ($this->form_validation->run('signup') == TRUE) {

            $user = $this->encrypt->sha1($this->input->post('user'));
            $passw = $this->encrypt->sha1($this->input->post('passw'));
            if (($user == $this->config->item('key_user')) && ($passw == $this->config->item('key_passw'))) {

                $this->session->set_userdata('YO', 'vivo');
                $this->_scaffolding();
                $this->load->view('headLogin');
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

    public function _scaffolding() {
        $this->load->library('table');
        $consulta = $this->frasesModel->listarTodo();
        $resultado = $this->table->generate($consulta);
        //echo $resultado;
        $this->load->view('scaffolding', array('resultado' => $resultado, 'hola' => 'adios'));
    }

}

