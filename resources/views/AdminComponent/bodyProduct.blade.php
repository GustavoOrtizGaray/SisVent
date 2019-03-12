<div class="col-12 mb-5">
	<div class="row">
		<div class="col-12 col-md-5 col-lg-4 col-xl-3">
			<div class="row">
				<div class="col-12 mt-3 color-cuerpo">
					<span>Productos: </span>
					<div class="input-group mb-3">
                        <select id="categoria" class="col-12">
                        	<option value="all" >todas las categorías</option>
                        	@foreach( $categories as $category)
                        		<option value="{!!$category['id']!!}" >{!!$category['title']!!}</option>
                        	@endforeach

                        </select>
                    </div>
					<div class="input-group mb-3">
                        <input id="buscador" type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        	<span class="btn ad-us-btn-search fas fa-search" ></span>
                        </div>
                    </div>
                    <div id="resultadoB" class="container color-contCuerpo p-4" style="height: 300px; overflow: auto;">
						@foreach( $productList as $product)
							<div>
							<div class="ad-pr-item bg-secondary rounded mb-2 row" id="{{$product['id']}}" date-cat="{!! $product['typeCategory'] !!}">	  
				                <div class="col-10 text-white mt-2">{!! $product['name'] !!}</div>
				                <div class="col-2">
				                    @switch($product['state'])
				                    	@case('1')
				                    		<span class="badge bg-success badge-pill rounded-circle lista-circulo" style="top: 5px !important;"> </span>
				                    		@break
				                    	@case('2')
				                    		<span class="badge bg-warning badge-pill rounded-circle lista-circulo" style="top: 5px !important;"> </span>
				                    		@break
				                    	@case('3')
				                    		<span class="badge bg-danger badge-pill rounded-circle lista-circulo" style="top: 5px !important;"> </span>
				                    		@break
				                    @endswitch
				                </div>
				            </div>
				            </div>
						@endforeach
					</div>
					<div class="row">
						<button type="button" class="btn btn-success mx-auto mt-2 mb-2">Nuevo Usuario</button>
					</div>
				
				</div>
				
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 col-xl-9 border-body">
			<div class="row border-body-res">
				<div class="col-12 mt-3 color-cuerpo pt-3 pb-3 padind-res">
					<div class="container color-contCuerpo p-4">
						<h4 style="text-align: center;">DATOS DE PRODUCTOS</h4>
						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Nombres: </span>
											<input id="ad-pr-name" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 col-lg-12 text-right">Descripción: </span>
											<textarea id="ad-pr-description" class="form-control col-lg-12" rows="2" style="resize: none;"></textarea>
										</div>
										<div class="input-group mb-3" title="Unidad de Medida">
											<span class="col-4 text-right">Unidad: </span>
											<select id="ad-pr-unity" name="ad-pr-unity">
												@foreach( $unities as $unity )
													<option value="{!! $unity['id'] !!}">{!! $unity['title'] !!}</option>
												@endforeach
											</select>
										</div>
										<div class="input-group mb-3" title="Stock Mínimo">
											<span class="col-4 text-right">Mínimo: </span>
											<input id="ad-pr-minstock" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3" title="Stock Máximo">
											<span class="col-4 text-right">Máximo: </span>
											<input id="ad-pr-maxstock" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3" title="Stock Real">
											<span class="col-4 text-right">Real: </span>
											<input id="ad-pr-realstock" class="ad-us-input" type="text" name="">
										</div>
                                        <div class="input-group mb-3" title="Precio de Venta">
											<span class="col-4 text-right">precio: </span>
											<input id="ad-pr-price" class="ad-us-input" type="text" name="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Categoría: </span>
											<select id="ad-pr-category">
												@foreach( $categories as $category)
													<option value="{!!$category['id']!!}">{!!$category['title']!!}</option>
												@endforeach
											</select>
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Grupo: </span>
											<select id="ad-pr-group">
												@foreach( $groups as $group)
													<option value="{!!$group['id']!!}">{!!$group['title']!!}</option>
												@endforeach
											</select>
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Estado: </span>
											<select id="ad-pr-state">
												@foreach( $statesAccount as $stateAccount)
													<option value="{!!$stateAccount['id']!!}">{!!$stateAccount['title']!!}</option>
												@endforeach
											</select>
										</div>
										<div class="row">
											<div class="col-12">
												<span>FOTO: </span>
												<div class="row">
													<div class="col-5">
														<img id="ad-pr-img" src="{!! asset('img_sist/subir_imagen.png') !!}" class="rounded mx-auto d-block" style="width: 100%;">
													</div>
													<div class="col-3">
														<div class="input-group input-file" name="Fichier1">
															<span class="input-group-btn">
																<button class="btn btn-success btn-choose" type="button">+</button>
															</span>
															<input type="hidden" class="form-control" placeholder='Choose a file...' />
															<span class="input-group-btn mt-2">
												       			 <button class="btn btn-danger btn-reset" type="button">  -  </button>
												    		</span>
														</div>
													</div>
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
