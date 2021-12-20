<?php include 'conexion.php'; ?>	

<?php

$id  = $_GET["id"]; 

# Creo una instancia(objeto) de la clase de conexion
$conexion = new conexion();
#$conexion = new conexion('localhost','root','','propiedades');

#recuperamos la imagen de la base antes de borrar 
$imagen = $conexion->consultar("select imagen FROM propiedades where id=".$id);
#la borramos de la carpeta 
unlink("../imagenes/".$imagen[0]['imagen']);

#$conexion = new conexion('localhost','root','','propiedades');
$sql ="DELETE FROM propiedades WHERE id = $id;"; 
$deleteProp = $conexion->ejecutar($sql);

echo "<script type='text/javascript'>window.location='index.php';</script>";

#if($insertProp()){
 #   return header("Location:index.php");
#} else {
 #   return "error";
#}

?>