<?php
require_once("../bd/conect.php");
//$fecha = date("Y-m-d");
$sql = "INSERT INTO incidencia VALUES (null,'$_POST[disp]','$_POST[fecha]','$_POST[personal]')";
print_r($_POST);
	if(mysqli_query($con, $sql)){
	echo "registro guardado";
	} else{
	echo "Error al guardar";
	}

?>