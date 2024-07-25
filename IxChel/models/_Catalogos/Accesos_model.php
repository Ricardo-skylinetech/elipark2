<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accesos_model extends CI_Model{

	protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUsuarios(){
        $this->db->select("u.id_usuario, u.nombres, u.apellido_paterno, u.apellido_materno, l.email, u.rol_id, r.descripcion AS rol, p.descripcion AS permiso, u.estacionamiento_id, e.nombre AS estacionamiento, g.id_grupo, g.nombre AS grupo, s.descripcion AS estatus, l.estatus_id");
        $this->db->from("cat_usuarios u");
        $this->db->join("login l", "l.usuario_id = u.id_usuario","left");
        $this->db->join("cat_roles r", "r.id_rol = u.rol_id","left");
        $this->db->join("cat_permisos p", "p.id_permiso = u.permiso_id","left");
        $this->db->join("cat_estacionamientos e", "e.id_estacionamiento = u.estacionamiento_id","left");
        $this->db->join("cat_grupos g", "g.id_grupo = e.grupo_id","left");
        $this->db->join("cat_estatus s", "s.valor = l.estatus_id");
        // $this->db->order_by("e.id_estacionamiento");
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function insertUsuario()
    {
        $email = $this->input->post('email');

        $this->db->select();
        $this->db->from("login");
        $this->db->where('email', $email);
        $result = $this->db->get();

        if($result->num_rows() > 0){
            $response = array("validacion" => FALSE, "mensaje" => "El correco electronico ya esta registrado");
        }else{

            $usuario = array(
                'nombres' => strtoupper(trim($this->input->post('nombre'))),
                'apellido_paterno' => strtoupper(trim($this->input->post('apaterno'))),
                'apellido_materno' => strtoupper(trim($this->input->post('amaterno'))),
                'rol_id' => $this->input->post('rol'),
                'permiso_id' => $this->input->post('permiso'),
                'estacionamiento_id' => $this->input->post('estacionamiento'),
                'creado_por' => $this->session->userdata('id_usuario')
            );
        
            $this->db->insert('cat_usuarios', $usuario);
            $id_usuario = $this->db->insert_id();

            $password = $this->generatePassword(8);
            $login = array(
                'email' => $email,
                'password' => password_hash($password, PASSWORD_BCRYPT),
                'tmp_password' => $password,
                'estatus_id' => 1,
                'creado_por' => $this->session->userdata('id_usuario'),
                'usuario_id' => $id_usuario,
                'cambio_password' => 0
            );

            $result = $this->db->insert('login', $login);

            if($result > 0){
                $response = array("validacion" => TRUE, "tmp_pass" => $password, "mensaje" => "Se guardo el Usuario<br><br>Contraseña temporal:<br><b>".$password."</b><br>Se envio un correo electronico al usuario con esta información.");
                $asunto = "Contraseña temporal cuenta Elipark";
                $data['tmp_pass'] = $password;
                $mensaje = $this->load->view('email/cambio_de_contrasena',$data,TRUE);
                send_mail($mensaje,$asunto,$email);
            }else{
                $response = array("validacion" => FALSE, "mensaje" => "Ocurrio un error");
            }
        }
        
		return $response;
    }

    public function generatePassword($length)
    {
        $key = "";
        $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
        $max = strlen($pattern)-1;
        for($i = 0; $i < $length; $i++){
            $key .= substr($pattern, mt_rand(0,$max), 1);
        }
        return $key;
    }

    public function updateEstatus($id_usuario,$estatus)
    {

        $data = array(
            'estatus_id' => ($estatus == 1 ? 0 : 1),
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('login', $data, array('usuario_id'=>$id_usuario));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

    public function updateUsuario(){
        $id_usuario = $this->input->post('id_usuario');
        $data = array(
            'nombres' => strtoupper(trim($this->input->post('nombre_e'))),
            'apellido_paterno' => strtoupper(trim($this->input->post('apaterno_e'))),
            'apellido_materno' => strtoupper(trim($this->input->post('amaterno_e'))),
            'rol_id' => $this->input->post('rol_e'),
            'estacionamiento_id' => $this->input->post('estacionamiento_e'),
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->update('cat_usuarios', $data, array('id_usuario'=>$id_usuario));

        $response = array("validacion" => ($result > 0 ? TRUE : FALSE));
		return $response;
    }

    public function resetPassword($id_usuario,$email)
    {
        $password = $this->generatePassword(8);
        $data = array(
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'modificado_por' => $this->session->userdata('id_usuario'),
            'cambio_password' => 1
        );

        $result = $this->db->update('login', $data, array('usuario_id'=>$id_usuario));

        if($result > 0){
            $response = array("validacion" => TRUE, "tmp_pass" => $password, "mensaje" => "Se guardo el Usuario<br><br>Contraseña temporal:<br><b>".$password."</b><br>Se envio un correo electronico al usuario con esta información.");
            $asunto = "Contraseña temporal cuenta Elipark";
            $data['tmp_pass'] = $password;
            $mensaje = $this->load->view('email/cambio_de_contrasena',$data,TRUE);
            send_mail($mensaje,$asunto,$email);
        }else{
            $response = array("validacion" => FALSE, "mensaje" => "Ocurrio un error");
        }
		return $response;
    }
}