@extends('templates.base')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('style_sisvent/css/loginComponent.css') }}">
@endsection
@section('body')
<div class="container">
    <div class="row justify-content-center align-items-center min-100">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-9 col-xs-12">
        	<div class="row text-center">
        		<div class="col-12">
        			<div class="container bg-light border" style="border-radius: 20px; background-color: #007bff !important;">
        				<!--logo del sistema-->
    					<div class="jumbotrom bg-secundary col-12 text-center">
    						<div class="row col-offset-5">
    							<span class="rounded-circle" style="margin: auto;">
    								<img src="{{ asset('img_sist/logo.png') }}" class="rounded" style="width: 10em;">
    							</span>
    						</div>
    						<h1 class="text-white">SisVent</h1> 
    					</div>
    					<!--formulario para iniciar sesión-->
	        			<div class="col-12 jumbotrom">
	        				<form>
	        					<div class="row">
	        						<div class="col-xl-10 input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text form-control-sm" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px; background: #e0ad15">
									      	<span class="fas fa-user-tie"></span>
									      </span>
									    </div>
									    <input type="text" class="form-control form-control-sm" placeholder="Ejemplo@ejemplo.com">
									    <div class="input-group-prepend">
									      <span class="input-group-text form-control-sm" style="background: #e0ad15;">
									      	<span class="fas fa-key"></span>
									      </span>
									    </div>
									    <input type="password" class="form-control form-control-sm" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;"placeholder="contraseña">	
									 </div>
									 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 mb-3">
									 	<div class="col align-items-center">
									 		<button type="button" class="btn btn-success rounded-circle fas fa-arrow-right" style="border-radius: 20px"></button>
									 	</div>
									 </div>
	        					</div>
	        				</form>
	        			</div>
        			</div>
        		</div>
        		<!--links de interes sobre el sistema-->
        		<div class="col-12">
        			<div class="row">
        				<div class="col">
        					<h6 class="text-center">
		        				<a href="#"> Tutoriales </a>
		        				<span> | </span>
			        			<a href="#"> Videos </a>
			        			<span> | </span>
			        			<a href="#"> Términos y condiciones </a>
	        				</h6>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col">
        					<h6 class="text-center">
        						<a href="#">SisVent</a>
        						<span> | </span>
	        					<a href="#">Derechos Reservados</a>
        					</h6>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
       
    </div>
</div>
@endsection