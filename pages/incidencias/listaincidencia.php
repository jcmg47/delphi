  <table width="100%" class="table table-striped table-bordered table-hover" id="tableinci">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Disponibilidad</th>
                                        <th>Fecha</th>
                                        <th>Empleado</th>
                                        <th>Personal alterno</th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
  <?php
       require_once("../bd/conect.php");
        //$sql= "SELECT p.nombre_personal, p.apaterno_personal, p.amaterno_personal,p.id_personal, i.id_incidencia,i.disponibilidad,i.fecha FROM incidencia AS i INNER JOIN personal AS p ON i.id_personal = p.id_personal ";
        $sql="SELECT incidencia.id_personal,incidencia.disponibilidad,incidencia.fecha,incidencia.id_incidencia, personal.nombre_personal, personal.apaterno_personal, personal.amaterno_personal FROM incidencia INNER JOIN personal where personal.id_personal= incidencia.id_personal";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $i=1;
        while($reg = mysqli_fetch_assoc($resultado)){


          echo "<tr>
                 <td>".$i++.
                 "<td>";
                if($reg['disponibilidad']=='1'){
                  echo "Si";
                } else{
                  echo "No";
                }
                echo "<td>".$reg['fecha'].
                "<td>".$reg['nombre_personal']." ".$reg['apaterno_personal']." ".$reg['amaterno_personal'];
                

                $sql="Select * from estacion_personal where id_personal='$reg[id_personal]'";
                echo "<td>";
                $asignacion=mysqli_query($con,$sql);
                if(mysqli_num_rows($asignacion)>0){
                    $asig=mysqli_fetch_assoc($asignacion);
                    $sql="select * from personal INNER JOIN estacion_personal on personal.id_personal=estacion_personal.id_personal where id_estacion='1' and prioridad='1' and estacion_personal.id_personal!='$reg[id_personal]'";
                   // echo $sql;
                    $alterno=mysqli_query($con,$sql);
                     if(mysqli_num_rows($alterno)>0){
                        echo "<select>
                                <option></option>";
                        while ($alt=mysqli_fetch_assoc($alterno)) {
                            echo "<option>".$alt['nombre_personal']." ".$alt['apaterno_personal']." ".$alt['amaterno_personal']."</option>";
                        }
                        echo "</select>";

                     }else{
                        echo "No hay personal capacitado";
                     }
                    
                }
                echo "<td align='center'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash' onclick='borrarincidencia($reg[id_incidencia]);' > </button>

                 <button class='btn btn-primary btn-xs glyphicon glyphicon-pencil' data-toggle='modal' data-target='#actualizar".$reg['id_incidencia']."'></button>
                </tr>";?>
                   <div id="actualizar<?php echo $reg['id_incidencia'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">            
        <!-- Modal Content -->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss ="modal">&times;</button>
            <h4 class="modal-tittle">Actualizar Incidencia&nbsp;</h4>
        </div>
        <div class="modal-body" id="actualizado<?php echo $reg['id_incidencia'];?>">
            <form role="form" action="actualizarincidencia.php" method="POST">
                <input type="text" value="<?php echo $reg['id_incidencia'] ?>" name="id" hidden>
                 <div class="form-group">
                    <label>Fecha:&nbsp;</label>
                    <input class="form-control" name="fecha" type="date" value="<?php echo $reg['fecha'] ?>">
                </div>

                 <div class="form-group">
                                            <label>Disponibilidad</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="disp" id="optionsRadios1" value="1" checked>Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="disp" id="optionsRadios2" value="0">No
                                                </label>
                                            </div>
                                            
                                        </div>

                <div class="form-group">
                  <div id="personal"></div>
                </div>
           
        <button class="btn btn-primary" type="submit">Guardar</button>
        </form>    
        </div>
        <div class="modal-footer">
          <script>
                    opcionpersonal('uppersonal<?php echo $reg['id_incidencia']; ?>', <?php echo $reg['id_incidencia']; ?>);
                </script>
        <button type="button" class="btn btn-default" data-dismiss='modal'>Cerrar</button>
        </div>

        </div>
        </div>
    </div>

                <?php }
              }
            
            mysqli_close($con);
        ?>
          </tbody>
                        </table>

 <script>
    $(document).ready(function() {
        $('#tableinci').DataTable({
            responsive: true
        });
    });
    </script>