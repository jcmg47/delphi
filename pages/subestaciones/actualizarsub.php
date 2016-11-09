<?php
require_once("../bd/conect.php");
	
    $sql="UPDATE subestacion SET nombre_sub ='$_POST[nombre]', id_estacion ='$_POST[estacion]' WHERE id_subestacion ='$_POST[id]'";
    
    if(mysqli_query($con,$sql)){
    	echo "Registro Actualizado!";
    	//header("location:index.html");
      }else{
          echo "Fallo:";
          }
          mysqli_close($con);
?>