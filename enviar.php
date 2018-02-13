<?php 
	$nombre = $_POST["nombre"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];
	mail('mraffov@gmail.com', $nombre, $asunto, $mensaje);
	header("Location:mensaje.html");

 ?>