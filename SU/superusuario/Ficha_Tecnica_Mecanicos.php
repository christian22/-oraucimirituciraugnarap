<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Super Usuario</title>
		<link rel="stylesheet" href="css/sMenuPrincipalSU.css">
               <link rel="stylesheet" href="css/sRegistro_mecanico.css">		
				<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
                
<div id="contenedor">
<!--<?php print_r ($_SESSION);?>-->
<?php
include ("conexion.php");

if(isset($_GET["rxcv"])){
        $id=$_GET["rxcv"];
		if(ctype_digit($id)){


$cadena="SELECT * FROM mecanicos WHERE status=1 AND id_meca=$id";
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
        $cp=$reg["cp"];
        $email=$reg["email"];
        $telefono=$reg["telefono"];
        $contrasena=$reg["contrasena"];
        $cel=$reg["cel"];
		$ver="readonly";
		
        
}
?>

<h2>Ficha Tenica Mecanico</h2>

<h3 >Datos personales:</h3>           
<form method="post" action="">
       <table class="t1" >
        <tr>
            <td><label>Nombre(s):</label></td>
            <td><input type="text" name="nombre"   value="<?php echo $nombre?>" <?php echo $ver?> >
        </tr>
         
  
        <tr>        
            <td><label>Apellido Paterno:</label></td>
            <td><input type="text" name="apellidop"  value="<?php echo $apellidop?>" <?php echo $ver?> >
        </tr>
        
        
        <tr>
            <td><label>Apellido Materno:</label></td>
            <td><input type="text" name="apellidom"   value="<?php echo $apellidom?>" <?php echo $ver?> >
         </tr>
       
   
                      
         <tr> 
             <td><label>Tel.Celular:</label></td>
         <td><input type="text" name="cel"   value="<?php echo $cel?>" <?php echo $ver?> >
         </tr> 
                        
         <tr>
             <td><label>Correo electronico:</label></td>
           <td><input type="text" name="email"   value="<?php echo $email?>" <?php echo $ver?> >
          </tr> 
           
            </div>
 
          
  </table> 

      <!--&&&&&&&&&&&&&&&&&&&&&&&& datos del taller &&&&&&&&&&&&&&&&&&&&&&&&-->   
 <h3 align="left">Datos del taller:</h3>           
      
          <table class="t1">
        <tr>
            <td><label>Nombre del taller:</label></td>
            <td><input type="text" name="empresa"   value="<?php echo $taller?>" <?php echo $ver?> >
        </tr>
         
  
        <tr>        
            <td><label>RFC:</label></td>
            <td><input type="text" name="rfc"  value="<?php echo $rfc?>" <?php echo $ver?> >
        </tr>
        
        
        <tr>
            <td><label>Calle y numero:</label></td>
            <td><input type="text" name="calle"   value="<?php echo $calle?>" <?php echo $ver?>  >
         </tr>
       
   
                      
         <tr> 
             <td><label>Colonia:</label></td>
         <td><input type="text" name="colonia"   value="<?php echo $colonia?>" <?php echo $ver?> >
         </tr> 
                        
         <tr>
             <td><label>Codigo Postal: </label></td>
           <td><input type="text" name="cp"   value="<?php echo $cp?>" <?php echo $ver?> >
          </tr> 
          
          <tr>
             <td><label>Tel.Trabajo:</label></td>
			 <td><input type="text" name="telefono"   value="<?php echo $telefono?>" <?php echo $ver?>  >
          </tr> 
          
          <tr>
              <td>&nbsp; </td>
              <td>&nbsp; </td>
          </tr> 
           
           <tr>
               
             <td><input type="button" onclick="location.href='?opc=buscar'"   value="Volver"  > </td>
             <td><input type="button" onclick=" location.href='?opc=edit&rxcv=<?php echo$id?>'" value="Editar" /> </td>
          </tr> 
           
          
  </table>
 
</div>
 <?php
		//}else{echo "te la pelaste :P";}
	  }else{echo "te la pelaste";}
	  	  }else{echo "te la pelaste";}
	  ?>
</body>
</html>