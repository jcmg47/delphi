<table width="100%" class="table table-striped table-bordered table-hover" id="tablesubestacion">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Estación&nbsp;</th>
                                        <th>Línea&nbsp;</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
  <?php
       require_once("../bd/conect.php");
        $sql= "SELECT su.id_subestacion, su.nombre_sub, es.id_estacion, es.nombre_es ,li.nombre_linea FROM subestacion AS su INNER JOIN estacion AS es ON su.id_estacion = es.id_estacion INNER JOIN linea AS li ON es.id_linea = li.id_linea";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $i=1;
        while($reg = mysqli_fetch_assoc($resultado)){


          echo "<tr>
                 <td>".$i++.
                 "<td>".$reg['nombre_sub'].
                 "<td>".$reg['nombre_es'].
                 "<td>".$reg['nombre_linea'].
                "<td align='center'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash' onclick='borrarsub($reg[id_subestacion]);' > </button>

                  <button class='btn btn-primary btn-xs glyphicon glyphicon-pencil' data-toggle='modal' data-target='#actualizar".$reg['id_subestacion']."' ></button>
                </tr>";?>
        <div id="actualizar<?php echo $reg['id_subestacion'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">            
        <!-- Modal Content -->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss ="modal">&times;</button>
            <h4 class="modal-tittle">Actualizar Sub-Estación&nbsp;</h4>
        </div>
        <div class="modal-body" id="actualizado">
            <form role="form" action="actualizarsub.php" method="POST">
                <input type="text" value="<?php echo $reg['id_subestacion'] ?>" id="id<?php echo $reg['id_subestacion'];?>" name="id<?php echo $reg['id_subestacion'];?>" hidden>

                 <div class="form-group">
                    <label>Nombre de Sub-Estación:&nbsp;</label>
                    <input class="form-control" name="nombre<?php echo $reg['nombre_sub'] ?>" id="nombre<?php echo $reg['id_subestacion'];?>" value="<?php echo $reg['nombre_sub'] ?>">
                </div>
                
                 <div class="form-group">
                    <div id="upestacion<?php echo $reg['id_subestacion']; ?>"></div>
                </div>

            <button class="btn btn-primary" onclick="actualizarsub($('#id<?php echo $reg['id_subestacion'];?>').val(),$('#nombre<?php echo $reg['id_subestacion'];?>').val(),$('#estacion<?php echo $reg['id_subestacion'];?>').val()); return false;">Guardar</button>
        </form> 

        </div>
        <div class="modal-footer">
        <script>
                    opcionestacion('upestacion<?php echo $reg['id_subestacion']; ?>', <?php echo $reg['id_subestacion']; ?>);
                </script>

        <button type="button" class="btn btn-default" data-dismiss='modal'>Cerrar</button>
          
        </div>

        </div>
        </div>
    </div>
              <?php  }
              }
            
            mysqli_close($con);
        ?>
          </tbody>
                        </table>

 <script>
    $(document).ready(function() {
        $('#tablesubestacion').DataTable({
            responsive: true
        });
    });
    </script>