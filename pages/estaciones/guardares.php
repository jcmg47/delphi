<?php
require_once("../bd/conect.php");

$sql = "INSERT INTO estacion VALUES (null,'$_POST[linea]','$_POST[nombre]')";

	if(mysqli_query($con, $sql)){
	echo "registro guardado";
	} else{
	echo "Error al guardar";
	}

?>