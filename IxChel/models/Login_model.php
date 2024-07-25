<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    protected $table = 'v_login';

    public $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'trim|required|valid_email'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'trim|required'
        )
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login(){
        $where = array(
            'email' => $this->input->post('email'),
            'estatus' => 1
        );
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            if (password_verify($this->input->post('password'), $query->row()->password)) {
                foreach($query->result_array() as $row)
                {
                    $data = [
                        'loggedin' => TRUE,
                        'email' => $row['email'],
                        'password' => $row['password'],
                        'id_usuario' => $row['id_usuario'],
                        'usuario' => $row['usuario'],
                        'rol' => $row['rol'],
                        'permiso' => $row['permiso'],
                        'id_estacionamiento' => $row['id_estacionamiento'],
                        'estacionamiento' => $row['estacionamiento'],
                        'estatus' => $row['estatus']
                    ];
                }

                $this->session->set_userdata($data);
                return TRUE;
            }else{
                $_SESSION['msg'] = 'Email y/o contraseña invalidos';
                return FALSE;
            }
        }else{
            $_SESSION['msg'] = 'No se encontro el usuario';
            return FALSE; 
        }
    }

    // public function hash($string){
    //     return hash('sha512', $string . config_item('encryption_key'));
    // }

    public function logout(){
        $this->session->sess_destroy();
    }

    public function loggedin(){
        return (bool) $this->session->userdata('loggedin');
    }
}