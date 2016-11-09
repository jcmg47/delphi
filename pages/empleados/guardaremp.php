<?php
require_once("../bd/conect.php");

$sql = "INSERT INTO personal VALUES (null,'$_POST[turno]','$_POST[tipo]','$_POST[num]',
'$_POST[nombre]','$_POST[paterno]','$_POST[materno]',$_POST[correo]')";

	if(mysqli_query($con, $sql)){
		header("location:index.html?personal=true");
	} else{
		header("location:index.html?personal=false");
	}

?>