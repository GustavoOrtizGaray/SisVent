@extends('templates.base')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('style_sisvent/css/loginComponent.css') }}">
@endsection
@section('body')
<div class="container">
    <div class="row justify-content-center align-items-center min-100">
        <div class="col-6">
        	<div class="row text-center">
        		<div class="col-12">
        			<div class="container bg-light border">
        				<!--logo del sistema-->
    					<div class="jumbotrom bg-secundary col-12 text-center">
    						<div class="row col-offset-5">
    							<span class="rounded-circle" style="margin: auto;">
    								<img src="{{ asset('img_sist/logo.png') }}" class="rounded" style="width: 10em;">
    							</span>
    						</div>
    						<h1>SisVent</h1> 
    					</div>
    					<!--formulario para iniciar sesión-->
	        			<div class="jumbotrom">
	        				<form>
	        					<div class="form-group">
	        						<div class="input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text">Correo</span>
									    </div>
									    <input type="text" class="form-control" placeholder="Ejemplo@ejemplo.com">
									  </div>
			        				<div class="input-group mb-3">
			        					 <div class="input-group-prepend">
									      <span class="input-group-text">Contraseña</span>
									    </div>
									    <input type="text" class="form-control" placeholder="contraseña">
									    
									  </div>
									  <button type="button" class="btn btn-primary">Iniciar</button>
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