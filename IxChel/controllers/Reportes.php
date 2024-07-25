<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reportes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Reportes_model', 'mReportes', TRUE);
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        // $this->load->helper('fecha_con_letra');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['estacionamiento'] = $this->mEstacionamientos->getEstacionamientosSelect();
        $this->load->view('reportes/index', $data);
        // $this->load->view('templates/footer');
    }

    public function get_reporteIngresos()
    {
        $data = $this->input->post();

        $parking = '';
        $date = '';
        $fecha = '';
        
        foreach ($data as $item) {
            if ($item['name'] == 'estacionamiento') {
                $parking = $item['value'];
            } elseif ($item['name'] == 'date') {
                $date = $item['value'];
            } elseif ($item['name'] == 'fecha') {
                $fecha = $item['value'];
            }
        }

        if($date === 'dia'){
            $finicio = $fecha;
            $ffin = $fecha;
        }else if($date === 'semana'){
            $fecha = str_replace("-", "", $fecha); // "2023W12"
            $finicio = date("Y-m-d", strtotime($fecha . "1"));
            $ffin = date("Y-m-d", strtotime($fecha . "7"));
        }else{
            $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fecha)));
            $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fecha)));
        }

        $estacionamiento = (isset($parking) ? $parking : $this->session->userdata('id_estacionamiento'));

        $this->mReportes->cargar_fechas($finicio, $ffin);

        // if($response){
            // $estacionamiento = $this->input->post('estacionamiento');
            $result = $this->mReportes->get_reporteIngresos($finicio, $ffin, $estacionamiento);
            return respuesta_json($result);
        // }
    }
}