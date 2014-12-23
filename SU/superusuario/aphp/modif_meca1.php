


<?php
     include("conexion.php");
    

				if(isset($_REQUEST["btn"])){
						
				    $usuario = $_REQUEST['nombre'];
                                    $apellidop =$_REQUEST['apellidop'];
                                    $apellidom =$_REQUEST['apellidom'];
                                    $rfc =$_REQUEST['rfc'];
                                    $empresa = $_REQUEST['empresa'];
                                    $calle = $_REQUEST['calle'];
                                    $colonia = $_REQUEST['colonia'];
                                    $cp = $_REQUEST['cp'];
                                    $telefono = $_REQUEST['telefono'];
                                    $email = $_REQUEST['email'];
                                    $cel =$_REQUEST['cel'];
				$id=$_REQUEST['idc'];
								
$cadena="update mecanicos set nombre='$usuario',apellidop='$apellidop',apellidom='$apellidom',rfc='$rfc',
			empresa='$empresa',calle='$calle',colonia='$colonia',cp='$cp',cel='$cel',telefono='$telefono',email='$email' where id_meca=$id";
                                
								   
								    
				$exito=mysqli_query($con,$cadena);
			
					if($exito){
								
?>

		                    <script languaje="javascript">
    alert("modificado con exito");
    location.href = "Menu.php?opc=ficha&rxcv=<?php echo $id ?>";
	</script>
          <?php	} 
		  
		  
		  	}else{"tambien";}
		  ?>


 