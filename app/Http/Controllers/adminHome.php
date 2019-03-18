<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;

class adminHome extends Controller{
   	
   public function index(){
   	//dd($this->productos());
   	return view('AdminComponent/admin')
   		   ->with('cuentas',$this->cuentas())
   		   ->with('activo',$this->activo())
   		   ->with('usuario',$this->usuario())
   		   ->with('totalVentas',$this->totalVentas())
   		   ->with('productos',$this->productos())
   		   ->with('usuFrecuentes',$this->usuFrecuentes())
   		   ->with('productosVendidos',$this->productosVendidos())
            ->with('itemHome','bg-dark');
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

   private function totalVentas(){
   	$total = 5000;   	
   	return ($total);
   }

   private function productos(){

   $productos = [
   	["nombre" => "Galletas para Gatos","estado" => 1,"precio" => 3.5,"cantidad" => 20,"stockMaximo" => 50,  		"stockMinimo" => 10
   	],
   	[
   		"nombre" => "Galletas para Perros","estado" => 1,"precio" => 1.5,"cantidad" => 10,"stockMaximo" => 60,
   		"stockMinimo" => 10
   	],
   	[
   		"nombre" => "Inyecciones","estado" => 1,"precio" => 1.5,"cantidad" => 10,"stockMaximo" => 60,
   		"stockMinimo" => 5
   	],
      [
         "nombre" => "Inyecciones","estado" => 1,"precio" => 1.5,"cantidad" => 10,"stockMaximo" => 60,
         "stockMinimo" => 5
      ],
      [
         "nombre" => "Inyecciones","estado" => 1,"precio" => 1.5,"cantidad" => 10,"stockMaximo" => 60,
         "stockMinimo" => 5
      ],
   	[
   		"nombre" => "Juguetes para perros",	"estado" => 1,"precio" => 1.5,"cantidad" => 0,"stockMaximo" => 60,
   		"stockMinimo" => 20
   	]
   ];
   		return ($productos);

   }

   private function usuFrecuentes(){
   	$usuFrecuentes = [
   		["nombre"=>"Juan Perez", "fechaCompra"=>"01/02/1999"],
   		["nombre"=>"Carlos Perez", "fechaCompra"=>"01/03/1987"],
   		["nombre"=>"OtroJuan Perez", "fechaCompra"=>"01/09/1986"],
   		["nombre"=>"Juan2 Perez", "fechaCompra"=>"01/10/1986"],
   		["nombre"=>"Juan3 Perez", "fechaCompra"=>"01/11/1986"]
   	];
   		return($usuFrecuentes);
   }

   private function productosVendidos(){
   	$producVendidos=[
   		["nombre"=>"Producto 001", "fechaCompra"=>"12/12/2018", "contoCompra"=>20],
   		["nombre"=>"Producto 002", "fechaCompra"=>"12/12/2018", "contoCompra"=>10],
   		["nombre"=>"Producto 003", "fechaCompra"=>"12/12/2018", "contoCompra"=>25],
   		["nombre"=>"Producto 004", "fechaCompra"=>"12/12/2018", "contoCompra"=>12],
   		["nombre"=>"Producto 005", "fechaCompra"=>"12/12/2018", "contoCompra"=>30],
   		["nombre"=>"Producto 006", "fechaCompra"=>"12/12/2018", "contoCompra"=>13]
   	];
   		return ($producVendidos);

   }


}
