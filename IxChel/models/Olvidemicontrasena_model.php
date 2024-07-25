<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olvidemicontrasena_model extends CI_Model{
    protected $table = 'v_login';

    public $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'trim|required|valid_email'
        )
    );

    public function validarcorreo($email)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('email'=> $email));
        $result = $this->db->get();
        $resultado = $result->result_array();
		return $resultado;
    }

}