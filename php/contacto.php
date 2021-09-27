<?php
	$receptor = "contacto@pablo-desarrollador.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " .$nombre ."\nCorreo: " .$correo ."\nMensaje: " .$mensaje;
	mail($receptor,"Cotización",$contenido);
	header("Location:../respuesta.html");
?>