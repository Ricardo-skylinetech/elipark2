<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Panel
// $route['descargarLayout'] = "panel/descargarLayout";
// $route['importLayout'] = "panel/importLayout";
// $route['extraerDetalle'] = "panel/extraerDetalle";
// $route['detalle/(:num)'] = "panel/detalle/$1";
// $route['imprimirCedula/(:num)'] = "panel/imprimirCedula/$1";
// $route['cedulaGte'] = "panel/subirCedula";
// $route['cedulaAudit'] = "panel/subirCedula";
// $route['importPDF'] = "panel/importDetalleCajeros";
// $route['eliminarLay_tmp'] = "panel/eliminarLay_tmp";

//Detalle Panel
// $route['getBexpedidos'] = "panel/getBexpedidos";
// $route['getBcobrados'] = "panel/getBcobrados";
// $route['getValesDescuento'] = "panel/getValesDescuento";
// $route['getTarifasEspeciales'] = "panel/getTarifasEspeciales";
// $route['getBrecobros'] = "panel/getBrecobros";
// $route['getBvalet'] = "panel/getBvalet";
// $route['getValesretornar'] = "panel/getValesretornar";
// $route['getBpensiones'] = "panel/getBpensiones";
// $route['getBsinCobro'] = "panel/getBsinCobro";
// $route['getBvalidaciones'] = "panel/getBvalidaciones";

//Catalogos Estacionamientos
$route['getEstacionamientos'] = "_Catalogos/Estacionamientos/getEstacionamientos";
$route['insertEstacionamiento'] = "_Catalogos/Estacionamientos/insertEstacionamiento";
$route['updateEstacionamiento'] = "_Catalogos/Estacionamientos/updateEstacionamiento";
$route['importTarifas'] = "_Catalogos/Estacionamientos/importTarifas";
$route['verTarifas'] = "_Catalogos/Estacionamientos/verTarifas";
$route['eliminarTarifas'] = "_Catalogos/Estacionamientos/eliminarTarifas";
$route['updateLimit'] = "_Catalogos/Estacionamientos/updateLimit";

//Catalogos Boletos Expedidos
$route['getCatBexpedidos'] = "_Catalogos/_Boletos/Expedidos/getCatBexpedidos";
$route['updateEstatusCatBexpedidos'] = "_Catalogos/_Boletos/Expedidos/updateEstatusCatBexpedidos";
$route['insertConceptoCatBexpedidos'] = "_Catalogos/_Boletos/Expedidos/insertConceptoCatBexpedidos";
$route['updateConceptoCatBexpedidos'] = "_Catalogos/_Boletos/Expedidos/updateConcepto";

//Catalogos Boletos Cobrados
$route['getCatBcobrados'] = "_Catalogos/_Boletos/Cobrados/getCatBcobrados";
$route['getCatTcobrados'] = "_Catalogos/_Boletos/Cobrados/getCatTcobrados";
$route['updateEstatusCatBcobrados'] = "_Catalogos/_Boletos/Cobrados/updateEstatusCatBcobrados";
$route['updateEstatusCatTcobrados'] = "_Catalogos/_Boletos/Cobrados/updateEstatusCatTcobrados";
$route['insertConceptoCatBcobrados'] = "_Catalogos/_Boletos/Cobrados/insertConceptoCatBcobrados";
$route['insertTarifaCatTcobrados'] = "_Catalogos/_Boletos/Cobrados/insertTarifaCatTcobrados";
$route['updateConceptoCatBcobrado'] = "_Catalogos/_Boletos/Cobrados/updateConcepto";
$route['updateTarifaCatBcobrado'] = "_Catalogos/_Boletos/Cobrados/updateTarifa";

//Catalogos Boletos Vales de Descuento
$route['getCatValesDescuento'] = "_Catalogos/_Boletos/ValesDescuento/getCatValesDescuento";
$route['updateEstatusCatValesDescuento'] = "_Catalogos/_Boletos/ValesDescuento/updateEstatusCatValesDescuento";
$route['insertConceptoCatValesDescuento'] = "_Catalogos/_Boletos/ValesDescuento/insertConceptoCatValesDescuento";
$route['updateConceptoCatValesDescuento'] = "_Catalogos/_Boletos/ValesDescuento/updateConcepto";

//Catalogos Boletos Tarifas Especiales
$route['getCatBtarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/getCatBtarifasEspeciales";
$route['getCatTtarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/getCatTtarifasEspeciales";
$route['updateEstatusCatTarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/updateEstatusCatTarifasEspeciales";
$route['updateEstatusCatTtarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/updateEstatusCatTtarifasEspeciales";
$route['insertConceptoCatTarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/insertConceptoCatTarifasEspeciales";
$route['insertTarifaCatTtarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/insertTarifaCatTtarifasEspeciales";
$route['updateConceptoCatBtarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/updateConcepto";
$route['updateTarifaCatTtarifasEspeciales'] = "_Catalogos/_Boletos/TarifasEspeciales/updateTarifa";

//Catalogos Boletos Valet
$route['getCatBoletosValet'] = "_Catalogos/_Boletos/Valet/getCatBoletosValet";
$route['updateEstatusCatValet'] = "_Catalogos/_Boletos/Valet/updateEstatusCatValet";
$route['insertConceptoCatValet'] = "_Catalogos/_Boletos/Valet/insertConceptoCatValet";
$route['updateConceptoCatValet'] = "_Catalogos/_Boletos/Valet/updateConcepto";

//Catalogos Boletos Recobros
$route['getCatBrecobros'] = "_Catalogos/_Boletos/Recobros/getCatBrecobros";
$route['getCatTrecobros'] = "_Catalogos/_Boletos/Recobros/getCatTrecobros";
$route['updateEstatusCatBrecobros'] = "_Catalogos/_Boletos/Recobros/updateEstatusCatBrecobros";
$route['updateEstatusCatTrecobros'] = "_Catalogos/_Boletos/Recobros/updateEstatusCatTrecobros";
$route['insertConceptoCatBrecobros'] = "_Catalogos/_Boletos/Recobros/insertConceptoCatBrecobros";
$route['insertTarifaCatTrecobros'] = "_Catalogos/_Boletos/Recobros/insertTarifaCatTrecobros";
$route['updateConceptoCatBrecobros'] = "_Catalogos/_Boletos/Recobros/updateConcepto";
$route['updateTarifaCatTrecobros'] = "_Catalogos/_Boletos/Recobros/updateTarifa";

//Catalogos Boletos Pases
$route['getCatBPases'] = "_Catalogos/_Boletos/Pases/getCatBPases";
$route['getCatTPases'] = "_Catalogos/_Boletos/Pases/getCatTPases";
$route['updateEstatusCatBPases'] = "_Catalogos/_Boletos/Pases/updateEstatusCatBPases";
$route['updateEstatusCatTPases'] = "_Catalogos/_Boletos/Pases/updateEstatusCatTPases";
$route['insertConceptoCatBPases'] = "_Catalogos/_Boletos/Pases/insertConceptoCatBPases";
$route['insertTarifaCatTPases'] = "_Catalogos/_Boletos/Pases/insertTarifaCatTPases";
$route['updateConceptoCatBPases'] = "_Catalogos/_Boletos/Pases/updateConcepto";
$route['updateTarifaCatTPases'] = "_Catalogos/_Boletos/Pases/updateTarifa";


//Catalogos Boletos Vales a Retornar
$route['getCatValesRetornar'] = "_Catalogos/_Boletos/ValesRetornar/getCatValesRetornar";
$route['updateEstatusCatValesRetornar'] = "_Catalogos/_Boletos/ValesRetornar/updateEstatusCatValesRetornar";
$route['insertConceptoValesRetornar'] = "_Catalogos/_Boletos/ValesRetornar/insertConceptoValesRetornar";
$route['updateConceptoValesRetornar'] = "_Catalogos/_Boletos/ValesRetornar/updateConcepto";

//Catalogos Boletos Pensiones
$route['getCatBpensiones'] = "_Catalogos/_Boletos/Pensiones/getCatBpensiones";
$route['getCatTpensiones'] = "_Catalogos/_Boletos/Pensiones/getCatTpensiones";
$route['updateEstatusCatBpensiones'] = "_Catalogos/_Boletos/Pensiones/updateEstatusCatBpensiones";
$route['updateEstatusCatTpensiones'] = "_Catalogos/_Boletos/Pensiones/updateEstatusCatTpensiones";
$route['insertConceptoCatBpensiones'] = "_Catalogos/_Boletos/Pensiones/insertConceptoCatBpensiones";
$route['insertTarifaCatTpensiones'] = "_Catalogos/_Boletos/Pensiones/insertTarifaCatTpensiones";
$route['updateConceptoCatBpensiones'] = "_Catalogos/_Boletos/Pensiones/updateConcepto";
$route['updateTarifaCatTpensiones'] = "_Catalogos/_Boletos/Pensiones/updateTarifa";

//Catalogos Boletos Sin Cobro
$route['getCatBsinCobro'] = "_Catalogos/_Boletos/SinCobro/getCatBsinCobro";
$route['updateEstatusCatBsinCobro'] = "_Catalogos/_Boletos/SinCobro/updateEstatusCatBsinCobro";
$route['insertConceptoBsinCobro'] = "_Catalogos/_Boletos/SinCobro/insertConceptoBsinCobro";
$route['updateConceptoBsinCobro'] = "_Catalogos/_Boletos/SinCobro/updateConcepto";

//Catalogos Boletos Sin Cobro Rotación
// $route['getCatBsinCobroR'] = "_Catalogos/_Boletos/SinCobroR/getCatBsinCobroR";
// $route['updateEstatusCatBsinCobroR'] = "_Catalogos/_Boletos/SinCobroR/updateEstatusCatBsinCobroR";
// $route['insertConceptoBsinCobroR'] = "_Catalogos/_Boletos/SinCobroR/insertConceptoBsinCobroR";

//Catalogos Boletos de Operación
$route['getCatBoperacion'] = "_Catalogos/_Boletos/Operacion/getCatBoperacion";
$route['updateEstatusCatBoperacion'] = "_Catalogos/_Boletos/Operacion/updateEstatusCatBoperacion";
$route['insertConceptoBoperacion'] = "_Catalogos/_Boletos/Operacion/insertConceptoBoperacion";
$route['updateConceptoBoperacion'] = "_Catalogos/_Boletos/Operacion/updateConcepto";

//Catalogos Boletos de Vouchers
$route['getCatBvouchers'] = "_Catalogos/_Boletos/Vouchers/getCatBvouchers";
$route['updateEstatusCatBvouchers'] = "_Catalogos/_Boletos/Vouchers/updateEstatusCatBvouchers";
$route['insertConceptoBvouchers'] = "_Catalogos/_Boletos/Vouchers/insertConceptoBvouchers";
$route['updateConceptoBvouchers'] = "_Catalogos/_Boletos/Vouchers/updateConcepto";

//Catalogos Boletos Validaciones
$route['getCatBvalidaciones'] = "_Catalogos/_Boletos/Validaciones/getCatBvalidaciones";
$route['updateEstatusCatBvalidaciones'] = "_Catalogos/_Boletos/Validaciones/updateEstatusCatBvalidaciones";
$route['insertConceptoBvalidaciones'] = "_Catalogos/_Boletos/Validaciones/insertConceptoBvalidaciones";
$route['updateConceptoBvalidaciones'] = "_Catalogos/_Boletos/Validaciones/updateConcepto";

//Catalogos Boletos Informativo
// $route['getCatBinformativo'] = "_Catalogos/_Boletos/Informativo/getCatBinformativo";
// $route['updateEstatusCatBinformativo'] = "_Catalogos/_Boletos/Informativo/updateEstatusCatBinformativo";
// $route['insertConceptoCatBinformativo'] = "_Catalogos/_Boletos/Informativo/insertConceptoCatBinformativo";

//Catalogos Boletos Perdidos
$route['getCatBperdidos'] = "_Catalogos/_Boletos/Perdidos/getCatBperdidos";
$route['getCatTperdidos'] = "_Catalogos/_Boletos/Perdidos/getCatTperdidos";
$route['updateEstatusCatBperdidos'] = "_Catalogos/_Boletos/Perdidos/updateEstatusCatBperdidos";
$route['updateEstatusCatTperdidos'] = "_Catalogos/_Boletos/Perdidos/updateEstatusCatTperdidos";
$route['insertConceptoCatBperdidos'] = "_Catalogos/_Boletos/Perdidos/insertConceptoCatBperdidos";
$route['insertTarifaCatTperdidos'] = "_Catalogos/_Boletos/Perdidos/insertTarifaCatTperdidos";
$route['updateConceptoCatBperdidos'] = "_Catalogos/_Boletos/Perdidos/updateConcepto";
$route['updateTarifaCatTperdidos'] = "_Catalogos/_Boletos/Perdidos/updateTarifa";

//Catalogos Boletos Prepago
$route['getCatBprepago'] = "_Catalogos/_Boletos/Prepago/getCatBprepago";
$route['getCatTprepago'] = "_Catalogos/_Boletos/Prepago/getCatTprepago";
$route['updateEstatusCatBprepago'] = "_Catalogos/_Boletos/Prepago/updateEstatusCatBprepago";
$route['updateEstatusCatTprepago'] = "_Catalogos/_Boletos/Prepago/updateEstatusCatTprepago";
$route['insertConceptoCatBprepago'] = "_Catalogos/_Boletos/Prepago/insertConceptoCatBprepago";
$route['insertTarifaCatTprepago'] = "_Catalogos/_Boletos/Prepago/insertTarifaCatTprepago";
$route['updateConceptoCatBprepago'] = "_Catalogos/_Boletos/Prepago/updateConcepto";
$route['updateTarifaCatTprepago'] = "_Catalogos/_Boletos/Prepago/updateTarifa";

//Catalogos Boletos Otros
// $route['getCatBotros'] = "_Catalogos/_Boletos/Otros/getCatBotros";
// $route['getCatTotros'] = "_Catalogos/_Boletos/Otros/getCatTotros";
// $route['updateEstatusCatBotros'] = "_Catalogos/_Boletos/Otros/updateEstatusCatBotros";
// $route['updateEstatusCatTotros'] = "_Catalogos/_Boletos/Otros/updateEstatusCatTotros";
// $route['insertConceptoCatBotros'] = "_Catalogos/_Boletos/Otros/insertConceptoCatBotros";
// $route['insertTarifaCatTotros'] = "_Catalogos/_Boletos/Otros/insertTarifaCatTotros";

//Catalogos Boletos Informativo Prepago
$route['getCatBinfoPrepago'] = "_Catalogos/_Boletos/InfoPrepago/getCatBinfoPrepago";
$route['updateEstatusCatBinfoPrepago'] = "_Catalogos/_Boletos/InfoPrepago/updateEstatusCatBinfoPrepago";
$route['insertConceptoBinfoPrepago'] = "_Catalogos/_Boletos/InfoPrepago/insertConceptoBinfoPrepago";
$route['updateConceptoBinfoPrepago'] = "_Catalogos/_Boletos/InfoPrepago/updateConcepto";

//Reportes
$route['get_reporteIngresos'] = "reportes/get_reporteIngresos";

//Accesos
$route['getUsuarios'] = "_Catalogos/accesos/getUsuarios";
$route['insertUsuario'] = "_Catalogos/accesos/insertUsuario";
$route['updateEstatus'] = "_Catalogos/accesos/updateEstatus";
$route['updateUsuario'] = "_Catalogos/accesos/updateUsuario";
$route['resetPassword'] = "_Catalogos/accesos/resetPassword";
$route['getEstacionamientoXgrupo'] = "_Catalogos/Estacionamientos/getEstacionamientoXgrupo";