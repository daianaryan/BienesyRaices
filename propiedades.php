<?php include 'header.php'; ?>
<?php include 'admin/conexion.php'; ?>


<?php  
  #$conexion = new conexion('localhost','root','propiedades','');
  #$sqlTotal = "SELECT COUNT(*) FROM propiedades";
  #$total = $conexion->consultar($sqlTotal);                        
?>

<?php   
$conexion = new conexion();  
#$conexion = new conexion('localhost','root','propiedades','');  
$search = "SELECT * FROM propiedades";
$sqlSearch = $conexion->consultar($search);
$busqueda = null;

if(isset($_GET['buscar'])){

  $operacion      = $_GET['operacion'];
  $tipo_propiedad = $_GET['tipo_propiedad'];     
  $ubicacion      = $_GET['ubicacion'];  
  $ambientes      = $_GET['ambientes'];
  $banios         = $_GET['banios'];  

  #creo una instancia(objeto) de la clase de conexion
  #$conexion = new conexion();
  #$conexion = new conexion('localhost','root','','propiedades');
  #$sql="SELECT * FROM propiedades WHERE operacion = '$operacion' or tipo_propiedad = '$tipo_propiedad' or ubicacion = '$ubicacion' or ambientes = '$ambientes' or banios = '$banios';";

  # buscar= SELECT * FROM `propiedades` WHERE tipo_propiedad = '1' or ubicacion = 'ubicacion-24671-abasto' or ambientes = '2-ambientes'or banios = '1-banios';
              
  #$searchPropiedades = $conexion->ejecutar($sql);
  #while($consulta = mysqli_fetch_array($searchPropiedades)){
   # echo "
    #  <div class=\"table-responsive card-body\">                
     #   <table class=\"table table-striped table-sm\">          
      #    <tr class=\"text-center\">                            
       #     <th>Operación</th>                        
        #    <th>Propiedad</th>     
         #   <th>Ubicacion</th>              
          #  <th>Ambientes</th>                                
           # <th>Baños</th>              
          #</tr>              
#          <tr>
 #           <td>".$consulta['operacion']."</td>
  #          <td>".$consulta['tipo_propiedad']."</td>
   #         <td>".$consulta['ubicacion']."</td>
    #        <td>".$consulta['ambientes']."</td>
     #       <td>".$consulta['banios']."</td>
      #    </tr>          
       #   </table>
   # ";
  #}

  #para que no inserte muchas veces
 # header("location:propiedades.php");

 #mostrar datos 
 #vamos a consultar para llenar la tabla 
 $conexion = new conexion();
 #$conexion = new conexion('localhost','root','propiedades','');
 #$propiedades = $conexion->consultar("SELECT * FROM propiedades");
 $search = "SELECT * FROM `propiedades` WHERE (operacion = '$operacion') or (tipo_propiedad = '$tipo_propiedad') or (ubicacion = '$ubicacion') or (ambientes = '$ambientes') or (banios = '$banios');";
 $sqlSearch = $conexion->consultar($search);
 #comprobamos que la info este en forma de arreglo
 #print_r($resultado);
} 
?>

<section data-stellar-background-ratio="0.5">
  <div id="home" class="position-relative text-center"></div>
  
  <div class="position-absolute top-50 start-50 translate-middle h-50">			
    <h5 class="text-danger fw-light">PROPIEDADES</h5>					
  </div> 
</section>	
	
	<div class="container-fluid m-2">
		<ul class="breadcrumb mb-0">
			<li class="breadcrumb-item">
				<a href="index.php"> 
					<i class="fas fa-home text-danger"></i>
				</a>
			</li>
			<li class="breadcrumb-item">
				<span><small>Propiedades</small></span>
			</li>
		</ul>
	</div>
  
  <form id="propiedad" action="propiedades.php" method="GET" enctype="multipart/form-data">
    <div>    
      <div id="propiedad" class="container border shadow-lg col-lg-11 mb-5 mb-lg-0">
        <div class="sidebar">
          <div class="widget">
            <div class="widget-title widget-collapse m-2">
              <h6 style="margin-bottom: 1em">Filtros de Búsqueda</h6>                
            </div>

            <!-- Filter Search-->
            <div class="collapse show" id="filter-property">  

              <!-- Filtro de Operacion-->            										
              <div class="col-md-3">	
                <label class="input-select">Tipo de Propiedad</label>
                <select name="operacion" id="operacion" class="form-select input-select" aria-label="Default select example">
                  <option value="" data-select2-id="6" selected>-- Seleccione Tipo de Operacion --</option>
                  <option value="Alquiler">Alquiler</option>
                  <option value="Venta">Venta</option>                    
                </select>
              </div>  	              

              <div class="d-flex justify-content-center m-2 p-1 text-center">

                <!-- FILTRO: Tipo de Propiedad-->
                <div class="col-md-3">	
                  <label class="input-select">Tipo de Propiedad</label>
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
                <div class="col-md-3">
                  <label class="input-select">Ubicacion</label>
                  <select name="ubicacion" id="ubicacion" class="form-control form-select input-select" aria-label="Default select example">
                    <option value="" data-select2-id="6" selected>-- Seleccione Ubicación --</option>
                    <option value="ubicacion-24671-abasto">Abasto</option>
                    <option value="ubicacion-24673-almagro">Almagro</option>
                    <option value="ubicacion-24676-balvanera">Balvanera</option>
                    <option value="ubicacion-24677-barracas">Barracas</option>
                    <option value="ubicacion-24678-barrio-norte">Barrio Norte</option>
                    <option value="ubicacion-24682-belgrano">Belgrano</option>
                    <option value="ubicacion-24686-belgrano-r">Belgrano R</option>
                    <option value="ubicacion-24690-caballito">Caballito</option>
                    <option value="ubicacion-26450-canning-(e.-echeverria)">Canning (E. Echeverria)</option>
                    <option value="ubicacion-24697-centro-(capital-federal)">Centro (Capital Federal)</option>
                    <option value="ubicacion-24707-colegiales">Colegiales</option>
                    <option value="ubicacion-24708-congreso">Congreso</option>
                    <option value="ubicacion-24709-constitucion">Constitución</option>
                    <option value="ubicacion-24710-flores">Flores</option>
                    <option value="ubicacion-24687-las-canitas">Las Cañitas</option>
                    <option value="ubicacion-24700-monserrat">Monserrat</option>
                    <option value="ubicacion-24721-nunez">Nuñez</option>
                    <option value="ubicacion-24724-once">Once</option>
                    <option value="ubicacion-24725-p.centenario">P.Centenario</option>
                    <option value="ubicacion-24728-palermo">Palermo</option>
                    <option value="ubicacion-24730-palermo-chico">Palermo Chico</option>
                    <option value="ubicacion-24731-palermo-hollywood">Palermo Hollywood</option>
                    <option value="ubicacion-24732-palermo-nuevo">Palermo Nuevo</option>
                    <option value="ubicacion-24733-palermo-soho">Palermo Soho</option>
                    <option value="ubicacion-24726-parque-chacabuco">Parque Chacabuco</option>
                    <option value="ubicacion-24680-plaza-s.martin">Plaza S.Martin</option>
                    <option value="ubicacion-24681-recoleta">Recoleta</option>
                    <option value="ubicacion-24702-retiro">Retiro</option>
                    <option value="ubicacion-24704-tribunales">Tribunales</option>
                    <option value="ubicacion-26476-venado">Venado</option>
                    <option value="ubicacion-24740-villa-crespo">Villa Crespo</option>
                    <option value="ubicacion-24741-villa-devoto">Villa Devoto</option>
                    <option value="ubicacion-24743-villa-gral.mitre">Villa Gral.Mitre</option>
                    <option value="ubicacion-24746-villa-ortuzar">Villa Ortuzar</option>
                    <option value="ubicacion-24753-villa-urquiza">Villa Urquiza</option>
                  </select>
                </div>  
                
                <!-- FILTRO: Ambientes -->                 
                <div class="col-md-3">
                  <label class="input-select"><i class="fas fa-bed"></i> Ambientes</label>
                  <select name="ambientes" id="ambientes" class="form-control form-select input-select" aria-label="Default select example">
                    <option value="" selected>-- Seleccione ambientes --</option>
                    <option value="1-ambientes">Monoambiente</option>
                    <option value="2-ambientes">2 Ambientes</option>
                    <option value="3-ambientes">3 Ambientes</option>
                    <option value="4-ambientes">4 Ambientes</option>
                    <option value="5-ambientes">5 Ambientes</option>
                    <option value="6-ambientes-o-mas">6+ Ambientes</option>
                  </select>
                </div>                            

                <!-- FILTRO: Baños -->    
                <div class="col-md-3">
                  <label class="input-select"><i class="fas fa-bath"></i> Baños</label>
                  <select name="banios" id="banios" class="form-control form-select input-select" aria-label="Default select example">
                    <option value="" selected>-- Seleccione Baños --</option>
                    <option value="1-banios">1 Baño</option>
                    <option value="2-banios">2 Baños</option>
                    <option value="3-banios">3 Baños</option>
                    <option value="4-banios-o-mas">4+ Baños</option>
                  </select>
                </div> 
              </div>                          
              
              <!-- BOTÓN: Buscar -->  
              <div class="justify-content-center input-group mb-2">
                <button id="buscar" name="buscar" class="btn btn-outline-danger btn-block align-items-center" type="submit"><i class="fas fa-filter mr-1"></i><span>Aplicar</span></button> <!--  onclick="filter()" -->
              </div>
            </div> <!-- FIN: Filter Search-->
          </div>
        </div>
      </div>
    </div>
  </form>
		
    <br>
        

    <div>            
      <!-- 
      <div class="row">
        <div class="col-md-6">
          <div class="section-title mb-3">
            <h1 style="color:gray; font-size:20px">Propiedades</h1>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-title mb-3">
            <h3 class="text-right">
              <span class=" text-primary">--</span> resultados</h3>
          </div>
        </div>    
      </div>-->    
 
      <div class="row container-fluid w-100 mb-4 m-3">
        <?php #leemos proyectos 1 por 1
        foreach($sqlSearch as $propiedad){ ?>
        <div class="d-flex mx-auto col txt-cards input-select" >           
          <div class="bg-body rounded card border border-1 shadow-lg mb-4" style="width: 16rem;"> <!-- style="width: 18rem;" -->
            <div> <!-- style="height: 8rem;" -->
              <img src="imagenes/<?php echo $propiedad['imagen'];?>" class="img-fluid card-img-top" alt="Imagen" width="100">
            </div>            
            <div class="card-body">
              <span class="badge badge-lg bg-danger"><?php echo $propiedad['operacion'];?></span> <br><br>
              <h6 class="card-title text-dark"><?php echo $propiedad['titulo'];?></h6>              
              <div class="d-flex">                              
                <p class="card-text text-dark mx-1"><?php echo $propiedad['tipo_propiedad'];?></p>
                <p class="card-text text-dark mx-1"><i class="fas fa-map-marker-alt"></i> <?php echo $propiedad['ubicacion'];?></p>
              </div>              
              <div class="d-flex">
                <p class="card-text text-dark mx-2"><i class="fas fa-bed"></i> Amb. <?php echo $propiedad['ambientes'];?></p>
                <p class="card-text text-dark mx-2"><i class="fas fa-bath"></i> Baños <?php echo $propiedad['banios'];?></p>
                <p class="card-text text-dark mx-2"><i class="fas fa-home"></i> Sup. <?php echo $propiedad['superficie'];?></p>
              </div>
              <p class="card-text lh-lg text-dark"><?php echo $propiedad['descripcion'];?></p>
            </div>
            <ul class="list-group list-group-flush border border-0">
              <li class="list-group-item text-end"><b><?php echo $propiedad['importe'];?></b></li>
              <a href="#" class="card-body card-link text-end"> <b><u>Ver más</u></b></a>
            </ul>          
          </div>
        </div>            
        <?php } ?>
      </div>
      <br>  
    </div>        

      <?php include 'footer.php'; ?>
      <?php include 'script.php'; ?>


	
</body>
</html>	
