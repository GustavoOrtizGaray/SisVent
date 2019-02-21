<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
class adminProduct extends Controller
{
    public function index(){
    	return view('AdminComponent/adminProduct')->with('typesAccount',$this->typeAccount())
    										   ->with('statesAccount',$this->stateAccount())
    										   ->with('productList',$this->productList('all'))
                                               ->with('cuentas',$this->cuentas())
                                               ->with('activo',$this->activo())
                                               ->with('usuario',$this->usuario())
                                               ->with('categories',$this->category())
                                               ->with('groups',$this->group())
                                               ->with('unities',$this->unity())
                                               ->with('itemProduct','bg-dark');
    }
    private function usuario(){
        $usuario = [
            'nombre' => 'Juan Carlos',
            'email' => 'juanCarlos@gmail.com',
            'password' => "123456"
        ];
        return ($usuario);  
    }
    private function cuentas(){
        $cuentas = ["Administrador", "Vendedor", "Almacenero", "Cliente"];
        return($cuentas);
    }
    private function activo(){
        $activo = "Administrador";
        return($activo);
       }
    private function typeAccount(){
    	
    	$tipos=[
    		['title'=>'Administrador','id'=>'1'],
    		['title'=>'Vendedor','id'=>'2'],
    		['title'=>'Almacén','id'=>'3']
    	];
    	$c=Collection::make($tipos);
    	return $c;
    }
    private function stateAccount(){
    	
    	$tipos=[
    		['title'=>'Activo','id'=>'1'],
    		['title'=>'Inactivo','id'=>'2'],
    		['title'=>'Eliminado','id'=>'3']
    	];
    	$c=Collection::make($tipos);
    	return $c;
    }
    public function productList($id){
    	if($id=='all'){
            $tipos=[
                ['id'=>'1','name'=>'producto 1','surname'=>'1','state'=>'1','group'=>'1','typeCategory'=>'1'],
                ['id'=>'2','name'=>'producto 2','surname'=>'2','state'=>'1','group'=>'2','typeCategory'=>'2'],
                ['id'=>'3','name'=>'producto 3','surname'=>'3','state'=>'2','group'=>'3','typeCategory'=>'3'],
                ['id'=>'4','name'=>'producto 4','surname'=>'3','state'=>'3','group'=>'2','typeCategory'=>'1'],
                ['id'=>'5','name'=>'producto 5','surname'=>'3','state'=>'2','group'=>'3','typeCategory'=>'2'],
                ['id'=>'6','name'=>'producto 6','surname'=>'3','state'=>'3','group'=>'2','typeCategory'=>'3'],
                ['id'=>'7','name'=>'producto 7','surname'=>'3','state'=>'2','group'=>'3','typeCategory'=>'1'],
                ['id'=>'8','name'=>'producto 8','surname'=>'3','state'=>'3','group'=>'2','typeCategory'=>'2'],
                ['id'=>'9','name'=>'producto 9','surname'=>'3','state'=>'2','group'=>'3','typeCategory'=>'3'],
                ['id'=>'10','name'=>'producto 10','surname'=>'3','state'=>'3','group'=>'2','typeCategory'=>'1']
            ];
        }else{
            $tipos=[
                'name'=>'producto '.$id,
                'description'=>'texto largo texto largo texto largo texto largo texto largo texto largo texto largo ',
                'typeCategory'=>'1',
                'typeUnity'=>'2',
                'minimunStock'=>'2.00',
                'maximunStock'=>'22.00',
                'realStock'=>'12.00',
                'price'=>'2.00',
                'group'=>'2',
                'state'=>'3',
                'image'=>'logo.png',
            ];
        }
    	
    	$c=Collection::make($tipos);
    	return $c;
    }
    private function category(){
        $result=[
            ['id'=>'1','title'=>'Category1'],
            ['id'=>'2','title'=>'Category2'],
            ['id'=>'3','title'=>'Category3']
        ];
        return $result;
    }
    private function group(){
        $result=[
            ['id'=>'1','title'=>'Group 1'],
            ['id'=>'2','title'=>'Group 2'],
            ['id'=>'3','title'=>'Group 3']
        ];
        return $result;   
    }
    private function unity(){
        $result=[
            ['id'=>'1','title'=>'Kg'],
            ['id'=>'2','title'=>'Unidad'],
            ['id'=>'3','title'=>'Docena'],
            ['id'=>'3','title'=>'bolsa']
        ];
        return $result;   
    }
}
