<?php
require_once("../bd/conect.php");
//print_r($_POST);
$sql = "INSERT INTO estacion_personal VALUES (null,'$_POST[idestacion]','$_POST[idpersonal]','$_POST[prioridad]')";
//echo $sql;	
	if(mysqli_query($con, $sql)){
		echo "Guardado";
	} else{
		echo  "Error";
	}

?>