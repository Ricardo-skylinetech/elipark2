<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perdidos_model extends CI_Model{

	protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('quitar_acentos');
    }

    public function getCatBperdidos($estatus){
        $estacionamiento = $this->session->userdata('id_estacionamiento');
        $this->db->select("b.id,b.concepto,c.descripcion AS estatus,b.estatus AS id_estatus, e.nombre AS estacionamiento, b.estacionamiento_id");
        $this->db->from("cat_boletos_perdidos b");
        $this->db->join("cat_estacionamientos e", "e.id_estacionamiento = b.estacionamiento_id","left");
        $this->db->join("cat_estatus c", "c.valor = b.estatus","left");
        $this->db->join("cat_grupos g", "g.id_grupo = e.grupo_id","left");
        // $this->db->where('b.estatus', $estatus);
        $this->db->where('b.concepto IS NOT NULL');
        if($this->session->userdata('rol') >= 5){ // Usuario Y Otros
            $this->db->where(array("b.estacionamiento_id"=>$estacionamiento));
            $this->db->order_by("b.estacionamiento_id", "$estacionamiento DESC");
            $this->db->order_by("b.estacionamiento_id", "ASC");
        } else if($this->session->userdata('rol') == 4) { //Auditor
            $this->db->where("g.id_grupo = (SELECT grupo_id FROM cat_estacionamientos WHERE id_estacionamiento = $estacionamiento)");
        } else if($this->session->userdata('rol') == 1) { // Admin
            $this->db->order_by("b.estacionamiento_id");
        }
        $this->db->order_by("e.id_estacionamiento");
        //$this->db->order_by("b.estatus = 1 desc, b.estatus asc", '', false);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getCatTperdidos($estatus){
        $estacionamiento = $this->session->userdata('id_estacionamiento');
        $this->db->select("t.id,t.tarifa,c.descripcion AS estatus,t.estatus AS id_estatus, e.nombre AS estacionamiento, t.estacionamiento_id");
        $this->db->from("cat_tarifas_boletos_perdidos t");
        $this->db->join("cat_estacionamientos e", "e.id_estacionamiento = t.estacionamiento_id","left");
        $this->db->join("cat_estatus c", "c.valor = t.estatus","left");
        $this->db->join("cat_grupos g", "g.id_grupo = e.grupo_id","left");
        // $this->db->where('t.estatus', $estatus);
        $this->db->where('t.tarifa IS NOT NULL');
        if($this->session->userdata('rol') >= 5){ // Usuario Y Otros
            $this->db->where(array("t.estacionamiento_id"=>$estacionamiento));
            $this->db->order_by("t.estacionamiento_id", "$estacionamiento DESC");
            $this->db->order_by("t.estacionamiento_id", "ASC");
        } else if($this->session->userdata('rol') == 4) { //Auditor
            $this->db->where("g.id_grupo = (SELECT grupo_id FROM cat_estacionamientos WHERE id_estacionamiento = $estacionamiento)");
        } else if($this->session->userdata('rol') == 1) { // Admin
            $this->db->order_by("t.estacionamiento_id");
        }
        $this->db->order_by("e.id_estacionamiento");
        //$this->db->order_by("t.estatus = 1 desc, t.estatus asc", '', false);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function updateEstatusCatBperdidos($id,$estatus){

        $data = array(
            'estatus' => ($estatus == 1 ? 0 : 1),
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_boletos_perdidos', $data, array('id'=>$id));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

    public function updateEstatusCatTperdidos($id,$estatus){

        $data = array(
            'estatus' => ($estatus == 1 ? 0 : 1),
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_tarifas_boletos_perdidos', $data, array('id'=>$id));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

    public function insertConceptoCatBperdidos($concepto,$estacionamiento){
        $data = array();
        foreach ($concepto as $row) {
            $data[] = array(
                'concepto' => strtoupper(trim(quitar_acentos($row))),
                'estatus' => 1,
                'estacionamiento_id' => (isset($estacionamiento)) ? $estacionamiento : $this->session->userdata('id_estacionamiento'),
                'creado_por' => $this->session->userdata('id_usuario')
            );
        }
    
        // Verificar duplicados
        $duplicates = array();
        foreach ($data as $row) {
            $this->db->where('concepto', $row['concepto']);
            $this->db->where('estacionamiento_id', $row['estacionamiento_id']);
            $query = $this->db->get('cat_boletos_perdidos');
            if ($query->num_rows() > 0) {
                $duplicates[] = $row['concepto'];
            }
        }
    
        if (!empty($duplicates)) {
            $errorMessage = "Error al insertar, datos duplicados: " . implode(', ', $duplicates);
            $response = array("validacion" => FALSE, "mensaje" => $errorMessage, "icon" => "error");
            return $response;
        }
    
        // Realizar la inserción
        $this->db->trans_start();
        $this->db->insert_batch('cat_boletos_perdidos', $data);
        $this->db->trans_complete();
    
        if ($this->db->trans_status() === FALSE) {
            $errorMessage = "Error en la base de datos.";
            $response = array("validacion" => FALSE, "mensaje" => $errorMessage, "icon" => "error");
        } else {
            $response = array("validacion" => TRUE, "mensaje" => "Se guardó la Tarifa.", "icon" => "success");
        }
    
        return $response;
    }

    public function insertTarifaCatTperdidos($tarifa,$estacionamiento){
        $data = array();
        foreach ($tarifa as $row) {
            $data[] = array(
                'tarifa' => trim(str_replace(['$', ','], '', $row)),
                'estatus' => 1,
                'estacionamiento_id' => (isset($estacionamiento)) ? $estacionamiento : $this->session->userdata('id_estacionamiento'),
                'creado_por' => $this->session->userdata('id_usuario')
            );
        }
    
        // Verificar duplicados
        $duplicates = array();
        foreach ($data as $row) {
            $this->db->where('tarifa', $row['tarifa']);
            $this->db->where('estacionamiento_id', $row['estacionamiento_id']);
            $query = $this->db->get('cat_tarifas_boletos_perdidos');
            if ($query->num_rows() > 0) {
                $duplicates[] = $row['tarifa'];
            }
        }
    
        if (!empty($duplicates)) {
            $errorMessage = "Error al insertar, datos duplicados: " . implode(', ', $duplicates);
            $response = array("validacion" => FALSE, "mensaje" => $errorMessage, "icon" => "error");
            return $response;
        }
    
        // Realizar la inserción
        $this->db->trans_start();
        $this->db->insert_batch('cat_tarifas_boletos_perdidos', $data);
        $this->db->trans_complete();
    
        if ($this->db->trans_status() === FALSE) {
            $errorMessage = "Error en la base de datos.";
            $response = array("validacion" => FALSE, "mensaje" => $errorMessage, "icon" => "error");
        } else {
            $response = array("validacion" => TRUE, "mensaje" => "Se guardó la Tarifa.", "icon" => "success");
        }
    
        return $response;
    }

    public function updateConcepto($id,$concepto,$estacionamiento_id){
        // Verificar duplicados
        $this->db->where('concepto', $concepto);
        $this->db->where('estacionamiento_id', $estacionamiento_id);
        $query = $this->db->get('cat_boletos_perdidos');
        if ($query->num_rows() > 0) {
            $duplicates[] = $concepto;
        }

        if (!empty($duplicates)) {
            $errorMessage = "Error al insertar, datos duplicados: " . implode(', ', $duplicates);
            $response = array("validacion" => FALSE, "mensaje" => $errorMessage, "icon" => "error");
            return $response;
        }

        // Realizar la actualización
        $data = array(
            'concepto' => $concepto,
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_boletos_perdidos', $data, array('id'=>$id));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE), "icon" => ($result > 0 ? "success" : "error"));
		return $response;
    }

    public function updateTarifa($id,$tarifa,$estacionamiento_id){
        // Verificar duplicados
        $this->db->where('tarifa', $tarifa);
        $this->db->where('estacionamiento_id', $estacionamiento_id);
        $query = $this->db->get('cat_tarifas_boletos_perdidos');
        if ($query->num_rows() > 0) {
            $duplicates[] = $tarifa;
        }
    
        if (!empty($duplicates)) {
            $errorMessage = "Error al insertar, datos duplicados: " . implode(', ', $duplicates);
            $response = array("validacion" => FALSE, "mensaje" => $errorMessage, "icon" => "error");
            return $response;
        }
    
        // Realizar la actualización
        $data = array(
            'tarifa' => $tarifa,
            'modificado_por' => $this->session->userdata('id_usuario')
        );
    
        $result = $this->db->update('cat_tarifas_boletos_perdidos', $data, array('id'=>$id));
    
        $response = array("validacion" => ($result > 0 ? TRUE : FALSE), "icon" => ($result > 0 ? "success" : "error"));
        return $response;
    }
}