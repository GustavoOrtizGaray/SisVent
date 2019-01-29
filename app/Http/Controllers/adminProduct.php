<?php

namespace SisVent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
class adminProduct extends Controller
{
    public function index(){
    	return view('AdminComponent/adminProduct')->with('typesAccount',$this->typeAccount())
    										   ->with('statesAccount',$this->stateAccount())
    										   ->with('usersList',$this->userList());
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
    private function userList(){
    	
    	$tipos=[
    		['name'=>'persona 1','surname'=>'1','state'=>'1','typeAccount'=>'1'],
    		['name'=>'persona 2','surname'=>'2','state'=>'1','typeAccount'=>'2'],
    		['name'=>'persona 3','surname'=>'3','state'=>'2','typeAccount'=>'3'],
    		['name'=>'persona 4','surname'=>'3','state'=>'3','typeAccount'=>'2'],
    		['name'=>'persona 5','surname'=>'3','state'=>'2','typeAccount'=>'3'],
    		['name'=>'persona 6','surname'=>'3','state'=>'3','typeAccount'=>'2'],
    		['name'=>'persona 7','surname'=>'3','state'=>'2','typeAccount'=>'3'],
    		['name'=>'persona 8','surname'=>'3','state'=>'3','typeAccount'=>'2'],
    		['name'=>'persona 9','surname'=>'3','state'=>'2','typeAccount'=>'3'],
    		['name'=>'persona 10','surname'=>'3','state'=>'3','typeAccount'=>'2']
    	];
    	$c=Collection::make($tipos);
    	return $c;
    }
}
