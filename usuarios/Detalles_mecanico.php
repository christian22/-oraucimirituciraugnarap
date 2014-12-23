<?phpsession_start();?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Detalles del mecanico</title>
	<meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/sDetalles_mecanico.css"/>
       <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>	
    </head>
		
		 <body>
<div id="contenedorDetall">
<form method="post" action="Insert.php"> 
<?php  // empieza consulta
include ("conexion_stark.php");
$idcont=$_GET["varID"];// se recive la variable 


$cadena="SELECT * FROM mecanicos WHERE id_meca=$idcont";// consultas

$result=mysqli_query($con,$cadena);
while($reg=mysqli_fetch_array($result)){
	$id=$reg["id_meca"];
	$nombre=$reg["nombre"];
	$empresa=$reg["empresa"];
	$calle=$reg["calle"];
	$colonia=$reg["colonia"];
        $email=$reg["email"];
        $telefono=$reg["telefono"];     
        $apellidop=$reg["apellidop"];
	$apellidom=$reg["apellidom"];
        $latitud=$reg["latitud"];
        $longitud=$reg["longitud"];
        echo"	<a href='Insert_mecanico.php?varID=$id' >agregar </a>";
} // termina consulta a  php
?>
<h1> Detalles del mecanico </h1>

<div id="contenedorpfoto"> <!-- simador para la foto del mecanico -->
    </div>
	
     <div id="contenedorpinfo"> <!-- contenedor para la informacion del mecanico -->
             <label>Mecánico: </label>
                <input type="text" name="nomMeca" value="<?php echo $nombre." ".$apellidop." ".$apellidom?>" readonly="readonly"><br>
                  <label>Taller:</label>
                <input type="text" name="nomTaller" value="<?php echo $empresa?>" readonly="readonly"><br>
    </div> <!-- termina contenedor para la informacion del mecanico superior  -->
	
         <div id="contenedorpinfo2"> <!-- contenedor para la informacion del mecanico -->
             <table  id="ubicacion"> <br>
              <label>Ubicado en:</label><br><br>
     <tbody>
<tr>
    <td><label>Calle: </label></td>
    <td><input type="text" name="nomCalle" value="<?php echo $calle?>" readonly="readonly"><br></td>
</tr>
<tr>
    <td><label>Colonia: </label></td>
     <td><input type="text" name="nomColnio" value="<?php echo $colonia?>" readonly="readonly"></td>
</tr>
<tr>
     <td><label> Servicios: </label></td>
     <td><input type="text" name="nomService" readonly="readonly">
</tr>

 </tbody>
   </table>
</div> <!-- termina contenedor para la informacion del mecanico inferior  -->

<div class="MapaContenedor">
           <script>
			var geocoder = new google.maps.Geocoder();
                    var lat="<?php echo $latitud; ?>";
                    var long="<?php echo $longitud; ?>";
                function initialize(){
				 var latLng = new google.maps.LatLng(lat,long);
                    var mapProp = {
                        center:latLng,
                        zoom:19,
                        mapTypeId:google.maps.MapTypeId.HYBRID,minZoom:15
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap")
                    ,mapProp);
               var marker = new google.maps.Marker({
			   map:map,
			   position:latLng
			   
			   });
  marker.setPosition(results[0].geometry.location);
			   }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <div id="googleMap" style="width:250px;height:250px;margin-left:230px;margin-top:-60px;"></div>     
		</div>
	
	<!--<input type="submit" onclick="location.href='Mis_Mecanicos.php'" name="AgregarDM" value="Agregar"> </input> -->
</form> 
</div> <!-- cierra contenedor -->
		
		</html>