<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accesos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/Accesos_model', 'mAccesos', TRUE);
        // $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->model('Rol_model', 'mRol', TRUE);
        $this->load->model('Permisos_model', 'mPermisos', TRUE);
        $this->load->model('Portafolio_model', 'mPortafolio', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->load->helper('send_mail');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        // $data['estacionamientos'] = $this->mEstacionamientos->getEstacionamientosSelect();
        $data['roles'] = $this->mRol->getRoles();
        $data['permisos'] = $this->mPermisos->getPermisos();
        $data['grupos'] = $this->mPortafolio->getGrupos();
        $this->load->view('_catalogos/accesos',$data);
        /* $this->load->view('templates/footer'); */
    }

    public function getUsuarios()
    {
        $result = $this->mAccesos->getUsuarios();
        return respuesta_json($result);
    }

    public function insertusuario()
    {
        $result = $this->mAccesos->insertusuario();
        return respuesta_json($result);
    }

    public function updateEstatus()
    {
        $id_usuario = $this->input->post('id_usuario');
        $estatus = $this->input->post('estatus');
        $result = $this->mAccesos->updateEstatus($id_usuario,$estatus);
        return respuesta_json($result);
    }

    public function updateUsuario()
    {
        $result = $this->mAccesos->updateUsuario();
        return respuesta_json($result);
    }

    public function resetPassword()
    {
        $id_usuario = $this->input->post('id_usuario');
        $email = $this->input->post('email');
        $result = $this->mAccesos->resetPassword($id_usuario,$email);
        return respuesta_json($result);
    }
}