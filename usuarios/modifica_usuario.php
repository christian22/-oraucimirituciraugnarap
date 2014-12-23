<?php

 include("conexion.php");
    

				if(isset($_REQUEST["btn"])){
						
				    $usuario = $_REQUEST['nombre'];
                                    $apellidop =$_REQUEST['apellidop'];
                                    $apellidom =$_REQUEST['apellidom'];  
                                    $calle = $_REQUEST['calle'];
                                    $colonia = $_REQUEST['colonia'];
                                    $email = $_REQUEST['email'];
                                    $cel =$_REQUEST['celular'];
				    $id = $_REQUEST['idc'];
                                    $Estados = $_REQUEST['estado'];
                                    $municipio = $_REQUEST['municipio'];
                                    
                                   
								
$cadena="update usuarios set nombre='$usuario',apellidop='$apellidop',apellidom='$apellidom',calle='$calle',colonia='$colonia',celular='$cel',email='$email', estado='$Estados',municipio='$municipio' where id_usuario=$id";
       
								   
								    
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


