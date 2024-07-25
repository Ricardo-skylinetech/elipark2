<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarifasEspeciales extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/TarifasEspeciales_model', 'mTarifasEspeciales', TRUE);
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
        $this->load->view('_catalogos/_boletos/tarifas_especiales', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBtarifasEspeciales()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mTarifasEspeciales->getCatBtarifasEspeciales($estatus);
        return respuesta_json($result);
    }

    public function getCatTtarifasEspeciales()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mTarifasEspeciales->getCatTtarifasEspeciales($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTarifasEspeciales()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mTarifasEspeciales->updateEstatusCatTarifasEspeciales($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTtarifasEspeciales()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mTarifasEspeciales->updateEstatusCatTtarifasEspeciales($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatTarifasEspeciales()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mTarifasEspeciales->insertConceptoCatTarifasEspeciales($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTtarifasEspeciales()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mTarifasEspeciales->insertTarifaCatTtarifasEspeciales($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mTarifasEspeciales->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mTarifasEspeciales->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}