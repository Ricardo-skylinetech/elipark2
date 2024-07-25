<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUserData($id_usuario)
    {
        $this->db->select("u.nombres, u.apellido_paterno, u.apellido_materno, e.nombre as parking, l.email");
        $this->db->from("cat_usuarios u");
        $this->db->join("cat_estacionamientos e","e.id_estacionamiento = u.estacionamiento_id","left");
        $this->db->join("login l","l.usuario_id = u.id_usuario","left");
        $this->db->where("u.id_usuario",$id_usuario);
		$result = $this->db->get();
		$data = $result->result_array();

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function updateUsuario($id_usuario)
    {
        $data = array(
            'nombres' => strtoupper(trim($this->input->post('nombres'))),
            'apellido_paterno' => strtoupper(trim($this->input->post('apellido_paterno'))),
            'apellido_materno' => strtoupper(trim($this->input->post('apellido_materno'))),
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_usuarios', $data, array('id_usuario'=>$id_usuario));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
        return $response;
    }

    public function updateEmail($id_usuario)
    {
        $email = trim($this->input->post('email'));

        $this->db->select();
        $this->db->from("login");
        $this->db->where('email', $email);
        $result = $this->db->get();
        
        if($result->num_rows() > 0){
            $response = array("validacion" => FALSE, "mensaje" => "El correco electronico ya esta registrado");
            return $response;
        }else{
            $data = array(
                'email'=>$email,
                'modificado_por' => $id_usuario,
                'cambio_password' => 1
            );

            $response = $this->db->update('login', $data, array('usuario_id'=>$id_usuario));
            $return = array("validacion" => ($response > 0 ? TRUE : FALSE));
            return $return;
        }
    }

    public function updatePassword($id_usuario)
    {
        $password = $this->input->post('password');

        $data = array(
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'modificado_por' => $id_usuario,
            'cambio_password' => 1
        );

        $result = $this->db->update('login', $data, array('usuario_id'=>$id_usuario));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
        return $response;
    }
}