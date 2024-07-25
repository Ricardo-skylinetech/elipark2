<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prepago extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Prepago_model', 'mPrepago', TRUE);
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
        $this->load->view('_catalogos/_boletos/prepago',$data, $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBprepago()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPrepago->getCatBprepago($estatus);
        return respuesta_json($result);
    }

    public function getCatTprepago()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPrepago->getCatTprepago($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBprepago()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPrepago->updateEstatusCatBprepago($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTprepago()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPrepago->updateEstatusCatTprepago($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBprepago()
    {
        $concepto = $this->input->post('conceptoA');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mPrepago->insertConceptoCatBprepago($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTprepago()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mPrepago->insertTarifaCatTprepago($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mPrepago->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mPrepago->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}