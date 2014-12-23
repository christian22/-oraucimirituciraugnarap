<!DOCTYPE HTML>
<html lang="es">
<head>
 <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link rel="stylesheet" type = "text/css" href="css/sayuda_usuario.css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</head>
<body>

<div id="menuayuda">
<ul class="menu">
          <li class="item1"><a>Gestion de Cuenta<span></span></a>
                <ul>
                    <li class="subitem1" name="Perfil_Usuario"><a><p><strong>Si desea Realizar cambio de informacion , o alguno de los datos en su cuenta no son correctos debera acceder 
                al apartado de configuracion de mi cuenta y ahí podra hacer los cambios necesarios .
                El cambio o recuperacion de contraseña lo puede hacer usted mismo desde la pagina.</strong></p><span></span></a></li>
                </ul>
            </li>
            <li class="item1"><a>Gestion de Citas<span></span></a>
                <ul>
                    <li class="subitem1" name="Perfil_Usuario"><a><p><strong>El codigo de color pre establecido en el calendario de cita le muestra si se encuentran 
				en estado de revision pendiente o si ya han sido aceptadas , si el calendario no muestra las citas que 
				ya an sido aceptadas o si tiene problemas al momento de realizar la creacion de citas puede comunicarse con nuestro centro de atencion PIXKI.</strong></p><span></span></a></li>
                    
                </ul>
            </li>
            <li class="item1"><a>Sube tus Reportes!<span></span></a>
                <ul>
                    <li class="subitem1" name="Mis_Vehiculos"><a> <p><strong>Si ya haz hecho la visita a tu mecanico y este te ha dado un ticket y el no lo ha subido a la plataforma pixki ,
				no te preocupes y subelo tu amigo! , ve al apartado de reporte , elije tu Auto y carga tu reporte</strong></p><span></span></a></li>
                </ul>
            </li>
            <li class="item2"><a>Busca tus Mecanicos!<span></span></a>
                <ul>
                    <li class="subitem1" name="Buscar_Mecanicos"><a><p><strong>En el apartado de buscar mecanicos puedes encontrar tus propios mecanicos y algunos mas , solo basta con ingresar el nombre del mecanico o el taller 
				y darle clic en agregar .</strong></p><span></span></a></li>
                                   
                </ul>
            </li>
            <li class="item2"><a>Agenda tus propias Citas<span></span></a>
                <ul>
                    <li class="subitem1" name="Nueva_Cita"><a><p><strong>Puedes agendar tus propias citas , ve al apartado de mis mecanicos en mecanicos y dale clic en agendar citas , te redireccionara al apartado de agendar citas 
					 , dentro de el escoje dia y un motivo para la cita .</strong></p> <span></span></a></li>
                 
                </ul>
            </li>
           
         <div id="despegables">

             <!-- <?php
                    if (isset($_GET['ayuda_usuarios'])){
                    $ayuda = $_GET['ayuda_usuarios'];

                    switch ($ayuda){

                        case 0:
                            include('ayuda_usuarios/gestion_cuenta.html'); break;
                        case 1:
						include('ayuda_usuarios/gestion_citas.html');break;
						case 2:
						include('ayuda_usuarios/gestion_reporte.html');break;
						case 3:
						include('ayuda_usuarios/gestion_mecanicos.html');break;
						case 4:
					   include('ayuda_usuarios/agenda_tus_citas.html');break;
                    }
                    }
                ?> -->

         </div>			
</ul>
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