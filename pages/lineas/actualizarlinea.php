<?php
require_once("../bd/conect.php");
	
    $sql="UPDATE linea SET nombre_linea ='$_POST[nombre]', desc_linea = '$_POST[descripcion]' WHERE id_linea ='$_POST[id]'";
    
    if(mysqli_query($con,$sql)){
    	echo "Registro Actualizado!";
    	//header("location:index.html");
      }else{
          echo "Fallo:";
          }
          mysqli_close($con);
?>