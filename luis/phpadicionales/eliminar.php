<?php

   if(!isset($_GET["id_usuario"])) exit();
  
    $id_usuario = $_GET["id_usuario"];
  
	include_once "../conexion.php";
	
	$sentencia = $base_de_datos->prepare("DELETE FROM personas WHERE id_usuario = ?;");
	$resultado = $sentencia->execute([$id_usuario]);
	
	if($resultado === TRUE) 
	   echo "Eliminado correctamente!<br>";
	else 
	  echo "No fue posible eliminar el registro <br>";
	
	echo" <a href='../listarPersonas.php'>Atras</a>";
?>