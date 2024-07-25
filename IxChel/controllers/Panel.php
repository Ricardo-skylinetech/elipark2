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

class Panel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Panel_model', 'mPanel', TRUE);
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->model('Reportes_model', 'mReportes', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['estacionamiento'] = $this->mEstacionamientos->getEstacionamientosSelect();
        $this->load->view('panel/index', $data);
        // $this->load->view('templates/footer');
    }

    public function descargarLayout()
    {
        try {
            // ob_start();
            // ini_set('memory_limit', '-1');
            $plantilla = APPPATH . '..' . DIRECTORY_SEPARATOR . 'sources' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'layout_nuevo.xlsx';
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($plantilla);
            $worksheet1 = $spreadsheet->setActiveSheetIndex(1);
            $worksheet2 = $spreadsheet->setActiveSheetIndex(2);
            $fila_inicio = 5;
            $estacionamiento = $this->input->post('estacionamiento3');
            $estacionamiento = (isset($estacionamiento) ? $estacionamiento : '');
            //CATALOGO EXPEDIDOS Y BOLETOS FISICOS
            $cat_expedidos = $this->mPanel->getCatalogos("cat_boletos_expedidos", $estacionamiento);
            for ($i = 0; $i < count($cat_expedidos); $i++) {
                $worksheet2->setCellValue("B" . $fila_inicio, $cat_expedidos[$i]["id"]);
                $worksheet2->setCellValue("A" . $fila_inicio, $cat_expedidos[$i]["concepto"]);
                $worksheet2->setCellValue("C" . $fila_inicio, $cat_expedidos[$i]["estatus"]);
                $worksheet1->setCellValue("B" . $fila_inicio, $cat_expedidos[$i]["concepto"]);
                $worksheet1->setCellValue("H" . $fila_inicio, $cat_expedidos[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_cobrados = $this->mPanel->getCatalogos("cat_boletos_cobrados", $estacionamiento);
            for ($i = 0; $i < count($cat_cobrados); $i++) {
                $worksheet2->setCellValue("F" . $fila_inicio, $cat_cobrados[$i]["id"]);
                $worksheet2->setCellValue("E" . $fila_inicio, $cat_cobrados[$i]["concepto"]);
                $worksheet2->setCellValue("G" . $fila_inicio, $cat_cobrados[$i]["estatus"]);
                $worksheet1->setCellValue("P" . $fila_inicio, $cat_cobrados[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifa_cobrados = $this->mPanel->getCatalogos("cat_tarifas_boletos_cobrados", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifa_cobrados); $i++) {
                $worksheet2->setCellValue("J" . $fila_inicio, $cat_tarifa_cobrados[$i]["id"]);
                $worksheet2->setCellValue("I" . $fila_inicio, $cat_tarifa_cobrados[$i]["tarifa"]);
                $worksheet2->setCellValue("K" . $fila_inicio, $cat_tarifa_cobrados[$i]["estatus"]);
                $worksheet1->setCellValue("S" . $fila_inicio, $cat_tarifa_cobrados[$i]["tarifa"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_vales_descuento = $this->mPanel->getCatalogos("cat_boletos_vales_descuento", $estacionamiento);
            for ($i = 0; $i < count($cat_vales_descuento); $i++) {
                $worksheet2->setCellValue("N" . $fila_inicio, $cat_vales_descuento[$i]["id"]);
                $worksheet2->setCellValue("M" . $fila_inicio, $cat_vales_descuento[$i]["concepto"]);
                $worksheet2->setCellValue("O" . $fila_inicio, $cat_vales_descuento[$i]["estatus"]);
                $worksheet1->setCellValue("W" . $fila_inicio, $cat_vales_descuento[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifas_especiales = $this->mPanel->getCatalogos("cat_boletos_tarifas_especiales", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifas_especiales); $i++) {
                $worksheet2->setCellValue("R" . $fila_inicio, $cat_tarifas_especiales[$i]["id"]);
                $worksheet2->setCellValue("Q" . $fila_inicio, $cat_tarifas_especiales[$i]["concepto"]);
                $worksheet2->setCellValue("S" . $fila_inicio, $cat_tarifas_especiales[$i]["estatus"]);
                $worksheet1->setCellValue("AB" . $fila_inicio, $cat_tarifas_especiales[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifa_tarifas_especiales = $this->mPanel->getCatalogos("cat_tarifas_boletos_tarifas_especiales", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifa_tarifas_especiales); $i++) {
                $worksheet2->setCellValue("V" . $fila_inicio, $cat_tarifa_tarifas_especiales[$i]["id"]);
                $worksheet2->setCellValue("U" . $fila_inicio, $cat_tarifa_tarifas_especiales[$i]["tarifa"]);
                $worksheet2->setCellValue("W" . $fila_inicio, $cat_tarifa_tarifas_especiales[$i]["estatus"]);
                $worksheet1->setCellValue("AE" . $fila_inicio, $cat_tarifa_tarifas_especiales[$i]["tarifa"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_recobros = $this->mPanel->getCatalogos("cat_boletos_recobros", $estacionamiento);
            for ($i = 0; $i < count($cat_recobros); $i++) {
                $worksheet2->setCellValue("Z" . $fila_inicio, $cat_recobros[$i]["id"]);
                $worksheet2->setCellValue("Y" . $fila_inicio, $cat_recobros[$i]["concepto"]);
                $worksheet2->setCellValue("AA" . $fila_inicio, $cat_recobros[$i]["estatus"]);
                $worksheet1->setCellValue("AR" . $fila_inicio, $cat_recobros[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifa_recobros = $this->mPanel->getCatalogos("cat_tarifas_boletos_recobros", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifa_recobros); $i++) {
                $worksheet2->setCellValue("AD" . $fila_inicio, $cat_tarifa_recobros[$i]["id"]);
                $worksheet2->setCellValue("AC" . $fila_inicio, $cat_tarifa_recobros[$i]["tarifa"]);
                $worksheet2->setCellValue("AE" . $fila_inicio, $cat_tarifa_recobros[$i]["estatus"]);
                $worksheet1->setCellValue("AU" . $fila_inicio, $cat_tarifa_recobros[$i]["tarifa"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_vales_retornar = $this->mPanel->getCatalogos("cat_boletos_vales_retornar", $estacionamiento);
            for ($i = 0; $i < count($cat_vales_retornar); $i++) {
                $worksheet2->setCellValue("AH" . $fila_inicio, $cat_vales_retornar[$i]["id"]);
                $worksheet2->setCellValue("AG" . $fila_inicio, $cat_vales_retornar[$i]["concepto"]);
                $worksheet2->setCellValue("AI" . $fila_inicio, $cat_vales_retornar[$i]["estatus"]);
                $worksheet1->setCellValue("AY" . $fila_inicio, $cat_vales_retornar[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_pensiones = $this->mPanel->getCatalogos("cat_boletos_pensiones", $estacionamiento);
            for ($i = 0; $i < count($cat_pensiones); $i++) {
                $worksheet2->setCellValue("AL" . $fila_inicio, $cat_pensiones[$i]["id"]);
                $worksheet2->setCellValue("AK" . $fila_inicio, $cat_pensiones[$i]["concepto"]);
                $worksheet2->setCellValue("AM" . $fila_inicio, $cat_pensiones[$i]["estatus"]);
                $worksheet1->setCellValue("BD" . $fila_inicio, $cat_pensiones[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifa_pensiones = $this->mPanel->getCatalogos("cat_tarifas_boletos_pensiones", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifa_pensiones); $i++) {
                $worksheet2->setCellValue("AP" . $fila_inicio, $cat_tarifa_pensiones[$i]["id"]);
                $worksheet2->setCellValue("AO" . $fila_inicio, $cat_tarifa_pensiones[$i]["tarifa"]);
                $worksheet2->setCellValue("AQ" . $fila_inicio, $cat_tarifa_pensiones[$i]["estatus"]);
                $worksheet1->setCellValue("BG" . $fila_inicio, $cat_tarifa_pensiones[$i]["tarifa"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_sin_cobro = $this->mPanel->getCatalogos("cat_boletos_sin_cobro", $estacionamiento);
            for ($i = 0; $i < count($cat_sin_cobro); $i++) {
                $worksheet2->setCellValue("AT" . $fila_inicio, $cat_sin_cobro[$i]["id"]);
                $worksheet2->setCellValue("AS" . $fila_inicio, $cat_sin_cobro[$i]["concepto"]);
                $worksheet2->setCellValue("AU" . $fila_inicio, $cat_sin_cobro[$i]["estatus"]);
                $worksheet1->setCellValue("BK" . $fila_inicio, $cat_sin_cobro[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_validaciones = $this->mPanel->getCatalogos("cat_boletos_validaciones", $estacionamiento);
            for ($i = 0; $i < count($cat_validaciones); $i++) {
                $worksheet2->setCellValue("AX" . $fila_inicio, $cat_validaciones[$i]["id"]);
                $worksheet2->setCellValue("AW" . $fila_inicio, $cat_validaciones[$i]["concepto"]);
                $worksheet2->setCellValue("AY" . $fila_inicio, $cat_validaciones[$i]["estatus"]);
                $worksheet1->setCellValue("BP" . $fila_inicio, $cat_validaciones[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_perdidos = $this->mPanel->getCatalogos("cat_boletos_perdidos", $estacionamiento);
            for ($i = 0; $i < count($cat_perdidos); $i++) {
                $worksheet2->setCellValue("BB" . $fila_inicio, $cat_perdidos[$i]["id"]);
                $worksheet2->setCellValue("BA" . $fila_inicio, $cat_perdidos[$i]["concepto"]);
                $worksheet2->setCellValue("BC" . $fila_inicio, $cat_perdidos[$i]["estatus"]);
                $worksheet1->setCellValue("BZ" . $fila_inicio, $cat_perdidos[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifa_perdidos = $this->mPanel->getCatalogos("cat_tarifas_boletos_perdidos", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifa_perdidos); $i++) {
                $worksheet2->setCellValue("BF" . $fila_inicio, $cat_tarifa_perdidos[$i]["id"]);
                $worksheet2->setCellValue("BE" . $fila_inicio, $cat_tarifa_perdidos[$i]["tarifa"]);
                $worksheet2->setCellValue("BG" . $fila_inicio, $cat_tarifa_perdidos[$i]["estatus"]);
                $worksheet1->setCellValue("CC" . $fila_inicio, $cat_tarifa_perdidos[$i]["tarifa"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_prepago = $this->mPanel->getCatalogos("cat_boletos_prepago", $estacionamiento);
            for ($i = 0; $i < count($cat_prepago); $i++) {
                $worksheet2->setCellValue("BJ" . $fila_inicio, $cat_prepago[$i]["id"]);
                $worksheet2->setCellValue("BI" . $fila_inicio, $cat_prepago[$i]["concepto"]);
                $worksheet2->setCellValue("BK" . $fila_inicio, $cat_prepago[$i]["estatus"]);
                $worksheet1->setCellValue("CG" . $fila_inicio, $cat_prepago[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_tarifa_prepago = $this->mPanel->getCatalogos("cat_tarifas_boletos_prepago", $estacionamiento);
            for ($i = 0; $i < count($cat_tarifa_prepago); $i++) {
                $worksheet2->setCellValue("BN" . $fila_inicio, $cat_tarifa_prepago[$i]["id"]);
                $worksheet2->setCellValue("BM" . $fila_inicio, $cat_tarifa_prepago[$i]["tarifa"]);
                $worksheet2->setCellValue("BO" . $fila_inicio, $cat_tarifa_prepago[$i]["estatus"]);
                $worksheet1->setCellValue("CJ" . $fila_inicio, $cat_tarifa_prepago[$i]["tarifa"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_boletos_operacion = $this->mPanel->getCatalogos("cat_boletos_operacion", $estacionamiento);
            for ($i = 0; $i < count($cat_boletos_operacion); $i++) {
                $worksheet2->setCellValue("BR" . $fila_inicio, $cat_boletos_operacion[$i]["id"]);
                $worksheet2->setCellValue("BQ" . $fila_inicio, $cat_boletos_operacion[$i]["concepto"]);
                $worksheet2->setCellValue("BS" . $fila_inicio, $cat_boletos_operacion[$i]["estatus"]);
                $worksheet1->setCellValue("CS" . $fila_inicio, $cat_boletos_operacion[$i]["concepto"]);
                $fila_inicio++;
            }
            $fila_inicio = 5;

            $cat_boletos_vouchers = $this->mPanel->getCatalogos("cat_boletos_vouchers", $estacionamiento);
            for ($i = 0; $i < count($cat_boletos_vouchers); $i++) {
                $worksheet2->setCellValue("BV" . $fila_inicio, $cat_boletos_vouchers[$i]["id"]);
                $worksheet2->setCellValue("BU" . $fila_inicio, $cat_boletos_vouchers[$i]["concepto"]);
                $worksheet2->setCellValue("BW" . $fila_inicio, $cat_boletos_vouchers[$i]["estatus"]);
                $worksheet1->setCellValue("CX" . $fila_inicio, $cat_boletos_vouchers[$i]["concepto"]);
                $fila_inicio++;
            }

            $cat_boletos_info_prepago = $this->mPanel->getCatalogos("cat_boletos_info_prepago", $estacionamiento);
            for ($i = 0; $i < count($cat_boletos_info_prepago); $i++) {
                $worksheet2->setCellValue("BZ" . $fila_inicio, $cat_boletos_info_prepago[$i]["id"]);
                $worksheet2->setCellValue("BY" . $fila_inicio, $cat_boletos_info_prepago[$i]["concepto"]);
                $worksheet2->setCellValue("CA" . $fila_inicio, $cat_boletos_info_prepago[$i]["estatus"]);
                $worksheet1->setCellValue("DC" . $fila_inicio, $cat_boletos_info_prepago[$i]["concepto"]);
                $fila_inicio++;
            }
        } catch (Exception $e) {
            return respuesta_json(['success' => FALSE, 'msg' => $e->getTraceAsString()]);
        } finally {
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $filepath = APPPATH . '..' . DIRECTORY_SEPARATOR . 'sources' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'layout_nuevo.xlsx';
            // ini_set('display_errors', 1);
            // ini_set('display_startup_errors', 1);
            // error_reporting(E_ALL);
            // exec("chmod 777 $filepath");
            $writer->save($filepath);
            $path = base_url('sources' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'layout_nuevo.xlsx');
            return respuesta_json(['success' => TRUE, 'file' => 'layout_nuevo.xlsx', 'path' => $path, 'filepath' => $filepath]);
        }
    }

    public function eliminarLay_tmp()
    {
        $path = $this->input->post('path');
        unlink($path);
    }

    public function importLayout($archivo, $nombre_archivo, $estacionamiento, $fechaIngreso, $maxID)
    {
        $fechaIngreso = (isset($fechaIngreso) ? $fechaIngreso : date('Y-m-d'));

        $arr_file = explode('.', $nombre_archivo);
        $extension = end($arr_file);
        if ('xls' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        ob_start();

        try {
            $reader->setReadDataOnly(true);
            $reader->setReadEmptyCells(false);

            $spreadsheet = $reader->load($archivo);
            $sheetData = $spreadsheet->setActiveSheetIndex(1)->toArray(null, true, true, true);
            $total_registros = sizeof($sheetData);

            ///////////////////////////// BOLETOS FISICOS /////////////////////////////
            $insertFisicos = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila

                if ($sheetData[$fila]["A"] !== "ERROR" && $sheetData[$fila]["A"] !== "FALSO" && $sheetData[$fila]["A"] !== "" && $sheetData[$fila]["A"] !== NULL) {
                    // if ((int)$sheetData[$fila]["C"] != 0 || (int)$sheetData[$fila]["D"] != 0 || (int)$sheetData[$fila]["E"] != 0) {
                    $insertFisicos[] = array(
                        "id_cat_expedidos" => (int)$sheetData[$fila]["A"],
                        // "entrada" => $sheetData[$fila]["B"],
                        "apertura" => (int)$sheetData[$fila]["C"],
                        "cierre" => (int)$sheetData[$fila]["D"],
                        "total" => (int)$sheetData[$fila]["E"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_fisicos", $insertFisicos);

            ///////////////////////////// BOLETOS EXPEDIDOS /////////////////////////////
            $insertExpedidos = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila

                if ($sheetData[$fila]["G"] !== "ERROR" && $sheetData[$fila]["G"] !== "FALSO" && $sheetData[$fila]["G"] !== "" && $sheetData[$fila]["G"] !== NULL) {
                    // if ((int)$sheetData[$fila]["I"] != 0 || (int)$sheetData[$fila]["J"] != 0 || (int)$sheetData[$fila]["K"] != 0 || (int)$sheetData[$fila]["L"] != 0 || (int)$sheetData[$fila]["M"] != 0) {
                    $insertExpedidos[] = array(
                        "id_cat_expedidos" => (int)$sheetData[$fila]["G"],
                        // "entrada" => $sheetData[$fila]["H"],
                        "apertura" => (int)$sheetData[$fila]["I"],
                        "cierre" => (int)$sheetData[$fila]["J"],
                        "expedido_sistema" => (int)$sheetData[$fila]["K"],
                        "folios_brincados" => (int)$sheetData[$fila]["L"],
                        "expedido_real" => (int)$sheetData[$fila]["M"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_expedidos", $insertExpedidos);

            ///////////////////////////// BOLETOS COBRADOS /////////////////////////////
            $insertCobrados = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["O"] !== "ERROR" && $sheetData[$fila]["O"] !== "FALSO" && $sheetData[$fila]["O"] !== ""  && $sheetData[$fila]["O"] !== NULL) {
                    // if ((int)$sheetData[$fila]["R"] != 0 || (int)$sheetData[$fila]["R"] !== "") {
                    $insertCobrados[] = array(
                        "id_cat_cobrados" => (int)$sheetData[$fila]["O"],
                        // "concepto" => $sheetData[$fila]["P"],
                        "cantidad" => (int)$sheetData[$fila]["Q"],
                        "id_cat_tarifa_cobrados" => (int)$sheetData[$fila]["R"],
                        // "tarifa" => (int)$sheetData[$fila]["S"],
                        "importe" => (int)$sheetData[$fila]["T"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            // $this->mPanel->guardarLayot("boletos_cobrados", $insertCobrados);

            ///////////////////////////// VALES DESCUENTO /////////////////////////////
            $insertValesDescuento = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["V"] !== "ERROR" && $sheetData[$fila]["V"] !== "FALSO" && $sheetData[$fila]["V"] !== "" && $sheetData[$fila]["V"] !== NULL) {
                    // if ((int)$sheetData[$fila]["X"] > 0 || (int)$sheetData[$fila]["Y"] > 0) {
                    $insertValesDescuento[] = array(
                        "id_cat_vales_descuento" => (int)$sheetData[$fila]["V"],
                        // "concepto" => $sheetData[$fila]["W"],
                        "creacion" => (int)$sheetData[$fila]['X'],
                        "recuperacion" => (int)$sheetData[$fila]['Y'],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_vales_descuento", $insertValesDescuento);

            ///////////////////////////// TARIFAS ESPECIALES /////////////////////////////
            $insertTarifasEspeciales = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["AA"] !== "ERROR" && $sheetData[$fila]["AA"] !== "FALSO" && $sheetData[$fila]["AA"] !== "" && $sheetData[$fila]["AA"] !== NULL) {
                    // if ((int)$sheetData[$fila]["AD"] > 0) {
                    $insertTarifasEspeciales[] = array(
                        "id_cat_tarifas_especiales" => (int)$sheetData[$fila]["AA"],
                        // "concepto" => $sheetData[$fila]["AB"],
                        "cantidad" => (int)$sheetData[$fila]['AC'],
                        "id_cat_tarifa_tarifas_especiales" => (int)$sheetData[$fila]['AD'],
                        // "tarifa" => (int)$sheetData[$fila]['AE'],
                        "importe" => (int)$sheetData[$fila]['AF'],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            // $this->mPanel->guardarLayot("boletos_tarifas_especiales", $insertTarifasEspeciales);

            ///////////////////////////// BOLETOS VALET /////////////////////////////
            $insertBoletosValet = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["AH"] !== "" && $sheetData[$fila]["AH"] != NULL) {
                    $insertBoletosValet[] = array(
                        "cantidad" => (int)$sheetData[$fila]["AH"],
                        "inicio" => (int)$sheetData[$fila]["AI"],
                        "fin" => (int)$sheetData[$fila]['AJ'],
                        "concepto" => strtoupper($sheetData[$fila]['AK']),
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                }
            }
            $this->mPanel->guardarLayot("boletos_valet", $insertBoletosValet);

            ///////////////////////////// BOLETO PERDIDO VALET /////////////////////////////
            $insertBoletoPerdido = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["AM"] !== "" && $sheetData[$fila]["AM"] != NULL) {
                    $insertBoletoPerdido[] = array(
                        "cantidad" => (int)$sheetData[$fila]["AM"],
                        "costo" => (int)$sheetData[$fila]["AN"],
                        "total" => (int)$sheetData[$fila]['AO'],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                }
            }
            $this->mPanel->guardarLayot("boleto_perdido_valet", $insertBoletoPerdido);

            ///////////////////////////// RECOBROS /////////////////////////////
            $insertRecobros = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["AQ"] !== "ERROR" && $sheetData[$fila]["AQ"] !== "FALSO" && $sheetData[$fila]["AQ"] !== ""  && $sheetData[$fila]["AQ"] !== NULL) {
                    // if ((int)$sheetData[$fila]["AT"] > 0) {
                    $insertRecobros[] = array(
                        "id_cat_recobros" => (int)$sheetData[$fila]["AQ"],
                        // "concepto" => $sheetData[$fila]["AR"],
                        "cantidad" => (int)$sheetData[$fila]['AS'],
                        "id_cat_tarifa_recobros" => (int)$sheetData[$fila]['AT'],
                        // "tarifa" => $sheetData[$fila]['AU'],
                        "importe" => (int)$sheetData[$fila]['AV'],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            // $this->mPanel->guardarLayot("boletos_recobros", $insertRecobros);

            ///////////////////////////// VALES A RETORNAR(OTROS COBROS) /////////////////////////////
            $insertValesRetornar = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["AX"] !== "ERROR" && $sheetData[$fila]["AX"] !== "FALSO" && $sheetData[$fila]["AX"] !== "" && $sheetData[$fila]["AX"] !== NULL) {
                    // if ((int)$sheetData[$fila]["AZ"] != 0 || (int)$sheetData[$fila]["BA"] != 0) {
                    $insertValesRetornar[] = array(
                        "id_cat_vales_retornar" => (int)$sheetData[$fila]["AX"],
                        // "concepto" => $sheetData[$fila]["AY"],
                        "cantidad" => (int)$sheetData[$fila]["AZ"],
                        "importe" => (int)$sheetData[$fila]['BA'],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            // $this->mPanel->guardarLayot("boletos_vales_retornar", $insertValesRetornar);

            ///////////////////////////// PENSIONES /////////////////////////////
            $insertPensiones = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["BC"] !== "ERROR" && $sheetData[$fila]["BC"] !== "FALSO" && $sheetData[$fila]["BC"] !== "" && $sheetData[$fila]["BC"] !== NULL) {
                    // if ((int)$sheetData[$fila]["BF"] > 0) {
                    $insertPensiones[] = array(
                        "id_cat_pensiones" => (int)$sheetData[$fila]["BC"],
                        // "concepto" => $sheetData[$fila]["BD"],
                        "cantidad" => (int)$sheetData[$fila]["BE"],
                        "id_cat_tarifa_pensiones" => (int)$sheetData[$fila]['BF'],
                        // "tarifa" => (int)$sheetData[$fila]['BG'],
                        "importe" => $sheetData[$fila]['BH'],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            // $this->mPanel->guardarLayot("boletos_pensiones", $insertPensiones);

            ///////////////////////////// BOLETOS SIN COBRO ROTACIÓN /////////////////////////////
            $insertBoletosSincobro = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["BJ"] !== "ERROR" && $sheetData[$fila]["BJ"] !== "FALSO" && $sheetData[$fila]["BJ"] !== "" && $sheetData[$fila]["BJ"] !== NULL) {
                    // if ((int)$sheetData[$fila]["BL"] > 0 || (int)$sheetData[$fila]["BM"] > 0) {
                    $insertBoletosSincobro[] = array(
                        "id_cat_boletos_sin_cobro" => (int)$sheetData[$fila]["BJ"],
                        // "concepto" => $sheetData[$fila]["BK"],
                        "cantidad" => (int)$sheetData[$fila]["BL"],
                        "total" => (int)$sheetData[$fila]["BM"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_sin_cobro", $insertBoletosSincobro);

            ///////////////////////////// VALIDACIONES /////////////////////////////
            $insertValidaciones = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["BO"] !== "ERROR" && $sheetData[$fila]["BO"] !== "FALSO" && $sheetData[$fila]["BO"] !== "" && $sheetData[$fila]["BO"] !== NULL) {
                    // if ((int)$sheetData[$fila]["BQ"] > 0 || (int)$sheetData[$fila]["BR"] > 0) {
                    $insertValidaciones[] = array(
                        "id_cat_validaciones" => (int)$sheetData[$fila]["BO"],
                        // "concepto" => $sheetData[$fila]["BP"],
                        "cantidad" => (int)$sheetData[$fila]["BQ"],
                        "total" => (int)$sheetData[$fila]["BR"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_validaciones", $insertValidaciones);

            ///////////////////////////// INFORMATIVO /////////////////////////////
            $insertInformativo = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ((string)$sheetData[$fila]["BT"] !== "" && (string)$sheetData[$fila]["BT"] != NULL) {
                    // if ((int)$sheetData[$fila]["BU"] > 0 || (int)$sheetData[$fila]["BV"] > 0) {
                    $insertInformativo[] = array(
                        "concepto" => (string)strtoupper($sheetData[$fila]["BT"]),
                        "cantidad" => (int)$sheetData[$fila]["BU"],
                        "tarifa" => (int)$sheetData[$fila]["BV"],
                        "total" => (int)$sheetData[$fila]["BW"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_informativo", $insertInformativo);

            ///////////////////////////// BOLETOS PERDIDOS /////////////////////////////
            $insertPerdidos = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["BY"] !== "ERROR" && $sheetData[$fila]["BY"] !== "FALSO" && $sheetData[$fila]["BY"] !== "" && $sheetData[$fila]["BY"] !== NULL) {
                    // if ((int)$sheetData[$fila]["CA"] != 0 && (int)$sheetData[$fila]["CA"] !== "") {
                    $insertPerdidos[] = array(
                        "id_cat_perdido" => (int)$sheetData[$fila]["BY"],
                        // "concepto" => $sheetData[$fila]["BZ"],
                        "cantidad" => (int)$sheetData[$fila]["CA"],
                        "id_cat_tarifa_perdido" => (int)$sheetData[$fila]["CB"],
                        // "tarifa" => (int)$sheetData[$fila]["CC"],
                        "importe" => (int)$sheetData[$fila]["CD"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            // $this->mPanel->guardarLayot("boletos_perdidos", $insertPerdidos);

            ///////////////////////////// BOLETOS PREPAGO /////////////////////////////
            $insertPrepago = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["CF"] !== "ERROR" && $sheetData[$fila]["CF"] !== "FALSO" && $sheetData[$fila]["CF"] !== "" && $sheetData[$fila]["CF"] !== NULL) {
                    // if ((int)$sheetData[$fila]["CH"] != 0 && (int)$sheetData[$fila]["CH"] !== "") {
                    $insertPrepago[] = array(
                        "id_cat_prepago" => (int)$sheetData[$fila]["CF"],
                        // "concepto" => $sheetData[$fila]["CG"],
                        "cantidad" => (int)$sheetData[$fila]["CH"],
                        "id_cat_tarifa_prepago" => (int)$sheetData[$fila]["CI"],
                        // "tarifa" => (int)$sheetData[$fila]["CJ"],
                        "importe" => (int)$sheetData[$fila]["CK"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_prepago", $insertPrepago);

            ///////////////////////////// OTROS /////////////////////////////
            $insertOtros = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["CM"] !== "" && $sheetData[$fila]["CM"] != NULL) {
                    // if ((int)$sheetData[$fila]["CM"] > 0 ||(int)$sheetData[$fila]["CN"] > 0 || (int)$sheetData[$fila]["CO"] > 0) {
                    $insertOtros[] = array(
                        "concepto" => strtoupper($sheetData[$fila]["CM"]),
                        "cantidad" => (int)$sheetData[$fila]["CN"],
                        "importe" => (int)$sheetData[$fila]["COCN"],
                        "total" => (int)$sheetData[$fila]["CP"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_otros", $insertOtros);

            ///////////////////////////// BOLETOS DE OPERACIÓN /////////////////////////////
            $insertBoletosOperacion = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["CR"] !== "ERROR" && $sheetData[$fila]["CR"] !== "FALSO" && $sheetData[$fila]["CR"] !== "" && $sheetData[$fila]["CR"] !== NULL) {
                    // if ((int)$sheetData[$fila]["CX"] > 0 || (int)$sheetData[$fila]["CY"] > 0) {
                    $insertBoletosOperacion[] = array(
                        "id_cat_boletos_operacion" => (int)$sheetData[$fila]["CR"],
                        // "concepto" => $sheetData[$fila]["CS"],
                        "cantidad" => (int)$sheetData[$fila]["CT"],
                        "total" => (int)$sheetData[$fila]["CU"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_operacion", $insertBoletosOperacion);

            ///////////////////////////// BOLETOS CREACIÓN DE VOUCHERS /////////////////////////////
            $insertCreacionVouchers = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["CW"] !== "ERROR" && $sheetData[$fila]["CW"] !== "FALSO" && $sheetData[$fila]["CW"] !== "" && $sheetData[$fila]["CW"] !== NULL) {
                    // if ((int)$sheetData[$fila]["CX"] > 0 || (int)$sheetData[$fila]["CY"] > 0) {
                    $insertCreacionVouchers[] = array(
                        "id_cat_voucher" => (int)$sheetData[$fila]["CW"],
                        // "concepto" => $sheetData[$fila]["CX"],
                        "entregados" => (int)$sheetData[$fila]["CY"],
                        "recuperados" => (int)$sheetData[$fila]["CZ"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_vouchers", $insertCreacionVouchers);

            ///////////////////////////// BOLETOS INFORMATIVO PREPAGO /////////////////////////////
            $insertInfoPrepago = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["DB"] !== "ERROR" && $sheetData[$fila]["DB"] !== "FALSO" && $sheetData[$fila]["DB"] !== "" && $sheetData[$fila]["DB"] !== NULL) {
                    // if ((int)$sheetData[$fila]["CX"] > 0 || (int)$sheetData[$fila]["CY"] > 0) {
                    $insertInfoPrepago[] = array(
                        "id_cat_info_prepago" => (int)$sheetData[$fila]["DB"],
                        // "concepto" => $sheetData[$fila]["DC"],
                        "entregados" => (int)$sheetData[$fila]["DD"],
                        "recuperados" => (int)$sheetData[$fila]["DE"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_info_prepago", $insertInfoPrepago);

            ///////////////////////////// INFORMATIVO OTROS MEDIOS DE PAGO /////////////////////////////
            $insertInfoOtrosMedios = array();
            for ($fila = 5; $fila < $total_registros; $fila++) { //fila
                if ((string)$sheetData[$fila]["DG"] !== "" && (string)$sheetData[$fila]["DG"] != NULL) {
                    $insertInfoOtrosMedios[] = array(
                        "concepto" => (string)strtoupper($sheetData[$fila]["DG"]),
                        "cantidad" => (int)$sheetData[$fila]["DH"],
                        "tarifa" => (int)$sheetData[$fila]["DI"],
                        "total" => (int)$sheetData[$fila]["DJ"],
                        "estacionamiento_id" => $estacionamiento,
                        "fechaIngreso" => $fechaIngreso,
                        "creado_por" => $this->session->userdata('id_usuario'),
                        "partida_id" => $maxID
                    );
                    // }
                }
            }
            $this->mPanel->guardarLayot("boletos_otros_medios", $insertInfoOtrosMedios);

            ///////////////////////////// OBSERVACIONES /////////////////////////////
            $insertObservaciones = array();
            $insertObservaciones[] = array(
                "obs_operativo" => $this->input->post('obs_operativo'),
                "obs_admin" => $this->input->post('obs_admin'),
                "obs_incidencias" => $this->input->post('obs_incidencias'),
                "estacionamiento_id" => $estacionamiento,
                "fechaIngreso" => $fechaIngreso,
                "creado_por" => $this->session->userdata('id_usuario'),
                "partida_id" => $maxID
            );
            $this->mPanel->guardarLayot("boletos_observaciones", $insertObservaciones);

            $result['validacion'] = true;
            $result['icon'] = 'success';
            $result['mensaje'] = "Se importo con éxito";
            return $result;
        } catch (Exception $e) {
            // echo "Excepción capturada: ",  $e->getMessage(), "\n";
            ob_end_clean();
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: " .  $e->getMessage();
            return $result;
        }
    }

    public function extraerDetalle()
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

        if ($date === 'dia') {
            $finicio = $fecha;
            $ffin = $fecha;
        } else if ($date === 'semana') {
            $fecha = str_replace("-", "", $fecha); // "2023W12"
            $finicio = date("Y-m-d", strtotime($fecha . "1"));
            $ffin = date("Y-m-d", strtotime($fecha . "7"));
        } else {
            $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fecha)));
            $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fecha)));
        }

        $estacionamiento = ($parking !== "" ? $parking : $this->session->userdata('id_estacionamiento'));

        $this->mReportes->cargar_fechas($finicio, $ffin);

        $result = $this->mPanel->extraerDetalle($estacionamiento, $finicio, $ffin);
        return respuesta_json($result);
    }

    public function verCedula()
    {
        $data = $this->mPanel->imprimirCedula(1);
        $this->load->view('panel/ventapdf', $data);
    }

    //public function imprimirCedula($id) //CÓDIGO ANTERIOR
    public function imprimirCedula($fechaIngreso, $estacionamiento_id)
    {
        //por ahora solo cedula diaria
        $finicio = $fechaIngreso;
        $ffin = $fechaIngreso;
        try {
            //$data = $this->mPanel->imprimirCedula($id); //CÓDIGO ANTERIOR

            $this->mReportes->cargar_fechas($finicio, $ffin);

            $data = $this->mPanel->imprimirCedula($estacionamiento_id, $finicio, $ffin);

            //$html = $this->load->view('panel/ventapdf', $data, true); //CÓDIGO ANTERIOR
            if($estacionamiento_id == 20) { // Samara
                $html = $this->load->view('panel/cedula/template1', $data, true);
            } else if($estacionamiento_id == 44) { // Alaia
                $html = $this->load->view('panel/cedula/template4', $data, true);
            } else if($estacionamiento_id == 37) { // Cuemanco
                $html = $this->load->view('panel/cedula/template5', $data, true);
            } else if($estacionamiento_id == 9) { // Isla2
                $html = $this->load->view('panel/cedula/template3', $data, true);
            } else if($estacionamiento_id == 45) { // Cumbres
                $html = $this->load->view('panel/cedula/template6', $data, true);
            } else {// Monterrey y Resto
                $html = $this->load->view('panel/cedula/template2', $data, true);
            }

            // Nombre del pdf
            $filename = "cedula.pdf";

            // Opciones para prevenir errores con carga de imágenes
            $options = new Options();
            $options->set(array('isRemoteEnabled' => true));

            // Instancia de la clase
            $dompdf = new Dompdf($options);

            // Cargar el contenido HTML
            $dompdf->loadHtml($html);

            // Formato y tamaño del PDF
            $dompdf->setPaper('A4', 'landscape');

            ob_get_clean();
            // Renderizar HTML como PDF
            $dompdf->render();

            // Salida para descargar
            $dompdf->stream($filename, array('Attachment' => 0));
            exit(0);
        } catch (Exception $e) {
            log_message('error: ', $e->getMessage());
            return;
        } catch (DomException $e) {
            log_message('error: ', $e->getMessage());
            return;
        }
    }

    public function imprimirCedulaMes($fechaIngreso, $estacionamiento_id)
    {
        $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fechaIngreso)));
        $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fechaIngreso)));

        try {

            $this->mReportes->cargar_fechas($finicio, $ffin);
            $data = $this->mPanel->imprimirCedulaMes($estacionamiento_id, $finicio, $ffin);

            if($estacionamiento_id == 20) { // Samara
                $html = $this->load->view('panel/cedula/template1', $data, true);
            } else if($estacionamiento_id == 44) { // Alaia
                $html = $this->load->view('panel/cedula/template4', $data, true);
            } else if($estacionamiento_id == 37) { // Cuemanco
                $html = $this->load->view('panel/cedula/template5', $data, true);
            } else if($estacionamiento_id == 9) { // Isla2
                $html = $this->load->view('panel/cedula/template3', $data, true);
            } else if($estacionamiento_id == 45) { // Cumbres
                $html = $this->load->view('panel/cedula/template6', $data, true);
            } else {// Monterrey y Resto
                $html = $this->load->view('panel/cedula/template2', $data, true);
            }

            // Nombre del pdf
            $filename = "cedulaMes.pdf";

            // Opciones para prevenir errores con carga de imágenes
            $options = new Options();
            $options->set(array('isRemoteEnabled' => true));

            // Instancia de la clase
            $dompdf = new Dompdf($options);

            // Cargar el contenido HTML
            $dompdf->loadHtml($html);

            // Formato y tamaño del PDF
            $dompdf->setPaper('A4', 'landscape');

            ob_get_clean();
            // Renderizar HTML como PDF
            $dompdf->render();

            // Salida para descargar
            $dompdf->stream($filename, array('Attachment' => 0));
            exit(0);
        } catch (Exception $e) {
            log_message('error: ', $e->getMessage());
            return;
        } catch (DomException $e) {
            log_message('error: ', $e->getMessage());
            return;
        }
    }

    public function imprimirCedulaSemana($fechaIngreso, $estacionamiento_id)
    {
        // Fecha en formato "2023-W09"
        $weekString = $fechaIngreso;

        // Obtener el año y el número de semana
        list($year, $weekNumber) = sscanf($weekString, "%d-W%d");

        // Crear el objeto de fecha para el primer día de la semana (lunes)
        $startDate = new DateTime();
        $startDate->setISODate($year, $weekNumber, 1);

        // Crear el objeto de fecha para el último día de la semana (domingo)
        $endDate = new DateTime();
        $endDate->setISODate($year, $weekNumber, 7);

        // Formatear las fechas según sea necesario
        $finicio = $startDate->format("Y-m-d");
        $ffin = $endDate->format("Y-m-d");

        // Crear el texto "SEMANA XX"
        $weekText = "SEMANA " . str_pad($weekNumber, 2, "0", STR_PAD_LEFT);

        try {

            $this->mReportes->cargar_fechas($finicio, $ffin);
            $data = $this->mPanel->imprimirCedulaMes($estacionamiento_id, $finicio, $ffin);
            $data['data'][0]['numeroSemana'] = $weekText;
            $data['data'][0]['finicio'] = $finicio;
            $data['data'][0]['ffin'] = $ffin;
            // var_dump($data);die;
            if($estacionamiento_id == 20) { // Samara
                $html = $this->load->view('panel/cedula/template1', $data, true);
            } else if($estacionamiento_id == 44) { // Alaia
                $html = $this->load->view('panel/cedula/template4', $data, true);
            } else if($estacionamiento_id == 37) { // Cuemanco
                $html = $this->load->view('panel/cedula/template5', $data, true);
            } else if($estacionamiento_id == 9) { // Isla2
                $html = $this->load->view('panel/cedula/template3', $data, true);
            } else if($estacionamiento_id == 45) { // Cumbres
                $html = $this->load->view('panel/cedula/template6', $data, true);
            } else {// Monterrey y Resto
                $html = $this->load->view('panel/cedula/template2', $data, true);
            }

            // Nombre del pdf
            $filename = "cedulaSemana.pdf";

            // Opciones para prevenir errores con carga de imágenes
            $options = new Options();
            $options->set(array('isRemoteEnabled' => true));

            // Instancia de la clase
            $dompdf = new Dompdf($options);

            // Cargar el contenido HTML
            $dompdf->loadHtml($html);

            // Formato y tamaño del PDF
            $dompdf->setPaper('A4', 'landscape');

            ob_get_clean();
            // Renderizar HTML como PDF
            $dompdf->render();

            // Salida para descargar
            $dompdf->stream($filename, array('Attachment' => 0));
            exit(0);
        } catch (Exception $e) {
            log_message('error: ', $e->getMessage());
            return;
        } catch (DomException $e) {
            log_message('error: ', $e->getMessage());
            return;
        }
    }

    public function subirCedula()
    {
        $partida_id = $this->input->post('partida_id');
        $observaciones = $this->input->post('obsAuditor');
        try {
            $result = array();
            $tmp_name = $_FILES['file2']['name'];
            $la_extension  = explode('.', $tmp_name);
            $ls_extension = strtolower(end($la_extension));
            if ($ls_extension == 'pdf') {
                $estacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamiento'));
                $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/cedula/".$partida_id;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }
                $rutaDestino =  $rutaDestino."/";
                // chmod($rutaDestino, 0775);
                $nombre_archivo = $estacionamiento . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                // var_dump($nombre_archivo);
                if (move_uploaded_file($_FILES['file2']['tmp_name'], $rutaDestino . $nombre_archivo)) {
                    $result = $this->mPanel->guardarCedula($partida_id, $nombre_archivo, $observaciones);
                    return respuesta_json($result);
                } else {
                    $result['validacion'] = false;
                    $result['icon'] = 'error';
                    $result['mensaje'] = "Ocurrió algún error al subir el archivo. No pudo guardarse.";
                    return respuesta_json($result);
                }
            } else {
                $result['validacion'] = false;
                $result['icon'] = 'error';
                $result['mensaje'] = "El archivo que intenta subir no es válido. Favor de verificar.";
                return respuesta_json($result);
            }
        } catch (Exception $e) {
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: " .  $e->getMessage();
            return respuesta_json($result);
        }
    }

    public function subirComprobanteIngresos()
    {
        $partida_id = $this->input->post('partida_idC');
        $tipoComprobante = 'comprobante_ingresos';
    
        try {
            $result = array();
            $tmp_name = $_FILES['file3']['name'];
            $la_extension  = explode('.',$tmp_name);
            $ls_extension = strtolower(end($la_extension ));
    
            if($ls_extension == 'pdf'){
                $rutaDestino = __DIR__ . "/../../../eliparkDocs/comprobantes/".$tipoComprobante."/".$partida_id;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }
                $rutaDestino =  $rutaDestino."/";
                // chmod($rutaDestino, 0775);
                $nEstacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamientoC'));
                $nombre_archivo = $nEstacionamiento . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                if (move_uploaded_file($_FILES['file3']['tmp_name'], $rutaDestino . $nombre_archivo)){
                    $result = $this->mPanel->subirComprobantePDF($partida_id, $nombre_archivo, $tipoComprobante);
                    return respuesta_json($result);
                }else{
                    $result['validacion'] = false;
                    $result['icon'] = 'error';
                    $result['mensaje'] = "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                    return respuesta_json($result);
                }
            }else{
                $result['validacion'] = false;
                $result['icon'] = 'error';
                $result['mensaje'] = "El archivo que intenta subir no es válido. Favor de verificar.";
                return respuesta_json($result);
            }   
        } catch (Exception $e) {
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: ".  $e->getMessage();
            return respuesta_json($result);
        }
    }

    public function subirComprobantePensiones()
    {
        $partida_id = $this->input->post('partida_idP');
        $tipoComprobante = 'comprobante_pensiones';
    
        try {
            $result = array();
            $tmp_name = $_FILES['file4']['name'];
            $la_extension  = explode('.',$tmp_name);
            $ls_extension = strtolower(end($la_extension ));
    
            if($ls_extension == 'pdf'){
                $rutaDestino = __DIR__ . "/../../../eliparkDocs/comprobantes/".$tipoComprobante."/".$partida_id;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }
                $rutaDestino =  $rutaDestino."/";
                // chmod($rutaDestino, 0775);
                $nEstacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamientoP'));
                $nombre_archivo = $nEstacionamiento . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                if (move_uploaded_file($_FILES['file4']['tmp_name'], $rutaDestino . $nombre_archivo)){
                    $result = $this->mPanel->subirComprobantePDF($partida_id, $nombre_archivo, $tipoComprobante);
                    return respuesta_json($result);
                }else{
                    $result['validacion'] = false;
                    $result['icon'] = 'error';
                    $result['mensaje'] = "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                    return respuesta_json($result);
                }
            }else{
                $result['validacion'] = false;
                $result['icon'] = 'error';
                $result['mensaje'] = "El archivo que intenta subir no es válido. Favor de verificar.";
                return respuesta_json($result);
            }   
        } catch (Exception $e) {
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: ".  $e->getMessage();
            return respuesta_json($result);
        }
    }

    public function detalle($partida_id)
    {
        $this->load->view('templates/header');
        $data["partida_id"] = $partida_id;
        // var_dump($data);
        $this->load->view('panel/detalle', $data);
    }

    public function importDetalleCajeros()
    {
        // ini_set('memory_limit', '-1');
        $nombre_archivo = $_FILES['file']['name'];
        $fechaIngreso = $this->input->post('fechaIngreso');
        $fechaIngreso = (isset($fechaIngreso) ? $fechaIngreso : date('Y-m-d', strtotime('-1 day', strtotime('today'))));
        

        $estacionamiento = $this->input->post('estacionamiento2');
        $estacionamiento = (int)(isset($estacionamiento) ? $estacionamiento : $this->session->userdata('id_estacionamiento'));
        // var_dump($fechaIngreso,$estacionamiento);die;

        try {
            $la_extension = explode('.', $nombre_archivo);
            $ls_extension = strtolower(end($la_extension));
            if ($ls_extension === 'xlsx' || $ls_extension === 'xls') {
                $this->load->library('upload');

                $config['allowed_types'] = 'xls|xlsx';
                $config['max_size'] = '15360';
                $this->upload->initialize($config);

                $arr_file = explode('.', $nombre_archivo);
                $extension = end($arr_file);
                if ('xls' == $extension) {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                }

                $reader->setReadDataOnly(true);
                $reader->setReadEmptyCells(false);
                $archivo = $_FILES['file']['tmp_name'];
                $spreadsheet = $reader->load($archivo);

                // Obtener la hoja activa
                $worksheet = $spreadsheet->setActiveSheetIndex(0);
                // $worksheet->unprotectSheet('s33g2rc4');

                // Obtener la cantidad de filas con datos
                $rowCount = $worksheet->getHighestRow();

                // Obtener la cantidad de columnas con datos
                $columnCount = $worksheet->getHighestColumn();
                $lastColumn = Coordinate::columnIndexFromString($columnCount);
                $blockSize = 4;
                $rowCount = $worksheet->getHighestDataRow();
                $data = array();
                $maxID = (int)$this->mPanel->maxID();

                for ($col = 1; $col <= $lastColumn; $col += $blockSize) {
                    for ($row = 4; $row <= $rowCount; $row++) {
                        $block = array();
                        $block[] = $worksheet->getCellByColumnAndRow($col + 0, 1)->getCalculatedValue();
                        for ($i = 0; $i < $blockSize && $col + $i <= $lastColumn; $i++) {
                            $cell = $worksheet->getCellByColumnAndRow($col + $i, $row);
                            $cellValue = $cell->getCalculatedValue();

                            // Omitir celdas vacias
                            if ($cellValue !== "") {
                                if ($cellValue instanceof \PhpOffice\PhpSpreadsheet\RichText\RichText) {
                                    $cellValue = $cellValue->getPlainText();
                                }
                                $cellValue = $cellValue != '' ? $cellValue : 0;
                                $block[] = $cellValue;
                            }
                        }
                        $data[$col][$row] = $block;
                    }
                    $col++;
                }

                // IMPORTAR PRIMERA PESTAÑA DEL EXCEL
                $res1 = $this->mPanel->importDetalleCajeros("detalle_cajeros", $data, $fechaIngreso, $estacionamiento, $maxID);
                if ($res1["validacion"]) {
                    // INSERTAR TARIFAS
                    $res2 = $this->mPanel->importTarifas($estacionamiento, $maxID);
                    if ($res2["validacion"]) {
                        // COPIAR CONCEPTOS A TABLAS
                        $res3 = $this->mPanel->copiarCajeros($maxID, $estacionamiento);
                        if ($res3["validacion"]) {
                            // // IMPORTAR SEGUNDA PESTAÑA DEL EXCEL
                            $res4 = $this->importLayout($archivo, $nombre_archivo, $estacionamiento, $fechaIngreso, $maxID);
                            if($res4["validacion"]){
                                $arr_file = explode('.', $nombre_archivo);
                                $extension = end($arr_file);
                                $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/layout/".$maxID;                                                
                                if (!file_exists($rutaDestino)) {
                                    mkdir($rutaDestino, 0777, true);
                                }
                                $rutaDestino =  $rutaDestino."/";
                                $nEstacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamiento'));
                                $nombre_archivo = $nEstacionamiento . "_" . date('Y-m-d') . "_" . date('His').".".$extension;
                                if (move_uploaded_file($_FILES['file']['tmp_name'], $rutaDestino . $nombre_archivo)) {
                                    $result = $this->mPanel->guardarLayout($maxID, $nombre_archivo, $estacionamiento);
                                    return respuesta_json($result);
                                } else {
                                    $result['validacion'] = false;
                                    $result['icon'] = 'error';
                                    $result['mensaje'] = "Ocurrió algún error al subir el archivo. No pudo guardarse.";
                                    return respuesta_json($result);
                                }
                            }else{
                                $res4['validacion'] = false;
                                $res4['icon'] = 'error';
                                $res4['mensaje'] = "Error al cargar el archivo excel";
                                return respuesta_json($res4);
                            }

                        }else{
                            $res3['validacion'] = false;
                            $res3['icon'] = 'error';
                            $res3['mensaje'] = "Error en copiar cajeros";
                            return respuesta_json($res3);
                        }
                    } else {
                        $res2['validacion'] = false;
                        $res2['icon'] = 'error';
                        $res2['mensaje'] = "Error en insertar tarifas";
                        return respuesta_json($res2);
                    }
                } else {
                    return respuesta_json($res1);
                }
            } else {
                $result['validacion'] = false;
                $result['icon'] = 'error';
                $result['mensaje'] = "El archivo que intenta subir no es válido.";
                return respuesta_json($result);
            }
        } catch (Exception $e) {
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = $e->getMessage();
            return respuesta_json($result);
        }
    }

    public function viewFile($carpeta, $partida_id, $ruta) {
        // Datos de conexión FTP
        $ftp_server = 'ftp.skylinetech.com.mx';
        $ftp_username = 'skylinetech@skylinetech.com.mx';
        $ftp_password = 'Skyl1n3-2024@';
    
        // Ruta del archivo en el servidor FTP
        $remote_file = 'eliparkDocs/comprobantes/' . $carpeta . '/' . $partida_id . '/' . $ruta;
    
        // Crear una conexión FTP
        $ftp_conn = ftp_connect($ftp_server);
        ftp_login($ftp_conn, $ftp_username, $ftp_password);
    
        // Archivo temporal para guardar el contenido descargado
        $local_file = tempnam(sys_get_temp_dir(), 'ftp_download_');
    
        // Descargar el archivo desde el servidor FTP al archivo temporal
        if (ftp_get($ftp_conn, $local_file, $remote_file, FTP_BINARY)) {
            // Obtener el tipo MIME del archivo
            $file_extension = pathinfo($ruta, PATHINFO_EXTENSION);
            $mime_type = mime_content_type($file_extension);
    
            // Definir el encabezado para mostrar el archivo en el navegador
            header('Content-type: ' . $mime_type);
            header('Content-Disposition: inline; filename="' . basename($ruta) . '"');
    
            // Leer y mostrar el contenido del archivo y finalizar el script
            readfile($local_file);
            unlink($local_file); // Eliminar el archivo temporal después de la visualización
            exit;
        } else {
            // Manejar el caso de error en la descarga
            echo 'Error al descargar el archivo desde el servidor FTP.';
        }
    
        // Cerrar la conexión FTP
        ftp_close($ftp_conn);
    }

    function quitarAcentosYReemplazarEspacios($str) {
        $acentos = array(
            'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
            'Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U',
            'ñ' => 'n', 'Ñ' => 'N',
        );
    
        // Reemplazar acentos
        $str = strtr($str, $acentos);
    
        // Reemplazar espacios en blanco por guiones
        $str = preg_replace('/\s+/', '-', $str);
    
        return $str;
    }

    public function detalleMes($parametros)
    {
        $parametros = explode("_", $parametros);
        $this->load->view('templates/header');
        $data["fecha"] = $parametros[0];
        $data["estacionamiento"] = $parametros[1];

        $this->load->view('panel/detalleMes', $data);
    }

    public function detalleSemana($parametros)
    {
        $parametros = explode("_", $parametros);
        $this->load->view('templates/header');
        $data["fecha"] = $parametros[0];
        $data["estacionamiento"] = $parametros[1];

        $this->load->view('panel/detalleSemana', $data);
    }
}
