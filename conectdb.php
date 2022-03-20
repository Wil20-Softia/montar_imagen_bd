<?php

	$db_host="localhost";
	$db_nombre="imagenes";
	$db_usuario="root";
	$db_contra="";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		echo "<h1>FALLO EN LA CONEXI&Oacute;N</h1>";
		exit();
	}
	
	mysqli_select_db($conexion,$db_nombre) or die ("NO SE ENCONTRO LA BASE DE DATOS");
	
	mysqli_set_charset($conexion,"utf8");

?>