<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('quitar_acentos')) {
    function quitar_acentos($cadena) {
        $acentos = array(
            'á' => 'a',
            'é' => 'e',
            'í' => 'i',
            'ó' => 'o',
            'ú' => 'u',
            'Á' => 'A',
            'É' => 'E',
            'Í' => 'I',
            'Ó' => 'O',
            'Ú' => 'U',
            'ñ' => 'n',
            'Ñ' => 'N'
        );

        $cadenaSinAcentos = strtr($cadena, $acentos);
        return $cadenaSinAcentos;
    }
}
