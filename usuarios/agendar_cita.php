<?php @session_start() ?>
<!DOCTYPE HTML>
<html lang="es">
   <head>
        <title>Agendar Cita</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link rel="stylesheet" href="css/sMenu_Principal_Usuario.css">
        <link rel="stylesheet" href="css/sAgendar_cita.css">
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/calendario.css"> 
        <link rel="stylesheet" href="/driveservice/driveservice/index.css">
	<script type="text/javascript" src="js/jquery.js"></script>   
        <script type="text/javascript" src="js/calendario.js"></script>
         <script type="text/javascript">
      $(document).ready(function() {
        $('#fecha1').datepicker({ minDate: 0,
         beforeShowDay: function (day) { 
           var day = day.getDay(); 
           if (day == 0 || day == 6) { 
             return [false, "somecssclass"] 
           } else { 
             return [true, "someothercssclass"] 
           } 
         }           
        });         
      });
  </script>
        <style>
            #wrapper {
                font-size: 1em; 
                width: 180px; 
                position: relative;
                height:5px;
                width:13%;
                position:fixed;
                z-index:101
            }        
        </style>    
    </head>
    <body>
<!--&&&&&&&&&&&&&&&&&&&&&&&& Agendar Cita &&&&&&&&&&&&&&&&&&&&&&&&-->
        <h1><div class="titulo"><u>Agendar Cita</u></div></h1> 
        
        
<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
include ("conexion_stark.php");
?>
<?php
$idcont=$_GET["id"];
$cadena="SELECT * FROM mecanicos WHERE id_meca=$idcont";
$result=mysqli_query($con,$cadena);
while($reg=mysqli_fetch_array($result)){
	$id=$reg["id_meca"];
	$mecanico=$reg["nombre"];
	$taller=$reg["empresa"];       
}
?>      
  <div  class="agendar_cita">
      <form method="POST"  action=""  > 
    <label>Mecanico:</label>
    <input type="text" name="mecanico" id="mecanico" value="<?php echo $mecanico;?>" readonly="readonly" required maxlength="25"/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="taller">Taller:</label>
    <input Type="text" name="taller" id="taller" value="<?php echo $taller;?>" readonly="readonly" required maxlength="25"/><br><br>
    <label>Selecciona el dia para la cita:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
    <label>Si gusta describe el motivo de su cita</label>
    <br><br>
    <input type="text" name="fecha1" id="fecha1" required maxlength="15"/><br><br><br><br>
    <textarea id="comment" name="comment" required maxlength="250" placeholder="Introduce tu publicacion aquí..."></textarea>
    
    <input type="submit" name="agendar" value="agendar"/>
    <input type="hidden" id="ids" name="idmeca" value="<?php echo $id; ?>">
    <input type="button" name="cancelar" value="Cancelar"/>
      </form>
 <?php require 'solicitar_cita.php'; ?> 
      

  </div> 

        <div class="footer">
            <p class="rights">Copyright 2014 Pixki todos los derechos reservados <a href="#"> ir a inicio</a></p>
            <p class="volver"> <a href="#"Volver arriba</a></p>
        </div>         
    </body>      
</html>