<nav class="navbar navbar-expand-lg navbar-light bg-info elimia-padding posicion-header">
	<div class="container-fluid padding-r-l">

		<div class="col-6 col-sm-5 col-md-4 col-lg-3">
	  		<div class="row"> 
	  			<div class="col-4 col-lg-9 col-md-8 col-sm-8">	  				
		  			
		  			<div class="row">
		  				<div class="col-3">
		  					<a class="text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cuentas Usuarios">
						        <i class="fas fas fa-user-circle img-power-up"></i>				          
						    </a>

						    <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
						    	@foreach($cuentas as $cuenta)
						    		@if($activo === $cuenta)
						    			<a class="dropdown-item text-white hover-item" href="#"> <i class="fas fa-check-circle check-cuenta"></i> {{$cuenta}}</a>
						    		@else
						    			<a class="dropdown-item text-white hover-item" href="#">{{$cuenta}}</a>
						    		@endif						    	
						    	@endforeach

						    </div>
						      	 
		  				</div>
		  				<div class="col-9 eliminar"> 

		  					<span class="text-white">Sr {{$usuario['nombre']}} </span>	<br>
				    		<small class="text-white"> {{$activo}} </small>	
		  				</div>
		  				
		  			</div>	

	  			</div>	
	  			<div class="col-7 col-lg-3 col-md-4 col-sm-4 bg-dark text-cente mx-auto">
					<a href="#" title="HOME">
			  	 	 <i class="fas fa-home img-home"></i>
			  		</a>
	  			</div>	
	  		</div>
	  	</div>


	 	<div class="col-5 col-sm-6 col-md-7 col-lg-8">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto justify-content-around max-width">
			      <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="USUARIOS">  			        	
			        	<img src="{{ asset('img_sist/botones/usuarios.png') }}"> 
			        	<label class="text-white"> Usuarios</label>
			        </a>
			      </li>			    
			      <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="PRODUCTOS">
			        	<img src="{{ asset('img_sist/botones/productos.png') }}">
			        	<label class="text-white"> Productos</label>
			        </a>
			        	
			      </li>
			      <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="CATEGORIAS">
			        	<img src="{{ asset('img_sist/botones/categorias.png') }}">
			        	<label class="text-white"> Categorias</label>
			        </a>
			        	
			      </li>
			      <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="ESTABLECIMIENTOS">
			        	<img src="{{ asset('img_sist/botones/establecimientos.png') }}">
			        	<label class="text-white"> Establecimientos</label>
			        </a>
			        	
			      </li>
			      <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="FACTURACION">
			        	<img src="{{ asset('img_sist/botones/facturacion.png') }}">
			        	<label class="text-white"> Facturacion</label>	
			        </a>
			        	
			      </li>
			     <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="PAGINA WEB">
			        	<img src="{{ asset('img_sist/botones/pagina_web.png') }}">
			        	<label class="text-white"> Pagina Web</label>
			        </a> 
			        	
			     </li>

			     <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="SEGURIDAD">
			        	<img src="{{ asset('img_sist/botones/seguridad.png') }}">
			        	<label class="text-white"> Seguridad</label>
			        </a>
			        	
			     </li>
			     
			     <li class="nav-item">
			        <a class="nav-link cont-img-header hover-item" href="#" title="REPORTES">
			        	<img src="{{ asset('img_sist/botones/reportes.png') }}">
			        	<label class="text-white"> Reportes</label>
			        </a>
			        	
			     </li>
			    
			      
			    </ul>
			</div>

	  	</div>


		  <div class="col-1 row d-block">
		  		<div class="bg-warning float-right"> 
		  			<a href="#" class="bg-warning"> 
					<i class="fas fa-power-off img-power-up"></i>
					</a>
		  		</div>	
		  </div>	

	</div>	
</nav>

