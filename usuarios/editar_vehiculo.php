<?php  @session_start(); ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Agregar Vehiculo</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="editar_vehiculoSTL.css"/>        
        <link rel="stylesheet" href="css/sAgregar_Vehiculo.css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
	
        <style>
            #wrapper {
                font-size: 1em; 
                width: 180px; 
                position: relative;
                height:5px;
                background-color:#232323;
                box-shadow:0 2px 3px rgba(0,0,0,0.4);
                width:13%;
                position:fixed;
                z-index:101
            }        
        </style>    
    </head>
    <body>
        
		
		<div id="caja">
		<form method="post" action="actualizar.php"> 
		<?php  // empieza consulta
include ("conexion_stark.php");


$consulta="SELECT * FROM vehiculos WHERE id_conductor=$_SESSION[id_usuario]";
$result=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($result)){

$idc=$reg["id_conductor"];
$idV=$reg["id_vehiculo"];
$modelo=$reg["modelo"];
$marca=$reg["marca"];
$tipo=$reg["anio"];
$km=$reg["kilometraje"];
$clave=$reg["clave_vehicular"];
$seriemotor=$reg["smotor"];
$cilindraje=$reg["cilindraje"];
$transmision=$reg["transmision"];

     }
  mysqli_free_result($result);	 
	
         ?>
<!-- ponemos todos los elementos dentro del formulario -->
		<h2> ficha tecnica del vehiculo</h2>
		<h3> <?php echo $marca." ".$modelo." ".$tipo;?> </h3>
<label> clave vehicular </label>
<input type="text" name="claveV" value="<?php echo $clave ?>" value="" > 
<br>
     <br><label> serie del motor</label>
<input type="text" name="serieM" value="<?php echo $seriemotor ?>"> <br>
       <br><label> Cilindraje</label>
          <select name="cilindro" id="cilindraje">		  
		
		 <option ><?php echo $cilindraje ?></option>
		 <option value='2'>2</option>
         <option value='4'>4</option>
         <option value='6'>6</option>
         <option value='8'>8</option>
		</select>
        <label>Transmicion</label>
		 <select name="transmicion" id="transmicion">
		
		 <option ><?php echo $transmision ?></option>
		<option value='Automatico'>Automatico</option>
		<option value='Manual'>Manual</option>
		<option value='Semi-Automatico'>Semi-Automatico</option>
		</select> <br> 
	 <br> <label>Kilometraje</label>
	<input type="text" name="KiloM" value="<?php echo $km ?>"> </input>
	
				<br><input type="submit" value="guardar" > </input>
		
		<input type=button onClick="location.href='Menu.php?llamar=1'" value='Atras'>
		</div>	
		</form>
		<?phprequire"actualizar.php"; ?>
		</body>
	</html>