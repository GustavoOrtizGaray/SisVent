
<div class="col-12 mb-5">
		
	<div class="row">
		
		<div class="col-12 col-md-3"> 
			<div class="row">
				<div class="col-12 mt-3 color-cuerpo">
					<p class="text-secondary">MONTO TOTAL DE VENTA: </p>
					<p class="text-secondary"> <h1 class="text-center">  <strong> S/. {{$totalVentas}} </strong>  </h1> </p>
					<p class="text-secondary">Ir a ventas y facturación</p>
				</div>

				<div class="col-12 mt-3 color-cuerpo">
					<p class="text-secondary"> PRODUCTOS: </p>

					<div class="row">

						<div class="col-12">
					      <div class="input-group mb-4">				       
					        <input type="text" class="form-control color-contCuerpo" id="buscador" placeholder="Buscador">
					        <div class="input-group-prepend">
					          <div class="input-group-text color-contCuerpo"><i class="fas fa-search"></i></div>
					        </div>
					      </div>
					    </div>

					</div>

					<div class="container color-contCuerpo p-4 height-productos" id="resultadoB">

						@foreach($productos as $producto)	
						<div>					    
						    <div class="bg-secondary rounded mb-2 row" >						  
							  <div class="col-10 text-white" >{{$producto["nombre"] }}</div>

							  @if($producto["cantidad"] > $producto["stockMinimo"])
							  	@php ($claseStock = "bg-warning")
							  @elseif($producto["cantidad"] == 0)
							  	@php ($claseStock = "bg-danger")
							  @else
							  	@php ($claseStock = "bg-success")
							  @endif	

							  <div class="col-2"> <span class=" {{$claseStock}} badge  badge-pill rounded-circle lista-circulo "> </span>
							  </div>
							</div>
						</div>	
						 @endforeach

						
					</div>
					<p class="text-secondary"> Ir a productos: </p>
				</div>
			</div>	
		</div>
	
		<div class="col-12 col-md-9 border-body"> 
			<div class="row border-body-res">
				<div class="col-12 mt-3">
					<div class="row">
						<div class="col-12 col-md-12 col-xl-8 color-cuerpo testimonial-group"> 
							<p class="text-secondary"> GRAFICO DE VENTAS:  </p>
							<div class="row pl-2 pb-2 pr-2 live__scroll">
							  <div class="row">
							    <div class="col-3 color-grafico border-right live__scroll--box">
							    	<canvas id="myChart-0"></canvas>
								</div>
								<div class="col-3 color-grafico border-right live__scroll--box">
							    	<canvas id="myChart-1"></canvas>
								</div>
								<div class="col-3 color-grafico border-right live__scroll--box">
							    	<canvas id="myChart-2"></canvas>
								</div>
								</div>
							</div>					
						</div>

						<div class="col-12 col-md-12 col-xl-4 border-body color-cuerpo scrollbar-usuFrec"> 
							<span class="text-secondary"> USUARIOS FRECUENTES:  </span>
							<div class="container">

								@foreach ($usuFrecuentes as $usuFrecuente)
									<div class="bg-info rounded-2 rounded mb-2 row">						  
									  <div class="col-2 text-white">									  	
									  	<i class="fas fas fa-user-circle img-usuarios"></i>
									  </div>
									  <div class="col-10 text-white"> 
									  	<span> {{$usuFrecuente['nombre']}} </span> <br>
									  	<span class="font-11">Ultima Compra: {{$usuFrecuente['fechaCompra']}} </span>
									  </div>
									</div>
								@endforeach


															
							</div>
							<span class="text-secondary"> Ir a Usuarios  </span>
						</div>
					</div>
				</div>

				<div class="col-12 mt-3 color-cuerpo pt-3 pb-3 padind-res">
					<div class="row">
						<div class="col-6"> 
							<form>
							  <div class="form-group row">
							    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Desde:</label>
							    <div class="col-sm-10">
							      <input type="date" class="form-control form-control-sm" id="productoDesde" placeholder="col-form-label-sm">
							    </div>
							  </div>						
							</form>
						</div>
						
						<div class="col-6"> 
							<form>
							  <div class="form-group row">
							    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Hasta:</label>
							    <div class="col-sm-10">
							      <input type="date" class="form-control form-control-sm" id="productoHasta" placeholder="col-form-label-sm">
							    </div>
							  </div>						
							</form>
						</div>
					</div>

					<div class="container color-contCuerpo">
						<div class="row letra_res">
							<div class="col-5 col-md-6 col-lg-6 text-secondary">NOMBRE PRODUCTO</div>
							<div class="col-4 col-md-3 col-lg-4 text-secondary">FECHA</div>
							<div class="col-3 col-md-3 col-lg-2 text-secondary">MONTO</div>	
						</div>

					</div>
					<div class="container color-contCuerpo height-productos p-4">	
						@foreach($productosVendidos as $productosVendido)
							<div class="row bg-secondary rounded mb-2 letra_res">
								<div class="col-5 col-md-6 col-lg-6 text-white"> {{$productosVendido["nombre"]}} </div>
								<div class="col-4 col-md-3 col-lg-4 text-white">{{$productosVendido["fechaCompra"]}}</div>
								<div class="col-3 col-md-3 col-lg-2 text-white">S/. {{$productosVendido["contoCompra"]}}</div>	
							</div>	  
						@endforeach						
					</div>

				</div>
			</div>
		</div>

	</div>

	

</div>

	

