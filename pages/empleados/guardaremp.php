<?php
require_once("../bd/conect.php");
//print_r($_POST);
$sql = "INSERT INTO personal VALUES (null,'$_POST[turno]','$_POST[tipo]','$_POST[num]',
'$_POST[nombre]','$_POST[paterno]','$_POST[materno]','$_POST[correo]')";
//echo $sql;
	if(mysqli_query($con, $sql)){
	echo "registro guardado";
	} else{
	echo "Error al guardar";
	}

?>