<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pensiones_model extends CI_Model{

	// protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPensiones($select,$estacionamiento,$todo,$activas,$inactivas,$fechaMes)
    {
        $year = date('Y');
        $month = date('m');

         if(isset($fechaMes) && $fechaMes!=""){


        $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fechaMes)));
        $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fechaMes)));


        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago");
        $this->db->from("cat_pensiones c");
        $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$finicio' AND '$ffin'", 'left');


        }else{

    // Traer pensiones del Corte 6 de cada mes
        $start_date = "$year-$month-06";
        $end_date = date("Y-m-05", strtotime("+1 month", strtotime($start_date)));

        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago");
        $this->db->from("cat_pensiones c");
        $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$start_date' AND '$end_date'", 'left');

        }

       


        if($todo != 1) {
            // mejorar función en el futuro
            $where = "(c.contrato=$select OR c.tarjetaSistema=$select OR c.tarjetaFisica=$select OR c.razonSocial=$select)";
            $this->db->where($where);


            /*$this->db->where("c.contrato", $select);
            $this->db->or_where("c.tarjetaSistema", $select);
            $this->db->or_where("c.tarjetaFisica", $select);
            $this->db->or_where("c.razonSocial", $select);*/

            if($this->session->userdata('rol') >= 5){
                $this->db->where(['c.estacionamiento_id'=>$this->session->userdata('id_estacionamiento')]);
            }else{
                $this->db->where(['c.estacionamiento_id'=>$estacionamiento]);
            }
        } else {

            if($this->session->userdata('rol') >= 5){

                $this->db->where(['c.estacionamiento_id'=>$this->session->userdata('id_estacionamiento')]);
            }else{

                $this->db->where(['c.estacionamiento_id'=>$estacionamiento]);
            }
        }


        if($activas == 1 && $inactivas == 1){
            $this->db->where_in(['c.estatus'=>array(1,0)]);
        } elseif ($activas == 1 && $inactivas == "") {
            $this->db->where(['c.estatus'=> 1]);
        } elseif ($activas == "" && $inactivas == 1) {
    
            $this->db->where(['c.estatus'=> 0]);
        }

     //echo $this->db->get_compiled_select();

     //exit();
     $result = $this->db->get();
      
        $data = array();
        $OK=array();
        $totaldeOK=0;
        $totaldeNoOK=0;

        $todas=count($result->result_array());

         foreach ($result->result_array() as $row) {

            if($row["estatus"]==1){

                    $totaldeOK=$totaldeOK+1;

                }

        }

         foreach ($result->result_array() as $row) {

            if($row["estatus"]==0){

                    $totaldeNoOK=$totaldeNoOK+1;

                }

        }
   
        foreach ($result->result_array() as $row) {
                if($row['fechaAlta'] != "" && $row['fechaAlta'] != "0000-00-00 00:00:00"){
                    $fechaAlta = date("d-m-Y", strtotime($row['fechaAlta']));
                } else {
                    $fechaAlta = "";
                }

                if($row['fechaBaja'] != "" && $row['fechaBaja'] != "0000-00-00 00:00:00"){
                    $fechaBaja = date("d-m-Y", strtotime($row['fechaBaja']));
                } else {
                    $fechaBaja = "";
                }

           

                $data[] = array(
                    "id_cat_pensiones" => $row["id_cat_pensiones"],
                    "contrato" => $row["contrato"],
                    "fechaAlta" => $fechaAlta,
                    "fechaBaja" => $fechaBaja, //date('d-m-Y', strtotime(date('Y-m-06', strtotime('+1 month')))))
                    "tarjetaSistema" => $row["tarjetaSistema"],
                    "tarjetaFisica" => $row["tarjetaFisica"],
                    "razonSocial" => $row["razonSocial"],
                    "asignado" => $row["asignado"],
                    "marca" => $row["marca"],
                    "modelo" => $row["modelo"],
                    "color" => $row["color"],
                    "placas" => $row["placas"],
                    "tipoPension" => $row["tipoPension"],
                    "estatus" => $row["estatus"],
                    "fichaPago" => $row["fichaPago"],
                    "costo" => $row["costo"],
                    "factura" => $row["factura"],
                    "pago" => $row["pago"],
                    "venta" => $row["venta"],
                    "reposicion" => $row["reposicion"],
                    "recargos" => $row["recargos"],
                    "fechaDeposito" => $row["fechaDeposito"],
                    "movimiento" => $row["movimiento"],
                    "observaciones" => $row["observaciones"],
                    "todas" =>$todas,
                    "totalOk"=> $totaldeOK,
                    "totaldesactivas"=>$totaldeNoOK

                    
                );
        }

   
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function extraerDetalle($id)
    {
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago, c.archivo, c.estacionamiento_id");
        $this->db->from("cat_pensiones c");
        $this->db->join("pensiones p","c.id_cat_pensiones = p.id_cat_pensiones","left");
        $this->db->where("c.id_cat_pensiones",$id);
        
        $result = $this->db->get();
        $data = array();
        foreach ($result->result_array() as $row) {
                $data[] = array(
                    "id_cat_pensiones" => $row["id_cat_pensiones"],
                    "contrato" => $row["contrato"],
                    "fechaAlta" => ($row['fechaAlta'] != '' ? date("Y-m-d", strtotime($row['fechaAlta'])) : ''),
                    "fechaBaja" => ($row['fechaBaja'] != '' ? date("Y-m-d", strtotime($row['fechaBaja'])) : ''), //date('Y-m-d', strtotime(date('Y-m-06', strtotime('+1 month')))))
                    "tarjetaSistema" => $row["tarjetaSistema"],
                    "tarjetaFisica" => $row["tarjetaFisica"],
                    "razonSocial" => $row["razonSocial"],
                    "asignado" => $row["asignado"],
                    "marca" => $row["marca"],
                    "modelo" => $row["modelo"],
                    "color" => $row["color"],
                    "placas" => $row["placas"],
                    "tipoPension" => $row["tipoPension"],
                    "estatus" => $row["estatus"],
                    "fichaPago" => $row["fichaPago"],
                    "costo" => $row["costo"],
                    "factura" => $row["factura"],
                    "pago" => $row["pago"],
                    "venta" => $row["venta"],
                    "reposicion" => $row["reposicion"],
                    "recargos" => $row["recargos"],
                    "fechaDeposito" => ($row['fechaDeposito'] != '' ? date("Y-m-d", strtotime($row['fechaDeposito'])) : ''),
                    "movimiento" => $row["movimiento"],
                    "observaciones" => $row["observaciones"],
                    "archivo" => $row["archivo"],
                    "estacionamiento_id" => $row["estacionamiento_id"]
                );
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

	public function guardarLayout($table, $dataToInsert) {
		if (!empty($dataToInsert)) {
			$this->db->trans_start();
			$this->db->insert_batch($table, $dataToInsert);
			$this->db->trans_complete();
			return array('success' => true, 'msg' => 'Se ha importado correctamente.');
		} else {
			return array('success' => false, 'msg' => 'Ha ocurrido un error');
		}
	}

    public function guardarFicha($id_cat_pensiones, $nombre_archivo) {



        $where = array("id_cat_pensiones"=>$id_cat_pensiones);
        $data = array(
            'fichaPago' => $nombre_archivo,
            // 'id_cat_pensiones' => $id_cat_pensiones,
            // 'fechaAlta' => "CURDATE()",
            'estatus' => 1,
            'creado_por' => $this->session->userdata('id_usuario')
        );
        date_default_timezone_set("America/Chihuahua");
        $fecha=date("Y-m-d H:i:s");

        $result =  $this->db->update('cat_pensiones', array("estatus" => 1), array("id_cat_pensiones"=>$id_cat_pensiones));

        $result = $this->db->update('pensiones', $data, $where);
        
        $result =  $this->db->update('pensiones', array("fichaPago" =>$nombre_archivo), array("id_cat_pensiones"=>$id_cat_pensiones));

        $result =  $this->db->update('pensiones', array("fechaAlta" =>$fecha), array("id_cat_pensiones"=>$id_cat_pensiones));

        $response = array("validacion" => ($result ? true : false), "icon" => "success", "mensaje" => "El archivo ha sido cargado correctamente.");
        return $response;
	}

    public function getContratos($estacionamiento){
        $this->db->distinct('contrato');
        $this->db->from("cat_pensiones");
        if($this->session->userdata('rol') >= 5){
            $this->db->where(['estacionamiento_id'=>$this->session->userdata('id_estacionamiento')]);
        }else{
            $this->db->where(['estacionamiento_id'=>$estacionamiento]);
        }
        $this->db->group_by('contrato');
        
        $result = $this->db->get();
        $option = "";
        foreach ($result->result_array() as $row) {
            $option.= "<option value='".$row["contrato"]."'>".$row["contrato"]."</option>";
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $option : ""));
        return $response;
    }

    public function getRazonSocial($estacionamiento){
        $this->db->distinct('razonSocial');
        $this->db->from("cat_pensiones");
        if($this->session->userdata('rol') >= 5){
            $this->db->where(['estacionamiento_id'=>$this->session->userdata('id_estacionamiento')]);
        }else{
            $this->db->where(['estacionamiento_id'=>$estacionamiento]);
        }
        $this->db->group_by('razonSocial');
        
        $result = $this->db->get();
        $option = "";
        foreach ($result->result_array() as $row) {
            $option.= "<option value='".$row["razonSocial"]."'>".$row["razonSocial"]."</option>";
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $option : ""));
        return $response;
    }

    public function getTarjetaSistema($estacionamiento){
        $this->db->distinct('tarjetaSistema');
        $this->db->from("cat_pensiones");
        if($this->session->userdata('rol') >= 5){
            $this->db->where(['estacionamiento_id'=>$this->session->userdata('id_estacionamiento')]);
        }else{
            $this->db->where(['estacionamiento_id'=>$estacionamiento]);
        }
        $this->db->group_by('tarjetaSistema');
        
        $result = $this->db->get();
        $option = "";
        foreach ($result->result_array() as $row) {
            $option.= "<option value='".$row["tarjetaSistema"]."'>".$row["tarjetaSistema"]."</option>";
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $option : ""));
        return $response;
    }

    public function getTarjetaFisica($estacionamiento){
        $this->db->distinct('tarjetaFisica');
        $this->db->from("cat_pensiones");
        if($this->session->userdata('rol') >= 5){
            $this->db->where(['estacionamiento_id'=>$this->session->userdata('id_estacionamiento')]);
        }else{
            $this->db->where(['estacionamiento_id'=>$estacionamiento]);
        }
        $this->db->group_by('tarjetaFisica');
        
        $result = $this->db->get();
        $option = "";
        foreach ($result->result_array() as $row) {
            $option.= "<option value='".$row["tarjetaFisica"]."'>".$row["tarjetaFisica"]."</option>";
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $option : ""));
        return $response;
    }

    public function insertarDatos($data) {
        $data["creado_por"] = $this->session->userdata('id_usuario');
        $data["contrato"] = str_replace(" ", "", $data["contrato"]);
        $data["estacionamiento_id"] = (isset($data["estacionamiento_id"])) ? $data["estacionamiento_id"] : $this->session->userdata('id_estacionamiento');
    
        $duplicate_fields = array();
    
        foreach (array('contrato', 'tarjetaSistema', 'tarjetaFisica') as $field) {
            $this->db->where($field, $data[$field]);
            $this->db->where('estacionamiento_id', $data['estacionamiento_id']);
            $query = $this->db->get('cat_pensiones');
    
            if ($query->num_rows() > 0) {
                $duplicate_fields[] = $field;
            }
        }
    
        if (!empty($duplicate_fields)) {
            $response = array(
                "validacion" => false,
                "icon" => "warning",
                "mensaje" => "El campo: <b>" . implode(", ", $duplicate_fields) . "</b>. Ya se encuentra registrado <br>Por favor verifica y vuelve a intentarlo."
            );
        } else {
            $result = $this->db->insert('cat_pensiones', $data);
    
            if ($result) {
                $inserted_id = $this->db->insert_id();
                $query = $this->db->get_where('cat_pensiones', array('id_cat_pensiones' => $inserted_id));
                $inserted_data = $query->row_array();

                $result = $this->db->insert('pensiones', array("id_cat_pensiones"=>$inserted_id,"estatus"=>1,"creado_por"=>$data["creado_por"]));
        
                $response = array(
                    "validacion" => true,
                    "icon" => "success",
                    "mensaje" => "Se guardó con éxito",
                    "data" => $inserted_data
                );
            } else {
                $response = array(
                    "validacion" => false,
                    "icon" => "error",
                    "mensaje" => "Error al guardar"
                );
            }
        }
    
        return $response;
    }
    
    

    public function actualizarDatos($data) {

        $where = array("id_cat_pensiones"=>$data['id_cat_pensiones']);

        $result =  $this->db->update('pensiones', array("estatus"=>$data['estatus']), $where);
        unset($data['id_cat_pensiones']);

        $result =  $this->db->update('cat_pensiones', $data, $where);

        if ($result) {
            $this->db->select();
            $query = $this->db->get_where('cat_pensiones', $where);
            $inserted_data = $query->row_array();
    
            $response = array(
                "validacion" => true,
                "icon" => "success",
                "mensaje" => "Se guardó con éxito",
                "data" => $inserted_data
            );
        } else {
            $response = array(
                "validacion" => false,
                "icon" => "error",
                "mensaje" => "Error al guardar"
            );
        }
    
        return $response;
    }

    public function extraerHistorico($id_cat_pensiones)
    {
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago, c.archivo, c.estacionamiento_id");
        $this->db->from("cat_pensiones c");
        $this->db->join("pensiones p","c.id_cat_pensiones = p.id_cat_pensiones","left");
        $this->db->where("c.id_cat_pensiones",$id_cat_pensiones);
        $this->db->order_by("p.id_pensiones","ASC");
        
        $result = $this->db->get();
        $data = array();
        foreach ($result->result_array() as $row) {
                $data[] = array(
                    "id_cat_pensiones" => $row["id_cat_pensiones"],
                    "contrato" => $row["contrato"],
                    "fechaAlta" => ($row['fechaAlta'] != '' ? date("Y-m-d", strtotime($row['fechaAlta'])) : ''),
                    "fechaBaja" => ($row['fechaBaja'] != '' ? date("Y-m-d", strtotime($row['fechaBaja'])) : ''), //date('Y-m-d', strtotime(date('Y-m-06', strtotime('+1 month')))))
                    "tarjetaSistema" => $row["tarjetaSistema"],
                    "tarjetaFisica" => $row["tarjetaFisica"],
                    "razonSocial" => $row["razonSocial"],
                    "asignado" => $row["asignado"],
                    "marca" => $row["marca"],
                    "modelo" => $row["modelo"],
                    "color" => $row["color"],
                    "placas" => $row["placas"],
                    "tipoPension" => $row["tipoPension"],
                    "estatus" => $row["estatus"],
                    "fichaPago" => $row["fichaPago"],
                    "costo" => $row["costo"],
                    "factura" => $row["factura"],
                    "pago" => $row["pago"],
                    "venta" => $row["venta"],
                    "reposicion" => $row["reposicion"],
                    "recargos" => $row["recargos"],
                    "fechaDeposito" => ($row['fechaDeposito'] != '' ? date("Y-m-d", strtotime($row['fechaDeposito'])) : ''),
                    "movimiento" => $row["movimiento"],
                    "observaciones" => $row["observaciones"],
                    "archivo" => $row["archivo"],
                    "estacionamiento_id" => $row["estacionamiento_id"]
                );
        }

        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }
}