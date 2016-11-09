<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM tipo";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Tipo de Empleado&nbsp;</label>
                                            <select class="form-control" id="tipo" name="tipo">';
                                            while($reg = mysqli_fetch_assoc($resultado)){ ?>
                                                <option value="<?php echo $reg['id_tipo'];?>">
					                            <?php 
					    	                      echo $reg['nombre_tipo'];
					    	                      ?>
                                                </option>
                                                <?php }
					echo "</select> 
					            </div>"; 
					}

?>	