<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function cargar_fechas($finicio, $ffin){
        $query = $this->db->query("CALL sp_dias_periodo('$finicio','$ffin')");
        $query->result();
        $query->free_result();
        $query->next_result();
        // if ($query['num_rows'] > 0) {
            return true;
        // }
    }

    public function get_reporteIngresos($finicio, $ffin, $estacionamiento){
        // $query = "CALL sp_graficoingresoBoletaje('$estacionamiento','$finicio','$ffin')";
        // $result = $this->db->query($query);

        $this->mReportes->cargar_fechas($finicio, $ffin);
        if($estacionamiento == 20) { // Samara
            include 'Calculos/template1.php';
        } else if($estacionamiento == 44) { // Alaia
            include 'Calculos/template4.php';
        } else if($estacionamiento == 37) { // Cuemanco
            include 'Calculos/template5.php';
        } else if($estacionamiento == 9) { // Isla2
            include 'Calculos/template3.php';
         } else if($estacionamiento == 45) { // Cumbres
            include 'Calculos/template6.php';
         } else {// Monterrey y Resto
            include 'Calculos/template2.php';
        }

        foreach($result->result_array() as $row)
        {

            //Datos para las gráficas
            $labels[] =  date("j", strtotime($row['fechaIngreso']));
            $expedidos[] =  $row['bReales'];
            $cobrados[] =  $row['boletosCobrados'];
            $promedio[] =  $row['boletoPromedio'];
            $ingresoBoletaje[] =  $row['ingresoBoletaje'];
            $ingresoPensiones[] =  $row['ingresoPensiones'];
            $ventaTotal[] =  $row['ventaTotal'];


            //Datos para la tabla
            $array[] = array(
                'num' => date("j", strtotime($row['fechaIngreso'])),
                'dia' => obtenerFechaEnLetra($row['fechaIngreso']),
                'expedidos' => $row['bReales'],
                'cobrados' => $row['boletosCobrados'],
                'promedio' => $row['boletoPromedio'],
                'ingresoBoletaje' => $row['ingresoBoletaje'],
                'ingresoPensiones' => $row['ingresoPensiones'],
                'ingresoOtros' => $row['ingresoOtros'],
                'ventaTotal' => $row['ventaTotal']
            );
        }
        
        $response = array(
            "validacion" => ($result->num_rows() > 0 ? true : false), 
            "data" => ($result->num_rows() > 0 ? $array : []),
            "json" => ($result->num_rows() > 0 ? array("labels"=>$labels,"expedidos"=>$expedidos,"cobrados"=>$cobrados,"promedio"=>$promedio,"ingresoBoletaje"=>$ingresoBoletaje,"ingresoPensiones"=>$ingresoPensiones,"ventaTotal"=>$ventaTotal) : [[]])
        );
        return $response;
    }
}