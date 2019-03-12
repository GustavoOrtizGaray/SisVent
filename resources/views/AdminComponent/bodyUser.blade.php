<div class="col-12 mb-5" id="body-user">
	<div class="row">
		<div class="col-12 col-md-5 col-lg-4 col-xl-3">
			<div class="row">
				<div class="col-12 mt-3 color-cuerpo">
					<span>USUARIOS: </span>
					<div class="input-group mb-3">
                        <input id="buscador" type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        	<span class="btn ad-us-btn-search fas fa-search" ></span>
                        </div>
                    </div>
                    <div id="resultadoB" class="container color-contCuerpo p-4" style="height: 300px; overflow: auto;">
                    	@foreach( $users as $user)
                    		<div>
                    		<div class="bg-info rounded mb-2 row ad-us-item" id="{{$user['id']}}" style="cursor: pointer;">
			   		            <div class="col-2 p-1">
			   	                    <i class="fas fa-user-circle img-power-up pl-0"></i>
			                    </div>		  
				                <div class="col-8 text-white mt-0 pl-0">
				                	<div class="col-12">
				                		{!!$user['name']!!}
				                	</div>	                	
				                	<div class="col-12">
				                		@foreach($user['typeAccount'] as $cuenta)
				                			@switch($cuenta['id'])
				                				@case('1')
					                				<span class="badge bg-success badge-pill rounded-circle small" style="padding: 6%;">
						                				Ad
						                			</span>
				                					@break
				                				@case('2')
				                					<span class="badge bg-dark badge-pill rounded-circle small" style="padding: 6%;">
						                				Ve
						                			</span>
				                					@break
				                				@case('3')
				                					<span class="badge bg-warning badge-pill rounded-circle small" style="padding: 6%;">
						                				Al
						                			</span>
				                					@break
				                				@case('4')
				                					<span class="badge bg-success badge-pill rounded-circle small" style="padding: 6%;">
						                				Vt
						                			</span>
				                					@break
				                			@endswitch
				                			
				                		@endforeach
				                		
				                	</div>
				                </div>
				                <div class="col-2">
				                	@switch($user['state'])
				                		@case('1')
				                    		<img class="mt-3" style="margin-left: -4px" src="{!! asset('img_sist/botones/activo.png') !!}">
				                			@break
				                		@case('2')
				                    		<img class="mt-3" style="margin-left: -4px" src="{!! asset('img_sist/botones/inactivo.png') !!}">
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
						<h4 style="text-align: center;">DATOS DE USUARIO</h4>
						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Nombres: </span>
											<input id="ad-us-name" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Apellidos: </span>
											<input id="ad-us-surname" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">DNI: </span>
											<input id="ad-us-dni" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">F. de Nac: </span>
											<input id="ad-us-fnac" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Email: </span>
											<input id="ad-us-email" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Contraseña: </span>
											<input id="ad-us-pass" class="ad-us-input" type="text" name="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Dirección: </span>
											<input id="ad-us-address" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Celular: </span>
											<input id="ad-us-cel" class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Estableci: </span>
											<select id="ad-us-stablishment">
												@foreach( $listsEstablishments as $listEstablishment)
													<option value="{!! $listEstablishment['id'] !!}">{!!$listEstablishment['title']!!}</option>
												@endforeach
											</select>
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Estado: </span>
											<select id="ad-us-state">
												@foreach( $statesAccount as $stateAccount)
													<option value="{!!$stateAccount['id']!!}">{!!$stateAccount['title']!!}</option>
												@endforeach
											</select>
										</div>
										<div class="row">
											<span>Privilegios: </span>
											<div class="col-12 ad-us-border-div">
												@foreach( $typesAccount as $typeAccount)
													<div class="form-check">
	                                                    <label class="form-check-label">
	                                                        <input id="{!!$typeAccount['title']!!}" type="checkbox" class="form-check-input" name="ad-us-typeAccount" value="">{!!$typeAccount['title']!!}
	                                                    </label>
	                                                </div>
												@endforeach
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
