<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recobros extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Recobros_model', 'mRecobros', TRUE);
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['estacionamiento'] = $this->mEstacionamientos->getEstacionamientosSelect();
        $this->load->view('_catalogos/_boletos/recobros', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBrecobros()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mRecobros->getCatBrecobros($estatus);
        return respuesta_json($result);
    }

    public function getCatTrecobros()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mRecobros->getCatTrecobros($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBrecobros()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mRecobros->updateEstatusCatBrecobros($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTrecobros()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mRecobros->updateEstatusCatTrecobros($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBrecobros()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mRecobros->insertConceptoCatBrecobros($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTrecobros()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mRecobros->insertTarifaCatTrecobros($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mRecobros->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mRecobros->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}