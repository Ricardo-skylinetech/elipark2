<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estacionamientos_model extends CI_Model{

	protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getEstacionamientos(){
        $estacionamiento = $this->session->userdata('id_estacionamiento');
        $this->db->select("e.id_estacionamiento, e.nombre, CONCAT(e.calle,' ',e.interior,' ',e.exterior,', ',e.colonia,' ',e.delegacion_municipio,', ',e.entidad) AS direccion, c.descripcion, e.estatus, g.nombre as grupo, a.estatus AS estatusTarifa, e.limiteBolDif");
        $this->db->from("cat_estacionamientos e");
        $this->db->join("cat_estatus c", "c.valor = e.estatus","left");
        $this->db->join("cat_grupos g", "g.id_grupo = e.grupo_id","left");
        $this->db->join("cat_archivos_tarifarios a", "e.id_estacionamiento = a.estacionamiento_id AND a.estatus = 1","left");
        if($this->session->userdata('rol') >= 5){ // Usuario Y Otros
            $this->db->where(array("e.id_estacionamiento"=>$estacionamiento));
            $this->db->order_by("e.id_estacionamiento", "$estacionamiento DESC");
            $this->db->order_by("e.id_estacionamiento", "ASC");
        } else if($this->session->userdata('rol') == 4) { //Auditor
            $this->db->where("g.id_grupo = (SELECT grupo_id FROM cat_estacionamientos WHERE id_estacionamiento = $estacionamiento)");
        } else if($this->session->userdata('rol') == 1) { // Admin
            $this->db->order_by("e.id_estacionamiento");
        }
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }
    
	public function getEstacionamientosSelect()
	{
        $estacionamiento = $this->session->userdata('id_estacionamiento');
		$this->db->select("e.id_estacionamiento, e.nombre, g.nombre as grupo");
		$this->db->from("cat_estacionamientos e");
        $this->db->join("cat_grupos g", "g.id_grupo = e.grupo_id","left");
        if($this->session->userdata('rol') >= 5){ // Usuario Y Otros
            $this->db->where(array("e.id_estacionamiento"=>$estacionamiento));
            $this->db->order_by("e.id_estacionamiento", "$estacionamiento DESC");
            $this->db->order_by("e.id_estacionamiento", "ASC");
        } else if($this->session->userdata('rol') == 4) { //Auditor
            $this->db->where("g.id_grupo = (SELECT grupo_id FROM cat_estacionamientos WHERE id_estacionamiento = $estacionamiento)");
        } else { // Admin y Gerente
            $this->db->order_by("e.id_estacionamiento");
        }
		$this->db->where("e.estatus",1);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

    public function updateEstacionamiento($id,$estatus){

        $data = array(
            'estatus' => ($estatus == 1 ? 0 : 1),
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_estacionamientos', $data, array('id_estacionamiento'=>$id));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

    public function insertEstacionamiento($nombre,$grupo){
        $data = array(
            'nombre' => strtoupper($nombre),
            'grupo_id' => $grupo,
            'estatus' => 1,
            'creado_por' => $this->session->userdata('id_usuario')
        );
    
        $result = $this->db->insert('cat_estacionamientos', $data);

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

    public function updateLimit($id_estacionamiento, $value){

        $data = array(
            'limiteBolDif' => $value,
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_estacionamientos', $data, array('id_estacionamiento'=>$id_estacionamiento));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

	public function getEstacionamientoXgrupo()
	{
        $grupo = $this->input->post('grupo');
		$this->db->select("e.id_estacionamiento, e.nombre, g.nombre as grupo");
		$this->db->from("cat_estacionamientos e");
        $this->db->join("cat_grupos g", "g.id_grupo = e.grupo_id","left");
        $this->db->where("e.grupo_id",$grupo);
		$this->db->where("e.estatus",1);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
	}

}