<?php //Pabellón Cuemanco
$sql = "CALL sp_detalleBoletos_Cuemanco('$estacionamiento','$finicio', '$ffin')";
$result = $this->db->query($sql);

$this->load->helper('fecha_con_letra');
$data = array();
foreach ($result->result_array() as $row) {
    if($row['partida_id'] != NULL){
        $data[] = array(
            'partida_id' => $row['partida_id'],
            'expedidos' => $row['expedidos'],
            'saltosFolio' => $row['saltosFolio'],
            'totalExpedidos' => $row['bReales'],
            'boletosCobrados' => $row['boletosCobrados'],
            'porcentajeCobrado' => $row['porcentajeCobrado'],
            'boletosSinCobro' => $row['boletosSinCobro'],
            'boletosRegresados' => $row['boletosRegresados'],
            'diferencia' => $row['diferencia'],
            'boletoPromedio' => $row['boletoPromedio'],
            'bolPerdido' => $row['bolPerdido'],
            'ventaEfectivo' => $row['ingresoBoletaje'],
            'vantaPension' => $row['ingresoPensiones'],
            "comprobantePensiones" => $row['comprobantePensiones'],
            'ingresoOtros' => $row['ingresoOtros'],
            'vantaTotal' => $row['ventaTotal'],
            "comprobanteIngresos" => $row['comprobanteIngresos'],
            "fechaIngreso" => date("Y-m-d", strtotime($row['fechaIngreso'])),
            "num" => date("j", strtotime($row['fechaIngreso'])),
            "dia" => obtenerFechaEnLetra($row['fechaIngreso']),
            "estacionamiento_id" => $row['estacionamiento_id'],
            "estacionamiento" => $row['estacionamiento'],
            "cedula" => $row['cedula'],
            "auditor" => $row['auditor'],
            "gerente" => $row['gerente'],
            "limiteBolDif" => $row['limiteBolDif']
        );
    }
}
