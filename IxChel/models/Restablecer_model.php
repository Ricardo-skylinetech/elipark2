<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restablecer_model extends CI_Model{
    protected $table = 'cat_login';

    public function updatepassword($pass,$token)
    {
        $cadena = explode(",", $token);
        $this->db->set('password', password_hash($pass, PASSWORD_BCRYPT));
        $this->db->where('Id_login', $cadena[0]);
        $this->db->update($this->table);
        $resultado = $this->db->affected_rows();
		return $resultado;
    }

}