<?php
require_once("../bd/conect.php");
print_r($_POST);
	
    $sql="UPDATE personal SET id_turno ='$_POST[turno]',id_tipo= '$_POST[tipo]',num_personal='$_POST[num]',
nombre_personal ='$_POST[nombre]',apaterno_personal='$_POST[paterno]',amaterno_personal='$_POST[materno]',correo_personal='$_POST[correo]' WHERE id_personal ='$_POST[id]'";
 echo $sql;   
    if(mysqli_query($con,$sql)){
    	echo "Registro Actualizado!";
    	//header("location:index.html");
      }else{
        //  echo "Fallo:";
          }
mysqli_close($con);
?>