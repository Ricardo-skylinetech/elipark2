<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pensiones extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pensiones_model', 'mPensiones', TRUE);
        $this->load->model('_Catalogos/Estacionamientos_model', 'mEstacionamientos', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('respuesta');
        $this->session->userdata('loggedin') == TRUE || redirect('login/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['estacionamiento'] = $this->mEstacionamientos->getEstacionamientosSelect();
        $this->load->view('pensiones/index', $data);
    }

    public function getContratos()
    {
        $parking = $this->input->post('estacionamiento');

        $estacionamiento = ($parking !== "" ? $parking : $this->session->userdata('id_estacionamiento'));

        $result = $this->mPensiones->getContratos($estacionamiento);
        return respuesta_json($result);
    }

    public function getRazonSocial()
    {
        $parking = $this->input->post('estacionamiento');

        $estacionamiento = ($parking !== "" ? $parking : $this->session->userdata('id_estacionamiento'));

        $result = $this->mPensiones->getRazonSocial($estacionamiento);
        return respuesta_json($result);
    }

    public function getTarjetaSistema()
    {
        $parking = $this->input->post('estacionamiento');

        $estacionamiento = ($parking !== "" ? $parking : $this->session->userdata('id_estacionamiento'));

        $result = $this->mPensiones->getTarjetaSistema($estacionamiento);
        return respuesta_json($result);
    }

    public function getTarjetaFisica()
    {
        $parking = $this->input->post('estacionamiento');

        $estacionamiento = ($parking !== "" ? $parking : $this->session->userdata('id_estacionamiento'));

        $result = $this->mPensiones->getTarjetaFisica($estacionamiento);
        return respuesta_json($result);
    }

    public function getPensiones()
    {
        $data = $this->input->post();

        $select = '';
        $parking = '';
        $todo="";
        $activas="";
        $inactivas="";
        $filtroFoto=0;

        foreach ($data as $item) {
            if ($item['name'] == 'estacionamiento') {
                $parking = $item['value'];
            } elseif ($item['name'] == 'radio') {
                $select = $item['value'];
            } elseif ($item['name'] == 'todo') {
                $todo = $item['value'];
            } elseif ($item['name'] == 'activas') {
                $activas = $item['value'];
            } elseif ($item['name'] == 'fechaMes') {
                $fechaMes = $item['value'];
            }elseif ($item['name'] == 'inactivas') {
                $inactivas = $item['value'];
            }
            elseif ($item['name'] == 'filtroFoto') {
                $filtroFoto = $item['value'];
            }

            else {
                $select = $item['value'];
            }
        }
     
   
        $estacionamiento = ($parking !== "" ? $parking : $this->session->userdata('id_estacionamiento'));
        $result = $this->mPensiones->getPensiones($select,$estacionamiento,$todo,$activas,$inactivas,$fechaMes,$filtroFoto);
        return respuesta_json($result);
    }

    public function extraerDetalle()
    {
        $id = $this->input->post('id');
        $result = $this->mPensiones->extraerDetalle($id);
        return respuesta_json($result);
    }

    public function importLayout()
    {
        $nombre_archivo = $_FILES['file']['name'];
        $fechaIngreso = (isset($fechaIngreso) ? $fechaIngreso : date('Y-m-d'));
        
        $arr_file = explode('.', $nombre_archivo);
        $extension = end($arr_file);
        if ('xls' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        ob_start();

        try {
            $reader->setReadDataOnly(true);
            $reader->setReadEmptyCells(false);
            $archivo = $_FILES['file']['tmp_name'];
            $spreadsheet = $reader->load($archivo);

            $sheetData = $spreadsheet->setActiveSheetIndex(0)->toArray(null, true, true, true);
            $total_registros = sizeof($sheetData);
            // var_dump($total_registros);

            $dataToInsert = array();
            for ($fila = 10; $fila < $total_registros; $fila++) { //fila
                if ($sheetData[$fila]["A"] !== "" && $sheetData[$fila]["A"] !== NULL) {

                    $dataToInsert[] = array(
                        "no" => $sheetData[$fila]["A"],
                        "fechaAlta" => $sheetData[$fila]["B"],
                        "fechaBaja" => $sheetData[$fila]["C"],
                        "tarjetaSistema" => $sheetData[$fila]["D"],
                        "tarjetaFisica" => $sheetData[$fila]["E"],
                        "razonSocial" => $sheetData[$fila]["F"],
                        "asignado" => $sheetData[$fila]["G"],
                        "marca" => $sheetData[$fila]["H"],
                        "modelo" => $sheetData[$fila]["I"],
                        "color" => $sheetData[$fila]["J"],
                        "placas" => $sheetData[$fila]["K"],
                        "tipoPension" => $sheetData[$fila]["L"],
                        "estatus" => $sheetData[$fila]["M"],
                        "costo" => $sheetData[$fila]["N"],
                        "factura" => $sheetData[$fila]["P"],
                        "pago" => $sheetData[$fila]["Q"],
                        "ventaReposicion" => $sheetData[$fila]["R"],
                        "recargos" => $sheetData[$fila]["S"],
                        "fechaDeposito" => $sheetData[$fila]["T"],
                        "movimiento" => $sheetData[$fila]["U"],
                        "observaciones" => $sheetData[$fila]["V"],
                        "creado_por" => $this->session->userdata('id_usuario')
                    );
                }
            }
            $this->mPensiones->guardarLayout("pensiones", $dataToInsert);

            $result['validacion'] = true;
            $result['icon'] = 'success';
            $result['mensaje'] = "Se importo con éxito";
            return respuesta_json($result);
        } catch (Exception $e) {
            // echo "Excepción capturada: ",  $e->getMessage(), "\n";
            ob_end_clean();
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: " .  $e->getMessage();
            return respuesta_json($result);
        }
    }

    public function subirFicha()
    {
        $id_cat_pensiones = $this->input->post('id_cat_pensiones');
        $contrato = $this->input->post('contrato');
        $fechaDoc=$this->input->post('fechaAltaDoc');

        try {
            $result = array();
            $tmp_name = $_FILES['file2']['name'];
            $la_extension  = explode('.', $tmp_name);
            $ls_extension = strtolower(end($la_extension));
            if ($ls_extension == 'pdf') {
                $no = preg_replace('/\s+/', '', $contrato);
                $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/pensiones/".$contrato;
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }

                $rutaDestino =  $rutaDestino."/";

                $nombre_archivo = $contrato . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                // var_dump($nombre_archivo);
                if (move_uploaded_file($_FILES['file2']['tmp_name'], $rutaDestino . $nombre_archivo)) {
                    $result = $this->mPensiones->guardarFicha($id_cat_pensiones, $nombre_archivo,$fechaDoc);

                    return respuesta_json($result);
                } else {
                    $result['validacion'] = false;
                    $result['icon'] = 'error';
                    $result['mensaje'] = "Ocurrió algún error al subir el archivo. No pudo guardarse.";
                    return respuesta_json($result);
                }
            } else {
                $result['validacion'] = false;
                $result['icon'] = 'error';
                $result['mensaje'] = "El archivo que intenta subir no es válido. Favor de verificar.";
                return respuesta_json($result);
            }
        } catch (Exception $e) {
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: " .  $e->getMessage();
            return respuesta_json($result);
        }
    }

    public function nuevaPension()
    {
        $data = $this->input->post();

        foreach ($data as $key => $value) {
            $new_key = str_replace("n-", "", $key);
            if ($new_key !== $key) {
                unset($data[$key]);
                $data[$new_key] = $value;
            }
        }


          if(!isset($data['estatus'])){

             $data["estatus"]=0;
          }

          if($data['tipoPension']=="CORTESIA" && $data['pago']==0){

                $data["estatus"]=1;
          }


        if(empty($data['fechaAlta'])) {
            unset($data["fechaAlta"]);
        }

        if(empty($data['fechaBaja'])) {
            unset($data["fechaBaja"]);
        }



        try {
            $result = array();
            $tmp_name = $_FILES['archivo']['name'];
            $la_extension  = explode('.', $tmp_name);
            $ls_extension = strtolower(end($la_extension));
            if ($ls_extension == 'pdf') {
                $no = preg_replace('/\s+/', '', $this->input->post('nocontrato'));
                $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/pensiones/".$data["contrato"];
                
                if (!file_exists($rutaDestino)) {
                    mkdir($rutaDestino, 0777, true);
                }

                $rutaDestino =  $rutaDestino."/";

                $nombre_archivo = "CONTRATO-".$data["contrato"] . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                $data["archivo"] = $nombre_archivo;

              
                // var_dump($nombre_archivo);
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaDestino . $nombre_archivo)) {
                    $result = $this->mPensiones->insertarDatos($data);
                } else {
                    $result['validacion'] = false;
                    $result['icon'] = 'error';
                    $result['mensaje'] = "Ocurrió algún error al subir el archivo. No pudo guardarse.";
                }
            } else {
                $result['validacion'] = false;
                $result['icon'] = 'error';
                $result['mensaje'] = "El archivo que intenta subir no es válido. Favor de verificar.";
            }
        } catch (Exception $e) {
            $result['validacion'] = false;
            $result['icon'] = 'error';
            $result['mensaje'] = "Excepción capturada: " .  $e->getMessage();
        }

        return respuesta_json($result);
    }

    public function editarPension()
    {
        $data = $this->input->post();

        foreach ($data as $key => $value) {
            $new_key = str_replace("e-", "", $key);
            if ($new_key !== $key) {
                unset($data[$key]);
                $data[$new_key] = $value;
            }
        }

        if(isset($_FILES['eArchivo']['name'])) {
            if($_FILES['eArchivo']['name'] != "") {
                try {
                    $result = array();
                    $tmp_name = $_FILES['eArchivo']['name'];
                    $la_extension  = explode('.', $tmp_name);
                    $ls_extension = strtolower(end($la_extension));
                    if ($ls_extension == 'pdf') {
                        $no = preg_replace('/\s+/', '', $this->input->post('nocontrato'));
                        $rutaDestino =  __DIR__ . "/../../../eliparkDocs/comprobantes/pensiones/".$data["contrato"];
                        
                        if (!file_exists($rutaDestino)) {
                            mkdir($rutaDestino, 0777, true);
                        }

                        $rutaDestino =  $rutaDestino."/";

                        $nombre_archivo = "CONTRATO-".$data["contrato"] . "_" . date('Y-m-d') . "_" . date('His').".pdf";
                        $data["archivo"] = $nombre_archivo;
                        // var_dump($nombre_archivo);
                        if (move_uploaded_file($_FILES['eArchivo']['tmp_name'], $rutaDestino . $nombre_archivo)) {
                            $result = $this->mPensiones->actualizarDatos($data);
                        } else {
                            $result['validacion'] = false;
                            $result['icon'] = 'error';
                            $result['mensaje'] = "Ocurrió algún error al subir el archivo. No pudo guardarse.";
                        }
                    } else {
                        $result['validacion'] = false;
                        $result['icon'] = 'error';
                        $result['mensaje'] = "El archivo que intenta subir no es válido. Favor de verificar.";
                    }
                } catch (Exception $e) {
                    $result['validacion'] = false;
                    $result['icon'] = 'error';
                    $result['mensaje'] = "Excepción capturada: " .  $e->getMessage();
                }
            }
        } else {
            
            if(empty($data['fechaAlta'])) {
                unset($data["fechaAlta"]);
            }

            if(empty($data['fechaBaja'])) {
                unset($data["fechaBaja"]);
            }

            $result = $this->mPensiones->actualizarDatos($data);
        }

        return respuesta_json($result);
    }

    public function extraerHistorico()
    {
        $id = $this->input->post('id');
        $contrato= $this->input->post('contrato');
        $estacionamiento=$this->input->post('estacionamiento');
        $result = $this->mPensiones->extraerHistorico($id,$contrato,$estacionamiento);
        return respuesta_json($result);
    }







    public function sensarpensiones(){

        date_default_timezone_set("America/Chihuahua");

     

        $this->db->select(
                        "curdate() as Hoy,
                        ADDDATE(SUBDATE(curdate(), DAYOFMONTH(curdate()) - 1), INTERVAL 5 DAY) as proxInactivar,
                        (CASE
                        WHEN curdate() = ADDDATE(SUBDATE(curdate(), DAYOFMONTH(curdate()) - 1), INTERVAL 5 DAY) THEN 1
                        ELSE 0
                        END) as bandera") ;

        $query = $this->db->get();
        $result=$query->result_array();


        //consultamos bandera de disparo

        $banderaR= $this->db->query("SELECT bandera FROM pensiones_estatus_inactivas_6 where id=1");
        $ok=$banderaR->result_array();

     
        if($result[0]['bandera']==1 && $ok[0]['bandera']==0){


                $result= $this->db->query("SELECT count(*) as total FROM cat_pensiones_foto_mes WHERE fechaAlta < curdate() - INTERVAL 5 DAY");
                $total=$result->result_array();

          //print_r($total[0]['total']); 


                  if($total[0]['total']==0){

                  //  echo "clonamos toda la tabla pensiones antes de realizar el update de inactivas";

                     $this->db->query("INSERT INTO cat_pensiones_foto_mes SELECT * from cat_pensiones WHERE fechaAlta < curdate() - INTERVAL 5 DAY");
                     $this->db->query("INSERT INTO pensiones_foto_mes SELECT * from pensiones WHERE fechaAlta < curdate() - INTERVAL 5 DAY");

                  }
                 else{


                      //consultamos tabla cat_pensiones id por id si no existe en tabla cat_foto lo insertamos, una vez insertado todo validamos de nuevo si total = total

                       $ValidaCat= $this->db->query("SELECT id_cat_pensiones FROM cat_pensiones WHERE fechaAlta < curdate() - INTERVAL 5 DAY");
                       $totalCat=$ValidaCat->result_array();

                       $this->db->query("UPDATE pensiones_foto_mes SET bandera=1 WHERE fechaAlta < curdate() - INTERVAL 5 DAY");

                       $fecha=date('Y-m-d');

                       

                       $this->db->query("UPDATE pensiones_foto_mes SET fechaBaja='$fecha' WHERE fechaAlta < curdate() - INTERVAL 5 DAY");

                       $this->db->query("UPDATE cat_pensiones_foto_mes SET fechaBaja='$fecha' WHERE fechaAlta < curdate() - INTERVAL 5 DAY");


                          foreach ($ValidaCat->result_array() as $row) {

                                $id_cat_pensiones=$row["id_cat_pensiones"];
                                $resultCatValida= $this->db->query("SELECT * FROM cat_pensiones_foto_mes WHERE id_cat_pensiones=$id_cat_pensiones");
                                $totalCatOK=$resultCatValida->result_array();

                                //update bandera a 1 para inactivarlas



                                //echo count($totalCatOK);
                                if(count($totalCatOK)==0 ){

                                  // echo $id_cat_pensiones." no existe lo insertamos";

                                    //clonamos el id en foto_mes
                                    $this->db->query("INSERT INTO cat_pensiones_foto_mes SELECT * from cat_pensiones WHERE id_cat_pensiones=$id_cat_pensiones");
                                    $this->db->query("INSERT INTO pensiones_foto_mes SELECT * from  pensiones WHERE id_cat_pensiones=$id_cat_pensiones");

                                }


                            }


                       //print_r($ValidaCat);

                     //  exit();




                       $resultCat= $this->db->query("SELECT count(*) as total FROM cat_pensiones_foto_mes WHERE fechaAlta < curdate() - INTERVAL 5 DAY");
                       $totalCatP=$resultCat->result_array();

                    //echo $totalCatP[0]['total'];

                    //echo count($totalCat);


                      // echo "entramos a validar si cat_pensiones_foto_mes  == cat_pensiones";

                     //  echo count($totalCatP[0]['total']);

                     if(count($totalCat)==$totalCatP[0]['total']){

                       // echo "entramos a desactivar y ponerlas a todas en fecha de alta a fecha actual";

                        //desactivamos las pensiones no se afectan los primeros 5 días del mes inicial
                        $this->db->update('pensiones', array("estatus" => 0, "bandera" =>0, "fechaAlta" =>date('Y-m-d')), "fechaAlta < curdate() - INTERVAL 5 DAY");
                         $this->db->update('cat_pensiones', array("estatus" => 0, "fechaAlta" =>date('Y-m-d')), "fechaAlta < curdate() - INTERVAL 5 DAY");


                         $this->db->query("UPDATE pensiones_estatus_inactivas_6 SET bandera=1 where id=1");
                         //ponermos bandera de status de ejecion en 1 para que ya no vuelva a entrar


                     }
                 }

               
              $response=new stdClass();
              $response->valida="Se han actualizado las pensiones a inactivas";
  
        }else{

     
            //actualizamos bandera a 0
              $this->db->query("UPDATE pensiones_estatus_inactivas_6 SET bandera=0 where id=1");
              $response=new stdClass();
              $response->valida="todo bien, proxima fecha de inactivacion : ".$result[0]['proxInactivar'];
         
        }



        echo json_encode($response);

    }


public function sensarpensionesv2(){

        //validamos si estamos en día 6

         $this->db->select(
                        "curdate() as Hoy,
                        ADDDATE(SUBDATE(curdate(), DAYOFMONTH(curdate()) - 1), INTERVAL 5 DAY) as proxInactivar,
                        (CASE
                        WHEN curdate() = ADDDATE(SUBDATE(curdate(), DAYOFMONTH(curdate()) - 1), INTERVAL 5 DAY) THEN 1
                        ELSE 0
                        END) as bandera") ;

        $query = $this->db->get();
        $result=$query->result_array();


        $banderaR= $this->db->query("SELECT bandera FROM pensiones_estatus_inactivas_6 where id=1");
        $ok=$banderaR->result_array();

     
        if($result[0]['bandera']==1 && $ok[0]['bandera']==0){

            //entramos al proceso para consultar las pensiones 

              $pensiones= $this->db->query("SELECT id_cat_pensiones,fechaAlta,estatus, tipoPension FROM cat_pensiones WHERE fechaAlta < curdate() - INTERVAL 5 DAY AND tipoPension !='CORTESIA'");
              $resultPensiones=$pensiones->result_array();

              //recorremos todas las pensiones y validamos si existen en tabla de foto validar id de pensión y fecha de alta
                        foreach ($resultPensiones as $row) {

                                    $id_cat_pensiones=$row["id_cat_pensiones"];
                                    $fechaPension=$row["fechaAlta"];
                                    $estatus=$row["estatus"];

                                    //consultamos en tabla de fotos
                               $resultCatValida= $this->db->query("SELECT * FROM cat_pensiones_foto_mes WHERE id_cat_pensiones=$id_cat_pensiones");
                                $totalCatOK=$resultCatValida->result_array();


                               // echo count($totalCatOK);

                                if($totalCatOK>0){

                                 $this->db->update('cat_pensiones_foto_mes', array("estatus" =>$estatus),  array("id_cat_pensiones"=>$id_cat_pensiones));


                                }else{

                                        $this->db->query("INSERT INTO cat_pensiones_foto_mes SELECT * from cat_pensiones WHERE id_cat_pensiones=$id_cat_pensiones");
                                
                                        $this->db->query("INSERT INTO pensiones_foto_mes SELECT * from  pensiones WHERE id_cat_pensiones=$id_cat_pensiones");

                                        $this->db->query("UPDATE pensiones_foto_mes SET bandera=1 WHERE id_cat_pensiones=$id_cat_pensiones");


                                }

            
            //actualizamos fecha de baja y fecha de alta vacia en pensiones y cat_pensiones, status 0 para dejarla como nueva
            $this->db->update('pensiones', array("estatus" => 0, "bandera" =>0, "fechaAlta" =>'',"fechaBaja" =>date('Y-m-d')),  array("id_cat_pensiones"=>$id_cat_pensiones));
            $this->db->update('cat_pensiones', array("estatus" => 0, "fechaAlta" =>'',"fechaBaja" =>date('Y-m-d')),  array("id_cat_pensiones"=>$id_cat_pensiones));


            }

             $this->db->query("UPDATE pensiones_estatus_inactivas_6 SET bandera=0 where id=1");
             $response=new stdClass();
             $response->valida="Se han actualizado las pensiones";
             

        }else{

              $response=new stdClass();
              $response->valida="todo bien, proxima fecha de inactivacion : ".$result[0]['proxInactivar'];
        }


       echo json_encode($response);


    }//fin de sensor


    


}