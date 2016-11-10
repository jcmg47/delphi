<?php
require_once("../bd/conect.php");
	 $sql="SELECT * FROM turno";
            $resultado = mysqli_query($con,$sql);
 			if(mysqli_num_rows($resultado)>0){
 				echo '
 				<div class="form-group">
                                            <label>Turno&nbsp;</label>';
                                            if(isset($_POST['id'])){
                                            	echo '<select class="form-control" id="turno'.$_POST['id'].'"  name="turno">';
                                            }else{
												echo '<select class="form-control" id="turno"  name="turno">';

                                            }
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