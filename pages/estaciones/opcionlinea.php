<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM linea";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Nombre de Línea&nbsp;</label>';
                                            if (isset($_POST['id'])) {
                                             echo '<select class="form-control" id="linea'.$_POST['id'].'"  name="linea">';
                                            }else{
                                            	echo '<select class="form-control" id="linea"  name="linea">';
                                            }
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

