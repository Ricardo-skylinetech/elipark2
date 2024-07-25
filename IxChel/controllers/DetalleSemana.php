<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("America/Mexico_City");

class DetalleSemana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DetalleSemana_model', 'mDetalleSemana', TRUE);
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
        $result = $this->mDetalleSemana->getBexpedidos($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBfisicos()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBfisicos($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBcobrados()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBcobrados($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getValesDescuento()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getValesDescuento($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getTarifasEspeciales()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getTarifasEspeciales($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBrecobros()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBrecobros($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBvalet()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBvalet($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getValesretornar()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getValesretornar($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBpensiones()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBpensiones($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBsinCobro()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBsinCobro($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBoperacion()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBoperacion($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBvouchers()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBvouchers($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBvalidaciones()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBvalidaciones($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBperdidoValet()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBperdidoValet($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBperdidos()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBperdidos($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBprepago()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBprepago($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBinformativo()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBinformativo($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBotros()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBotros($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBinfoPrepago()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBinfoPrepago($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getBinfoOtrosMedios()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getBinfoOtrosMedios($fecha,$estacionamiento);
        return respuesta_json($result);
    }

    public function getDetalleSemanaCajeros()
    {
        $fechaIngreso = $this->input->post('fechaIngreso');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getDetalleSemanaCajeros($fechaIngreso, $estacionamiento);
        return respuesta_json($result);
    }

    public function getDetalleCajeros()
    {
        $fecha = $this->input->post('fecha');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalleSemana->getDetalleCajeros($fecha, $estacionamiento);
        return respuesta_json($result);
    }
}