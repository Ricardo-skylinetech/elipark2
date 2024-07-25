<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_model extends CI_Model{

	protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPermisos(){
        $this->db->select();
        $this->db->from("cat_permisos p");
        $this->db->order_by("p.id_permiso");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
}