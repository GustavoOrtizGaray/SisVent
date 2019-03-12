<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;

class adminStablishment extends Controller
{
    public function index(){
    	return view('AdminComponent/adminStablishment')->with('cuentas',$this->cuentas())
    												   ->with('activo',$this->activo())
    												   ->with('usuario',$this->usuario())
    												   ->with('stablishmentList',$this->stablishmentList('all'))
    												   ->with('itemEstablishment','bg-dark');
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
    public function stablishmentList($id){
    	if($id=='all'){
            $tipos=[
                ['id'=>'1','name'=>'Establecimiento 1','address'=>'Dirección Dirección Dirección','state'=>'1','typeStablishment'=>'1','typeCategory'=>'1'],
                ['id'=>'2','name'=>'Establecimiento 2','address'=>'Dirección Dirección Dirección','state'=>'1','typeStablishment'=>'2','typeCategory'=>'2'],
                ['id'=>'3','name'=>'Establecimiento 3','address'=>'Dirección Dirección Dirección','state'=>'2','typeStablishment'=>'2','typeCategory'=>'3'],
                ['id'=>'4','name'=>'Establecimiento 4','address'=>'Dirección Dirección Dirección','state'=>'2','typeStablishment'=>'2','typeCategory'=>'1'],
                ['id'=>'5','name'=>'Establecimiento 5','address'=>'Dirección Dirección Dirección','state'=>'2','typeStablishment'=>'2','typeCategory'=>'2'],
                ['id'=>'6','name'=>'Establecimiento 6','address'=>'Dirección Dirección Dirección','state'=>'2','typeStablishment'=>'2','typeCategory'=>'3'],
                ['id'=>'7','name'=>'Establecimiento 7','address'=>'Dirección Dirección Dirección','state'=>'2','typeStablishment'=>'2','typeCategory'=>'1'],
                ['id'=>'8','name'=>'Establecimiento 8','address'=>'Dirección Dirección Dirección','state'=>'1','typeStablishment'=>'3','typeCategory'=>'2'],
                ['id'=>'9','name'=>'Establecimiento 9','address'=>'Dirección Dirección Dirección','state'=>'2','typeStablishment'=>'3','typeCategory'=>'3'],
                ['id'=>'10','name'=>'Establecimiento 10','address'=>'Dirección Dirección Dirección','state'=>'1','typeStablishment'=>'3','typeCategory'=>'1']
            ];
        }else{
            $tipos=[
                'name'=>'Establecimiento '.$id,
                'address'=>'Dirección Dirección Dirección',
                'state'=>'1',
                'typeStablishment'=>'2.00',
                'RUC'=>'123456789',
                'businessName'=>'Nueva Empresa'
            ];
        }
    	return $tipos;
    }
}
