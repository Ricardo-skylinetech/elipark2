<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoPrepago extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/InfoPrepago_model', 'mInfoPrepago', TRUE);
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
        $this->load->view('_catalogos/_boletos/info_prepago', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBinfoPrepago()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mInfoPrepago->getCatBinfoPrepago($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBinfoPrepago()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mInfoPrepago->updateEstatusCatBinfoPrepago($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoBinfoPrepago()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mInfoPrepago->insertConceptoBinfoPrepago($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mInfoPrepago->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }
}