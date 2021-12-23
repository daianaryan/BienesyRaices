
<!-- MODAL EDITAR-->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px">Modificacion de Propiedades</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!-- Formulario -->
				<form action="editar.php" method="GET" enctype="multipart/form-data">
					<input class="m-2 border border-white" type="text" name="id" id="update_id" style="font-size: 12px">
					<div class="row p-2">                                                  
						<div class="col-md-6 form-group label" style="font-size: 12px">
							<label>Tipo de Operación</label>					  	
								<select required class="form-select label" name="operacion" id="operation" style="font-size: 12px">
									<option value="Alquiler">Alquiler</option>
									<option value="Venta">Venta</option>                              
								</select>                            
						</div>
						<div class="col-md-6 form-group label" style="font-size: 12px">   
							<label>Tipo de Propiedad</label>
							<select required class="form-select label" name="tipo_propiedad" id="tipoprop" style="font-size: 12px">
								<option value="Terreno">Terreno</option>
								<option value="Departamento">Departamento</option>
								<option value="Casa">Casa</option>
								<option value="Local">Local</option>
								<option value="Deposito">Depósito</option>
								<option value="Galpon">Galpón</option>
								<option value="Oficina">Oficina</option>
								<option value="Edificio Comercial">Edificio Comercial</option>
								<option value="Otros">Otros</option>
							</select> 
						</div> 
					</div>
					<div class="row p-2">
						<div class="p-2 form-group label" style="font-size: 12px">                                                                
							<label for="titulo">Titulo</label>
							<input class="form-control label" type="text" name="titulo" id="title" style="font-size: 12px">
						</div>						
						<!-- FILTRO: Ubicación -->
						<div class="form-group label" style="font-size: 12px">   
							<label>Ubicacion</label>
							<select required class="form-select label" name="ubicacion" id="place" style="font-size: 12px">								
								<option value="Abasto">Abasto</option>
								<option value="Almagro">Almagro</option>
								<option value="Bbalvanera">Balvanera</option>
								<option value="Barracas">Barracas</option>
								<option value="Barrio-Norte">Barrio Norte</option>
								<option value="Belgrano">Belgrano</option>
								<option value="Belgrano-r">Belgrano R</option>
								<option value="Caballito">Caballito</option>
								<option value="Canning">Canning (E. Echeverria)</option>
								<option value="Centro">Centro (Capital Federal)</option>
								<option value="Colegiales">Colegiales</option>
								<option value="Congreso">Congreso</option>
								<option value="Constitucion">Constitución</option>
								<option value="Flores">Flores</option>
								<option value="Las-canitas">Las Cañitas</option>
								<option value="Monserrat">Monserrat</option>
								<option value="Nunez">Nuñez</option>
								<option value="Once">Once</option>
								<option value="P.Centenario">P.Centenario</option>
								<option value="Palermo">Palermo</option>
								<option value="Palermo-Chico">Palermo Chico</option>
								<option value="Palermo-Hollywood">Palermo Hollywood</option>
								<option value="Palermo-Nuevo">Palermo Nuevo</option>
								<option value="Palermo-Soho">Palermo Soho</option>
								<option value="Parque-Chacabuco">Parque Chacabuco</option>
								<option value="Plaza-S.Martin">Plaza S.Martin</option>
								<option value="Recoleta">Recoleta</option>
								<option value="Retiro">Retiro</option>
								<option value="Tribunales">Tribunales</option>
								<option value="Venado">Venado</option>
								<option value="Villa-Crespo">Villa Crespo</option>
								<option value="Villa-Devoto">Villa Devoto</option>
								<option value="Villa-Gral.Mitre">Villa Gral.Mitre</option>
								<option value="Villa-Ortuzar">Villa Ortuzar</option>
								<option value="Villa-Urquiza">Villa Urquiza</option>
							</select> 
						</div>						
						<!--
							<div class="p-2 form-group" style="font-size: 12px">
							<label for="ubicacion">Ubicacion</label>
							<input class="form-control" type="text" name="ubicacion" id="place" style="font-size: 12px">
						</div>
-->												
					</div>                                            
					<div class="row p-2">						
						<div class="form-group col-md-3 label" style="font-size: 12px">                                                                
							<label for="superficie"><i class="fas fa-home"></i> Superficie</label>
							<input class="form-control label" type="text" name="superficie" id="sup" style="font-size: 12px">
						</div>
						<div class="col-md-3 form-group label">  
							<label><i class="fas fa-bed"></i> Ambientes</label>
							<select class="form-select label" name="ambientes" id="amb" style="font-size: 12px">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>                                                                                                            
							</select>                                                                                                                         
						</div>                            
						<div class="col-md-3 form-group label" style="font-size: 12px">
							<label><i class="fas fa-bath"></i> Baños</label>
							<select class="form-select label" name="banios" id="banio" style="font-size: 12px">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>                                                                                                            
							</select>                              
						</div>
						<div class="col-md-3 form-group label" style="font-size: 12px">                                                                
							<label for="importe"><i class="fas fa-dollar-sign"></i> Importe</label>
							<input class="form-control label" type="text" name="importe" id="precio" style="font-size: 12px">
						</div>
					</div>                         
					<div class="p-2 form-group label" style="font-size: 12px">
						<label for="descripcion">Indique Descripción de la Propiedad</label>
						<textarea class="form-control label" name="descripcion" id="desc" cols="30" rows="4" style="font-size: 12px"></textarea>
					</div>
					<div class="p-2 label" style="font-size: 12px">
						<label for="imagen">Imagen</label>
						<input class="form-control label" type="file" name ="imagen" id="image" style="font-size: 12px">
					</div>	
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-danger" style="font-size: 12px" data-bs-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-outline-success" style="font-size: 12px">Guardar Cambios</button>
					</div>  
				</form>	
			</div>
		</div>
	</div>
</div> <!-- FIN: MODAL EDITAR-->

<script>
    $("#editar").draggable({
    handle: ".modal-header"
});
</script>