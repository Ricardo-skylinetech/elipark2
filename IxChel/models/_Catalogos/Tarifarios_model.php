<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarifarios_model extends CI_Model{

	protected $cat_archivos_tarifarios = 'cat_archivos_tarifarios';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function importTarifas($estacionamiento,$archivo)
    {
        $datos_archivo = file_get_contents($archivo['tmp_name']);
        $archivo_codificado = base64_encode($datos_archivo);

        $data = array(
            'nombre_archivo' => $archivo['name'],
            'archivo' => $archivo_codificado,
            'estatus' => 1,
            "estacionamiento_id" => $estacionamiento,
            // "fechaIngreso" => $fechaIngreso,
            "creado_por" => $this->session->userdata('id_usuario')
        );
    
        $this->db->insert('cat_archivos_tarifarios', $data);
        if ($this->db->affected_rows() > 0) {
            return array('validacion' => true, "icon" => "success", 'mensaje' => 'Se ha importado correctamente.');
        } else {
            return array('validacion' => false, "icon" => "error", 'mensaje' => 'Error al importar tarifarios.');
        }
        
    }

    public function verTarifas($estacionamiento)
    {
        $this->db->select('a.archivo, a.id_tarifario');
        $this->db->from("cat_archivos_tarifarios a");
        $this->db->where("a.estacionamiento_id", $estacionamiento);
        $this->db->where("a.estatus", "1");
        $result = $this->db->get();
        $data = $result->result_array('result_array');
        
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data[0] : []));
        return $response;
    }

    public function eliminarTarifas($id_tarifario)
    {
        $data = array(
            'estatus' => 0,
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_archivos_tarifarios', $data, array('id_tarifario'=>$id_tarifario));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }
}