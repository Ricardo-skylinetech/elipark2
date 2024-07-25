<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( !function_exists('send_mail') ){
    function send_mail($mensaje, $asunto, $email) {
        $CI = &get_instance();
        $CI->load->library('email');

        /*
        * Cuando cargamos una librería
        * es similar a hacer en PHP puro esto:
        * require_once("libreria.php");
        * $lib=new Libreria();
        */
        
        //Cargamos la librería email
        $CI->load->library('email');
        
        /*
        * Configuramos los parámetros para enviar el email,
        * las siguientes configuraciones es recomendable
        * hacerlas en el fichero email.php dentro del directorio config,
        * en este caso para hacer un ejemplo rápido lo hacemos
        * en el propio controlador
        */
        
        //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
        
        //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'mail.skylinetech.com.mx';
        
        //Nuestro usuario
        $config["smtp_user"] = 'notificaciones@skylinetech.com.mx';
        
        //Nuestra contraseña
        $config["smtp_pass"] = 'cJ4LVa_o~pvX';
        
        //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '587';
        
        //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';

        //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
        
        //El email debe ser valido 
        $config['validate'] = true;

        $config['mailtype'] = "html";
        
    //Establecemos esta configuración
        $CI->email->initialize($config);

    //Ponemos la dirección de correo que enviará el email y un nombre
        $CI->email->from('notificaciones@skylinetech.com.mx', 'Notificaciones Elipark');
        
    /*
        * Ponemos el o los destinatarios para los que va el email
        * en este caso al ser un formulario de contacto te lo enviarás a ti
        * mismo
        */
        $CI->email->to($email);
        
    //Definimos el asunto del mensaje
        $CI->email->subject($asunto);
        
    //Definimos el mensaje a enviar
        $CI->email->message($mensaje);
        
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($CI->email->send()){
/*             echo "enviado<br/>";
            echo $CI->email->print_debugger(array('headers')); */
        }else{
/*             echo "fallo <br/>";
            echo "error: ".$CI->email->print_debugger(array('headers')); */
        }
    }
}