<?php
 
 #Inicializamos variables de Sesion
 session_start();

 #Validar Datos
 if ($_POST){
   if (($_POST['inputText']=="admin") && ($_POST['inputPassword']=='123456')){
     $_SESSION['usuario']='Admin';
     #Redireccionamos porque ingreso OK
     header("location:../admin/index_admin.php");
     die();
     //exit;
   } else {
     #echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
     header("location:login.php");     
     die();
   }
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login de Usuario</title>   
    <!-- Bootstrap CSS-->        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-light">
    
    <form class="form-signin mt-5" action="login.php" method="post">
      <div class="container w-25 shadow-lg">                
        <div class="container">
          <a href="../index.php" class="logo"><img class="position-relative text-decoration-transparent logo" width="75" src="../img/logo-sintexto.jpg" alt="logo"></a>
          <h1 class="h3 mb-3 font-weight-normal" style="font-size: 20px">Ingresar al sistema</h1>                             
          <br>
          <div class="mb-3">
            <input type="text" id="inputText" name="inputText" class="form-control"  style="font-size: 14px" placeholder="Usuario" required autofocus>
          </div>
          <div class="mb-3">
            <input type="password" id="inputPassword" name="inputPassword"class="form-control"  style="font-size: 14px" placeholder="Contraseña" required>
          </div>
          <div class="p-2">
            <button class="btn btn-outline-danger btn-md btn-block" style="font-size: 14px" type="submit">Ingresar</button> 
          </div>     
      </div>        
    </div>
    </form>

    <div>
      <p class="mt-1" style="font-size: 12px; color: gray;"><span><b>Usuario:</b></span> <i>admin</i> <br> <span><b>Clave:</b></span> <i>123456</i></p>
    </div>
  
  </body>
  </html>

  <script>
$(function () {
  $('[data-toggle="popover"]').popover()
})


  </script>