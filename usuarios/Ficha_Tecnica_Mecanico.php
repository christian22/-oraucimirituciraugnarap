<?phpsession_start();?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Ficha Tecnica Mecanico</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/sFicha_Tecnica_Mecanico.css"/>
        <link rel="stylesheet" href="css/Hover_Animation.css"/>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
    </head>
    <body>
<!---->
<?php
include ("conexion_stark.php");
$idcont=$_GET["varID"];


$cadena="SELECT * FROM dias_semana JOIN servicios JOIN mecanicos ON  dias_semana.id_meca = servicios.id_meca AND mecanicos.id_meca=servicios.id_meca AND mecanicos.id_meca=$idcont AND mecanicos.status=1";
//$cadena="SELECT * FROM dias_semana JOIN servicios JOIN mecanicos ON  dias_semana.id_meca = servicios.id_meca AND mecanicos.id_meca=servicios.id_meca AND mecanicos.id_meca=$idcont AND mecanicos.status=1";
$result=mysqli_query($con,$cadena);
while($reg=mysqli_fetch_array($result)){
	$id=$reg["id_meca"];
//-----------------------------informacion de usuario---------------------
    $nombre=$reg["nombre"];
    $empresa=$reg["empresa"];
    $calle=$reg["calle"];
    $colonia=$reg["colonia"];
    $email=$reg["email"];
    $telefono=$reg["telefono"];
    $latitud=$reg["latitud"];
    $longitud=$reg["longitud"];
//---------------------------horarios y servicios--------------------------
    $domingo=$reg["domingo"];
    $lunes=$reg["lunes"];
    $martes=$reg["martes"];
    $miercoles=$reg["miercoles"];
    $jueves=$reg["jueves"];
    $viernes=$reg["viernes"];
    $sabado=$reg["sabado"];
    $afinacion=$reg["afinacion"];
    $frenos=$reg["frenos"];
    $cambio_aceite=$reg["cambio_aceite"];
    $transmision=$reg["transmision"];
    $electrica_mecanica=$reg["electrica_mecanica"];
    $chapa_pintura=$reg["chapa_pintura"];
    $electricidad_automotriz=$reg["electricidad_automotriz"];
    $lubricacion=$reg["lubricacion"];
        
}
?>
<form method="post" action="agendar_cita.php?id=<?php echo $id;?>">      
    

        <div id="caja">
        <h1>Ficha Tecnica</h1> 
        <div id="caja1"></div><br>
            <label id="mecanico">Mecanico: </label>
                <input type="text" name="nombre" value="<?php echo $nombre;?>" readonly="readonly" required maxlength="25"><br><br>
            <label id="taller">Taller: </label>
                <input type="text" name="empresa" value="<?php echo $empresa;?>" readonly="readonly" required maxlength="25"><br><br><br>
            <label>Telefono: </label>
                <input type="text" name="telefono" value="<?php echo $telefono;?>" readonly="readonly" required maxlength="25"><br><br>
            <label>Email: </label>
                <input type="text" name="email" value="<?php echo $email;?>" readonly="readonly" required maxlength="25"><br><br>  
        <h3><u>Ubicado en:</u></h3>
            <label>Calle:</label>
                <input type="text" name="calle" value="<?php echo $calle;?>" readonly="readonly"required maxlength="25"><br><br>
            <label>Colonia:</label>
                <input type="text" name="colonia" value="<?php echo $colonia;?>" readonly="readonly" required maxlength="25"><br><br>
        <h3><u>Horario de trabajo:</u></h3>
        <!--          se imprimen solo los dias que trabaja el mecanico -->
        <?php
        if($domingo==1){ echo "domingo<br>";} else {echo "";}
        if($lunes==1){ echo "lunes<br>";} else {echo "";}
        if($martes==1){ echo "martes<br>";} else {echo "";}
        if($miercoles==1){ echo "miercoles<br>";} else {echo "";}
        if($jueves==1){ echo "jueves<br>";} else {echo "";}
        if($viernes==1){ echo "viernes<br>";} else {echo "";}
        if($sabado==1){ echo "sabado";} else {echo "";}
        ?>     
                    
        <h3 id="servicios"><u>Servicios:</u></h3>  

        <!--            se immprimen solo los servicios que ofrece el mecanico -->
        <div id="caja2"style=" margin-left: 200px;">
        <?php
        if($afinacion==1){ echo "afinacion<br>";} else {echo "";}
        if($frenos==1){ echo "frenos<br>";} else {echo "";}
        if($cambio_aceite==1){ echo "cambio de aceite<br>";} else {echo "";}
        if($transmision==1){ echo "transmision<br>";} else {echo "";}
        if($electrica_mecanica==1){ echo "electrica_mecanica<br>";} else {echo "";}
        if($chapa_pintura==1){ echo "chapa y pintura<br>";} else {echo "";}
        if($electricidad_automotriz==1){ echo "electricidad automotriz<br>";} else {echo "";}
        if($lubricacion==1){ echo "lubricacion";} else {echo "";}
        ?>
        </div>



               
        </div>              
        <div class="ubicacion">
            <label><strong>Ubicacion:</strong></label>
        </div>
        <!--&&&&&&&&&&&&&&&&&&&&&&&& MAPA &&&&&&&&&&&&&&&&&&&&&&&&-->  
        <div class="mapa">
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
            <div id="googleMap" style="width:250px;height:250px;"></div>     
        </div>
        <input type="button" class ="wobble-vertical" onclick="location.href='agendar_cita.php?id=<?php echo $id;?>'"  value="Agendar"/>
    </form>
    </body>
</html>