<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if( !function_exists('respuesta_json') ){
    function respuesta_json($data){
        $CI = &get_instance();
        $CI->output->set_content_type('application/json')->set_output(json_encode($data));
    }
}