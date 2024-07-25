<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('catalogos');
        /* $this->load->view('templates/footer'); */
    }
}