<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
class adminUser extends Controller
{
    public function index(){
    	//dd($this->typeAccount());
    	//dd($this->userList());
    	return view('AdminComponent/adminUser')->with('typesAccount',$this->typeAccount())
    										   ->with('statesAccount',$this->stateAccount())
    										   ->with('users',$this->userList('all'))
                                               ->with('listsEstablishments',$this->listEstablishments())
                                               ->with('cuentas',$this->cuentas())
                                               ->with('activo',$this->activo())
                                               ->with('usuario',$this->usuario())
                                               ->with('itemUser','bg-dark');
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
    private function listEstablishments(){
        
        $tipos=[
            ['title'=>'local1','id'=>'1'],
            ['title'=>'local2','id'=>'2'],
            ['title'=>'Local3','id'=>'3']
        ];
        $c=Collection::make($tipos);
        return $c;
    }

    private function typeAccount(){
    	
    	$tipos=[
    		['title'=>'Administrador','id'=>'1'],
    		['title'=>'Vendedor','id'=>'2'],
    		['title'=>'Almacenero','id'=>'3']
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
    public function userList($id){
    	   if($id=="all"){
                $tipos=[
                    ['id'=>'1','name'=>'persona 1','surname'=>'1','dni'=>'12312323','fnac'=>'30-12-89','state'=>'1','typeAccount'=>[
                            ['id'=>'1','title'=>'Administrador','state'=>'1'],
                            ['id'=>'2','title'=>'Vendedor','state'=>'1'],
                            ['id'=>'3','title'=>'Almacenero','state'=>'1']
                        ]
                    ],
                    ['id'=>'4','name'=>'persona 2','surname'=>'2','dni'=>'12312323','fnac'=>'30-12-89','state'=>'1','typeAccount'=>[
                            ['id'=>'2','title'=>'vendedor','state'=>'0']
                        ]
                    ],
                    ['id'=>'5','name'=>'persona 3','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'2','typeAccount'=>[
                            ['id'=>'2','title'=>'vendedor','state'=>'0']
                        ]
                    ],
                    ['id'=>'6','name'=>'persona 4','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'1','typeAccount'=>[['id'=>'2','title'=>'vendedor','state'=>'0']]],
                    ['id'=>'7','name'=>'persona 5','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'2','typeAccount'=>[['id'=>'3','title'=>'vendedor','state'=>'0']]],
                    ['id'=>'8','name'=>'persona 6','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'1','typeAccount'=>[['id'=>'2','title'=>'Almacenero','state'=>'0']]],
                    ['id'=>'9','name'=>'persona 7','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'2','typeAccount'=>[['id'=>'2','title'=>'vendedor','state'=>'0']]],
                    ['id'=>'10','name'=>'persona 8','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'1','typeAccount'=>[['id'=>'2','title'=>'vendedor','state'=>'0']]],
                    ['id'=>'11','name'=>'persona 9','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'2','typeAccount'=>[['id'=>'2','title'=>'vendedor','state'=>'0']]],
                    ['id'=>'12','name'=>'persona 10','surname'=>'3','dni'=>'12312323','fnac'=>'30-12-89','state'=>'1','typeAccount'=>[['id'=>'3','title'=>'Almacenero'],['id'=>'2','title'=>'vendedor','state'=>'0']]]
                ];
           }else{
            $tipos=[
                    ['id'=>'1',
                     'name'=>'persona 1',
                     'surname'=>'1',
                     'dni'=>'12312323',
                     'fnac'=>'30-12-89',
                     'state'=>'2',
                     'email'=>'holaprueba@tuweb.com',
                     'password'=>'00123435',
                     'address'=>'Jr. la prueba # 124',
                     'cel'=>'976564512',
                     'stablishment'=>'2',
                     'typeAccount'=>[
                            ['id'=>'1','title'=>'Administrador','state'=>'1'],
                            ['id'=>'2','title'=>'Vendedor','state'=>'1'],
                            ['id'=>'3','title'=>'Almacenero','state'=>'1']
                        ]
                    ],
                ];
           }
    	$c=Collection::make($tipos);
    	return $c;
    }
}
