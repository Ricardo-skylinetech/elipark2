<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portafolio_model extends CI_Model{

	protected $table = 'cat_grupos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getGrupos(){
        $this->db->select("id_grupo, nombre");
        $this->db->from($this->table);
        $data = $this->db->get();
		$response = $data->result_array();
		return $response;
    }
}