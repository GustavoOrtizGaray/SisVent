<div class="col-12 cuerpo-facturacion mb-5">
	<div class="row justify-content-center align-items-center">
		<div class="col-8">
			<h4 align="center" class="letra-10">CONFIGURACIÓN DE FACTURACIÓN</h4>
			
			<form id="formFacturacion">
				<div class="row"> 
					<div class="col-12 color-cuerpo mb-2  p-3">
											
						<div class="form-check form-check-inline row col-12 col-sm-6 justify-content-center">
						  <input class="form-check-input" type="radio" name="modoEmision" value="Sunat">
						  <label class="form-check-label letra-9" for="Registro a SUNAT">SUNAT</label>
						</div>
						<div class="form-check form-check-inline row col-12 col-sm-6 justify-content-center">
						  <input class="form-check-input" type="radio" name="modoEmision" value="cInterno">
						  <label class="form-check-label letra-9" for="Solo Comprobantes">Comprobantes Internos</label>
						</div>

					</div>



					<h6 class="letra-9">CONFIGURACIÓN DE CERTIFICADO DIGITAL</h6>
					<div class="col-12 color-cuerpo color-cuerpo m2-2 p-3">
						Sona pendiente
					</div>
					<h6 class="letra-9">CONFIGURACIÓN ENVIO DE COMPROBANTES</h6>
					<div class="col-12 color-cuerpo color-cuerpo mb-2 p-2">
						
						<div class="form-check form-check-inline row col-12 col-sm-6 justify-content-center">
						  <input class="form-check-input" type="radio" name="tipoEmision" value="Manual">
						  <label class="form-check-label letra-9" for="inlineRadio1">Manual</label>
						</div>
						<div class="form-check form-check-inline row col-12 col-sm-6 justify-content-center border-l">
						  <input class="form-check-input" type="radio" name="tipoEmision" value="Automatico">
						  <label class="form-check-label letra-9" for="inlineRadio2">Automatico</label>
			
							<div class="form-group col-12 row">
								<label for="diasAutomatico"  class="col-sm-6 text-right col-form-label letra-9">Nro Días :</label>
							    	<div class="col-sm-6">
							      	<input type="number" class="btn-facturacion letra-9" id="numeroDias" placeholder="0"  min="1" max="7" >
							    	</div>
							 </div>

						</div>
					</div>

				</div>	

				 <div class="form-group row">
				    <div class="col-sm-10">
				      	<p align="center" class="m-3">
						<button type="submit" id="btn_Guardar" class="btn btn-success" >Guardar</button>
					</p>
				    </div>
				  </div>

			</form>	

			
		

		</div>	
	</div>
</div>

