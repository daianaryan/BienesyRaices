<?php include 'header.php'; ?>

<section data-stellar-background-ratio="0.5">
  <div class="position-relative text-center">  	
	<img src="img/fondo.jpg" alt="" width="145%" style="filter: brightness(40%); position: relative; overflow: hidden; background-position: center center; background-size: cover; vertical-align: middle; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center; min-height: 50vh; width: 100%; height: 50vh;">
  </div>
  
  <div class="position-absolute top-50 start-50 translate-middle h-50">			
    <h5 class="text-danger fw-light">TASACIONES</h5>					
  </div> 
</section>	
	
	<div class="container-fluid m-2">
		<ul class="breadcrumb mb-0 icono-prop">
			<li class="breadcrumb-item">
				<a href="index.php"> 
					<i class="fas fa-home text-danger"></i>
				</a>
			</li>
			<li class="breadcrumb-item">
				<span><small>Tasaciones</small></span>
			</li>
		</ul>
	</div>
			
    <section>
		<div id="contacto" class="d-flex justify-content-center mb-4">							
			<div class="m-5 shadow-lg p-3">	
				<div class="text-center">
					<h3 class="mt-4 text-danger" style="font-size: 24px"><b>¿NECESITÁS TASAR TU PROPIEDAD?</b></h3>
					<h5 class="mb-4 text-secondary" style="font-size: 18px"><small>¡Escribinos! Lo hacemos sin costo en 24 hs.</small></h5>
				</div>			
				<div class="d-flex justify-content-center">
					<form class="w-50 row g-3">
						<div class="col-12">				
							<input type="text" class="form-control" id="inputAddress" style="font-size: 12px" placeholder="Tu nombre">
							</div>
						<div class="col-md-6">			  
							<input type="email" class="form-control" id="inputEmail4" style="font-size: 12px" placeholder="Tu e-mail">
						</div>
						<div class="col-md-6">			  
							<input type="text" class="form-control" id="inputPassword4" style="font-size: 12px" placeholder="Tu teléfono">
						</div>			
						<div class="form-group">
							<textarea class="form-control" rows="4" id="mensaje" name="mensaje" style="font-size: 12px" placeholder="Tu consulta..." required=""></textarea>
						</div>	
						<!-- Boton Buscar-->
						<div class="col-12 d-flex justify-content-center">
							<button type="submit" class="btn btn-outline-danger" style="font-size: 14px">Enviar</button>
						</div> <!-- END Boton Buscar-->				
					</form>	
				</div>
			</div>			
		</div>
	</section>

	<?php include 'footer.php'; ?>
	<?php include 'script.php'; ?>
	
</body>
</html>