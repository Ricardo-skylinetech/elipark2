<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pases extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Pases_model', 'mPases', TRUE);
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
        $this->load->view('_catalogos/_boletos/pases', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBpases()
    {

        $estatus = $this->input->post('estatus');
        $result = $this->mPases->getCatBpases($estatus);
        return respuesta_json($result);
    }

    public function getCatTPases()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mPases->getCatTPases($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBPases()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPases->updateEstatusCatBrecobros($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTPases()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mPases->updateEstatusCatTrecobros($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBPases()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mPases->insertConceptoCatBrecobros($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTPases()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mPases->insertTarifaCatTrecobros($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mPases->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mPases->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}