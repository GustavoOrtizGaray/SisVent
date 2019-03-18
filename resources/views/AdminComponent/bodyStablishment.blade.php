<div class="col-12 mb-5">
	<div class="row">
		<div class="col-12 col-md-5 col-lg-4 col-xl-4">
			<div class="row">
				<div class="col-12 mt-3 color-cuerpo">
					<span>Establecimientos: </span>
					<div class="input-group mb-3">
                        <input id="buscador" type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        	<span class="btn ad-us-btn-search fas fa-search" ></span>
                        </div>
                    </div>
                    <div id="resultadoB" class="container color-contCuerpo p-4" style="height: 300px; overflow: auto;">
                     	@foreach($stablishmentList as $stablishment)
                     	
                     	<div class="ad-st-item bg-secondary rounded row mb-3" id="{!! $stablishment['id'] !!}" searchName="{!! $stablishment['name'] !!}">
                     		
                     		<div class="col-2 p-1">
                     			<img src="{!! asset('img_sist/botones/establecimientos.png') !!}">
                     		</div>
                     		<div class="col-10 text-white ml-auto">
                     			<div class="row">
                     				<div class="col-12 row ml-0 p-0">
                     					<div class="col-8 nameSta">
                     						{!! $stablishment['name'] !!}
                     					</div>
                     					<div class="col-4">
                     						<div class="row">
   	                     						<div class="col-6 p-0">
	                     							@switch($stablishment['typeStablishment'])
	                     								@case('1')
	                     									<div class="badge badge-pill bg-primary rounded-circle small p-auto ad-st-circle-indicator">
			                     								<label>P</label>
			                     							</div>
	                     								@break
	                     								@case('2')
	                     									<div class="badge badge-pill bg-warning rounded-circle small p-auto ad-st-circle-indicator">
			                     								<label>S</label>
			                     							</div>
	                     								@break
	                     								@case('3')
	                     									<div class="badge badge-pill bg-info rounded-circle small p-auto ad-st-circle-indicator">
			                     								<label>A</label>
			                     							</div>
	                     								@break
	                     							@endswitch
	                     						</div>
	                     						<div class="col-6 p-0">
	                     							@switch($stablishment['state'])
	                     								@case('1')
	                     									<img src="{!! asset('img_sist/botones/activo.png') !!}">
	                     									@break
	                     								@case('2')
	                     									<img src="{!! asset('img_sist/botones/inactivo.png') !!}">
	                     									@break
	                     							@endswitch
	                     						</div>
                     						</div>
                     					</div>
                     				</div>
                     			</div>
                     			<div class="row">
                     				<div class="col-12">
                     					dirección dirección dirección
                     				</div>
                     			</div>
                     		</div>
                     		
                     	</div>
                     
                     	@endforeach
                    </div>	
				</div>
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 col-xl-8 border-body">
			<div class="row border-body-res">
				<div class="col-12 mt-3 color-cuerpo pt-3 pb-3 padind-res">
					<div class="container color-contCuerpo p-4">
						<h4 style="text-align: center;">DATOS DE ESTABLECIMIENTO</h4>
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="input-group mb-3">
										<span class="col-4 text-right">Nombre: </span>
										<input id="ad-st-name" class="ad-us-input" type="text" name="">
									</div>
									<div class="input-group mb-3">
										<span class="col-4 text-right">Dirección: </span>
										<input id="ad-st-address" class="ad-us-input" type="text" name="">
									</div>
									<div class="input-group mb-3">
										<span class="col-4 text-right">Estado: </span>
										<input id="ad-st-state" class="ad-us-input" type="text" name="">
									</div>
									<div class="input-group mb-3">
										<span class="col-4 text-right">Tipo: </span>
										<input id="ad-st-type" class="ad-us-input" type="text" name="">
									</div>
									
								</div>
								<div class="row color-cuerpo principal">
									<div class="input-group mb-3 mt-3">
										<span class="col-4 text-right">Razón Social: </span>
										<input id="ad-st-bussiness-name" class="ad-us-input" type="text" name="">
									</div>
									<div class="input-group mb-3">
										<span class="col-4 text-right">RUC: </span>
										<input id="ad-st-ruc" class="ad-us-input" type="text" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<button class="btn btn-success mx-auto mt-2 mb-2">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
