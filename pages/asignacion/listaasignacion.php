<table width="100%" class="table table-striped table-bordered table-hover" id="tableasignacion">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Estacion 1</th>
                                        <th>Estacion 2</th>
                                        <th>Estacion 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
  <?php
       require_once("../bd/conect.php");
         //$sql= "SELECT p.id_personal,p.nombre_personal,p.apaterno_personal,p.amaterno_personal,e.id_estacion,e.nombre_es, ep.prioridad  FROM estacion_personal AS ep INNER JOIN personal AS p ON ep.id_personal = p.id_personal INNER JOIN estacion AS e ON ep.id_estacion= e.id_estacion order by p.id_personal ";
       $sql="SELECT * from personal";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $i=1;
        while($reg = mysqli_fetch_assoc($resultado)){
          echo "<tr>
                 <td>".$i++.
                 "<td>".$reg['nombre_personal'].
                 "<td>".$reg['apaterno_personal'].
                 "<td>".$reg['amaterno_personal'];
              $sql="select * from estacion_personal where id_personal='$reg[id_personal]'" ;
              $asignacion=mysqli_query($con,$sql);
              if(mysqli_num_rows($asignacion)>0){
                $num=0;
                while($asig=mysqli_fetch_assoc($asignacion)){
                  $num++;
                  echo "<td>".$asig['id_estacion'];
                  $sql="select * from estacion";
                  $result=mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0){
                    echo "<select id='prioridad".$num.$reg['id_personal']."'>";
                    while($reg1 = mysqli_fetch_assoc($result)){
                      echo "<option>".$reg1['nombre_es']."</option>";
                    }
                    echo "</select>";
                  }

                }
                for ($j=$num+1; $j <4 ; $j++) { 
                echo "<td>".$asig['id_estacion'];
                  $sql="select * from estacion";
                  $result=mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0){
                    echo "<select id='prioridad".$j.$reg['id_personal']."'>";
                    while($reg1 = mysqli_fetch_assoc($result)){
                      echo "<option>".$reg1['nombre_es']."</option>";
                    }
                    echo "</select>";
                  }
                }

              }else{
                for ($j=1; $j <4 ; $j++) { 
                echo "<td>".$asig['id_estacion'];
                  $sql="select * from estacion";
                  $result=mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0){
                    echo "<select id='prioridad".$j.$reg['id_personal']."'>>";
                    while($reg1 = mysqli_fetch_assoc($result)){
                      echo "<option>".$reg1['nombre_es']."</option>";
                    }
                    echo "</select>";
                  }
                }

              }            
                 ?>

       <tr>
        
    <?php    
                }
              }
            
            mysqli_close($con);
        ?>
          </tbody>
                        </table>

  <script>
    $(document).ready(function() {
        $('#tableasignacion').DataTable({
            responsive: true
        });
    });
    </script>


