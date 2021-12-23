<?php include 'header-index.php'; ?>

	
	<section data-stellar-background-ratio="0.5">
		<div class="position-relative ">		
			<img src="img/fondo.jpg" alt="" width="145%" style="filter: brightness(40%); position: relative; overflow: hidden; background-position: center center; background-size: cover; vertical-align: middle; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center; min-height: 100vh; width: 100%;">
		</div>

		<!-- SEARCH-->		
		<div class="container-fluid carousel-content text-white text-wrap fw-light form-row basic-select-wrapper position-absolute top-50 start-50 translate-middle w-75 h-50">
			<div class="container-fluid d-block bg-muted border border-1 rounded">			
				<br><br>					
				<form action="search.php" method="GET" class="row g-3 text-center justify-content-center">									
					<h2 class="text-danger"><b>DESCUBRÍ TU PRÓXIMO LUGAR</b></h2>				

					<!-- Filter Search-->
					<div class="container d-flex justify-content-around text-center" id="filter-property">  

						<!-- Filtro de Operacion-->            										
						<div class="m-1">	
							<label class="input-select filterLabel">Operación</label>
							<select name="operacion" id="operacion" class="form-select input-select" aria-label="Default select example">
								<option value="" selected>-- Seleccione Tipo de Operacion --</option>
								<option value="Alquiler">Alquiler</option>
								<option value="Venta">Venta</option>                    
							</select>
						</div>  	      

						<!-- FILTRO: Tipo de Propiedad-->
						<div class="m-1">	
							<label class="input-select">Propiedades</label>
							<select name="tipo_propiedad" id="tipo_propiedad" class="form-select input-select" aria-label="Default select example">
							<option value="" data-select2-id="6" selected>-- Seleccione Tipo de Propiedad --</option>
							<option value="1">Terreno</option>
							<option value="2">Departamento</option>
							<option value="3">Casa</option>
							<option value="4">Local</option>
							<option value="5">Depósito</option>
							<option value="6">Galpón</option>
							<option value="7">Oficina</option>
							<option value="8">Edificio Comercial</option>
							<option value="9">Otros</option>
							</select>
						</div>    						

						<!-- FILTRO: Ubicación -->
						<div class="m-1">
							<label class="input-select">Ubicacion</label>
							<select name="ubicacion" id="ubicacion" class="form-control form-select input-select" aria-label="Default select example">
							<option value="" data-select2-id="6" selected> ¿Dónde?</option>
							<option value="Abasto">Abasto</option>
							<option value="Almagro">Almagro</option>
							<option value="Balvanera">Balvanera</option>
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
							<option value="Las-Canitas">Las Cañitas</option>
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
							<option value="Plaza-SMartin">Plaza S.Martin</option>
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

						<!-- BOTÓN: Buscar -->  
						<div class="m-2">
							<a type="submit" class="btn btn-outline-danger mt-3" href="propiedades.php"><i class="fas fa-search mr-1"></i></a>
						</div>
					</div> <!-- FIN: Filter Search-->						
				</form> <!--FIN DE FORMULARIO-->
				<br><br>												
			</div> 			
		</div> <!-- FIN Filtro de Busqueda-->
	</section>	
	
	<!--MAIN-->
	<main>	
		<div class="container-fluid  shadow-lg p-3 bg-body rounded">
			<!--Propieades Destacadas-->
			<div class="shadow-lg p-3 bg-body rounded">
				<h2 class="text-center mt-4" style="font-size:20px">Propiedades Recomendadas</h2>
				<br>

				<!-- Registros de la Base de Datos -->
				<?php include 'admin/listar.php'; ?>

				<!--Cards-->
				
					<div class="d-flex justify-content-center align-items-center">
						<div class="row row-cols-1 row-cols-md-3 g-4 w-75">
							<div class="col">
								<div class="card h-100">
									<img src="img/prop1.jfif" class="card-img-top" alt="prop1">
									<div class="card-body">
										<h5 class="card-title" style="font-size:16px">Imperdible casa a estrenar!!</h5>
										<p class="card-text" style="font-size:12px">Casa a estrenar con un parque amplio y muy iluminado.</p>
									</div>
									<div class="d-flex card-footer card__image-footer">																														
										<img class="me-5" src="img/Logo.jpg" width="50" alt="">
										<ul class="list-inline my-auto ml-auto">											
											<li class="list-inline-item"><h6 class="me-4" style="font-size:14px"><b> U$D 162.000</b></h6></li>											
										</ul>																				
									</div>
								</div>
							</div>							
							<div class="col">
							<div class="card h-100">
								<img src="img/prop2.jfif" class="card-img-top" alt="prop2">
								<div class="card-body">
									<h5 class="card-title" style="font-size:16px">Dpto. en excelente ubicación</h5>
									<p class="card-text" style="font-size:12px">Departamento de 2 ambientes al frente con balcon, muy amplio e iluminado. </p>
								</div>
								<div class="d-flex card-footer card__image-footer">																														
									<img class="me-5" src="img/Logo.jpg" width="50" alt="">
									<ul class="list-inline my-auto ml-auto">
										<li class="list-inline-item"><h6 class="me-4" style="font-size:14px"><b>U$D 125.000</b></h6></li>
									</ul>																				
								</div>
							</div>
							</div>
							<div class="col">
							<div class="card h-100">								
								<img src="img/prop3.jfif" class="card-img-top" alt="prop3">								
								<div class="card-body">
									<h5 class="card-title" style="font-size:16px">Quinta con pileta</h5>
									<p class="card-text" style="font-size:12px">Exlente ubicacion en zona de quintas para 7 personas.</p>
								</div>
								<div class="d-flex card-footer card__image-footer">																														
									<img class="me-5" src="img/Logo.jpg" width="50" alt="">
									<ul class="list-inline my-auto ml-auto">
										<li class="list-inline-item"><h6 class="me-4" style="font-size:14px"><b>U$D 158.000</b></h6></li>
									</ul>																				
								</div>
							</div>
							</div>
						</div><!--END Cards-->			
					</div> 			  						
			</div><!--END Propieades Destacadas-->
		</div>
	

		<!--Porque elegirnos-->
		<div class="card">
			<img src="img/imgTraparent.png" class="card-img" width="1800" height="470" alt="...">			
			<div class="card-img-overlay w-100">
				<div class="d-md-block m-4 p-4 chooseUs">				
					<h5 class="card-title mb-2 text-danger" style="font-size:16px">¿POR QUÉ ELEGIRNOS?</h5> <br>
					<p class="card-text mb-4" style="font-size:14px">Contamos con más de 30 años de experiencia en asesoría <br> inmobiliaria, consultoría y gestoría. A lo largo de todos estos <br> años, acompañamos a nuestros clientes mediante la realización <br> de más de 600.000 tareas de gestión guiados por los más altos <br> estándares de calidad y seguridad. <br><br>
						<span><b>¿Nos quieres conocer mejor?</b></span>
					</p>
					<!--Boton-->				
					<div class="align-items-end">										
						<a type="btn" class="btn me-3 btn-danger" style="font-size:12px" href="nosotros.php">CONOCER MÁS</a>
					</div>
				</div>
			</div>
		</div>
	
	</main>							

	<!--Tour de Videos-->
	<div class="container-fluid">
		<div class="shadow-lg p-3 mb-5 bg-body rounded ">
			<div class="card mt-2">
				<h2 class="text-center mt-5 mb-5">Tour de Videos</h2>				
				<div class="d-flex justify-content-center mb-4">
					<button type="button" class="btn btn-outline-danger" style="font-size:14px">Conoce nuestras propiedades</button>				
				</div>
			</div>
		</div>
	</div> <!--END Tour de Videos-->			
	

	<?php include 'footer.php'; ?>  
	<?php include 'script.php'; ?>

</body>
</html>	