<?php @session_start();?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Agregar Vehiculo</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link rel="stylesheet" href="css/sAgregar_Vehiculo.css"/>
        <link rel="stylesheet" href="css/Hover_Animation.css"/>
        
           
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<?php include_once("includes/dropdown.php"); ?>
    </head>
    <body>
        

        <div id="caja">
            <form action="" method="post" class="registro"> 
                <h2 align="center">Agregar Vehiculo</h2>
                <select name="drop_1" id="drop_1">
					<option value="" selected="selected" disabled="disabled">Marca</option>
					<?php getTierOne(); ?>
				</select>
				<!--  <select name="drop_2" id="drop_2">
					<option value="" selected="selected" disabled="disabled">Modelo</option>
				</select>
				<select name="drop_3" id="drop_3">
					<option value="" selected="selected" disabled="disabled">Año</option>
				</select> -->
				<span id="wait_1" style="display: none;">
					<img alt="Please Wait" src="images/ajax-loader.gif"/>
				</span>
				<span id="result_1" style="display: none;"></span>
				<span id="wait_2" style="display: none;">
					<img alt="Please Wait" src="images/ajax-loader.gif"/>
				</span>
				<span id="result_2" style="display: none;"></span>
				<span id="wait_3" style="display: none;">
					<img alt="Please Wait" src="images/ajax-loader.gif"/>
				</span>
				<span id="result_3" style="display: none;"></span>
				<hr>
                <label>Clave Vehiculo</label>
                    <input type="text" name="clave" value=""/><br>
                <label>Serie Motor</label>
                    <input type="text" name="smotor" value=""/><br>
                <label>Kilometraje</label>
                    <input type="text" name="kilometraje" value=""/>
				<div name="cilin">
                <label>Cilindraje</label>
                <select name="cilindraje">
                    <option value='2'>2</option>
                    <option value='4'>4</option>
                    <option value='6'>6</option>
                    <option value='8'>8</option>
                </select></div>
				<div name = "trans">
					<label>Transmision</label>
					<select name="transmision">
						<option value='1'>Automatico</option>
						<option value='2'>Manual</option>
						<option value='3'>Electrico</option>
					</select></div>
					<br>
                                        <input type="submit" name="agregar" class="push" value="Agregar"/>
            </form>
            <?php
                include 'includes/conexion2.php';
                if(isset($_POST['agregar'])) { 
                    if($_POST['clave'] == '' or $_POST['smotor'] == '' or $_POST['kilometraje'] == '' or $_POST['cilindraje'] == '' or $_POST['transmision'] == '') { 
                        echo 'Por favor llene todos los campos.'; 
                    }else{ 
                        $sql = 'SELECT * FROM vehiculos AND SELECT id_usuario FROM usuarios '; 
                        $rec = mysql_query($sql); 
                        $verificar_vehiculo= 0;                           
//                        while($result = mysql_fetch_object($rec)){ 
//                            if($result->clave == $_POST['clave'] or $result->smotor == $_POST['smotor']){ 
//                                $verificar_vehiculo = 1; 
//                            } 
//                        }                         
                        if($verificar_vehiculo == 0){
                            $modelo = $_POST['drop_1'];
                            $tipo =$_POST['drop_3'];
                            $marca =$_POST['drop_2'];
                            $clave =$_POST['clave'];
                            $smotor = $_POST['smotor'];
                            $kilometraje = $_POST['kilometraje'];
                            $cilindraje = $_POST['cilindraje'];
                            $transmision = $_POST['transmision'];
                            $status = 1 ;
                           $conid =$_SESSION['id_usuario'];
						    
                            $sql = ("INSERT INTO vehiculos (modelo, marca, anio, kilometraje, smotor, cilindraje , clave_vehicular, transmision, id_conductor, status) VALUES ('$modelo', '$marca', '$tipo', '$kilometraje', '$smotor', '$cilindraje', '$clave', '$transmision', '$_SESSION[id_usuario]', '$status')"); 
                           mysql_query($sql); 
                            echo 'Usted se ha registrado correctamente su vehiculo.';
				              }else{ 
                            echo 'El vehiculo ya habia sido registrado en una cuanta anterirormente'; 
                        } 
                    } 
                } 
            ?> 
        </div>
        
    </body>
</html>