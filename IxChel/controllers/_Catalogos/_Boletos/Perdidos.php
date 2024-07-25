<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perdidos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Perdidos_model', 'mPerdidos', TRUE);
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
        $this->load->view('_catalogos/_boletos/perdidos',$data, $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBperdidos()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPerdidos->getCatBperdidos($estatus);
        return respuesta_json($result);
    }

    public function getCatTperdidos()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPerdidos->getCatTperdidos($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBperdidos()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPerdidos->updateEstatusCatBperdidos($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTperdidos()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPerdidos->updateEstatusCatTperdidos($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBperdidos()
    {
        $concepto = $this->input->post('conceptoA');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mPerdidos->insertConceptoCatBperdidos($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTperdidos()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mPerdidos->insertTarifaCatTperdidos($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mPerdidos->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mPerdidos->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}