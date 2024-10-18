<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pensiones_model extends CI_Model{

	// protected $cat_estacionamientos = 'cat_estacionamientos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPensiones($select,$estacionamiento,$todo,$activas,$inactivas,$fechaMes,$filtroFoto)
    {
        $year = date('Y');
        $month = date('m');


         if(isset($fechaMes) && $fechaMes!="" AND $filtroFoto==1){

         $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fechaMes)));
        $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fechaMes)));

        $this->db->distinct();
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago,p.bandera");
        $this->db->from("V_cat_pensiones_gral c");
       // $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$finicio' AND '$ffin'","left");

        $this->db->join('V_pensiones_gral p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$finicio' AND '$ffin'");
         $where = "`c`.`fechaAlta`=`p`.`fechaAlta` AND p.bandera=1 AND c.estatus=1";
            $this->db->where($where);


        }

       else if(isset($fechaMes) && $fechaMes!="" AND $filtroFoto==0){


             
        $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fechaMes)));
        $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fechaMes)));

        $this->db->distinct();
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago,p.bandera");
        $this->db->from("cat_pensiones c");
       // $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$finicio' AND '$ffin'","left");

        $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$finicio' AND '$ffin'");
        // $where = "`c`.`fechaAlta`=`p`.`fechaAlta`";
           // $this->db->where($where);



        }

       else if($fechaMes=="" AND $filtroFoto==1){

        $finicio = date("Y-m-d", strtotime(sprintf("first day of %s", $fechaMes)));
        $ffin = date("Y-m-d", strtotime(sprintf("last day of %s", $fechaMes)));

        $this->db->distinct();
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago,p.bandera");
        $this->db->from("V_cat_pensiones_gral c");
       // $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$finicio' AND '$ffin'","left");

        $this->db->join('V_pensiones_gral p', "c.id_cat_pensiones = p.id_cat_pensiones");
         $where = "`c`.`fechaAlta`=`p`.`fechaAlta` AND p.bandera=1 AND c.estatus=1";
        $this->db->where($where);



        }


        else{

                 // Traer pensiones del Corte 6 de cada mes
                $start_date = "$year-$month-06";
                $end_date = date("Y-m-05", strtotime("+1 month", strtotime($start_date)));
                $this->db->distinct();
                $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago,p.bandera");
                $this->db->from("cat_pensiones c");
                //$this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$start_date' AND '$end_date'","left");
                //$this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones AND p.fechaAlta BETWEEN '$start_date' AND '$end_date'");

                $this->db->join('pensiones p', "c.id_cat_pensiones = p.id_cat_pensiones");
              //   $where = "`c`.`fechaAlta`=`p`.`fechaAlta`";
                //   $this->db->where($where);


    

        }

       


        if($todo != 1) {
            // mejorar función en el futuro
            $where = "(c.contrato='$select' OR c.tarjetaSistema='$select' OR c.tarjetaFisica='$select' OR c.razonSocial='$select')";
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

   // exit();
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
//   return acc + (parseFloat(curr.venta) + parseFloat(curr.reposicion) + parseFloat(curr.recargos));

                $costoSuma=$row["costo"];
                $costoPago=$row["pago"];
                $costoVenta=$row["venta"];
                $costoReposicion=$row["reposicion"];
                $costoRecargos=$row["recargos"];

                $totalOtros=$costoVenta+$costoReposicion+$costoRecargos;


                if($row["estatus"]==0){

                   // $costoSuma=0;
                    $costoPago=0;
                    $totalOtros=0;


                }

                if($row["estatus"]==0 && $row["fichaPago"] !=''){


                     $row["fichaPago"]=null;
                }

                if($row["bandera"]==1){

                    $row["fichaPago"]=0;
                    //echo "desactivar subida";
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
                    "totaldesactivas"=>$totaldeNoOK,
                    "costoSuma"=>$costoSuma,
                    "costoPago"=>$costoPago,
                    "totalOtros"=>$totalOtros,
                    "bandera"=>$row["bandera"]

                    
                );
        }

   
        $response = array("validacion" => ($result->num_rows() > 0 ? true : false), "data" => ($result->num_rows() > 0 ? $data : []));
        return $response;
    }

    public function extraerDetalle($id)
    {
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, p.fechaBaja, c.estatus, p.fichaPago, c.archivo, c.estacionamiento_id");
        $this->db->from("cat_pensiones c");
        //$this->db->join("pensiones p","c.id_cat_pensiones = p.id_cat_pensiones","left");
        $this->db->join("pensiones p","c.id_cat_pensiones = p.id_cat_pensiones");
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

    public function guardarFicha($id_cat_pensiones, $nombre_archivo,$fechaUpdate) {




        $where = array("id_cat_pensiones"=>$id_cat_pensiones);
        $data = array(
            'fichaPago' => $nombre_archivo,
            // 'id_cat_pensiones' => $id_cat_pensiones,
            // 'fechaAlta' => "CURDATE()",
            'estatus' => 1,
            'creado_por' => $this->session->userdata('id_usuario')
        );
        date_default_timezone_set("America/Chihuahua");
    
        $fechaUpdate=$fechaUpdate." 00:00:00";
      
        $result = $this->db->update('pensiones', $data, $where);
        $result =  $this->db->update('pensiones', array("fichaPago" =>$nombre_archivo), array("id_cat_pensiones"=>$id_cat_pensiones));
        $result =  $this->db->update('pensiones', array("fechaAlta" =>$fechaUpdate), array("id_cat_pensiones"=>$id_cat_pensiones));


       $result =  $this->db->update('cat_pensiones', array("estatus" => 1), array("id_cat_pensiones"=>$id_cat_pensiones)); //ok
       $result =  $this->db->update('cat_pensiones', array("fechaAlta" =>$fechaUpdate), array("id_cat_pensiones"=>$id_cat_pensiones));

        //consultamos pensiones si la fecha es igual a la fecha de edición no creamos nueva

          $this->db->select("fechaAlta");
          $this->db->from("pensiones");
          $this->db->where("id_cat_pensiones",$id_cat_pensiones);
          $result = $this->db->get();
          $fechaAlta=$result->result_array();

        //  print_r($fechaAlta[0]['fechaAlta']);

        

         /* if($fechaAlta[0]['fechaAlta']!=$fechaUpdate){

      
          $result_foto =$this->db->query("INSERT INTO cat_pensiones(
                            contrato,
                            fechaAlta,
                            tarjetaSistema,
                            tarjetaFisica,
                            razonSocial,
                            asignado,
                            marca,
                            modelo,
                            color,
                            placas,
                            tipoPension,
                            estatus,
                            costo,
                            factura,
                            pago,
                            venta,
                            reposicion,
                            recargos,
                            fechaDeposito,
                            movimiento,
                            archivo,
                            observaciones,
                            estacionamiento_id,
                            fechaCreacion,
                            fechaActualizacion,
                            creado_por

                            )
                            SELECT 
                            contrato,
                            '$fechaUpdate' as fechaAlta,
                            tarjetaSistema,
                            tarjetaFisica,
                            razonSocial,
                            asignado,
                            marca,
                            modelo,
                            color,
                            placas,
                            tipoPension,
                            0 as estatus,
                            costo,
                            factura,
                            pago,
                            venta,
                            reposicion,
                            recargos,
                            fechaDeposito,
                            movimiento,
                            archivo,
                            observaciones,
                            estacionamiento_id,
                            fechaCreacion,
                            fechaActualizacion,
                            creado_por
                            FROM cat_pensiones
                            WHERE id_cat_pensiones=$id_cat_pensiones");


             $CatpensionID = $this->db->insert_id();

              $result_foto =$this->db->query("
                                INSERT INTO pensiones(
                                id_cat_pensiones,
                                fechaAlta,
                                estatus,
                                fichaPago,
                                ultimaActualizacion,
                                creado_por,
                                modificado_por
                                )
                                SELECT 
                                $CatpensionID AS id_cat_pensiones,
                               '$fechaUpdate' as fechaAlta,
                                0 as estatus,
                                fichaPago,
                                ultimaActualizacion,
                                creado_por,
                                modificado_por
                                FROM pensiones
                                WHERE id_cat_pensiones=$id_cat_pensiones");



          }else{

              $result =  $this->db->update('cat_pensiones', array("estatus" => 1), array("id_cat_pensiones"=>$id_cat_pensiones)); //ok
          }*/

    

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

                $result = $this->db->insert('pensiones', array("id_cat_pensiones"=>$inserted_id,"estatus"=>$data['estatus'],"creado_por"=>$data["creado_por"],"fechaAlta"=>$data['fechaAlta']));

               $idCatPension=$inserted_id;

               $pensionID = $this->db->insert_id();

                //flujo para tener la bitácora de pensiones pensiones_foto_mes y  cat_pensiones_foto_mes

                $data['id_cat_pensiones']=$idCatPension;

               /* $result = $this->db->insert('cat_pensiones_foto_mes', $data);
                $query = $this->db->get_where('cat_pensiones_foto_mes', array('id_cat_pensiones' =>$idCatPension));
                $inserted_data_foto = $query->row_array();



                $result_foto = $this->db->insert('pensiones_foto_mes', array("id_pensiones"=>$pensionID ,"id_cat_pensiones"=>$inserted_id,"estatus"=>$data['estatus'],"creado_por"=>$data["creado_por"],"fechaAlta"=>$data['fechaAlta']));*/




                //fin de flujo de pensiones
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

          $id_cat_pensiones=$data['id_cat_pensiones'];

          $this->db->select("fechaAlta");
          $this->db->from("pensiones");
          $this->db->where("id_cat_pensiones",$id_cat_pensiones);
          $result = $this->db->get();
          $fechaAlta=$result->result_array();

        //  print_r($fechaAlta[0]['fechaAlta']);

          $fechaUpdate=$data['fechaAlta']." 00:00:00";


          if($fechaAlta[0]['fechaAlta']!=$fechaUpdate){

           
          $result_foto =$this->db->query("INSERT INTO cat_pensiones(
                            contrato,
                            fechaAlta,
                            tarjetaSistema,
                            tarjetaFisica,
                            razonSocial,
                            asignado,
                            marca,
                            modelo,
                            color,
                            placas,
                            tipoPension,
                            estatus,
                            costo,
                            factura,
                            pago,
                            venta,
                            reposicion,
                            recargos,
                            fechaDeposito,
                            movimiento,
                            archivo,
                            observaciones,
                            estacionamiento_id,
                            fechaCreacion,
                            fechaActualizacion,
                            creado_por

                            )
                            SELECT 
                            contrato,
                            '$fechaUpdate' as fechaAlta,
                            tarjetaSistema,
                            tarjetaFisica,
                            razonSocial,
                            asignado,
                            marca,
                            modelo,
                            color,
                            placas,
                            tipoPension,
                            0 as estatus,
                            costo,
                            factura,
                            pago,
                            venta,
                            reposicion,
                            recargos,
                            fechaDeposito,
                            movimiento,
                            archivo,
                            observaciones,
                            estacionamiento_id,
                            fechaCreacion,
                            fechaActualizacion,
                            creado_por
                            FROM cat_pensiones
                            WHERE id_cat_pensiones=$id_cat_pensiones");


             $CatpensionID = $this->db->insert_id();

              $result_foto =$this->db->query("
                                INSERT INTO pensiones(
                                id_cat_pensiones,
                                fechaAlta,
                                estatus,
                                fichaPago,
                                ultimaActualizacion,
                                creado_por,
                                modificado_por
                                )
                                SELECT 
                                $CatpensionID AS id_cat_pensiones,
                               '$fechaUpdate' as fechaAlta,
                                0 as estatus,
                                fichaPago,
                                ultimaActualizacion,
                                creado_por,
                                modificado_por
                                FROM pensiones
                                WHERE id_cat_pensiones=$id_cat_pensiones");

                //fin de mover pensiones

          }
   

        
      
       // $result =  $this->db->update('pensiones', array("fechaAlta"=>$data['fechaAlta']), $where);

        $result =  $this->db->update('pensiones', array("estatus"=>$data['estatus']), $where);

        $result =  $this->db->update('cat_pensiones_foto_mes', array("estatus"=>$data['estatus']), $where);
        //$result =  $this->db->update('pensiones_foto_mes', array("estatus"=>$data['estatus']), $where);

        unset($data['id_cat_pensiones']);

        $result =  $this->db->update('cat_pensiones', $data, $where);

       // unset($data['fechaAlta']);
       // $result =  $this->db->update('cat_pensiones_foto_mes', $data, $where);

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

    public function extraerHistorico($id_cat_pensiones,$contrato,$estacionamiento)
    {

        //buscamos por contrato y estacionamiento id

        $this->db->distinct();
        $this->db->select("c.id_cat_pensiones,c.contrato,c.tarjetaSistema,c.tarjetaFisica,c.razonSocial,c.asignado,c.marca,c.modelo,c.color,c.placas,c.tipoPension,c.costo,c.factura,c.pago,c.venta,c.reposicion,c.recargos,c.fechaDeposito,c.movimiento,c.observaciones,p.fechaAlta, c.estatus, p.fichaPago, c.archivo, c.estacionamiento_id");
        $this->db->from("V_cat_pensiones_gral c");
        $this->db->join("V_pensiones_gral p","c.id_cat_pensiones = p.id_cat_pensiones","left");
       // $this->db->join("pensiones p","c.id_cat_pensiones = p.id_cat_pensiones");
        $this->db->where("c.contrato",$contrato);
        $this->db->where("c.estacionamiento_id",$estacionamiento);
        $this->db->where("c.fechaBaja !=''");
       $this->db->where("c.movimiento= (SELECT MAX(movimiento) FROM V_cat_pensiones_gral d
        WHERE `d`.`contrato` = '$contrato'
        AND `d`.`estacionamiento_id` = $estacionamiento
        AND `d`.`fechaBaja` != '' )");
                $this->db->order_by("p.id_pensiones","ASC");

       // echo $this->db->get_compiled_select();

        //exit();

        
        $result = $this->db->get();
        $data = array();
        foreach ($result->result_array() as $row) {
                $data[] = array(
                    "id_cat_pensiones" => $row["id_cat_pensiones"],
                    "contrato" => $row["contrato"],
                    "fechaAlta" => ($row['fechaAlta'] != '' ? date("Y-m-d", strtotime($row['fechaAlta'])) : ''),
                    "fechaBaja" => "", //date('Y-m-d', strtotime(date('Y-m-06', strtotime('+1 month')))))
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