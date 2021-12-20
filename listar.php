
<?php include 'conexion.php'; ?>

<?php

# MOSTRAR LISTA
 # Consulto para llenar la tabla 
 $conexion = new conexion('');
 #$conexion = new conexion('localhost','root','','propiedades');
 $propiedades= $conexion->consultar("SELECT * FROM `propiedades`"); 
 # Comprobamos que la info este en forma de arreglo
 # print_r($propiedades);

?>

