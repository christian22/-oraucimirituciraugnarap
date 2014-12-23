<?php
 @session_start();
include_once("conexion2.php");

function getAutos()
{
	$result = mysql_query("SELECT vehiculos.marca, vehiculos.modelo, vehiculos.anio, vehiculos.id_vehiculo
							FROM vehiculos JOIN usuarios ON vehiculos.id_conductor = usuarios.id_usuario
							AND usuarios.id_usuario = $_SESSION[id_usuario]")
			  or die(mysql_error());
	while($tier = mysql_fetch_array( $result ))
        {
			echo "<option value=".$tier["id_vehiculo"].">
			     ".$tier["marca"]." ".$tier["modelo"]." ".$tier["anio"]."</option>";
        }
	echo '<script type="text/javascript">
			$("#su_autos").change(
			function(){
				$.get("includes/dropdown.php", { 
				regis: "suAutos", 
				reg_var: $("#su_autos").val()
				}, function(data) {$("#tabla").html(data);});
			}
			);
		  </script>';
}

if(isset($_GET['regis']) && $_GET['regis'] == "suAutos") 
{
	reg_Table($_GET['reg_var']);
}


function reg_Table($valor_Select)
{
	include_once("conexion2.php");
	$result = mysql_query("SELECT id_reporte, nombre, fecha, hora FROM registro WHERE id_vehiculo = ".$valor_Select." ORDER BY fecha, hora DESC")
			  or die(mysql_error());
	/*echo "<table id='historial' border='1'>
		  <tbody>";*/
		while($table = mysql_fetch_array($result))
		{
			echo "<tr><td>".$table['nombre']."</td><td>".$table['fecha']."</td>
				  <td>".$table['hora']."</td><td id='boton'><button id='botonX' value=".$table['id_reporte'].">X</button></td></tr>";
		}
		
		echo '<script type="text/javascript">
				  $("button").click(
				  function(){
					$.post("includes/dropdown.php", 
						  { del: "DELETE FROM registro WHERE id_reporte = "+$(this).val()+";" ,
							reporte: $(this).val() ,
							reg_var: $("#su_autos").val()},
						  function(data) {$("#tabla").html(data);});
				  }
				  );
			  </script>';
		
}

if(isset($_POST['del']))
{
	$result = mysql_query("SELECT dir FROM registro WHERE id_reporte = ".$_POST['reporte']."");
	while($table = mysql_fetch_array($result))
	{
		unlink("../".$table['dir']);
	}
	mysql_query($_POST['del']);
	reg_Table($_POST['reg_var']);
}

function getTierOne()
{

    $result = mysql_query("SELECT DISTINCT marca FROM autos ORDER BY marca asc")
    or die(mysql_error());
     while($tier = mysql_fetch_array( $result ))
        {
         echo "<option value=".utf8_encode($tier["marca"]).">".utf8_encode($tier["marca"])."</option>";
        }
}

//**************************************
// First selection results //
//**************************************
if(isset($_GET['func']) && $_GET['func'] == "drop_1") 
{
	drop_1($_GET['drop_var']);
}

function drop_1($drop_var)
{
	include_once("conexion2.php");
    $result = mysql_query("SELECT DISTINCT modelo FROM autos WHERE marca='$drop_var' ORDER BY modelo asc")
    or die(mysql_error());
    echo '<select name="drop_2" id="drop_2">
		  <option value=" " disabled="disabled" selected="selected">Modelo</option>';
         while($drop_2 = mysql_fetch_array( $result ))
            {
             echo "<option value=".$drop_2["modelo"].">".$drop_2["modelo"]."</option>";
            }
    echo "</select>";
    echo '<script type=\"text/javascript\">
			$("#wait_2").hide();
			$("#drop_2").change(function(){
			$("#wait_2").show();
			$("#result_2").hide();
			$.get("includes/dropdown.php", {
			func: "drop_2",
			drop_var: $("#drop_2").val(),
			drop_var2: $("#drop_1").val()
			}, function(response){
			$("#result_2").fadeOut();
			setTimeout(finishAjax("result_2", ""+escape(response)+""), 400);
			});
			return false;
			});
			</script>';
}

//**************************************
// Second selection results //
//**************************************
if(isset($_GET['func']) && $_GET['func'] == "drop_2") 
{
	drop_2($_GET['drop_var']);
}

function drop_2($drop_var)
{
	include_once("conexion2.php");
    $result = mysql_query("SELECT DISTINCT anio FROM autos WHERE modelo='$drop_var' ORDER BY anio desc")
    or die(mysql_error());
    echo '<select name="drop_3" id="drop_3">
		  <option value=" " disabled="disabled" selected="selected">Año</option>';
         while($drop_3 = mysql_fetch_array( $result ))
            {
             echo "<option value=".$drop_3["anio"].">".$drop_3["anio"]."</option>";
            }
    echo "</select>";
	echo '<script> $("#wait_2").hide(); </script>';
}
?>