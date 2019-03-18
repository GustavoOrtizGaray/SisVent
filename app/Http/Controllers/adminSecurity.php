<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;

class adminSecurity extends Controller
{
   public function index(){
    	return view('AdminComponent/adminSecurity')->with('cuentas',$this->cuentas())
											    		->with('activo',$this->activo())
											    		->with('usuario', $this->usuario())
											    		->with('itemSecurity','bg-dark');
    }



	private function cuentas(){
   	$cuentas = ["Administrador", "Vendedor", "Almacenero", "Cliente"];
   	return($cuentas);
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
