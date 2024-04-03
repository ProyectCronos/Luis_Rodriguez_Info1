<?php
  if(!isset($_GET["id_usuario"])) exit();
  
  $id_usuario = $_GET["id_usuario"];
  include_once "../conexion.php";
  $sentencia = $base_de_datos->query("SELECT * FROM personas WHERE id_usuario =".$id_usuario);
  $persona = $sentencia->fetch_assoc() ;
?> 
<html lang="es">
<head>
	<meta charset="UTF-8">	
</head>
<body>
	<form method="post" action="guardarDatosEditados.php">
		<!-- Ocultamos el ID para que el usuario  -->
		<input type="hidden" name="id_usuario" value="<?php echo $persona["id_usuario"]; ?>">

		<label for="Nombre">Nombre:</label>
		<br>
		<input value="<?php echo $persona["Nombre"]?>" name="Nombre" required type="text" id="Nombre" placeholder="Escribe tu nombre...">
		<br><br>
		<label for="Correo_Electronico">Correo:</label>
		<br>
		<input value="<?php echo $persona["Correo_Electronico"]; ?>" name="Correo_Electronico" required type="email" id="Correo_Electronico" placeholder="Escribe tu correo">
		<br><br>
		<label for="Usuario">Usuario</label>
		<br>
		<input value="<?php echo $persona["Usuario"]; ?>" name="Usuario" required type="text" id="Usuario" placeholder="Escribe tu usuario">
		<br><br>
		<label for="Contraseña">Contraseña:</label>
		<br>
		<input value="<?php echo $persona["Contraseña"]; ?>" name="Contraseña" required type="password" id="Contraseña" placeholder="Escribe tu contraseña">
		<br><br>
		<br><br><input type="submit" value="Editar Cambios">
	</form>
</body>
</html>