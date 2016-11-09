<?php
require_once("../bd/conect.php");
	
    $sql="UPDATE estacion SET nombre_es ='$_POST[nombre]', id_linea = '$_POST[linea]' WHERE id_estacion ='$_POST[id]'";
    
    if(mysqli_query($con,$sql)){
    	echo "Registro Actualizado!";
    	//header("location:index.html");
      }else{
          echo "Fallo:";
          }
          mysqli_close($con);
?>