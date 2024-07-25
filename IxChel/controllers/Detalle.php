<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("America/Mexico_City");

class Detalle extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Detalle_model', 'mDetalle', TRUE);
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    // public function getDetalleBoletos(){
    //     $table = array_keys($this->tables, $this->input->post('table'));
    //     var_dump($table);
    //     // $partida_id = $this->input->post('id');
    //     // $table = $this->input->post('table');
    //     // $join = $this->input->post('join');
    //     // $result = $this->mDetalle->getDetalleBoletos($table, $partida_id, $join);
    //     // return respuesta_json($result);
    // }

    public function getBexpedidos()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBexpedidos($partida_id);
        return respuesta_json($result);
    }

    public function getBfisicos()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBfisicos($partida_id);
        return respuesta_json($result);
    }

    public function getBcobrados()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBcobrados($partida_id);
        return respuesta_json($result);
    }

    public function getValesDescuento()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getValesDescuento($partida_id);
        return respuesta_json($result);
    }

    public function getTarifasEspeciales()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getTarifasEspeciales($partida_id);
        return respuesta_json($result);
    }

    public function getBrecobros()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBrecobros($partida_id);
        return respuesta_json($result);
    }

    public function getBvalet()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBvalet($partida_id);
        return respuesta_json($result);
    }

    public function getValesretornar()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getValesretornar($partida_id);
        return respuesta_json($result);
    }

    public function getBpensiones()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBpensiones($partida_id);
        return respuesta_json($result);
    }

    public function getBsinCobro()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBsinCobro($partida_id);
        return respuesta_json($result);
    }

    public function getBoperacion()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBoperacion($partida_id);
        return respuesta_json($result);
    }

    public function getBvouchers()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBvouchers($partida_id);
        return respuesta_json($result);
    }

    public function getBvalidaciones()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBvalidaciones($partida_id);
        return respuesta_json($result);
    }

    public function getBperdidoValet()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBperdidoValet($partida_id);
        return respuesta_json($result);
    }

    public function getBperdidos()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBperdidos($partida_id);
        return respuesta_json($result);
    }

    public function getBprepago()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBprepago($partida_id);
        return respuesta_json($result);
    }

    public function getBinformativo()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBinformativo($partida_id);
        return respuesta_json($result);
    }

    public function getBotros()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBotros($partida_id);
        return respuesta_json($result);
    }

    public function getBinfoPrepago()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBinfoPrepago($partida_id);
        return respuesta_json($result);
    }

    public function getBinfoOtrosMedios()
    {
        $partida_id = $this->input->post('id');
        $result = $this->mDetalle->getBinfoOtrosMedios($partida_id);
        return respuesta_json($result);
    }

    public function getDetalleCajeros()
    {
        $fechaIngreso = $this->input->post('fechaIngreso');
        $estacionamiento = $this->input->post('estacionamiento');
        $result = $this->mDetalle->getDetalleCajeros($fechaIngreso, $estacionamiento);
        return respuesta_json($result);
    }

    public function getObservaciones()
    {
        $partida_id = $this->input->post('partida_id');
        $result = $this->mDetalle->getObservaciones($partida_id);
        return respuesta_json($result);
    }

    public function guardarComentario()
    {
        $partida_id = $this->input->post('partida_id');
        $tipo = $this->input->post('tipo');

        $result = $this->mDetalle->guardarComentario($partida_id, $tipo);
        return respuesta_json($result);
    }

    public function boletoSinCobroPDF()
    {
        $partida_id = $this->input->post('partida_id');
        $id_sincobro = $this->input->post('id_sincobro');
        $estacionamiento = $this->input->post('estacionamiento_id');

        try {
            $result = array();
            $tmp_name = $_FILES['file']['name'];
            $la_extension  = explode('.',$tmp_name);
            $ls_extension = strtolower(end($la_extension ));
            if($ls_extension == 'pdf'){

                $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/boletos_sincobro/".$partida_id;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }
                $rutaDestino =  $rutaDestino."/";
                // chmod($rutaDestino, 0775);
                $nEstacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamiento'));
                $nombre_archivo = $nEstacionamiento . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                if (move_uploaded_file($_FILES['file']['tmp_name'], $rutaDestino . $nombre_archivo)){
                    $result = $this->mDetalle->guardarBoletosinCobroPDF($id_sincobro,$nombre_archivo);
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

    public function boletoOperacionPDF()
    {
        $partida_id = $this->input->post('partida_id');
        $id_operacion = $this->input->post('id_operacion');
        $estacionamiento = $this->input->post('estacionamiento_id');
    
        try {
            $result = array();
            $tmp_name = $_FILES['file']['name'];
            $la_extension  = explode('.',$tmp_name);
            $ls_extension = strtolower(end($la_extension ));
            if($ls_extension == 'pdf'){
    
                $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/boletos_operacion/".$partida_id;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }
                $rutaDestino =  $rutaDestino."/";
                // chmod($rutaDestino, 0775);
                $nEstacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamiento'));
                $nombre_archivo = $nEstacionamiento . "_" . date('Y-m-d') . "_" . date('His').".pdf";                
                if (move_uploaded_file($_FILES['file']['tmp_name'], $rutaDestino . $nombre_archivo)){
                    $result = $this->mDetalle->guardarBoletoOperacionPDF($id_operacion,$nombre_archivo);
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

    public function cargarComprobantePDF()
    {
        $partida_id = $this->input->post('partida_id');
        $tipoComprobante = $this->input->post('tipoComprobante');
        $estacionamiento = $this->input->post('estacionamiento_id');

        try {
            $result = array();
            $tmp_name = $_FILES['file']['name'];
            $la_extension  = explode('.',$tmp_name);
            $ls_extension = strtolower(end($la_extension ));

            if($ls_extension == 'pdf'){
                $rutaDestino = __DIR__ . "/../../../eliparkDocs/comprobantes/".$tipoComprobante."/".$partida_id;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }
                $rutaDestino =  $rutaDestino."/";
                // chmod($rutaDestino, 0775);
                $nEstacionamiento = $this->quitarAcentosYReemplazarEspacios($this->input->post('nEstacionamiento'));
                $nombre_archivo = $nEstacionamiento . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                if (move_uploaded_file($_FILES['file']['tmp_name'], $rutaDestino . $nombre_archivo)){
                    $result = $this->mDetalle->cargarComprobantePDF($partida_id, $nombre_archivo, $tipoComprobante);
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
}