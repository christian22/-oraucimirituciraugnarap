<?php @session_start(); ?>
<!DOCTYPE HTML>
<html lang="es">
   <head> 
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 		   
      	<script type="text/javascript">
			
			
            var geocoder = new google.maps.Geocoder();                 
         
		
			 function initialize(){
				var array =[23.256985224605902,23.24594487842181,23.220390858679266,23.2074542434442,23.195778661849896,23.194200802341772,
				23.1926229242149,23.19325407769983];
				var arraya =[-106.40702262695311,-106.39440551574705,-106.37826934631346,-106.36453643615721,-106.34153381164549,-106.2872888165283,	
	-106.2430001812744,-106.22961059387205];
				
					
                    var latLng = new google.maps.LatLng(array[0],arraya[0]);
                    var mapProp = {
                        center:latLng,
                        zoom:10,
                        mapTypeId:google.maps.MapTypeId.ROADMAP,minZoom:2
                    };
			
				
					
                    var map=new google.maps.Map(document.getElementById("mapa"),mapProp);
                    var marker = new google.maps.Marker({
			   map:map,
			   position:latLng			   
			   });
	for(i=1;i<=8;i++){
					alert(i);
					
                    marker.setPosition(array[i],arraya[i]);
			    
			   }
			   }
                google.maps.event.addDomListener(window, 'load', initialize);
				
            </script>
	 </head>
    <body>	   
      
       <?php
	   require("conexion_stark.php");
       mysql_connect("localhost","root");
       mysql_select_db("driveservice");
       $re=mysql_query("select * from vehiculos JOIN coorde WHERE $_SESSION[id_usuario] = vehiculos.id_conductor AND vehiculos.id_vehiculo=coorde.id_vehiculo");
	   	   while($f=mysql_fetch_array($re)){ 
				$Latitud=$f["Latitud"];
				$Longitud=$f["Longitud"];
				?>
				<select name="autos" size="1" id="auto" onchange="form1.submit()" style="width: 200px;">
				<option value="<?php echo $f['id_vehiculo'];?>"><?php echo $f['modelo'];?>
              <?php } ?>
		<!--input type="text" readonly="readonly" name="lat" value="<?php echo $Latitud;?>">
		<input type="text" readonly="readonly" name="lon" value="<?php echo $Longitud;?>"-->
				
        </select>
		<div id="mapa" style="   width:729px;  height:500px;  margin:auto; margin-top: 120px;  position:fixed;"></div>
    </body> 
 </html>