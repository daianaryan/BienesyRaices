<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_admin.css">			
	<link rel="stylesheet" href="../style.css">			
    <link rel="stylesheet" href="../css/font-awesome.min.css">	
    <link rel="stylesheet" href="https://kit.fontawesome.com/8552914272.js">
    <!-- Librería Bootstrap y jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Fjalla+One&display=swap" rel="stylesheet">  	  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<!-- Librería Bootstrap y jQuery -->    
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Fjalla+One&display=swap" rel="stylesheet">  	  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<!-- Librería Bootstrap y jQuery 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->

    <title>TP Final</title>
  </head>

  <body>
  <header>
		<!--NAVEGADOR-->     
		<nav class="navbar navbar-expand-lg navbar-fixed-top fixed-top position-fixed">
			<div class="container-fluid">	
				<a class="navbar-brand me-4" href="index_admin.php">
					<img src="../img/logo.PNG" class="text-decoration-transparent img-responsive" width="75" alt="">
				</a>			
				<button class="border btn-outline-danger navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="nav-bar collapse navbar-collapse m-2 p-2" id="navbarSupportedContent">    				
					<ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!--navbar-nav-first -->					
						<li class="nav-item">					
							<a class="smoothScroll nav-link active" aria-current="page" href="index_admin.php">Inicio</a>						
						</li>					
						<li class="nav-item">
							<a class="smoothScroll nav-link active" aria-current="page" href="index.php">Biblioteca</a>
						</li>												
					</ul>					
					<!--Cerrar Sesión-->
					<form class="d-flex" action="../sesiones/cerrarsesion.php" method="post"> 						
						<button class="btn btn-outline-danger btn-md btn-block" type="submit">
						<i class="fas fa-power-off"></i>
						</button>						
					</form>
				</div>								
			</div>	
		</nav>
	</header>      