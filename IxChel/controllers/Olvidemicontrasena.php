<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Olvidemicontrasena extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Olvidemicontrasena_model', 'mOlvidemicontrasena', TRUE);
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('respuesta');
    $this->load->library('session');
    $this->load->helper('send_mail');
  }

  public function index()
  {
    $this->load->view('olvidemicontrasena');
  }

  public function recuperar()
  {
    $rules = $this->mOlvidemicontrasena->rules;
    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() == TRUE) {

      $email = $this->input->post('email');
      $validar = $this->mOlvidemicontrasena->validarcorreo($email);

      if (count($validar) > 0) {
        $token = password_hash($email, PASSWORD_DEFAULT);
        $asunto = "¿Olvidaste tu contraseña?";
        $data['liga'] = base_url("restablecer?token=" . $validar[0]['Id'] . "," . $token);
        $mensaje = $this->load->view('email/recuperar', $data, TRUE);
        send_mail($mensaje, $asunto, $email);

        $_SESSION['msg'] = 'Te enviamos instrucciones a tu correo electronico';
        $_SESSION['lbl'] = 'success';
        redirect('olvidemicontrasena', 'refresh');
      } else {
        $_SESSION['msg'] = 'El correo electronico no se encuentra registrado';
        $_SESSION['lbl'] = 'warning';
        redirect('olvidemicontrasena', 'refresh');
      }
    }
    $this->load->view('olvidemicontrasena', 'refresh');
  }
}
