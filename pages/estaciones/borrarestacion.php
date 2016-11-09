<?php
require_once("../bd/conect.php");

$sql= "DELETE FROM estacion WHERE id_estacion ='$_POST[id]'";

	if(mysqli_query($con, $sql)){
		//header("location:index.html?lineas=true");
		echo "borrado!";
	} else{
		//header("location:index.html?lineas=false");
		echo "error";
	}

?>