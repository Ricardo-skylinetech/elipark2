<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pensiones extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Pensiones_model', 'mPensiones', TRUE);
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
        $this->load->view('_catalogos/_boletos/pensiones', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBpensiones()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPensiones->getCatBpensiones($estatus);
        return respuesta_json($result);
    }

    public function getCatTpensiones()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPensiones->getCatTpensiones($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBpensiones()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPensiones->updateEstatusCatBpensiones($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTpensiones()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPensiones->updateEstatusCatTpensiones($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBpensiones()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mPensiones->insertConceptoCatBpensiones($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTpensiones()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mPensiones->insertTarifaCatTpensiones($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mPensiones->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mPensiones->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}