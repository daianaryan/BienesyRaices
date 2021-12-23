<?php include 'header_admin.php'; ?>
<?php include '../admin/conexion.php'; ?>

<?php   
$conexion = new conexion();  
#$conexion = new conexion('localhost','root','propiedades','');  
$search = "SELECT * FROM propiedades";
$sqlSearch = $conexion->consultar($search);
$busqueda = null;

#if(isset($_GET['buscar'])){

 # $operacion      = $_GET['operacion'];
 # $tipo_propiedad = $_GET['tipo_propiedad'];     
 # $ubicacion      = $_GET['ubicacion'];  
 # $ambientes      = $_GET['ambientes'];
 # $banios         = $_GET['banios'];  

 #$conexion = new conexion();  
 #$conexion = new conexion('localhost','root','propiedades','');
 #$search = "SELECT * FROM `propiedades` WHERE (operacion = '$operacion') or (tipo_propiedad = '$tipo_propiedad') or (ubicacion = '$ubicacion') or (ambientes = '$ambientes') or (banios = '$banios');";
 #$sqlSearch = $conexion->consultar($search);

#} 
?>

<section data-stellar-background-ratio="0.5">
  <div class="position-relative text-center">
	  <img src="../img/fondo.jpg" alt="" width="145%" style="filter: brightness(40%); position: relative; overflow: hidden; background-position: center center; background-size: cover; vertical-align: middle; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center; min-height: 50vh; width: 100%; height: 50vh;">
  </div>
  
  <div class="position-absolute top-50 start-50 translate-middle h-50">			
    <h5 class="text-danger fw-light">PÁGINA DE EDICIÓN</h5>					
  </div> 
</section>
	
	<div class="container-fluid m-2">
		<ul class="breadcrumb mb-0 icono-prop">			
			<li class="breadcrumb-item">
				<small style="color:gray; font-size:14px">Página previa de Edición</small>
			</li>
		</ul>
	</div>	
	<br>			
		
	<!--MAIN-->
	<main>	
		<div class="row container-fluid w-100 mb-4">
			<?php #leemos proyectos 1 por 1
			foreach($sqlSearch as $propiedad){ ?>
			<div class="d-flex mx-auto col txt-cards input-select" >
				<div class="bg-body rounded card border border-1 shadow-lg mb-4" style="width: 16rem;"> <!-- style="width: 20rem; height: 28rem;" -->				
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
	</main>

	  
		<?php include '../script.php'; ?>

</body>
</html>	