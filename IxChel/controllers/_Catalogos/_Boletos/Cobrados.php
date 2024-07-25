<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobrados extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Cobrados_model', 'mCobrados', TRUE);
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
        $this->load->view('_catalogos/_boletos/cobrados',$data, $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBcobrados()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mCobrados->getCatBcobrados($estatus);
        return respuesta_json($result);
    }

    public function getCatTcobrados()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mCobrados->getCatTcobrados($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBcobrados()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mCobrados->updateEstatusCatBcobrados($id,$estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatTcobrados()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mCobrados->updateEstatusCatTcobrados($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBcobrados()
    {
        $concepto = $this->input->post('conceptoA');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mCobrados->insertConceptoCatBcobrados($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function insertTarifaCatTcobrados()
    {
        $tarifa = $this->input->post('tarifa');
        $estacionamiento = $this->input->post('estacionamiento2');
        $result = $this->mCobrados->insertTarifaCatTcobrados($tarifa,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mCobrados->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }

    public function updateTarifa()
    {
        $id = $this->input->post('idT_e');
        $tarifa = $this->input->post('tarifa_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idT_e');
        $result = $this->mCobrados->updateTarifa($id,$tarifa,$estacionamiento_id);
        return respuesta_json($result);
    }
}