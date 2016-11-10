<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM personal";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Nombre de Empleado&nbsp;</label>';
                                            if (isset($_POST['id'])) {
                                             echo '<select class="form-control" id="personal'.$_POST['id'].'"  name="personal">';
                                            }else{
                                            	echo '<select class="form-control" id="personal"  name="personal">';
                                            }
                                            while($reg = mysqli_fetch_assoc($resultado)){ ?>
                                                <option value="<?php echo $reg['id_personal'];?>">
					                            <?php 
					    	                      echo $reg['nombre_personal']." ".$reg['apaterno_personal']." ".$reg['amaterno_personal'];
					    	                      ?>
                                                </option>
                                                <?php }
					echo "</select> 
					            </div>"; 
					}

?>	