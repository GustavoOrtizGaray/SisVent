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
//rutas del admin user
Route::get('/admin/user/userlist/{id}','adminUser@userList');
//rutas admin-product
Route::get('/admin/product','adminProduct@index');
Route::get('/admin/cate','adminCategory@index');
Route::get('/admin/factura', 'adminBilling@index');
Route::get('/admin/product/productdetail/{id}','adminProduct@productList');
//ruta admin-stablisment
Route::get('/admin/stablisment','adminStablishment@index');
Route::get('/admin/stablisment/{id}','adminStablishment@stablishmentList');
//rutas categorias
Route::get('/admin/cate/{id}','adminCategory@categorias');
//rutas ventas
Route::get('/sales','SalesHome@index');
//rutas almacenes
Route::get('/storehouse',function () {
    return view('StorehouseComponent/storehouse');
});
//rutas terminos y condiciones
Route::get('/term',function () {
    return view('RelevantPages/termsconditions');
});