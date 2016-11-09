<?php

$servidor="localhost";
$usuario="root";
$password="";
$db="control_ausentismo";

$con=mysqli_connect($servidor,$usuario,$password,$db);

if(!$con){
	die("Fallo tu conexion".mysqli_connect_error());
}
?>