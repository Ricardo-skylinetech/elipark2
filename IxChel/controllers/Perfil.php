<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('max_execution_time', 300); // 300 segundos = 5 minutos

date_default_timezone_set("America/Mexico_City");

// Cargar la biblioteca PHPSpreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory; // importar la clase IOFactory
use PhpOffice\PhpSpreadsheet\Cell\Coordinate; // importar la clase Coordinate

use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;

class Perfil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perfil_model', 'mPerfil', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        // $this->load->view('templates/header');
        // $this->load->view('perfil/index');
        // $this->load->view('templates/footer');
    }

    public function getUserData() {
        $id_usuario = $this->session->userdata('id_usuario');
        $result = $this->mPerfil->getUserData($id_usuario);
        return respuesta_json($result);
    }

    public function updateUsuario() {
        $id_usuario = $this->session->userdata('id_usuario');
        $result = $this->mPerfil->updateUsuario($id_usuario);
        return respuesta_json($result);
    }

    public function updateEmail() {
        $id_usuario = $this->session->userdata('id_usuario');
        $result = $this->mPerfil->updateEmail($id_usuario);
        return respuesta_json($result);
    }

    public function updatePassword() {
        $id_usuario = $this->session->userdata('id_usuario');
        $result = $this->mPerfil->updatePassword($id_usuario);
        return respuesta_json($result);
    }
}