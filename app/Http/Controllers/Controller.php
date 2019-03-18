<?php

namespace SisVent\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function cuentas(){
   		$cuentas = [["url"=>"/admin","cuenta"=>"Administrador"],
   					["url"=>"/sales","cuenta"=>"Vendedor"],
   					["url"=>"store","cuenta"=>"Almacenero"],
   					["url"=>"/client","cuenta"=>"Cliente"]];
   		return($cuentas);
   }
}
