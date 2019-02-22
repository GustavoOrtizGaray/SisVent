<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('webpage');
});
Route::get('/login',function () {
    return view('LoginComponent/login');
});
//rutas del admin
Route::get('/admin', 'adminHome@index');
Route::get('/admin/user','adminUser@index');
Route::get('/admin/product','adminProduct@index');
Route::get('/admin/cate','adminCategory@index');
Route::get('/admin/factura', 'adminBilling@index');

//rutas categorias
Route::get('/admin/cate/{id}','adminCategory@categorias');

//fin rutas del admin
Route::get('/sales',function () {
    return view('SalesComponent/sales');
});
Route::get('/storehouse',function () {
    return view('StorehouseComponent/storehouse');
});
Route::get('/term',function () {
    return view('RelevantPages/termsconditions');
});