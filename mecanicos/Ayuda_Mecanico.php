<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type = "text/css" href="css/sAyuda.css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="menuplegable">
        <ul class="menu">
          <li class="item1"><a>Gestion de Cuenta<span></span></a>
                <ul>
                    <li class="subitem1" name="Perfil_Usuario"><a><p><strong>Si desea Realizar cambio de informacion o alguno de los datos en su cuenta no son correctos debera contactar 
                con el personal de atencion al cliente.
                El cambio o recuperacion de contraseña lo puede hacer usted mismo desde la pagina.</strong></p><span></span></a></li>
                </ul>
            </li>
            <li class="item1"><a>Publicar Ofertas<span></span></a>
                <ul>
                    <li class="subitem1" name="Perfil_Usuario"><a><p><strong>Si no puede cargar una imagen al momento de publicar procure que la imagen este en un Formato .PNG o .GIf
            si los problemas persisten puede comunicarse a nuestro centro de ayuda PIXKI.</strong></p><span></span></a></li>
                    
                </ul>
            </li>
            <li class="item2"><a>Gestion de Clientes<span></span></a>
                <ul>
                    <li class="subitem1" name="Buscar_Mecanicos"><a><p><strong> Si un cliente ya no aparece en su lista se puede deber a que usted o el lo elimino de sus contactos de no ser
                asi comuniquese al centro de atencion PIXKI.</strong></p><span></span></a></li>
                                   
                </ul>
            </li>
            <li class="item2"><a>Gestion de Citas<span></span></a>
                <ul>
                    <li class="subitem1" name="Nueva_Cita"><a><p><strong> El codigo de color pre establecido en el calendario de cita le muestra si se encuentran en estado de revision pendiente o si
            ya han sido aceptadas si el calendario no muestra las citas que ya acepto o si tiene problemas al momento de realizar la seleccion de citas
            puesde comuniucarse con nuestro centro de atencion PIXKI.</strong></p> <span></span></a></li>
                 
                </ul>
            </li>		
</ul>
        
<!--        <p class="parrafo1">
            <a href="Menu.php?llamar=4&ayuda=0">Gestion de Cuenta</a><br>
            <a href="Menu.php?llamar=4&ayuda=1">Publicar Ofertas</a><br>
            <a href="Menu.php?llamar=4&ayuda=2">Gestion de Citas</a><br>
            <a href="Menu.php?llamar=4&ayuda=3">Gestion de Clientes</a><br>
        </p>
            <div id="opciondesplegada">
                <?php
//                    if (isset($_GET['ayuda'])){
//                    $ayuda = $_GET['ayuda'];
//
//                    switch ($ayuda){
//
//                        case 0:
//                            include('ayuda/Gestion_Cuenta.html'); break;
//                        case 1:
//                            include ('ayuda/Publicar_Ofertas.html'); break;
//                        case 2:
//                            include ('ayuda/Gestion_Citas.html');break;
//                        case 3:
//                            include ('ayuda/Gestion_Clientes.html');break;
//                    }
//                    }
                ?>
            </div>-->
        </div>
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
    </body>
</html>
