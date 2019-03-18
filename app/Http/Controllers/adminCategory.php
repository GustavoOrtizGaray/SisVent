<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;

class adminCategory extends Controller{

	public function index(){
		return view('AdminComponent/adminCategory')->with('cuentas',$this->cuentas())
												   ->with('activo',$this->activo())
												   ->with('usuario',$this->usuario())
                                       ->with('categorias',$this->categorias())
												   ->with('itemCategory','bg-dark');
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

   public function categorias($id = 0){

      if ($id == 0) {
         $categoriasProducto=[
         ["nombreCategoria"=>"Comida Para Perros", "estadoCategoria"=>"1", 'id' => 1],
         ["nombreCategoria"=>"Comida para gatos", "estadoCategoria"=>"1", 'id' => 2],
         ["nombreCategoria"=>"Vacunas", "estadoCategoria"=>"1", 'id' => 3],
         ["nombreCategoria"=>"Vacunas Pastillas", "estadoCategoria"=>"1", 'id' => 4],
         ["nombreCategoria"=>"Comida Pastillas", "estadoCategoria"=>"1", 'id' => 5],
         ["nombreCategoria"=>"Vacunas Pastillas", "estadoCategoria"=>"1", 'id' => 6],
         ["nombreCategoria"=>"Comida Pastillas", "estadoCategoria"=>"2", 'id' => 7],
         ["nombreCategoria"=>"Comida Pastillas", "estadoCategoria"=>"2", 'id' => 8]
      ];
      }else{
         // Estado : 1 - Activo  /  2 - Inactivo
         $categoriasProducto=[
         ["nombreCategoria"=>"Comida Para Perros", "estadoCategoria"=>"2", 'descripcionCategoria' => "Esto es una descripcion "]
      ];
      }

      
         return ($categoriasProducto);

   }

}
