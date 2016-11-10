  <table width="100%" class="table table-striped table-bordered table-hover" id="tableinci">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Disponibilidad </th>
                                        <th>Fecha</th>
                                        <th>Empleado</th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
  <?php
       require_once("../bd/conect.php");
        $sql= "SELECT p.nombre_personal, p.apaterno_personal, p.amaterno_personal,p.id_personal, i.id_incidencia,i.disponibilidad,i.fecha FROM incidencia AS i INNER JOIN personal AS p ON i.id_personal = p.id_personal ";
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
                "<td>".$reg['nombre_personal']." ".$reg['apaterno_personal']." ".$reg['amaterno_personal'].
                "<td align='center'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash' onclick='borrarincidencia($reg[id_incidencia]);' > </button>

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
                  <div id="tipos"></div>
                </div>
           
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss='modal'>Cerrar</button>
        <button class="btn btn-primary" type="submit">Guardar</button>
        </form>    
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