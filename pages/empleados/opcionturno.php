<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM turno";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Turno&nbsp;</label>
                                            <select class="form-control" name="turno">';
                                            while($reg = mysqli_fetch_assoc($resultado)){ ?>
                                                <option value="<?php echo $reg['id_turno'];?>">
					                            <?php 
					    	                      echo $reg['nombre_turno'];
					    	                      ?>
                                                </option>
                                                <?php }
					echo "</select> 
					            </div>"; 
					}

?>	