  <table width="100%" class="table table-striped table-bordered table-hover" id="tablelinea">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                              

  <?php
       require_once("../bd/conect.php");
        $sql= "SELECT * FROM linea";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $i=1;
        while($reg = mysqli_fetch_assoc($resultado)){

          echo "<tr>
                 <td>".$i++.
                 "<td>".$reg['nombre_linea'].
                 "<td>".$reg['desc_linea'].
                "<td align='center'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash' onclick='borrarlinea($reg[id_linea]);' > </button>
                  
                <button class='btn btn-primary btn-xs glyphicon glyphicon-pencil' data-toggle='modal' data-target='#actualizar".$reg['id_linea']."'> </button>
                </tr>";?>
                  
        <div id="actualizar<?php echo $reg['id_linea'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">            
        <!-- Modal Content -->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss ="modal">&times;</button>
            <h4 class="modal-tittle">Actualizar Línea&nbsp;</h4>
        </div>
        <div class="modal-body" id="actualizado<?php echo $reg['id_linea'];?>">
           
            <form role="form" action="actualizarlinea.php" method="POST">
             <input type="text" value="<?php echo $reg['id_linea'] ?>" id="id<?php echo $reg['id_linea'] ?>" name="id<?php echo $reg['id_linea'] ?>" hidden>
                 <div class="form-group">
                    <label>Nombre:&nbsp;</label>
                    <input class="form-control" name="nombre<?php echo $reg['nombre_linea'] ?>" id="nombre<?php echo $reg['id_linea'] ?>" required value="<?php echo $reg['nombre_linea'] ?>">
                   
                </div>
                <div class="form-group">
                    <label>Descripción:&nbsp;</label>
                    <input class="form-control" name="desc" id="descripcion<?php echo $reg['id_linea'] ?>" required value="<?php echo $reg['desc_linea'] ?>">
                </div>
            <button class="btn btn-primary"  onclick="actualizarlinea($('#id<?php echo $reg['id_linea'] ?>').val(),$('#nombre<?php echo $reg['id_linea'] ?>').val(),$('#descripcion<?php echo $reg['id_linea'] ?>').val()); return false;">Guardar</button>
        </form>    

        </div>
        <div class="modal-footer">
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
        $('#tablelinea').DataTable({
            responsive: true
        });
    });
    </script>