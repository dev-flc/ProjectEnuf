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
Route::get('/', function () {
    return view('/welcome');
});

Route::group(['middleware'=>['web']], function (){
	
	//Route::get('producto','Producto\ProductoController@index');
	Route::resource('producto','Producto\ProductoController');
	
	Route::resource('marca','Producto\MarcaController');

	//Routes Administrador
	Route::get('panel','Desktop\AdministradorController@panel');
	Route::get('acceso','Desktop\AdministradorController@acceso');
	Route::get('reportes','Desktop\AdministradorController@reportes');

	Route::get('dashboards','Desktop\DashboardsController@index');
	Route::get('modelweb','Desktop\DashboardsController@modelweb');
	
});