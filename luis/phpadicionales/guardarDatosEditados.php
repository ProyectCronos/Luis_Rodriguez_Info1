<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["Nombre"]) || 
	!isset($_POST["Correo_Electronico"]) || 
	!isset($_POST["Usuario"]) ||
	!isset($_POST["Contraseña"]) ||  
	!isset($_POST["id_usuario"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../conexion.php";
$id_usuario = $_POST["id_usuario"];
$Nombre = $_POST["Nombre"];
$Correo_Electronico = $_POST["Correo_Electronico"];
$Usuario = $_POST["Usuario"];
$Contraseña = $_POST["Contraseña"];

$sentencia = $base_de_datos->prepare("UPDATE personas SET Nombre = ?, Correo_Electronico = ?, Usuario = ?, Contraseña = ?, WHERE id_usuario = ?;");
$resultado = $sentencia->execute([$Nombre, $Correo_Electronico, $Usuario, $Contraseña, $id_usuario]); # Pasar en el mismo orden de los ?
if($resultado === TRUE)
   echo "Cambios guardados";
else 
	echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";


	echo" <br><a href='../listarPersonas.php'>Atras</a>";
	
?>