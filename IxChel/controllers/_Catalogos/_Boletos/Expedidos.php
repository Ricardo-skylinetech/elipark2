<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expedidos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Expedidos_model', 'mExpedidos', TRUE);
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
        $this->load->view('_catalogos/_boletos/expedidos', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBexpedidos()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mExpedidos->getCatBexpedidos($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBexpedidos()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mExpedidos->updateEstatusCatBexpedidos($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatBexpedidos()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mExpedidos->insertConceptoCatBexpedidos($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mExpedidos->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }
}