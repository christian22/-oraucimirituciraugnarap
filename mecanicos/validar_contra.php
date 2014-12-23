

<?php



if(isset($_REQUEST['btnE'])){//si fue precionado el e boton cambiar comienza todo
	$a=$_REQUEST['contv'];/*declarando variables de los form*/
	$b=$_REQUEST['contn'];
	$c=$_REQUEST['contn2'];
	
	
	
					
					if($a == $y){// si son iguales avanza a conparar la nueva pss
						if($b == $c){
						//si son iguales hace el cambio de pass
						
						
					$cadena="update mecanicos set contrasena='$c' where id_meca=$z";

					$exito=mysqli_query($con,$cadena);
						
						echo "La contraseña se a modificado!";
						
						
						}else{echo "las contras no coiciden";}
					
					
					
					}else{echo "el primer campo esta mal";}




}















?>