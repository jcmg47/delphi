<?php
require_once("../bd/conect.php");
	
    $sql="UPDATE incidencia SET disponibilidad ='$_POST[disp]', fecha = '$_POST[fecha]' , id_personal ='$_POST[personal]' WHERE id_incidencia ='$_POST[id]'";
    
    if(mysqli_query($con,$sql)){
    	echo "Registro Actualizado!";
    	//header("location:index.html");
      }else{
          echo "Fallo:";
          }
          mysqli_close($con);
?>