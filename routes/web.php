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

//fin rutas admin user
//rutas admin-product
Route::get('/admin/product','adminProduct@index');
Route::get('/admin/product/productdetail/{id}','adminProduct@productList');
//fin rutas admin - product
//ruta admin-stablisment
Route::get('/admin/stablisment','adminStablishment@index');
//fin ruta admin-stablisment




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