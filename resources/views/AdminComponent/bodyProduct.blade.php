<div class="col-12 mb-5">
	<div class="row">
		<div class="col-12 col-md-3">
			<div class="row">
				<div class="col-12 mt-3 color-cuerpo">
					<span>Productos: </span>
					<div class="input-group mb-3">
                        <select class="col-12">
                        	<option>Categoría 1</option>
                        	<option>Categoría 1</option>
                        	<option>Categoría 1</option>
                        </select>
                    </div>
					<div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        	<span class="btn ad-us-btn-search fas fa-search" ></span>
                        </div>
                    </div>
                    <div class="container color-contCuerpo p-4" style="height: 300px; overflow: auto;">
						@for ($i = 0; $i < 20; $i++)
			                <div class="bg-info rounded mb-2 row">
			   		            <div class="col-2">
			   	                    <i class="fas fa-user-circle img-power-up"></i>
			                    </div>		  
				                <div class="col-8 text-white mt-2">Hipolita Rojas...</div>
				                <div class="col-2">
				                    <span class="badge bg-success badge-pill rounded-circle lista-circulo mt-2"> </span>
				                </div>
				            </div>
			            @endfor
					</div>
					<div class="row">
						<button type="button" class="btn btn-success mx-auto mt-2 mb-2">Nuevo Usuario</button>
					</div>
				
				</div>
				
			</div>
		</div>
		<div class="col-12 col-md-9 border-body">
			<div class="row border-body-res">
				<div class="col-12 mt-3 color-cuerpo pt-3 pb-3 padind-res">
					<div class="container color-contCuerpo p-4">
						<h4 style="text-align: center;">DATOS DE PRODUCTOS</h4>
						<div class="row">
							<div class="col-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Nombres: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Descripción: </span>
											<textarea class="form-control" rows="2" style="resize: none;"></textarea>
										</div>
										<div class="input-group mb-3" title="Unidad de Medida">
											<span class="col-4 text-right">Unidad: </span>
											<select>
												<option>KG</option>
												<option>Unidad</option>
												<option>Litro</option>
												<option></option>
												<option></option>
											</select>
										</div>
										<div class="input-group mb-3" title="Stock Mínimo">
											<span class="col-4 text-right">Mínimo: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3" title="Stock Máximo">
											<span class="col-4 text-right">Máximo: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3" title="Stock Real">
											<span class="col-4 text-right">Real: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
                                        <div class="input-group mb-3" title="Precio de Venta">
											<span class="col-4 text-right">precio: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Categoría: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Grupo: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Estado: </span>
											<select>
												@foreach( $statesAccount as $stateAccount)
													<option>{!!$stateAccount['title']!!}</option>
												@endforeach
											</select>
										</div>
										<div class="row">
											<div class="col-12">
												<span>FOTO: </span>
												<div class="col-10">
													<img src="..." class="rounded mx-auto d-block" alt="...">
												</div>
												<div class="input-group col-2">
													<button>+</button>
													<button>-</button>
												</div>
											</div>

										</div>
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
