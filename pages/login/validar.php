<?php
session_start();
    if (isset($_POST["user"])){
        require_once("../bd/conect.php");
        $usuario=mysqli_real_escape_string($con,$_POST["user"]);
        $password=mysqli_real_escape_string($con, $_POST["pass"]);
        $sql="SELECT * FROM usuario where nombre_usuario='$usuario' 
        and pass_usuario='$password'";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $reg=mysqli_fetch_assoc($resultado);
          $_SESSION["login"]="true";
          $_SESSION["name"]=$reg['nombre_usuario'];
          echo "Redireccionando automaticamente..";
          ?>
          <script type="text/JavaScript">
                    setTimeout("location.href = '../lineas/';", 1500);
          </script>
          <?php
        }else{
          echo "Datos erroneos";
        }

        mysqli_close($con);
    }
?>