<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restablecer extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Restablecer_model', 'mRestablecer', TRUE);
    $this->load->library('form_validation');
    $this->load->helper('respuesta');
    $this->load->library('session');
  }

  public function index()
  {
    $this->load->view('restablecer');
  }

  public function restablecer()
  {
    $pass = $this->input->post('password');
    $token = $this->input->get('token');
    $update = $this->mRestablecer->updatepassword($pass,$token);

    if($update > 0){
        $this->load->helper('send_mail');
        $_SESSION['msg'] = 'Ya puedes iniciar sesion';
        $_SESSION['lbl'] = 'success';
        redirect('login', 'refresh');  
      }else{
        $_SESSION['msg'] = 'Ocurrio un error';
        $_SESSION['lbl'] = 'error';
        redirect('restablecer', 'refresh');
    }
  }
}
