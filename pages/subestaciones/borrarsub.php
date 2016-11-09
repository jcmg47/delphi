<?php
require_once("../bd/conect.php");

$sql= "DELETE FROM subestacion WHERE id_subestacion ='$_POST[id]'";

	if(mysqli_query($con, $sql)){
		//header("location:index.html?lineas=true");
		echo "Registro borrado!";
	} else{
		//header("location:index.html?lineas=false");
		echo "Error, Intentalo Nuevamente";
	}

?>