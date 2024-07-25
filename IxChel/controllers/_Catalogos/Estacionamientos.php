<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estacionamientos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->model('_Catalogos/Tarifarios_model', 'mTarifarios', TRUE);
        $this->load->model('Portafolio_model', 'mPortafolio', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['grupos'] = $this->mPortafolio->getGrupos();
        $this->load->view('_catalogos/estacionamientos',$data);
        /* $this->load->view('templates/footer'); */
    }

    public function getEstacionamientos()
    {
        $result = $this->mEstacionamientos->getEstacionamientos();
        return respuesta_json($result);
    }

    public function updateEstacionamiento()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mEstacionamientos->updateEstacionamiento($id,$estatus);
        return respuesta_json($result);
    }

    public function insertEstacionamiento()
    {
        $nombre = $this->input->post('nombre');
        $grupo = $this->input->post('grupo');
        $result = $this->mEstacionamientos->insertEstacionamiento($nombre,$grupo);
        return respuesta_json($result);
    }

    public function importTarifas()
    {
        $estacionamiento = $_POST['estacionamiento'];
        $archivo = $_FILES['archivo'];
        $result = $this->mTarifarios->importTarifas($estacionamiento,$archivo);
        return respuesta_json($result);
    }

    public function verTarifas()
    {
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mTarifarios->verTarifas($estacionamiento);
        header('Content-Type: application/pdf');
        return respuesta_json($result);
    }

    public function eliminarTarifas()
    {
        $id_tarifario = $this->input->post('id_tarifario');
        $result = $this->mTarifarios->eliminarTarifas($id_tarifario);
        return respuesta_json($result);
    }

    public function updateLimit()
    {
        $id_estacionamiento = $this->input->post('id');
        $value = $this->input->post('value');
        $result = $this->mEstacionamientos->updateLimit($id_estacionamiento, $value);
        return respuesta_json($result);
    }

    public function getEstacionamientoXgrupo()
    {
        $result = $this->mEstacionamientos->getEstacionamientoXgrupo();
        return respuesta_json($result);
    }
}