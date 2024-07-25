<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vouchers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/Vouchers_model', 'mVouchers', TRUE);
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
        $this->load->view('_catalogos/_boletos/vouchers', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBvouchers()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mVouchers->getCatBvouchers($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBvouchers()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mVouchers->updateEstatusCatBvouchers($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoBvouchers()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mVouchers->insertConceptoBvouchers($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mVouchers->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }
}