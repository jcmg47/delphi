<?php
require_once("../bd/conect.php");
if($_POST["idestacion"]!=""){
	
    $sql="UPDATE estacion_personal SET id_estacion ='$_POST[idestacion]' WHERE id_espersonal ='$_POST[idespersonal]'";
    //echo $sql;
    if(mysqli_query($con,$sql)){
    	echo "Registro Actualizado!";
    	//header("location:index.html");
      }else{
          echo "Fallo:";
          }
 mysqli_close($con);
}else{
	echo "Selecciona una opcion";
}
?>