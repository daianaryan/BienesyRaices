<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS-->        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">		
		<link rel="stylesheet" href="https://kit.fontawesome.com/8552914272.js">
		<!--
            <link rel="stylesheet" href="style_imgheader.css">
        -->
		<link rel="stylesheet" href="css/font-awesome.min.css">		
        <title>TP Final</title>
      </head>    

<body>	

	<header>
		<!--NAVEGADOR-->     
		<nav class="navbar navbar-expand-lg navbar-fixed-top fixed-top position-fixed">
			<div class="container-fluid">	
				<a class="navbar-brand me-4" href="index.php">
					<img src="img/logo.PNG" class="text-decoration-transparent img-responsive" width="75" alt="">
				</a>			
				<button class="border btn-outline-danger navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="nav-bar collapse navbar-collapse m-2 p-2" id="navbarSupportedContent">    				
					<ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!--navbar-nav-first -->											
						<li class="nav-item">
							<a class="smoothScroll nav-link active" aria-current="page" href="tasaciones.php">Tasaciones</a>
						</li>
						<li class="nav-item">
							<a class="smoothScroll nav-link active" aria-current="page" href="servicios.php">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="smoothScroll nav-link active" aria-current="page" href="nosotros.php">Quienes Somos</a>
						</li>
						<li class="nav-item">
							<a class="smoothScroll nav-link active" aria-current="page" href="contacto.php">Contacto</a>
						</li>									
					</ul>
					<div class="nav-logo d-flex text-center">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook-square me-2" style="font-size:20px"></i></a>
						<a href="https://www.instagram.com/"><i class="fa fa-instagram me-2" style="font-size:20px"></i></a>
					</div>
					<form class="d-flex">   												
						<a class="btn btn-outline-danger" href="sesiones/login.php" type="submit" role="button" target="_blank">Ingresá</a>						
					</form>						
				</div>								
			</div>	
		</nav>
	</header>				
	
		
	<?php include 'script.php'; ?>