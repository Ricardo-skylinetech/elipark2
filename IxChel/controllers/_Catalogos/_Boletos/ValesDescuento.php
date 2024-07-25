<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValesDescuento extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('_Catalogos/_Boletos/ValesDescuento_model', 'mValesDescuento', TRUE);
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
        $this->load->view('_catalogos/_boletos/vales_descuento', $data);
        /* $this->load->view('templates/footer'); */
    }

    public function getCatValesDescuento()
    {
        $estatus = $this->input->post('estatus');
        $result = $this->mValesDescuento->getCatValesDescuento($estatus);
        return respuesta_json($result);
    }

    public function updateEstatusCatValesDescuento()
    {
        $id = $this->input->post('id');
        $estatus = $this->input->post('estatus');
        $result = $this->mValesDescuento->updateEstatusCatValesDescuento($id,$estatus);
        return respuesta_json($result);
    }

    public function insertConceptoCatValesDescuento()
    {
        $concepto = $this->input->post('concepto');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mValesDescuento->insertConceptoCatValesDescuento($concepto,$estacionamiento);
        return respuesta_json($result);
    }

    public function updateConcepto()
    {
        $id = $this->input->post('idC_e');
        $concepto = $this->input->post('concepto_e');
        $estacionamiento_id = $this->input->post('estacionamiento_idC_e');
        $result = $this->mValesDescuento->updateConcepto($id,$concepto,$estacionamiento_id);
        return respuesta_json($result);
    }
}