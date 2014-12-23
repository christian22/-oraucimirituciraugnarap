<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Super Usuario</title>
                <link rel="stylesheet" href="css/sMenuPrincipalMecanico.css">
                <link rel="stylesheet" href="css/sAltaMecanico.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
        </head>
        <body> <?php print_r ($_SESSION);?>
          
            
            <nav>
        <div id="wrapper">

	<ul class="menu">
            <li class="item1"><a href="#"> Home <span></span></a>
                <ul>
                    <li class="subitem1"><a href="Menu_Principal_SU.php">Inicio<span></span></a></li>
                    <li class="subitem1"> <a href="Login_SU.php">Cerrar Sesion<span></span></a></li>
                </ul>
		<li class="item1"><a href="#">Mecanicos<span></span></a>
			<ul>
                            <li class="subitem1"> <a href="Registrar_Mecanico.php.php">Nuevo<span></span></a></li>
                            <li class="subitem1"><a href="Consultar_Mecanicos.php">Busqueda<span></span></a></li>
                            <li class="subitem1"><a href="Editar_Mecanico.php">Editar<span></span></a></li>    
			</ul>
		</li>
		<li class="item2"><a href="#">Noticias<span></span></a>
			<ul>
                            <li class="subitem1"><a href="Publicar_Noticias.php"> Nueva <span></span></a></li>
			</ul>
		</li>
                
	
	</ul>

    </div>
    </nav>
            <!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>

<div id="caja">
    
<div id="contenedor">

<form method="post" action="" class="registro">

    <label class="titulo" for="horario">Servicios</label>
            <div> 
                      <input type="checkbox" name="afinacion" value="1">Afinacion<br>
                      <input type="checkbox" name="frenos" value="1">Frenos<br>
                      <input type="checkbox" name="aceite" value="1">Cambio de Aceite<br>  
                      <input type="checkbox" name="transmision" value="1">Transmision<br>
                      <input type="checkbox" name="inyeccion" value="1">Inyeccion electrica y Mecanica<br>     
                      <input type="checkbox" name="chapa" value="1">Chapa y pintura<br>
                      <input type="checkbox" name="electricidad" value="1">Electricidad automotriz<br>
                      <input type="checkbox" name="lubricacion" value="1">Lubricacion<br><br>
            </div>

    <label class="titulo" for="horario">Horario</label>
            <div> 
                      <input type="checkbox" name="domingo" value="1">Domingo<br>
                      <input type="checkbox" name="lunes" value="1">Lunes<br>
                      <input type="checkbox" name="martes" value="1"> Martes<br>  
                      <input type="checkbox" name="miercoles" value="1">Miercoles<br>
                      <input type="checkbox" name="jueves" value="1">Jueves<br>     
                      <input type="checkbox" name="viernes" value="1">Viernes<br>
                      <input type="checkbox" name="sabado" value="1">Sabado <automotriz<br>
            </div>

    <input  name="guardar" type="submit" value="Guardar" />


        </form>
 <?php require 'insert_hor_serv.php'; ?>
</div>
</div>
</body>
</html>