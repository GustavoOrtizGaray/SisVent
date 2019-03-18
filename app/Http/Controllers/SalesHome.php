<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;

class SalesHome extends Controller
{
	public function index(){
   	//dd($this->productos());
   	return view('SalesComponent/sales')
   		   ->with('cuentas',$this->cuentas())
   		   ->with('activo',$this->activo())
   		   ->with('usuario',$this->usuario())
           ->with('itemHome','bg-dark');
   }

   


   private function activo(){
   	$activo = "Vendedor";
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
	    //
}
