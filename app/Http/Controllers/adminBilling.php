<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;

class adminBilling extends Controller{
    
    public function index(){
    	return view('AdminComponent/adminBilling')->with('cuentas',$this->cuentas())
											    		->with('activo',$this->activo())
											    		->with('usuario', $this->usuario())
											    		->with('itemBilling','bg-dark');
    }



	 private function activo(){
   	$activo = "Administrador";
   	return($activo);
   }

   private function usuario(){
   	$usuario = [
   		'nombre' => 'Juan Carlos',
   		'email' => 'juanCarlos@gmail.com',
   		'password' => "123456"
   	];
   	return ($usuario);	
   }





}
