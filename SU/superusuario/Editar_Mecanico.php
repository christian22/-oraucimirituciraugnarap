
<!DOCTYPE html>
<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>Super Usuario</title>
						<link rel="stylesheet" href="css/sRegistro_mecanico.css">
						<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
						<script type="text/javascript">
		  
		  $(document).ready(function(){ 
$(".txtNumbers").keydown(function(event) {
   if(event.shiftKey)
   {
        event.preventDefault();
   }
 
   if (event.keyCode == 46 || event.keyCode == 8)    {
   }
   else {
        if (event.keyCode < 95) {
          if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault();
          }
        } 
        else {
              if (event.keyCode < 96 || event.keyCode > 105) {
                  event.preventDefault();
              }
        }
      }
   });
});
		  
		  
		  </script>
            
					</head>

				<div id="contenedor">

<?php
				include ("conexion.php");
				
				//esto es una prueba
				if(isset($_GET["rxcv"])){
						$d=$_GET["rxcv"];
						if(ctype_digit($d)){


				$cadena="SELECT * FROM mecanicos WHERE status = 1 AND id_meca=$d";

				$result=mysqli_query($con,$cadena);
				while($reg=mysqli_fetch_array($result)){
					$id=$reg["id_meca"];
					$nombre=$reg["nombre"];
					$apellidop=$reg["apellidop"];
					$apellidom=$reg["apellidom"];
					$rfc=$reg["rfc"];
					$taller=$reg["empresa"];
					$calle=$reg["calle"];
					$colonia=$reg["colonia"];
					$municipio= $reg['municipio'];
					$estado = $reg['estado'];
						$cp=$reg["cp"];
						$email=$reg["email"];
						$telefono=$reg["telefono"];
						$contrasena=$reg["contrasena"];
						$cel=$reg["cel"];
						
						
						
				}
				?>

				<h2>Editando mecanico</h2>

				<h3 >Datos personales:</h3>           
				<form method="post" action="">
					   <table class="t1" >
						<tr>
							<td><label>Nombre(s):</label></td>
							<td><input type="hidden" id="ids" name="idc" value="<?php echo $id; ?>"><input type="text" name="nombre"   value="<?php echo $nombre ?>" maxlength="20" required >
						</tr>
						 
				  
						<tr>        
							<td><label>Apellido Paterno:</label></td>
							<td><input type="text" name="apellidop"  value="<?php echo $apellidop ?>" maxlength="20" required  >
						</tr>
						
						
						<tr>
							<td><label>Apellido Materno:</label></td>
							<td><input type="text" name="apellidom"   value="<?php echo $apellidom ?>" maxlength="15" required >
						 </tr>
					   
				   
									  
						 <tr> 
							 <td><label>Tel.Celular:</label></td>
						 <td><input type="text" name="cel" class="txtNumbers"  value="<?php echo$cel ?>"  >
						 </tr> 
										
						 <tr>
							 <td><label>Correo electronico:</label></td>
						   <td><input type="email" name="email"   value="<?php echo $email ?>" >
						  </tr> 
						   
							</div>
				 
						  
				  </table> 

					  <!--&&&&&&&&&&&&&&&&&&&&&&&& datos del taller &&&&&&&&&&&&&&&&&&&&&&&&-->   
				 <h3 align="left">Datos del taller:</h3>           
					  
						  <table class="t1">
						<tr>
							<td><label>Nombre del taller:</label></td>
							<td><input type="text" name="empresa"   value="<?php echo $taller ?>" maxlength="30" required >
						</tr>
						 
				  
						<tr>        
							<td><label>RFC:</label></td>
							<td><input type="text" name="rfc"  value="<?php echo $rfc ?>" maxlength="12" required >
						</tr>
						
						
						<tr>
							<td><label>Calle y numero:</label></td>
							<td><input type="text" name="calle"   value="<?php echo $calle ?>" maxlength="60" required >
						 </tr>
					   
				   
									  
						 <tr> 
							 <td><label>Colonia:</label></td>
						 <td><input type="text" name="colonia"   value="<?php echo $colonia ?>"  >
						 </tr> 
										
						 <tr>
							 <td><label>Codigo Postal: </label></td>
						   <td><input type="text" class="txtNumbers" name="cp"   value="<?php echo $cp ?>"  >
						  </tr> 
						  
						  <tr>
							 <td><label>Tel.Trabajo:</label></td>
						   <td><input type="text" name="telefono" class="txtNumbers"  value="<?php echo $telefono ?>"  >
						  </tr> 
						  
						  <tr>
							  <td>&nbsp; </td>
							  <td>&nbsp; </td>
						  </tr> 
						   
						   <tr>
							   
							 <td><input type="submit"  name="btn" value="Guardar" ></input> </td>
							 <td><input type="button" onclick=" location.href='?opc=ficha&rxcv=<?php echo $id; ?>' " value="Cancelar" /> </td>
							 
							 
							 
							 
							 
						  </tr> 
						   
						  
						</table>
					</form>

					  
						<?php
					  require 'aphp/modif_meca1.php';	
		  
		  
		 } else{echo "no se encontro nada";}
		 ?>
				</div>

					  <?php
					  
					  
					  
	  }else{echo "te la pelaste";}
	  	   
		  
	  ?>
				  
				</body>

</html>