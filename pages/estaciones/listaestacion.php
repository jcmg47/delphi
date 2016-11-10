<table width="100%" class="table table-striped table-bordered table-hover" id="tableestacion">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Línea</th>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
  <?php
       require_once("../bd/conect.php");
        $sql= "SELECT li.id_linea, li.nombre_linea, es.id_estacion, es.nombre_es FROM estacion AS es INNER JOIN linea AS li ON es.id_linea = li.id_linea";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $i=1;
        while($reg = mysqli_fetch_assoc($resultado)){


          echo "<tr>
                 <td>".$i++.
                 "<td>".$reg['nombre_linea'].
                 "<td>".$reg['nombre_es'].
                "<td align='center'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash' onclick='borrarestacion($reg[id_estacion]);' > </button>
                  
                  <button class='btn btn-primary btn-xs glyphicon glyphicon-pencil' data-toggle='modal' data-target='#actualizar".$reg['id_estacion']."' > </button>
                
                </tr>"; ?>

                <div id="actualizar<?php echo $reg['id_estacion'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">            
        <!-- Modal Content -->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss ="modal">&times;</button>
            <h4 class="modal-tittle">Actualizar Estación&nbsp;</h4>
        </div>
        <div class="modal-body" id="actualizado">
            <form role="form" action="actualizarestacion.php" method="POST">
                <input type="text" value="<?php echo $reg['id_estacion'] ?>" id="id<?php echo $reg['id_estacion'];?>" name="id<?php echo $reg['id_estacion'];?>" hidden>

                 <div class="form-group">
                    <label>Nombre de Estación:&nbsp;</label>
                    <input class="form-control" name="nombre<?php echo $reg['nombre_es'];?>" id="nombre<?php echo $reg['id_estacion'];?>" value="<?php echo $reg['nombre_es'] ?>">
                   
                </div>
                <div class="form-group">
                    <div id="uplinea<?php echo $reg['id_estacion']; ?>"></div>
                </div>

           <button class="btn btn-primary" onclick="actualizarestacion($('#id<?php echo $reg['id_estacion'];?>').val(),$('#nombre<?php echo $reg['id_estacion'];?>').val(),$('#linea<?php echo $reg['id_estacion'];?>').val()); return false;">Guardar</button>

        </form> 
        </div>
        <div class="modal-footer">
           <script>
                    opcionlinea('uplinea<?php echo $reg['id_estacion']; ?>', <?php echo $reg['id_estacion']; ?>);
                </script>
        <button type="button" class="btn btn-default" data-dismiss='modal'>Cerrar</button>
           
        </div>

        </div>
        </div>
    </div>
             <?php     
                }
              }
            
            mysqli_close($con);
        ?>
          </tbody>
                        </table>

 <script>
    $(document).ready(function() {
        $('#tableestacion').DataTable({
            responsive: true
        });
    });
    </script>

