<?php
require_once("../bd/conect.php");

$sql = "INSERT INTO linea VALUES (null,'$_POST[nombre]','$_POST[desc]')";
	
	if(mysqli_query($con, $sql)){
		header("location:index.html?lineas=true");
	} else{
		header("location:index.html?lineas=false");
	}
mysqli_close($con);
?>