<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Super Usuario</title>
		<link rel="stylesheet" href="css/sMenuPrincipalSU.css">
               <link rel="stylesheet" href="css/superStyle.css">		
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
                <!--<link rel="stylesheet" href="css/sAltaMecanico.css">-->
		<style>
                    #wrapper {
                        font-size: 1em; 
                        width: 180px; 
                        position: relative;
                        height:70px;
                        background-color:#232323;
                        box-shadow:0 2px 3px rgba(0,0,0,0.4);
                        position:fixed;
                        z-index:101;}
                
                </style>
  
	</head>
<body>
    

<div id="contenedor">
<?php print_r ($_SESSION);?>
<?php
include ("conexion_stark.php");

if(isset($_GET["rxcv"])) {
        $id=$_GET["rxcv"];
		if(ctype_digit($id)){


$cadena="SELECT dias_semana.domingo, dias_semana.lunes, dias_semana.martes, dias_semana.miercoles, dias_semana.jueves, dias_semana.viernes, dias_semana.sabado,
 servicios.afinacion, servicios.frenos, servicios.cambio_aceite, servicios.transmision, servicios.electrica_mecanica,
 servicios.chapa_pintura, servicios.electricidad_automotriz, servicios.lubricacion 
 FROM dias_semana JOIN servicios JOIN mecanicos
ON  dias_semana.id_meca = servicios.id_meca
AND mecanicos.id_meca=$id
AND mecanicos.status=1";






$result=mysqli_query($con,$cadena);

while($reg=mysqli_fetch_array($result)){


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
//---------se imprimen solo los dias que trabaja el mecanico
if($domingo==1){ echo "domingo";} else {echo "";}
if($lunes==1){ echo "lunes";} else {echo "";}
if($martes==1){ echo "martes";} else {echo "";}
if($miercoles==1){ echo "miercoles";} else {echo "";}
if($jueves==1){ echo "jueves";} else {echo "";}
if($viernes==1){ echo "viernes";} else {echo "";}
if($sabado==1){ echo "sabado";} else {echo "";}
//----------se immprimen solo los servicios que ofrece el mecanico
if($afinacion==1){ echo "afinacion";} else {echo "";}
if($frenos==1){ echo "frenos";} else {echo "";}
if($cambio_aceite==1){ echo "cambio_aceite";} else {echo "";}
if($transmision==1){ echo "transmision";} else {echo "";}
if($electrica_mecanica==1){ echo "electrica_mecanica";} else {echo "";}
if($chapa_pintura==1){ echo "chapa_pintura";} else {echo "";}
if($electricidad_automotriz==1){ echo "electricidad_automotriz";} else {echo "";}
if($lubricacion==1){ echo "lubricacion";} else {echo "";}
}
?>


 
</div>
 <?php
		//}
	  }
	  	  }
	  ?>
</body>
</html>