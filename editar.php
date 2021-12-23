<?php include 'conexion.php'; ?>	

<?php

$id              = $_GET["id"];
$operacion       = $_GET["operacion"];
$tipo_propiedad  = $_GET["tipo_propiedad"];
$titulo          = $_GET["titulo"];
 #Imagen
 #$imagen          = $_FILES['imagen']['name'];        
 #$imagen_temporal = $_FILES['imagen']['tmp_name'];#tenemos que guardar la imagen en una carpeta 
 #$fecha           = new DateTime();#creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
 #$imagen          = $fecha->getTimestamp()."_".$imagen;        
 #move_uploaded_file($imagen_temporal,"imagenes/".$imagen); 
$imagen          = $_GET["imagen"];
$ubicacion       = $_GET["ubicacion"];
$superficie      = $_GET["superficie"];
$ambientes       = $_GET["ambientes"];
$banios          = $_GET["banios"];
$importe         = $_GET["importe"];
$descripcion     = $_GET["descripcion"];


#if($_FILES["imagen"]["error"] > 0){

#} else {        
 #       $imagen          = $_FILES['imagen']['name'];        
  #      $imagen_temporal = $_FILES['imagen']['tmp_name'];#tenemos que guardar la imagen en una carpeta 
   #     $fecha           = new DateTime();#creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
    #    $imagen          = $fecha->getTimestamp()."_".$imagen;        
     #   move_uploaded_file($imagen_temporal,"../imagenes/".$imagen);        
      #  $conexion = new conexion();
        #$conexion = new conexion('localhost','root','','propiedades');
       # $sqlImg ="UPDATE propiedades SET imagen = '$imagen' WHERE id = $id;";
        #$editProp = $conexion->ejecutar($sqlImg);
#}

$conexion = new conexion();
#$conexion = new conexion('localhost','root','','propiedades');
$sql ="UPDATE propiedades SET operacion  = '$operacion', tipo_propiedad = '$tipo_propiedad', titulo = '$titulo', imagen = '$imagen', ubicacion = '$ubicacion', superficie = '$superficie', ambientes = '$ambientes', banios = '$banios', importe = '$importe', descripcion = '$descripcion' WHERE id = $id;";
$editProp = $conexion->ejecutar($sql);



echo "<script type='text/javascript'>      
        window.location='index.php';
       </script>";
alert('Los datos fueron actualizados exitosamente!');

#if($insertProp()){
 #   return header("Location:index.php");
#} else {
 #   return "error";
#}

?>

