<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rol_model extends CI_Model{

	protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getRoles(){
        $this->db->select();
        $this->db->from("cat_roles r");
        $this->db->where("r.estatus",1);
        $this->db->order_by("r.id_rol");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
}