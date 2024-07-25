<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValesRetornar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/ValesRetornar_model', 'mValesRetornar', TRUE);
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
        $this->load->view('_catalogos/_boletos/vales_retornar', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatValesRetornar()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mValesRetornar->getCatValesRetornar($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatValesRetornar()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mValesRetornar->updateEstatusCatValesRetornar($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoValesRetornar()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mValesRetornar->insertConceptoValesRetornar($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mValesRetornar->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }
}