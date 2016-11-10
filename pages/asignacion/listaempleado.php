<table width="100%" class="table table-striped table-bordered table-hover" id="tableempleado">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Turno</th>
                                        <th>Tipo</th>
                                        <th>Núm de Empleado&nbsp;</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
  <?php
       require_once("../bd/conect.php");
         $sql= "SELECT p.id_personal,p.num_personal,p.nombre_personal,p.apaterno_personal,p.amaterno_personal,p.correo_personal, t.id_tipo, t.nombre_tipo,tu.id_turno, tu.nombre_turno FROM personal AS p INNER JOIN tipo AS t ON p.id_tipo = t.id_tipo INNER JOIN turno AS tu ON p.id_turno = tu.id_turno";
        $resultado=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultado)>0){
          $i=1;
        while($reg = mysqli_fetch_assoc($resultado)){

          echo "<tr>
                 <td>".$i++.
                 "<td>".$reg['nombre_turno'].
                 "<td>".$reg['nombre_tipo'].
                 "<td>".$reg['num_personal'].
                 "<td>".$reg['nombre_personal'].
                 "<td>".$reg['apaterno_personal'].
                 "<td>".$reg['amaterno_personal'].
                 "<td>".$reg['correo_personal'].
                "<td align='center'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash' onclick='borrarempleado($reg[id_personal]);' > </button>

                <button class='btn btn-primary btn-xs glyphicon glyphicon-pencil' data-toggle='modal' data-target='#actualizar".$reg['id_personal']."'> </button>
                </tr>"; ?>

        <div id="actualizar<?php echo $reg['id_personal'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">            
        <!-- Modal Content -->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss ="modal">&times;</button>
            <h4 class="modal-tittle">Actualizar Empleado&nbsp;</h4>
        </div>
        <div class="modal-body" id="actualizado">
            <form role="form">
                  <input type="text" value="<?php echo $reg['id_personal'] ?>" id="id" name="id<?php echo $reg['id_personal'];?>" hidden>

                 <div class="form-group">
                    <label>Nombre(s):&nbsp;</label>
                    <input class="form-control" id="nombre<?php echo $reg['id_personal'];?>" name="nombre" value="<?php echo $reg['nombre_personal'] ?>">
                </div>

                 <div class="form-group">
                    <label>Apellido Paterno:&nbsp;</label>
                    <input class="form-control" name="paterno"  id="paterno<?php echo $reg['id_personal'];?>" value="<?php echo $reg['apaterno_personal'] ?>">
                </div>

                 <div class="form-group">
                    <label>Apellido Materno:&nbsp;</label>
                    <input class="form-control" name="materno" id="materno<?php echo $reg['id_personal'];?>" value="<?php echo $reg['amaterno_personal'] ?>">
                </div>

                 <div class="form-group">
                    <label>Número de Empleado:&nbsp;</label>
                    <input class="form-control" name="num" id="num<?php echo $reg['id_personal'];?>" value="<?php echo $reg['num_personal'] ?>">
                </div>

                 <div class="form-group">
                    <label>Correo:&nbsp;</label>
                    <input class="form-control" name="correo" id="correo<?php echo $reg['id_personal'];?>" value="<?php echo $reg['correo_personal'] ?>">
                </div>
                    
                 <?php //include('opcionturno.php'); ?>
               
                <div class="form-group">
                  <div id="tipos<?php echo $reg['id_personal']; ?>"></div>
                </div>
                
                <div class="form-group">
                  <div id="turnos<?php echo $reg['id_personal']; ?>"></div>
                </div>
                <script>
                    opcionturno('turnos<?php echo $reg['id_personal']; ?>');
                    opciontipo('tipos<?php echo $reg['id_personal']; ?>');

                </script>
           <button class="btn btn-primary" type="submit" onclick="actualizarempleado($('#id<?php echo $reg[id_personal];?>').val(),$('#nombre<?php echo $reg[id_personal];?>').val(), $('#paterno<?php echo $reg[id_personal];?>').val(), $('#materno<?php echo $reg[id_personal];?>').val(), $('#num<?php echo $reg[id_personal];?>').val(), $('#correo<?php echo $reg[id_personal];?>').val(), $('#turno<?php echo $reg[id_personal];?>').val(), $('#tipo<?php echo $reg[id_personal];?>').val()); return false;">Guardar</button>
        </form> 

        </div>
        <div class="modal-footer">
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
        $('#tableempleado').DataTable({
            responsive: true
        });
    });
    </script>


