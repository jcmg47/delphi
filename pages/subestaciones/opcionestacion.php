<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM estacion";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Nombre de Estación&nbsp;</label>
                                            <select class="form-control" name="estacion">';
                                            while($reg = mysqli_fetch_assoc($resultado)){ ?>
                                                <option value="<?php echo $reg['id_estacion'];?>">
					                            <?php 
					    	                      echo $reg['nombre_es'];
					    	                      ?>
                                                </option>
                                                <?php }
					echo "</select> 
					            </div>"; 
					}

					?>	