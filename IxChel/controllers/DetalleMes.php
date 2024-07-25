<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("America/Mexico_City");

class DetalleMes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DetalleMes_model', 'mDetalleMes', TRUE);
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function getBexpedidos()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBexpedidos($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBfisicos()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBfisicos($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBcobrados()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBcobrados($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getValesDescuento()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getValesDescuento($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getTarifasEspeciales()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getTarifasEspeciales($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBrecobros()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBrecobros($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBvalet()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBvalet($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getValesretornar()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getValesretornar($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBpensiones()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBpensiones($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBsinCobro()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBsinCobro($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBoperacion()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBoperacion($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBvouchers()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBvouchers($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBvalidaciones()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBvalidaciones($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBperdidoValet()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBperdidoValet($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBperdidos()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBperdidos($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBprepago()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBprepago($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBinformativo()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBinformativo($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBotros()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBotros($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBinfoPrepago()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBinfoPrepago($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBinfoOtrosMedios()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getBinfoOtrosMedios($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getDetalleMesCajeros()
    {
        $fechaIngreso = $this->input->post('fechaIngreso');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getDetalleMesCajeros($fechaIngreso, $estacionamiento);
        return respuesta_json($result);
    }

    public function getDetalleCajeros()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleMes->getDetalleCajeros($fecha, $estacionamiento);
        return respuesta_json($result);
    }
}