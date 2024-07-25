<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SinCobroR extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/SinCobroR_model', 'mSinCobroR', TRUE);
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
        $this->load->view('_catalogos/_boletos/sincobroR', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatBsinCobroR()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mSinCobroR->getCatBsinCobroR($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatBsinCobroR()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mSinCobroR->updateEstatusCatBsinCobroR($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoBsinCobroR()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mSinCobroR->insertConceptoBsinCobroR($concepto,$estacionamiento);
        return respuesta_json($result);
    }
}