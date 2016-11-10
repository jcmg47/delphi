<?php
require_once("../bd/conect.php");

$sql = "INSERT INTO linea VALUES (null,'$_POST[nombre]','$_POST[desc]')";
	
	if(mysqli_query($con, $sql)){
	echo "registro guardado";
	} else{
	echo "Error al guardar";
	}

?>