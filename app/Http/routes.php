<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//index
Route::get('/index','littlehouse@home');
Route::get('/altas','littlehouse@altas');
Route::get('/tablas','littlehouse@tablas');
Route::get('/plantmensaje','littlehouse@plantmensaje');
//
//altacliente
Route::get('/altacliente','littlehouse@altacliente');
Route::POST('/guardacliente','littlehouse@guardacliente')->name('guardacliente');
Route::get('/reportecliente','littlehouse@reportecliente');
Route::get('/modificl/{id_cliente}','littlehouse@modificl')->name('modificl');
Route::POST('/guardamodificli','littlehouse@guardamodificli')->name('guardamodificli');
Route::get('/eliminacli/{id_cliente}','littlehouse@eliminacli')->name('eliminacli');
Route::get('/restauracl/{id_cliente}','littlehouse@restauracl')->name('restauracl');
Route::get('/fisicacl/{id_cliente}','littlehouse@fisicacl')->name('fisicacl');
//////////////

//altapedidos
Route::get('/altapedidos','littlehouse@altapedidos');
Route::POST('/guardapedido','littlehouse@guardapedido')->name('guardapedido');
Route::get('/reportepedido','littlehouse@reportepedido');
Route::get('/modificaped/{id_pedido}','littlehouse@modificaped')->name('modificaped');
Route::POST('/guardamodificaped','littlehouse@guardamodificaped')->name('guardamodificaped');
Route::get('/eliminaped/{id_pedido}','littlehouse@eliminaped')->name('eliminaped');
Route::get('/restauraped/{id_pedido}','littlehouse@restauraped')->name('restauraped');
Route::get('/fisicaped/{id_pedido}','littlehouse@fisicaped')->name('fisicaped');
///////

/*
Route::get('/altapedidos','littlehouse3@altapedidos');
Route::POST('/guardapedido','littlehouse3@guardapedido')->name('guardapedido');
Route::get('/reportepedido','littlehouse3@reportepedido');
Route::get('/modificaped/{id_pedido}','littlehouse3@modificaped')->name('modificaped');
Route::POST('/guardamodificaped','littlehouse3@guardamodificaped')->name('guardamodificaped');
Route::get('/eliminaped/{id_pedido}','littlehouse3@eliminaped')->name('eliminaped');
Route::get('/restauraped/{id_pedido}','littlehouse3@restauraped')->name('restauraped');
Route::get('/fisicaped/{id_pedido}','littlehouse3@fisicaped')->name('fisicaped');
*/

//altaa-almacen-de-productos
Route::get('/altalmacen','littlehouse@altalmacen');
Route::POST('/guardalmacen','littlehouse@guardalmacen')->name('guardalmacen');
Route::get('/reportealmacen','littlehouse@reportealmacen');
Route::get('/modificalm/{id_producto}','littlehouse@modificalm')->name('modificalm');
Route::POST('/guardamodificalm','littlehouse@guardamodificalm')->name('guardamodificalm');
Route::get('/eliminalm/{id_producto}','littlehouse@eliminalm')->name('eliminalm');
Route::get('/restauralm/{id_producto}','littlehouse@restauralm')->name('restauralm');
Route::get('/fisicalm/{id_producto}','littlehouse@fisicalm')->name('fisicalm');
//////////////

/*altaa-almacen-de-productos
Route::get('/altalmacen','littlehouse4@altalmacen');
Route::POST('/guardalmacen','littlehouse4@guardalmacen')->name('guardalmacen');
Route::get('/reportealmacen','littlehouse4@reportealmacen');
Route::get('/modificalm/{id_producto}','littlehouse4@modificalm')->name('modificalm');
Route::POST('/guardamodificalm','littlehouse4@guardamodificalm')->name('guardamodificalm');
Route::get('/eliminalm/{id_producto}','littlehouse4@eliminalm')->name('eliminalm');
Route::get('/restauralm/{id_producto}','littlehouse4@restauralm')->name('restauralm');
Route::get('/fisicalm/{id_producto}','littlehouse4@fisicalm')->name('fisicalm');
*/

//casas
Route::get('/altacasa','littlehouse@altacasa');
Route::POST('/guardacasa','littlehouse@guardacasa')->name('guardacasa');
Route::get('/reportecasa','littlehouse@reportecasa');
Route::get('/modificas/{id_casa}','littlehouse@modificas')->name('modificas');
Route::POST('/guardamodificas','littlehouse@guardamodificas')->name('guardamodificas');
Route::get('/eliminacas/{id_casa}','littlehouse@eliminacas')->name('eliminacas');
Route::get('/restauracas/{id_casa}','littlehouse@restauracas')->name('restauracas');
Route::get('/fisicas/{id_casa}','littlehouse@fisicas')->name('fisicas');
//////////////

/*casas
Route::get('/altacasa','littlehouse5@altacasa');
Route::POST('/guardacasa','littlehouse5@guardacasa')->name('guardacasa');
Route::get('/reportecasa','littlehouse5@reportecasa');
Route::get('/modificas/{id_casa}','littlehouse5@modificas')->name('modificas');
Route::POST('/guardamodificas','littlehouse5@guardamodificas')->name('guardamodificas');
Route::get('/eliminacas/{id_casa}','littlehouse5@eliminacas')->name('eliminacas');
Route::get('/restauracas/{id_casa}','littlehouse5@restauracas')->name('restauracas');
Route::get('/fisicas/{id_casa}','littlehouse5@fisicas')->name('fisicas');
*/

//altausuarios
Route::get('/altausuarios','littlehouse@altausuarios');
Route::POST('/guardausuarios','littlehouse@guardausuarios')->name('guardausuarios');
Route::get('/reporteus','littlehouse@reporteus');
Route::get('/modificaus/{id_usuario}','littlehouse@modificaus')->name('modificaus');
Route::POST('/guardamodificaus','littlehouse@guardamodificaus')->name('guardamodificaus');
Route::get('/eliminaus/{id_usuario}','littlehouse@eliminaus')->name('eliminaus');
Route::get('/restauraus/{id_usuario}','littlehouse@restauraus')->name('restauraus');
Route::get('/fisicaus/{id_usuario}','littlehouse@fisicaus')->name('fisicaus');
//////////////

/*altausuarios
Route::get('/altausuarios','littlehouse6@altausuarios');
Route::POST('/guardausuarios','littlehouse6@guardausuarios')->name('guardausuarios');
Route::get('/reporteus','littlehouse6@reporteus');
Route::get('/modificaus/{id_usuario}','littlehouse6@modificaus')->name('modificaus');
Route::POST('/guardamodificaus','littlehouse6@guardamodificaus')->name('guardamodificaus');
Route::get('/eliminaus/{id_usuario}','littlehouse6@eliminaus')->name('eliminaus');
Route::get('/restauraus/{id_usuario}','littlehouse6@restauraus')->name('restauraus');
Route::get('/fisicaus/{id_usuario}','littlehouse6@fisicaus')->name('fisicaus');
*/

//Entradas
Route::get('/altaent','littlehouse@altaent');
Route::POST('/guardaent','littlehouse@guardaent')->name('guardaent');
Route::get('/reportent','littlehouse@reportent');
Route::get('/modificaent/{id_entrada}','littlehouse@modificaent')->name('modificaent');
Route::POST('/guardamodificaent','littlehouse@guardamodificaent')->name('guardamodificaent');
Route::get('/eliminaent/{id_entrada}','littlehouse@eliminaent')->name('eliminaent');
Route::get('/restauraent/{id_entrada}','littlehouse@restauraent')->name('restauraent');
Route::get('/fisicaent/{id_entrada}','littlehouse@fisicaent')->name('fisicaent');
//////////////

/*Entradas
Route::get('/altaent','littlehouse7@altaent');
Route::POST('/guardaent','littlehouse7@guardaent')->name('guardaent');
Route::get('/reportent','littlehouse7@reportent');
Route::get('/modificaent/{id_entrada}','littlehouse7@modificaent')->name('modificaent');
Route::POST('/guardamodificaent','littlehouse7@guardamodificaent')->name('guardamodificaent');
Route::get('/eliminaent/{id_entrada}','littlehouse7@eliminaent')->name('eliminaent');
Route::get('/restauraent/{id_entrada}','littlehouse7@restauraent')->name('restauraent');
Route::get('/fisicaent/{id_entrada}','littlehouse7@fisicaent')->name('fisicaent');
*/

//Salidas
Route::get('/altasal','littlehouse@altasal');
Route::POST('/guardasal','littlehouse@guardasal')->name('guardasal');
Route::get('/reportesal','littlehouse@reportesal');
Route::get('/modificasal/{id_salida}','littlehouse@modificasal')->name('modificasal');
Route::POST('/guardamodificasal','littlehouse@guardamodificasal')->name('guardamodificasal');
Route::get('/eliminasal/{id_salida}','littlehouse@eliminasal')->name('eliminasal');
Route::get('/restaurasal/{id_salida}','littlehouse@restaurasal')->name('restaurasal');
Route::get('/fisicasal/{id_salida}','littlehouse@fisicasal')->name('fisicasal');
//////////////

/*Salidas
Route::get('/altasal','littlehouse8@altasal');
Route::POST('/guardasal','littlehouse8@guardasal')->name('guardasal');
Route::get('/reportesal','littlehouse8@reportesal');
Route::get('/modificasal/{id_salida}','littlehouse8@modificasal')->name('modificasal');
Route::POST('/guardamodificasal','littlehouse8@guardamodificasal')->name('guardamodificasal');
Route::get('/eliminasal/{id_salida}','littlehouse8@eliminasal')->name('eliminasal');
Route::get('/restaurasal/{id_salida}','littlehouse8@restaurasal')->name('restaurasal');
Route::get('/fisicasal/{id_salida}','littlehouse8@fisicasal')->name('fisicasal');
*/

/*
Route::get('/login','littlehouse2@login')->name('login');
Route::POST('/iniciasesion','littlehouse2@iniciasesion')->name('iniciasesion');
Route::get('/home','littlehouse2@home')->name('home');
*/









