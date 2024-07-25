<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'mLogin', TRUE);
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('respuesta');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $this->mLogin->loggedin() == FALSE || redirect('inicio/index');

        $rules = $this->mLogin->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {

            if ($this->mLogin->login() == TRUE) {
                redirect('inicio/index');
            } else {
                redirect('login', 'refresh');
            }
        }

        $this->load->view('login');
    }

    public function logout()
    {
        $this->mLogin->logout();
        redirect('login');
    }
}
