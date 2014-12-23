<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Historial</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/sMenu_Principal_Usuario.css"/>
		<link rel="stylesheet" href="css/subir.css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<?php include("includes/dropdown.php"); ?><!--php que contiene los metodos jquery-->
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
<!--Comienza la pagina de los reportes-->        
        <div id="publicaciones">
            <h1>Historial</h1>
			<select name="su_autos" id="su_autos"> <!--selector de autos registrados al usuario-->
					<option value="" selected="selected" disabled="disabled">Autos</option>
					<?php getAutos(); ?> <!--Metodo php para jalar autos de base de datos-->
			</select>
			<br>
			<table id="tabla"> <!--Aqui se atrapan los registros que fueron subidos para el auto seleccionado-->
			</table>
			<br/><a href="#" onclick="autoSelect(); return false;">Subir Reporte</a>
			<!--Al dar click en subir reporte, llamara el metodo autoSelect donde verfica que
				ha escogido vehiculo-->
        </div>
		<script type="text/javascript">
		function autoSelect()
		{
			var sel = document.getElementById("su_autos").value;//extrae valor del auto selecionado
			if(sel != "")//se ejecuta si el usuario ha escojido auto
			{
				$('#drop').append("<input type='hidden' name='val' id='val' value="+sel+" />");//agrega el valor de la seleccion al formulario de subir reporte
				document.location.href = "#registro"; //redirecciona al formulario para subir reporte
				
			}
			else{
				alert("Selecione un auto.");//informa que no se ha seleccionado un auto
			}
		}
		function reload() //este metodo se ejecuta al cerrar el formulario de subir reportes
		{
			document.location.href = "#close";//cierra el formulario subir reporte
			$.get("includes/dropdown.php", { //este metodo jquery (actualiza la tabla de los reportes
				regis: "suAutos", 			 //sin necesidad de refresacr la pagina) manda varia
				reg_var: $("#su_autos").val()//necesarias al dropdown que de ahi proviene la tabla
				}, function(data) {$("#tabla").html(data);});//nueva, y simula un refrecar
		}
		</script>
		<!--Formulario emergente para subir registros de autos-->
		<div id="registro" class="modalmask">
        <div class="modalbox movedown">
			<br>         
            <h2>Generar Reporte del Vehiculo</h2><br>
				<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
				<div id="drop"><!--Aqui permite arrastar y soltar archivo para subir-->
					Soltar Aqui
					<a>Buscar</a><!--Enmascara al input que permite navergar por el archivo que el usuario desee subir-->
					<input type="file" name="upl" id="upl" multiple />
				</div>

				<ul>
					<!-- Los archivos que se subiran se muestren aqui -->
				</ul>

        </form>
            <a class="close" href="#" onclick="reload(); return false;"></a><!--llama al metodo para actuializar ña tabla de registros-->
			
        </div>
    </div>
		<!-- JavaScript Includes -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="js/jquery.ui.widget.js"></script>
        <script src="js/jquery.iframe-transport.js"></script>
        <script src="js/jquery.fileupload.js"></script>

        <!-- Our main JS file -->
        <script src="js/script.js"></script>
    </body>
</html>