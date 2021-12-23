<?php include 'header.php'; ?>

<section data-stellar-background-ratio="0.5">
  <div class="position-relative text-center">
  	<img src="img/fondo.jpg" alt="" width="145%" style="filter: brightness(40%); position: relative; overflow: hidden; background-position: center center; background-size: cover; vertical-align: middle; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center; min-height: 50vh; width: 100%; height: 50vh;">
  </div>
  
  <div class="position-absolute top-50 start-50 translate-middle h-50">			
    <h5 class="text-danger fw-light">CONTACTO</h5>					
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
				<span><small>Contacto</small></span>
			</li>
		</ul>
	</div>

    <section>
		<div id="contacto" class="d-flex">
			<div class="w-100 h-25 m-3 container">
				<div class="m-4 shadow-lg p-3">										
					<form class="row g-3">
						<h3 class="text-center m-2" style="font-size: 14px"><br>Ingrese su consulta, un asesor se contactará a la brevedad.</h3>
						<br>
						<div class="col-12">			
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>	
							<input type="text" class="form-control" id="inputAddress" style="font-size: 12px" placeholder="Tu nombre">
						</div>
						<div class="col-md-6">	
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>		  
						<input type="email" class="form-control" id="inputEmail4" style="font-size: 12px" placeholder="Tu e-mail">
						</div>
						<div class="col-md-6">			
							<span class="input-group-addon"></span>  
						<input type="text" class="form-control" id="inputPassword4" style="font-size: 12px" placeholder="Tu teléfono">
						</div>			
						<div class="form-group">
							<textarea class="form-control" rows="4" id="mensaje" name="mensaje" style="font-size: 12px" placeholder="Tu consulta..." required=""></textarea>
						</div>	
						<!-- Boton Enviar-->
						<div class="col-12 d-flex justify-content-center">
						<button type="submit" class="btn btn-outline-danger" style="font-size: 14px">Enviar</button>
						</div> <!-- END Boton Enviar-->				
					</form>												
				</div>					
			</div>				
			<!-- Contactos -->
			<!-- Datos -->
			<div class="container m-5 col-md-6 shadow-lg">
				<div class="ratio ratio-4x3 col-md-6">				
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.547305177871!2d-58.27799248543711!3d-34.716596370985066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32e08a56872fd%3A0x834e0dad23ea9faf!2sBelgrano%2010%2C%20Quilmes%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1639838751214!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>				
				</div>			
			</div>					
		</div>
	</section>

	<?php include 'footer.php'; ?>
	<?php include 'script.php'; ?>
	
</body>
</html>