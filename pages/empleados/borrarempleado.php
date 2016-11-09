<?php
require_once("../bd/conect.php");

$sql= "DELETE FROM personal WHERE id_personal ='$_POST[id]'";

	if(mysqli_query($con, $sql)){
		//header("location:index.html");
		echo "Registro borrado!";
	} else{
		//header("location:index.html?lineas=false");
		echo "Error, Intentalo Nuevamente";
	}

?>