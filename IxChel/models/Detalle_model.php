<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle_model extends CI_Model{

	// protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getBexpedidos($partida_id){
        $this->db->select('b.id_expedidos, c.concepto, b.apertura, b.cierre, b.expedido_sistema, b.folios_brincados, b.expedido_real, DATE(b.fechaIngreso) AS fechaIngreso, b.estacionamiento_id, e.nombre AS estacionamiento');
        $this->db->from('boletos_expedidos b');
        $this->db->join('cat_boletos_expedidos c', 'c.id = b.id_cat_expedidos','left');
        $this->db->join('cat_estacionamientos e', 'e.id_estacionamiento = b.estacionamiento_id');
        $this->db->where('b.partida_id',$partida_id);
        // $sql = $this->db->get_compiled_select();
        // echo $sql;die;
        $result = $this->db->get();
        $data = $result->result_array('result_array');
        $data[0]['fechaIngreso'] = date("d-m-Y", strtotime($data[0]["fechaIngreso"]));

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_expedidos');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBfisicos($partida_id){
        $this->db->select("b.id_fisicos, c.concepto, b.apertura, b.cierre, b.total, DATE(b.fechaIngreso) AS fechaIngreso, b.estacionamiento_id, e.nombre AS estacionamiento");
        $this->db->from('boletos_fisicos b');
        $this->db->join('cat_boletos_expedidos c', 'c.id = b.id_cat_expedidos','left');
        $this->db->join('cat_estacionamientos e', 'e.id_estacionamiento = b.estacionamiento_id');
        $this->db->where('b.partida_id',$partida_id);
        // $sql = $this->db->get_compiled_select();
        // echo $sql;die;
        $result = $this->db->get();
        $data = $result->result_array('result_array');
    
        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_fisicos');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBcobrados($partida_id){
        $sql = "SELECT b.id_cobrados, c.concepto, b.cantidad, t.tarifa, b.importe
                    FROM boletos_cobrados b
                    LEFT JOIN cat_boletos_cobrados c ON c.id = b.id_cat_cobrados
                    LEFT JOIN cat_tarifas_boletos_cobrados t ON t.id = b.id_cat_tarifa_cobrados 
                    WHERE b.partida_id = ".$partida_id." AND t.tarifa <= 100 AND t.tarifa <> '>100' AND b.cantidad > 0
                UNION
                    SELECT '', d.concepto, SUM(d.cantidad) AS cantidad, d.tarifa, SUM(d.importe) AS importe
                    FROM detalle_cajeros d
                    WHERE d.tarifa > 100 
                    AND d.partida_id = ".$partida_id." AND d.cantidad > 0 
                    AND d.concepto IN('COBRADOS','OTRAS TARIFAS')
                    -- AND d.nombre_cajero LIKE '%CAJERO%'
                    AND NOT (d.nombre_cajero LIKE '%HILTON%' AND d.tarifa > 100)
                    GROUP BY d.concepto, d.tarifa";

        $query = $this->db->query($sql);
        $data = $query->result_array();

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_cobrados');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($query->num_rows() > 0 ? true : false), "data" => ($query->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getValesDescuento($partida_id){
        $this->db->select('*');
        $this->db->from('boletos_vales_descuento b');
        $this->db->join('cat_boletos_vales_descuento c', 'c.id = b.id_cat_vales_descuento','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_vales_descuento');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getTarifasEspeciales($partida_id){
        $this->db->select('b.id_tarifas_especiales, c.concepto, b.cantidad, t.tarifa, b.importe');
        $this->db->from('boletos_tarifas_especiales b');
        $this->db->join('cat_boletos_tarifas_especiales c', 'c.id = b.id_cat_tarifas_especiales','left');
        $this->db->join('cat_tarifas_boletos_tarifas_especiales t', 't.id = b.id_cat_tarifa_tarifas_especiales','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_tarifas_especiales');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBrecobros($partida_id){
        $this->db->select('b.id_recobros, c.concepto, b.cantidad, t.tarifa, b.importe');
        $this->db->from('boletos_recobros b');
        $this->db->join('cat_boletos_recobros c', 'c.id = b.id_cat_recobros','left');
        $this->db->join('cat_tarifas_boletos_recobros t', 't.id = b.id_cat_tarifa_recobros','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_recobros');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBvalet($partida_id){
        $this->db->select();
        $this->db->from('boletos_valet');
        $this->db->where('partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_valet');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getValesretornar($partida_id){
        $this->db->select('b.id_vales_retorno, c.concepto, SUM(b.cantidad) AS cantidad, SUM(b.importe) AS importe');
        $this->db->from('boletos_vales_retornar b');
        $this->db->join('cat_boletos_vales_retornar c', 'c.id = b.id_cat_vales_retornar','left');
        $this->db->where('b.partida_id',$partida_id);
        $this->db->group_by('c.concepto');
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_vales_retornar');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBpensiones($partida_id){
        $this->db->select('b.id_pensiones, c.concepto, b.cantidad, t.tarifa, b.importe');
        $this->db->from('boletos_pensiones b');
        $this->db->join('cat_boletos_pensiones c', 'c.id = b.id_cat_pensiones','left');
        $this->db->join('cat_tarifas_boletos_pensiones t', 't.id = b.id_cat_tarifa_pensiones','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_pensiones');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBsinCobro($partida_id){
        $this->db->select('b.id_sincobro, c.concepto, b.cantidad, b.total, b.comprobante, b.partida_id');
        $this->db->from('boletos_sin_cobro b');
        $this->db->join('cat_boletos_sin_cobro c', 'c.id = b.id_cat_boletos_sin_cobro','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_sin_cobro');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBoperacion($partida_id){
        $this->db->select('o.id_operacion, c.concepto, o.cantidad, o.total, o.comprobante, o.partida_id');
        $this->db->from('boletos_operacion o');
        $this->db->join('cat_boletos_operacion c', 'c.id = o.id_cat_boletos_operacion','left');
        $this->db->where('o.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_operacion');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBvouchers($partida_id){
        $this->db->select('b.id_voucher, c.concepto, b.entregados, b.recuperados');
        $this->db->from('boletos_vouchers b');
        $this->db->join('cat_boletos_vouchers c', 'c.id = b.id_cat_voucher','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_vouchers');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBvalidaciones($partida_id){
        $this->db->select('b.id_validaciones, c.concepto, b.cantidad, b.total');
        $this->db->from('boletos_validaciones b');
        $this->db->join('cat_boletos_validaciones c', 'c.id = b.id_cat_validaciones','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_validaciones');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBperdidoValet($partida_id){
        $this->db->select('*');
        $this->db->from('boleto_perdido_valet');
        $this->db->where('partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boleto_perdido_valet');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBperdidos($partida_id){


        $this->db->select('boletos_perdidos.id_perdido,detalle_cajeros.concepto,detalle_cajeros.tarifa,SUM(detalle_cajeros.cantidad) as cantidad,SUM(detalle_cajeros.importe) as importe');
        $this->db->from('detalle_cajeros ');
        $this->db->join('boletos_perdidos', 'detalle_cajeros.partida_id = boletos_perdidos.partida_id');
        $this->db->where("detalle_cajeros.concepto LIKE '%PERDIDO%'");
        $this->db->where('p.partida_id',$partida_id);
    

         echo $this->db->get_compiled_select();

        exit();
        $result = $this->db->get();



        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_perdidos');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBprepago($partida_id){
        $this->db->select('p.id_prepago, c.concepto, p.cantidad, t.tarifa, p.importe');
        $this->db->from('boletos_prepago p');
        $this->db->join('cat_boletos_prepago c', 'c.id = p.id_cat_prepago','left');
        $this->db->join('cat_tarifas_boletos_prepago t', 't.id = p.id_cat_tarifa_prepago','left');
        $this->db->where('p.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_prepago');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBinformativo($partida_id){
        $this->db->select('i.id_informativo, i.concepto, i.cantidad, i.tarifa, i.total');
        $this->db->from('boletos_informativo i');
        $this->db->where('i.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_informativo');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBotros($partida_id){
        $this->db->select('o.id_otros, o.concepto, o.cantidad, o.importe, o.total');
        $this->db->from('boletos_otros o');
        $this->db->where('o.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_otros');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBinfoPrepago($partida_id){
        $this->db->select('b.id_info_prepago, c.concepto, b.entregados, b.recuperados');
        $this->db->from('boletos_info_prepago b');
        $this->db->join('cat_boletos_info_prepago c', 'c.id = b.id_cat_info_prepago','left');
        $this->db->where('b.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');
    
        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_info_prepago');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getBinfoOtrosMedios($partida_id){
        $this->db->select('i.id_info_otros_medios, i.concepto, i.cantidad, i.tarifa, i.total');
        $this->db->from('boletos_otros_medios i');
        $this->db->where('i.partida_id',$partida_id);
        $result = $this->db->get();
        $data = $result->result_array('result_array');
    
        //comprobante
        $this->db->select('*');
        $this->db->from('boletos_comprobantes');
        $this->db->where('partida_id',$partida_id);
        $this->db->where('tipoComprobante','boletos_otros_medios');
        $comprobante = $this->db->get();
        $ruta = $comprobante->result_array('result_array');
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []), "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false));
        return $response;
    }

    public function getObservaciones($partida_id){
        $this->db->select('b.obs_operativo, b.obs_admin, b.obs_incidencias, b.fechaIngreso, c.nombres');
        $this->db->from('boletos_observaciones b');
        $this->db->join('cat_usuarios c', 'c.id_usuario = b.creado_por','left');
        $this->db->where('partida_id',$partida_id);
        $result = $this->db->get();
        // $data = $result->result_array('result_array');
        // var_dump($partida_id);

        $historial_ope ="";
        $historial_admin ="";
        $historial_inci="";

        foreach($result->result_array() as $row)
        {
            if($row['obs_operativo'] != NULL) {
                $historial_ope .= date('d-m-Y H:i', strtotime($row['fechaIngreso'])) . " <b>" . $row['nombres'] . ":</b> " . $row['obs_operativo'] . "<br>";
            }
            
            if($row['obs_admin'] != NULL) {
                $historial_admin .= date('d-m-Y H:i', strtotime($row['fechaIngreso'])) . " <b>" . $row['nombres'] . ":</b> " . $row['obs_admin'] . "<br>";
            }
            
            if($row['obs_incidencias'] != NULL) {
                $historial_inci .= date('d-m-Y H:i', strtotime($row['fechaIngreso'])) . " <b>" . $row['nombres'] . ":</b> " . $row['obs_incidencias'] . "<br>";
            }
        }

        $data[] = array(
            'historial_ope' => $historial_ope,
            'historial_admin' => $historial_admin,
            'historial_inci' => $historial_inci
        );
    
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "result" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function guardarComentario($partida_id, $tipo)
    {
        if($tipo == "obs_operativo") {
            $data = array(
                'obs_operativo' => $this->input->post('obs_operativo')
            );
        } else if($tipo == "obs_admin") {
            $data = array(
                'obs_admin' => $this->input->post('obs_admin')
            );
        } else {
            $data = array(
                'obs_incidencias' => $this->input->post('obs_incidencias')
            );
        }

        $data['estacionamiento_id'] = $this->session->userdata('id_estacionamiento');
        $data['creado_por'] = $this->session->userdata('id_usuario');
        $data['partida_id'] = $partida_id;
        $result = $this->db->insert('boletos_observaciones', $data);
        // var_dump($result);

        if($result) {
            $response = $this->getObservaciones($partida_id);
        } else {
            $response = array("validacion" => false);
        }
        
        return $response;
    }

    public function getDetalleCajeros($fechaIngreso, $estacionamiento){
        $nueva_fecha = date("Y-m-d", strtotime($fechaIngreso));
        $this->db->select('o.id_cajeros, o.nombre_cajero, SUM(o.cantidad) AS cantidad, o.tarifa, SUM(o.importe) AS importe, l.ruta');
        $this->db->from('detalle_cajeros o');
        $this->db->join('layouts l', 'l.partida_id = o.partida_id','left');
        $this->db->where('date_format(o.fechaIngreso, "%Y-%m-%d") =',$nueva_fecha);
        $this->db->where('o.estacionamiento_id',$estacionamiento);
        $this->db->where('o.tarifa <> 0');
        $this->db->group_by('o.tarifa, o.nombre_cajero');
        $result = $this->db->get();
        $data = $result->result_array('result_array');

        //comprobante
        // $this->db->select('*');
        // $this->db->from('boletos_comprobantes');
        // $this->db->where('partida_id',$partida_id);
        // $this->db->where('tipoComprobante','detalle_cajeros');
        // $comprobante = $this->db->get();
        // $ruta = $comprobante->result_array('result_array');

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : [])/*, "comprobante"=> ($comprobante->num_rows() > 0 ? $ruta : false)*/);
        return $response;
    }

	public function guardarBoletosinCobroPDF($id_sincobro,$nombre_archivo) {
        $data = array(
            'comprobante' => $nombre_archivo,
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $this->db->where('id_sincobro', $id_sincobro);
        $result = $this->db->update('boletos_sin_cobro', $data);

        $response = array("validacion" => ($result ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}

	public function guardarBoletoOperacionPDF($id_operacion,$nombre_archivo) {
        $data = array(
            'comprobante' => $nombre_archivo,
            'modificado_por' => $this->session->userdata('id_usuario')
        );

        $this->db->where('id_operacion', $id_operacion);
        $result = $this->db->update('boletos_operacion', $data);

        $response = array("validacion" => ($result ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}

    public function cargarComprobantePDF($partida_id, $nombre_archivo, $tipoComprobante) {
        $data = array(
            'ruta' => $nombre_archivo,
            'tipoComprobante' => $tipoComprobante,
            'partida_id' => $partida_id,
            'creado_por' => $this->session->userdata('id_usuario')
        );

        $result = $this->db->insert('boletos_comprobantes', $data);

        $response = array("validacion" => ($result ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}

    // public function getBobservaciones($partida_id){
    //     $this->db->select();
    //     $this->db->from($this->table10);
    //     $this->db->where('partida_id',$partida_id);
    //     $result = $this->db->get();

    //     foreach($result->result_array() as $row)
    //             {
    //                 $data[] = array(
	// 					'id' => $row['Id'],
    //                     'observaciones' => $row['observaciones']
    //                 );
    //             }

    //     $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
    //     return $response;
    // }

}
