<div class="col-12 mb-5">
	<div class="row">
		<div class="col-12 col-md-3">
			<div class="row">
				<div class="col-12 mt-3 color-cuerpo">
					<span>USUARIOS: </span>
					<div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        	<span class="btn ad-us-btn-search fas fa-search" ></span>
                        </div>
                    </div>
                    <div class="container color-contCuerpo p-4" style="height: 300px; overflow: auto;">
                    	@foreach( $typesAccount as $typeAccount)
                    		<div>
                    			<span>{!!$typeAccount['title']!!}</span>
                    			<div>
                    				@foreach($users as $user)
                    					@if($user['typeAccount']==$typeAccount['id'])
                    						<div class="bg-info rounded mb-2 row">
							   		            <div class="col-2">
							   	                    <i class="fas fa-user-circle img-power-up"></i>
							                    </div>		  
								                <div class="col-8 text-white mt-2">{!!$user['name']!!}</div>
								                <div class="col-2">
								                    <span class="badge bg-success badge-pill rounded-circle lista-circulo mt-2"> </span>
								                </div>
								            </div>
                    					@endif
                    				@endforeach
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
		<div class="col-12 col-md-9 border-body">
			<div class="row border-body-res">
				<div class="col-12 mt-3 color-cuerpo pt-3 pb-3 padind-res">
					<div class="container color-contCuerpo p-4">
						<h4 style="text-align: center;">DATOS DE USUARIO</h4>
						<div class="row">
							<div class="col-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Nombres: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Apellidos: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">DNI: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">F. de Nac: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Email: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Contraseña: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
                                        <div class="input-group mb-3">
											<span class="col-4 text-right">Rep. Cont: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="row">
									<div class="col-12">
										<div class="input-group mb-3">
											<span class="col-4 text-right">Dirección: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Celular: </span>
											<input class="ad-us-input" type="text" name="">
										</div>
										<div class="input-group mb-3">
											<span class="col-4 text-right">Estableci: </span>
											<select>
												@foreach( $listsEstablishments as $listEstablishment)
													<option>{!!$listEstablishment['title']!!}</option>
												@endforeach
											</select>
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
											<span>Privilegios: </span>
											<div class="col-12 ad-us-border-div">
												@foreach( $typesAccount as $typeAccount)
													<div class="form-check">
	                                                    <label class="form-check-label">
	                                                        <input type="checkbox" class="form-check-input" value="">{!!$typeAccount['title']!!}
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
