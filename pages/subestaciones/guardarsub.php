<?php
require_once("../bd/conect.php");

$sql = "INSERT INTO subestacion VALUES (null,'$_POST[nombre]','$_POST[estacion]')";

	if(mysqli_query($con, $sql)){
		header("location:index.html?subestacion=true");
	} else{
		header("location:index.html?subestacion=false");
	}

?>