
<div class="col-12 pb-5">
	<div class="row">
		<div class="col-12 col-md-5 color-cuerpo mt-3 ">
			<p class="text-secondary"> CATEGORIAS: </p>

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


							@foreach($categorias as $categoria )
							@if($categoria["estadoCategoria"] == 1)
								@php  ($clase = "fas fa-check-circle check-sussec")
							@else
								@php  ($clase  = "fas fa-times-circle check-error")
							@endif
							<div>
								<div class="bg-secondary rounded mb-2 row itm-hover categoria"  id ="{{ $categoria['id'] }} ">						  
								  <div class="col-10 text-white"> {{ $categoria["nombreCategoria"] }} </div>
								  <div class="col-2"> <i class="{{ $clase }}"></i>
								  </div>
								</div>
							</div>
						@endforeach

						  
					</div>
					<p align="center" class="m-3">
						<button type="button" class="btn btn-success" id="nuevaCategoria">Nueva Categoria</button>
					</p>

		</div>



		<div class="col-12 col-md-7 border-body mt-3 p-3 pb-5 color-cuerpo ">
			<div class="color-contCuerpo p-3 ">
				<h5 align="center" class="text-secondary">Datos Categoria</h5>

				
 
				<form for="Formulario nueva categoria" id="formCategorias">
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Nombre:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control bt-peronalizado" id="nombreCategoria" placeholder="Nombre" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-3 col-form-label">Estado:</label>
				    <div class="col-sm-9">
				        <select id="estadoCategoria" class="form-control bt-peronalizado">
				          <option value="1">Activo</option>
				          <option value="2">Inactivo</option>
				        </select>          
				    </div>
				  </div>

				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-3 col-form-label">Descripción:</label>
				    <div class="col-sm-9">
				    	<textarea class="form-control bt-peronalizado1" id="descripcionCategoria"> </textarea>		      
				    </div>
				  </div>
				
				  <div class="form-group row">
				    <div class="col-sm-10">
				      	<p align="center" class="m-3">
						<button type="submit" id="btn_Guardar" class="btn btn-success" idmodo="1">Guardar</button>
					</p>
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>
<br>
