<?php include 'header_admin.php'; ?>	  

    <section data-stellar-background-ratio="0.5">
		<div id="home" class="position-relative text-center"></div>
		<div class="position-absolute top-50 start-50 translate-middle h-50">			
			<h5 class="text-danger fw-light">BIBLIOTECA</h5>					
		</div> 
	</section>
	
	<div class="container-fluid m-2">
		<ul class="breadcrumb mb-0 icono-prop">
			<li class="breadcrumb-item">
				<a href="index_admin.php"> 
					<i class="fas fa-home text-danger"></i>
				</a>
			</li>
			<li class="breadcrumb-item">
				<span><small>Biblioteca</small></span>
			</li>
		</ul>
	</div>		
    
   <div class="container">
       <h3 class="text-center" style="font-size: 24px">Listados de Propiedades</h3>
	   <br>	   
	</div>

	<div class="border row container-fluid m-2 p-2">
       <!-- SECCION PARA INSERTAR PROPIEDADES -->
	   <div class="border col-md-5 shadow-lg">
            <div class="border card">
                <div class="card-header label">
                    <span><b><i class="fas fa-cubes"></i> AGREGAR PROPIEDADES</b></span>
                </div>
                <div class="card-body">
                <p style="font-size: 12px"><span style="color: red">*</span> Datos obligatorios</p>
                    <!-- Para recepcionar archivos uso enctype-->
                    <form action="registrar.php" method="POST" enctype="multipart/form-data">
                        <div class="row p-2">
                            <div class="col-md-6">
                                <label class="label">Tipo de Operación <span style="color: red">*</span></label>					  	
                                <select required class="form-select label" aria-label="Default select example" name="operacion" id="operacion" style="font-size: 12px">
                                    <option selected>-- Seleccione Operación --</option>                                    
                                    <option value="Alquiler">Alquiler</option>
                                    <option value="Venta">Venta</option>                              
                                </select>
                            </div>
                            <div class="col-md-6">   
                                <label class="label">Tipo de Propiedad <span style="color: red">*</span></label>
                                <select required class="form-select label" name="tipo_propiedad" id="tipo_propiedad" style="font-size: 12px">
                                    <option>-- Seleccione Propiedad --</option>
                                    <option value="Terreno">Terreno</option>
                                    <option value="Departamento">Departamento</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Local">Local</option>
                                    <option value="Deposito">Depósito</option>
                                    <option value="Galpon">Galpón</option>
                                    <option value="Oficina">Oficina</option>
                                    <option value="EdificioComercial">Edificio Comercial</option>
                                    <option value="Otros">Otros</option>
                                </select>                                                             
                            </div> 
                        </div>                       
                        <div class="p-2 label">                            
                            <label for="titulo">Titulo <span style="color: red">*</span></label>
                            <input required class="form-control" type="text" name="titulo" id="titulo" placeholder="Ingrese un Titulo">                                                                                   
                        </div>                        
                        <div class="p-2 label">
                            <label for="imagen">Imagen de la Propiedad</label>
                            <input required class="form-control" type="file" name ="imagen" id="image">
                        </div>                         
                        <!-- FILTRO: Ubicación -->
						<div class="p-2 form-group" style="font-size: 12px">
							<label class="input-select label">Ubicacion <span style="color: red">*</span></label>
							<select required name="ubicacion" id="ubicacion" class="form-control form-select label" style="font-size: 12px">
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
                        <div class="row p-2">
                            <div class="col-md-3 label">                                                                
                                <label for="superficie"><i class="fas fa-home"></i> Superficie</label>
                                <input class="form-control" type="text" name="superficie" id="superficie" placeholder="mts2">
                            </div>
                            <div class="col-md-3 label">  
                                <label><i class="fas fa-bed"></i> Ambientes</label>
                                <select class="form-select label" name="ambientes" id="ambientes" style="font-size: 12px">
                                    <option selected> Amb.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>                                                                                                            
                                </select>                                                                                              
                            </div>                            
                            <div class="col-md-3 label">
                                <label><i class="fas fa-bath"></i> Baños</label>
                                <select class="form-select label" name="banios" id="banios" style="font-size: 12px">
                                    <option selected> Baños</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>                                                                                                            
                                </select>                                                                                                      
                            </div>
                            <div class="col-md-3 label">
                                <label for="importe">Importe</label>
                                <input class="form-control" type="text" name="importe" id="importe" placeholder="$">
                            </div> 
                        </div>                    
                        <div class="p-2 label">
                            <label for="descripcion">Indique alguna descripción de la Propiedad</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="4" placeholder="Indique alguna descripción"></textarea>
                        </div>
                        <div class="p-1 text-center">                        
                            <input class="btn btn-outline-success" type="submit" value="Enviar" style="font-size: 12px">
                        </div>
                    </form>
                </div> <!--cierra el body-->
            </div><!--cierra el card-->            
        </div><!--cierra el col--> 

		<!-- SECCION PARA ELIMINAR Y MODIFICAR PROPIEDADES -->
        <div class="col-md-7 shadow-lg">
            <div class="card h-25">            
                <div class="card-header label" style="overflow-y:scroll">
                    <span><b><i class="fas fa-cubes"></i> EDICIÓN</b></span>
                    <br> <br> 
                    <table class="table-responsive table table-striped table-sm card-body cellspacing-0">
                        <thead>
                            <tr class="text-center">                                
                                <th scope="col">#</th>
                                <th scope="col">Operación</th>                        
                                <th scope="col">Propiedad</th>     
                                <th scope="col">Titulo</th>                            
                                <th scope="col">Imagen</th>   
                                <th scope="col">Ubicacion</th>                                
                                <th scope="col">Superficie</th>    
                                <th scope="col">Ambientes</th>    
                                <th scope="col">Baños</th>    
                                <th scope="col">Importe</th>
                                <th scope="col">Descripcion</th>
								<th scope="col">Acción</th>                                
                            </tr>
                        </thead>
                        <tbody class="bodyContent">

							<!-- Registros de la Base de Datos -->
							<?php include 'listar.php'; ?>

							<!-- Leemos propiedades 1 por 1 -->
							<?php foreach($propiedades as $propiedades){ ?>

							<tr class="input-select text-center">								 
								<td scope="row"><?php echo $propiedades['id'];?></td>
								<td><?php echo $propiedades['operacion'];?></td>
								<td><?php echo $propiedades['tipo_propiedad'];?></td>      
								<td><?php echo $propiedades['titulo'];?></td>                     
								<td> <img width="100" src="imagenes/<?php echo $propiedades['imagen'];?>" alt="">  </td>
								<td><?php echo $propiedades['ubicacion'];?></td>
                                <td><?php echo $propiedades['superficie'];?></td>
                                <td><?php echo $propiedades['ambientes'];?></td>
                                <td><?php echo $propiedades['banios'];?></td>                                
                                <td>USD <?php echo $propiedades['importe'];?></td> 									
								<td><?php echo $propiedades['descripcion'];?></td>							
								<td class="d-flex py-3">
									<!-- <a name="borrar" id="borrar" type="button" class="btn btn-outline-danger m-1" href="index.php" onclick="confirmation(<?php echo $propiedades['id'];?>)"><i class="far fa-trash-alt"></i></a> -->
									<button type="button" class="btn btn-outline-success editbtn" data-bs-toggle="modal" data-bs-target="#editar"><i class="far fa-edit"></i></button>
									<button type="button" class="boton btn btn-outline-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr> 																	

							<?php #cerramos la llave del foreach
                            } ?>    
                                            
                        </tbody>                                        
                    </table>                                                               
                        </div> <!--cierra el col--> 

					<!--Ventana Modal para Actualizar--->
					<?php  include('modalEdit.php'); ?>

					<!--Ventana Modal para la Alerta de Eliminar--->
					<?php include('modalEliminar.php'); ?>
                </div>
		</div> <!-- CIERRA: Seccion para eliminar y modificar propiedades --> 
	</div>

<script>
	$('.editbtn').on('click',function(){
		$tr=$(this).closest('tr');
		var datos=$tr.children("td").map(function () {
            return $(this).text();
        });
        $('#update_id').val(datos[0]);
        $('#operation').val(datos[1]);
        $('#tipoprop').val(datos[2]);
        $('#title').val(datos[3]);
        $('#image').val(datos[4]);
        $('#place').val(datos[5]);
        $('#sup').val(datos[6]);
        $('#amb').val(datos[7]);
        $('#banio').val(datos[8]);
        $('#precio').val(datos[9]);
        $('#desc').val(datos[10]);
	});
</script>


<script>
	$('.deletebtn').on('click',function(){
		$tr=$(this).closest('tr');
		var datos=$tr.children("td").map(function () {
            return $(this).text();
        });
        $('#delete_id').val(datos[0]);       
	});
</script>

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var nav = document.querySelector("nav");
			nav.classList.toggle("abajo",window.scrollY>0);

			var nav = document.querySelector("nav");
			nav.classList.toggle("abajo",window.scrollY>0);
		})
	</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

	<script src="https://kit.fontawesome.com/8552914272.js" crossorigin="anonymous"></script>

  </body>
</html>	   