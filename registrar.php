<?php include 'conexion.php'; ?>	

<?php

$operacion       = $_POST["operacion"];
$tipo_propiedad  = $_POST["tipo_propiedad"];
$titulo          = $_POST["titulo"];
#Imagen
$imagen          = $_FILES['imagen']['name'];        
$imagen_temporal = $_FILES['imagen']['tmp_name'];#tenemos que guardar la imagen en una carpeta 
$imagen_tipo     = $_FILES['imagen']['type'];
$fecha           = new DateTime();#creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
$imagen          = $fecha->getTimestamp()."_".$imagen;        
move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
# FIN DE IMAGEN
$ubicacion       = $_POST["ubicacion"];
$superficie      = $_POST["superficie"];
$ambientes       = $_POST["ambientes"];
$banios          = $_POST["banios"];
$importe         = $_POST["importe"];
$descripcion     = $_POST["descripcion"];

# Creo una instancia(objeto) de la clase de conexion
$conexion = new conexion();
#$conexion = new conexion('localhost','root','','propiedades');
$sql="INSERT INTO propiedades (id, operacion, tipo_propiedad, titulo, imagen, ubicacion, superficie, ambientes, banios, importe, descripcion) VALUES ('', '$operacion', '$tipo_propiedad', '$titulo', '$imagen', '$ubicacion', '$superficie', '$ambientes', '$banios', '$importe', '$descripcion');";
$insertProp = $conexion->ejecutar($sql);

#if ($imagen_tipo=="image/jpeg" || $imagen_tipo=="image/jpg" || $imagen_tipo=="image/png" || $imagen_tipo=="image/gif"){
 
#} else {
 #   echo "Solo se puede subir imagenes de tipo jpg/jpeg/png/gif";
#}

echo "<script type='text/javascript'>window.location='index.php';</script>";

#if($insertProp()){
 #   return header("Location:index.php");
#} else {
 #   return "error";
#}

?>