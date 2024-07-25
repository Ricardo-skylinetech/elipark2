<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_model extends CI_Model{

	// protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCatalogos($table,$estacionamiento)
    {
        $this->db->select();
		$this->db->from($table);
        if($this->session->userdata('rol') >= 5){
            $this->db->where(['estacionamiento_id'=>$this->session->userdata('id_estacionamiento'),"estatus"=>1]);
        }else{
            $this->db->where(['estacionamiento_id'=>$estacionamiento,"estatus"=>1]);
        }
		
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }

	public function maxID() {
		$this->db->select('MAX(partida_id) AS maxID');
		$this->db->from("detalle_cajeros");
		$query = $this->db->get();
		$maxID = $query->row()->maxID + 1;
		return $maxID;
	}

	public function guardarLayot($table, $dataToInsert) {
		if (!empty($dataToInsert)) {
			$this->db->trans_start();
			$this->db->insert_batch($table, $dataToInsert);
			$this->db->trans_complete();
			return array('success' => true, 'msg' => 'Se ha importado correctamente.');
		} else {
			return array('success' => false, 'msg' => 'Ha ocurrido un error');
		}
	}

    public function extraerDetalle($estacionamiento, $finicio, $ffin){
        if($estacionamiento == 20) { // Samara
            include 'Calculos/template1.php';
        } else if($estacionamiento == 44) { // Alaia
            include 'Calculos/template4.php';
        } else if($estacionamiento == 37) { // Cuemanco
            include 'Calculos/template5.php';
        } else if($estacionamiento == 9) { // Isla2
            include 'Calculos/template3.php';
         } else if($estacionamiento == 45) { // Cumbres
            include 'Calculos/template6.php';
         } else {// Monterrey y Resto
            include 'Calculos/template2.php';
        }

        $response = array("validacion" => (count($data) > 0 ? true : false), "data" => (count($data) > 0 ? $data : []));
        return $response;
    }

    // public function getDetalleBoletos($table, $partida_id, $join){
    //     $this->db->select();
    //     $this->db->from($this->$table." b");
    //     $this->db->join("$join c", "c.id = b.id_$table",'left');
    //     $this->db->where($table,$partida_id);
        
    //     $result = $this->db->get();
    //     var_dump($this->db->last_query());
    //     $data = $result->result_array('result_array');
    //     $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
    //     return $response;
    // }

    // public function imprimirCedula($id){ // CÓDIGO ANTERIOR
    public function imprimirCedula($estacionamiento, $finicio, $ffin){

        //CÓDIGO ANTERIOR
        // $sql = "CALL sp_imprimirCedula($id)";
		// $result = $this->db->query($sql);
        // setlocale(LC_MONETARY, 'en_US');
        // foreach($result->result_array() as $row)
        //         {
        //             $data[] = array(
		// 				'autos' =>number_format($row['autos']),
        //                 'importe' => "$ " . number_format($row['importe'],2,'.',','),
        //                 'otrosConceptos' => number_format($row['otrosConceptos']),
        //                 'importe2' => "$ " . number_format($row['importe2'],2,'.',','),
        //                 'ticketPerdido' => number_format($row['ticketPerdido']),
        //                 'importe3' => "$ " . number_format($row['importe3'],2,'.',','),
        //                 'subtotal' => "$ " . number_format($row['subtotal'],2,'.',','),
        //                 'renovaciones' => number_format($row['renovaciones']),
        //                 'importePensiones' => "$ " . number_format($row['importePensiones'],2,'.',','),
        //                 'ingresoValet' => number_format($row['ingresoValet']),
        //                 'efectivoRecibido' => "$ " . number_format($row['efectivoRecibido'],2,'.',','),
        //                 "ingresosNetos" => "$ " . number_format($row['ingresosNetos'],2,'.',','),
		// 				"iva" => "$ " . number_format($row['iva'],2,'.',','),
        //                 "totalDepositado" => "$ " . number_format($row['totalDepositado'],2,'.',','),
        //                 "estacionamiento" => $row['estacionamiento'],
        //                 "fechaIngreso" => $row['fechaIngreso']
        //             );
        //         }

        if($estacionamiento == 20) { // Samara
            include 'Calculos/template1.php';
        } else if($estacionamiento == 44) { // Alaia
            include 'Calculos/template4.php';
        } else if($estacionamiento == 37) { // Cuemanco
            include 'Calculos/template5.php';
        } else if($estacionamiento == 9) { // Isla2
            include 'Calculos/template3.php';
        } else if($estacionamiento == 45) { // Cumbres
            include 'Calculos/template6.php';
        } else { // Monterrey y Resto
            include 'Calculos/template2.php';
        }
        // var_dump($estacionamiento,$finicio,$ffin,$data);die;
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    //Calcula cedula del Mes y Semanal
    public function imprimirCedulaMes($estacionamiento, $finicio, $ffin){

        if($estacionamiento == 20) { // Samara
            include 'Calculos/template1.php';
        } else if($estacionamiento == 44) { // Alaia
            include 'Calculos/template4.php';
        } else if($estacionamiento == 37) { // Cuemanco
            include 'Calculos/template5.php';
        } else if($estacionamiento == 9) { // Isla2
            include 'Calculos/template3.php';
        } else if($estacionamiento == 45) { // Cumbres
            include 'Calculos/template6.php';
        } else { // Monterrey y Resto
            include 'Calculos/template2.php';
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

	public function guardarCedula($partida_id,$nombre_archivo,$observaciones) {
        $data = array(
            'ruta' => $nombre_archivo,
            'observaciones' => $observaciones,
            'estacionamiento_id' => $this->session->userdata('id_estacionamiento'),
            'creado_por' => $this->session->userdata('id_usuario'),
            'partida_id' => $partida_id
        );

        if($this->session->userdata('rol') <= 4){
            $data['gerente'] = 1;
        } else {
            $data['auditor'] = 1;
        }

        // Verificar duplicados
        $this->db->where('partida_id', $partida_id);
        $query = $this->db->get('cedula');
        if ($query->num_rows() > 0) {
            $result = $this->db->update('cedula', $data, array('partida_id'=>$partida_id));
        } else {
            $result = $this->db->insert('cedula', $data);
        }

        $response = array("validacion" => ($result > 0 ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}

    public function subirComprobantePDF($partida_id, $nombre_archivo, $tipoComprobante) {
        $data = array(
            'ruta' => $nombre_archivo,
            'tipoComprobante' => $tipoComprobante,
            'partida_id' => $partida_id,
            'creado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->insert('boletos_comprobantes', $data);

        $response = array("validacion" => ($result ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}

    public function importDetalleCajeros($table, $dataToInsert, $fechaIngreso, $estacionamiento, $maxID)
    {
        $this->db->select();
		$this->db->from($table);
        $this->db->where(['estacionamiento_id'=>$estacionamiento,"fechaIngreso"=>$fechaIngreso]);    
        $query = $this->db->get();
        // $result = $query->result_array();
        if($query->num_rows() > 0){
            $response = array("validacion" => false, "icon"=>"error","mensaje"=>"Ya existen datos para este dia");
            return $response;
        }

        if (!empty($dataToInsert)) {

            foreach ($dataToInsert as $column => $rows) {
                foreach ($rows as $row => $values) {
                    if(trim(str_replace(['$', ','], '', $values[4])) != ""){
                        // var_dump(trim(str_replace(['$', ','], '', $values[4])));
                    
                        $insertData[] = array(
                            'nombre_cajero' => $values[0],
                            'concepto' => $values[1],
                            'cantidad' => trim(str_replace(['$', ','], '', $values[2])),
                            'tarifa' => trim(str_replace(['$', ','], '', $values[3])),
                            'importe' => trim(str_replace(['$', ','], '', $values[4])),
                            "estacionamiento_id" => $estacionamiento,
                            "fechaIngreso" => $fechaIngreso,
                            "creado_por" => $this->session->userdata('id_usuario'),
                            "partida_id" => $maxID
                        );
                    }
                }
            }
        
			$this->db->trans_start();
            $this->db->insert_batch($table, $insertData);
			$this->db->trans_complete();
            
            $this->db->from($table);
            $this->db->where('id_cajeros >=', $this->db->insert_id());
            $count_rows = $this->db->count_all_results();

            $response = array("validacion" => ($count_rows > 0 ? true : false), "icon"=>($count_rows > 0 ? "success" : "error"), "mensaje"=>($count_rows > 0 ? "" : "contacta al administrador"));
            return $response;
		} else {
			$response = array("validacion" =>  false, "icon"=>"error","mensaje"=>"Error en la primer pestaña del excel");
            return $response;
		}
    }

    public function importTarifas($estacionamiento, $partida_id)
    {
        $sql = "CALL sp_insertar_tarifas('$estacionamiento','$partida_id')";
        $query = $this->db->query($sql);
        // var_dump($query->result_id);
        $response = array("validacion" => ($query ? true : false));
        return $response;
    }

    public function copiarCajeros($partida_id, $estacionamiento)
    {
        $sql = "CALL sp_copiar_cajeros('$partida_id','$estacionamiento')";
        $query = $this->db->query($sql);
        $response = array("validacion" => ($query ? true : false));
        return $response;
    }

	public function guardarLayout($partida_id,$nombre_archivo,$estacionamiento) {
        $data = array(
            'ruta' => $nombre_archivo,
            'estacionamiento_id' => $estacionamiento,
            'creado_por' => $this->session->userdata('id_usuario'),
            'partida_id' => $partida_id
        );

        // Verificar duplicados
        $result = $this->db->insert('layouts', $data);

        $response = array("validacion" => ($result > 0 ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}
}