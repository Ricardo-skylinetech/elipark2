<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class DetalleSemana_model extends CI_Model{

	// protected $cat_estacionamientos = "cat_estacionamientos";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getBexpedidos($fecha,$estacionamiento) {        
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_expedidos, c.concepto, SUM(b.apertura) AS apertura, SUM(b.cierre) AS cierre, SUM(b.expedido_sistema) AS expedido_sistema, SUM(b.folios_brincados) AS folios_brincados, SUM(b.expedido_real) AS expedido_real, DATE(b.fechaIngreso) AS fechaIngreso, b.estacionamiento_id, e.nombre AS estacionamiento");
        $this->db->from("boletos_expedidos b");
        $this->db->join("cat_boletos_expedidos c", "c.id = b.id_cat_expedidos","left");
        $this->db->join("cat_estacionamientos e", "e.id_estacionamiento = b.estacionamiento_id");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->where("b.expedido_real > 0");
        $this->db->group_by("c.concepto");
        // $sql = $this->db->get_compiled_select();
        // echo $sql;die;
        $result = $this->db->get();
        $data = $result->result_array("result_array");
        $data[0]['finicio'] = date("d-m-Y", strtotime($finicio));
        $data[0]['ffin'] = date("d-m-Y", strtotime($ffin));

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBfisicos($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_fisicos, c.concepto, SUM(b.apertura) AS apertura, SUM(b.cierre) AS cierre, SUM(b.total) AS total, DATE(b.fechaIngreso) AS fechaIngreso, b.estacionamiento_id, e.nombre AS estacionamiento");
        $this->db->from("boletos_fisicos b");
        $this->db->join("cat_boletos_expedidos c", "c.id = b.id_cat_expedidos","left");
        $this->db->join("cat_estacionamientos e", "e.id_estacionamiento = b.estacionamiento_id");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->where("b.total > 0");
        $this->db->group_by("c.concepto");
        // $sql = $this->db->get_compiled_select();
        // echo $sql;die;
        $result = $this->db->get();
        $data = $result->result_array("result_array");
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBcobrados($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $sql = "(SELECT b.id_cobrados, c.concepto, SUM(b.cantidad) AS cantidad, t.tarifa, SUM(b.importe) AS importe
                 FROM boletos_cobrados b
                 LEFT JOIN cat_boletos_cobrados c ON c.id = b.id_cat_cobrados
                 LEFT JOIN cat_tarifas_boletos_cobrados t ON t.id = b.id_cat_tarifa_cobrados 
                 WHERE date_format(b.fechaIngreso, '%Y-%m-%d')BETWEEN '".$finicio."' AND '".$ffin."' AND b.estacionamiento_id = ".$estacionamiento." AND t.tarifa <= 100 AND t.tarifa <> '>100' AND b.cantidad > 0
                 GROUP BY c.concepto, t.tarifa)
                 UNION
                 (SELECT '', d.concepto, d.cantidad, d.tarifa, d.importe
                 FROM detalle_cajeros d
                 WHERE d.tarifa > 100 AND date_format(d.fechaIngreso, '%Y-%m-%d') BETWEEN '".$finicio."' AND '".$ffin."' 
                 AND d.estacionamiento_id = ".$estacionamiento." AND d.cantidad > 0
                 GROUP BY concepto, tarifa)";

        $query = $this->db->query($sql);
        $data = $query->result_array();

        $response = array("validacion" => ($query->num_rows() > 0 ? true : false), "data" => ($query->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getValesDescuento($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_vales_descuento, c.concepto, SUM(b.creacion) AS creacion, SUM(b.recuperacion) AS recuperacion");
        $this->db->from("boletos_vales_descuento b");
        $this->db->join("cat_boletos_vales_descuento c", "c.id = b.id_cat_vales_descuento","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getTarifasEspeciales($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_tarifas_especiales, c.concepto, SUM(b.cantidad) AS cantidad, t.tarifa, SUM(b.importe) AS importe");
        $this->db->from("boletos_tarifas_especiales b");
        $this->db->join("cat_boletos_tarifas_especiales c", "c.id = b.id_cat_tarifas_especiales","left");
        $this->db->join("cat_tarifas_boletos_tarifas_especiales t", "t.id = b.id_cat_tarifa_tarifas_especiales","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto, t.tarifa");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBrecobros($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_recobros, c.concepto, SUM(b.cantidad) AS cantidad, t.tarifa, SUM(b.importe) AS importe");
        $this->db->from("boletos_recobros b");
        $this->db->join("cat_boletos_recobros c", "c.id = b.id_cat_recobros","left");
        $this->db->join("cat_tarifas_boletos_recobros t", "t.id = b.id_cat_tarifa_recobros","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto, t.tarifa");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBvalet($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select();
        $this->db->from("boletos_valet");
        $this->db->where("date_format(fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("estacionamiento_id", $estacionamiento);
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getValesretornar($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_vales_retorno, c.concepto, SUM(b.cantidad) AS cantidad, SUM(b.importe) AS importe");
        $this->db->from("boletos_vales_retornar b");
        $this->db->join("cat_boletos_vales_retornar c", "c.id = b.id_cat_vales_retornar","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBpensiones($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_pensiones, c.concepto, SUM(b.cantidad) AS cantidad, t.tarifa, SUM(b.importe) AS importe");
        $this->db->from("boletos_pensiones b");
        $this->db->join("cat_boletos_pensiones c", "c.id = b.id_cat_pensiones","left");
        $this->db->join("cat_tarifas_boletos_pensiones t", "t.id = b.id_cat_tarifa_pensiones","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto, t.tarifa");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBsinCobro($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_sincobro, c.concepto, SUM(b.cantidad) AS cantidad, SUM(b.total) AS total");
        $this->db->from("boletos_sin_cobro b");
        $this->db->join("cat_boletos_sin_cobro c", "c.id = b.id_cat_boletos_sin_cobro","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBoperacion($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("o.id_operacion, c.concepto, SUM(o.cantidad) AS cantidad, SUM(o.total) AS total");
        $this->db->from("boletos_operacion o");
        $this->db->join("cat_boletos_operacion c", "c.id = o.id_cat_boletos_operacion","left");
        $this->db->where("date_format(o.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("o.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBvouchers($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_voucher, c.concepto, SUM(b.entregados) AS entregados, SUM(b.recuperados) AS recuperados");
        $this->db->from("boletos_vouchers b");
        $this->db->join("cat_boletos_vouchers c", "c.id = b.id_cat_voucher","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBvalidaciones($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_validaciones, c.concepto, SUM(b.cantidad) AS cantidad, SUM(b.total) AS total");
        $this->db->from("boletos_validaciones b");
        $this->db->join("cat_boletos_validaciones c", "c.id = b.id_cat_validaciones","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBperdidoValet($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("id_perdido, SUM(cantidad), costo, SUM(total)");
        $this->db->from("boleto_perdido_valet");
        $this->db->where("date_format(fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("estacionamiento_id", $estacionamiento);
        $this->db->group_by("costo");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBperdidos($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("p.id_perdido, c.concepto, SUM(p.cantidad) AS cantidad, t.tarifa, SUM(p.importe) AS importe");
        $this->db->from("boletos_perdidos p");
        $this->db->join("cat_boletos_perdidos c", "c.id = p.id_cat_perdido","left");
        $this->db->join("cat_tarifas_boletos_perdidos t", "t.id = p.id_cat_tarifa_perdido","left");
        $this->db->where("date_format(p.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("p.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto, t.tarifa");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBprepago($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("p.id_prepago, c.concepto, SUM(p.cantidad) AS cantidad, t.tarifa, SUM(p.importe) AS importe");
        $this->db->from("boletos_prepago p");
        $this->db->join("cat_boletos_prepago c", "c.id = p.id_cat_prepago","left");
        $this->db->join("cat_tarifas_boletos_prepago t", "t.id = p.id_cat_tarifa_prepago","left");
        $this->db->where("date_format(p.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("p.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto, t.tarifa");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBinformativo($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("i.id_informativo, i.concepto, SUM(i.cantidad) AS cantidad, SUM(i.importe) AS importe, SUM(i.total) AS total");
        $this->db->from("boletos_informativo i");
        $this->db->where("date_format(i.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("i.estacionamiento_id", $estacionamiento);
        $this->db->group_by("i.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBotros($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("o.id_otros, o.concepto, SUM(o.cantidad) AS cantidad, SUM(o.importe) AS importe, SUM(o.total) AS total");
        $this->db->from("boletos_otros o");
        $this->db->where("date_format(o.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("o.estacionamiento_id", $estacionamiento);
        $this->db->group_by("o.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBinfoPrepago($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("b.id_info_prepago, c.concepto, sum(b.entregados) as entregados, sum(b.recuperados) as recuperados");
        $this->db->from("boletos_info_prepago b");
        $this->db->join("cat_boletos_info_prepago c", "c.id = b.id_cat_info_prepago","left");
        $this->db->where("date_format(b.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("b.estacionamiento_id", $estacionamiento);
        $this->db->group_by("c.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getBinfoOtrosMedios($fecha,$estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("i.id_info_otros_medios, i.concepto, SUM(i.cantidad) AS cantidad, SUM(i.tarifa) AS tarifa, SUM(i.total) AS total");
        $this->db->from("boletos_otros_medios i");
        $this->db->where("date_format(i.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("i.estacionamiento_id", $estacionamiento);
        $this->db->group_by("i.concepto");
        $result = $this->db->get();
        $data = $result->result_array("result_array");
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function getDetalleCajeros($fecha, $estacionamiento){
        $datos = $this->obtenerFechasSemana($fecha);
        $finicio = $datos["finicio"];
        $ffin = $datos["ffin"];

        $this->db->select("o.id_cajeros, o.nombre_cajero, SUM(o.cantidad) AS cantidad, o.tarifa, SUM(o.importe) AS importe");
        $this->db->from("detalle_cajeros o");
        $this->db->join("layouts l", "l.partida_id = o.partida_id","left");
        $this->db->where("date_format(o.fechaIngreso, '%Y-%m-%d') BETWEEN '$finicio' AND '$ffin'");
        $this->db->where("o.estacionamiento_id",$estacionamiento);
        $this->db->where("o.tarifa <> 0");
        $this->db->group_by("o.tarifa, o.nombre_cajero");
        // $sql = $this->db->get_compiled_select();
        // echo $sql;die;
        $result = $this->db->get();
        $data = $result->result_array("result_array");

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    protected function obtenerFechasSemana($fecha) {
        // Fecha en formato "2023-W09"
        $weekString = $fecha;

        // Obtener el año y el número de semana
        list($year, $weekNumber) = sscanf($weekString, "%d-W%d");

        // Crear el objeto de fecha para el primer día de la semana (lunes)
        $startDate = new DateTime();
        $startDate->setISODate($year, $weekNumber, 1);

        // Crear el objeto de fecha para el último día de la semana (domingo)
        $endDate = new DateTime();
        $endDate->setISODate($year, $weekNumber, 7);

        // Formatear las fechas según sea necesario
        $finicio = $startDate->format("Y-m-d");
        $ffin = $endDate->format("Y-m-d");

        // Crear el texto "SEMANA XX"
        $weekText = "SEMANA " . str_pad($weekNumber, 2, "0", STR_PAD_LEFT);

        return array("finicio"=>$finicio,"ffin"=>$ffin,"numeroSemana"=>$weekText);
    }
}