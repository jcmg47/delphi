<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM linea";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Nombre de Línea&nbsp;</label>
                                            <select class="form-control" name="linea">';
                                            while($reg = mysqli_fetch_assoc($resultado)){ ?>
                                                <option value="<?php echo $reg['id_linea'];?>">
					                            <?php 
					    	                      echo $reg['nombre_linea'];
					    	                      ?>
                                                </option>
                                                <?php }
					echo "</select> 
					            </div>"; 
					}

					?>	