<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Mecanico</title>
        <link href='css/fullcalendar.css' rel='stylesheet'/>
        <script src='js/jquery-1.9.1.min.js'></script>
        <script src='js/jquery-ui-1.10.2.custom.min.js'></script>
        <script src='js/fullcalendar.min.js'></script>
        <link rel="stylesheet" href="css/sMenuPrincipalMecanico.css">

<!--&&&&&&&&&&&&&&&&&&&&&&&& estilo para el menu &&&&&&&&&&&&&&&&&&&&&&&&-->        
        
        <style>
                    #wrapper {
                     font-size: 1em; 
                        width: 180px; 
                        position: relative;
                        height:70px;
                        background-color: #fff;
                        box-shadow:0 2px 3px rgba(0,0,0,0.4);
                        width:13%;
                        position:fixed;
                        z-index:101                           
                        }
        </style> 
    </head>
    <body>
<?php print_r ($_SESSION);?>
<!--&&&&&&&&&&&&&&&&&&&&&&&& MENU &&&&&&&&&&&&&&&&&&&&&&&&-->  

  <div id="wrapper">      
        <ul class="menu">
            <li class="item1"><a>Home<span></span></a>
                 <ul>
                    <li class="subitem1" name="Calendario"><a href="Menu_Principal_Mecanicos.php">Calendario<span></span></a></li>
                    <li class="subitem1" name="Contacto"><a href="logaout.php">cerrar<span></span></a></li>
                </ul>
            </li>
            <li class="item2"><a>Citas<span></span></a>
                <ul>
                    <li class="subitem1" name="Solicitud"><a href="Solicitud_Citas.php">Solicitud<span></span></a></li>
                    <li class="subitem2" name="Citas_Confirmadas"><a href="Citas_Confirmadas.php">Citas Confimadas<span></span></a></li>
                </ul>
            </li>
            <li class="item2"><a>Clientes<span></span></a>
                <ul>
                    <li class="subitem1" name="Mis Clientes"><a href="Mis_Clientes.php">Mis clientes<span></span></a></li>
                </ul>
            </li>
            <li class="item2"><a>Ofertas<span></span></a>
                <ul>
                    <li class="subitem1" name="Publicar"><a href="Publicar_Ofertas.php">Publicar Ofertas<span></span></a></li>
                </ul>
            </li>
            <li class="item2"><a>Soporte Tecnico<span></span></a>
                <ul>
                    <li class="subitem1" name="Contacto"><a href="SuperUsuario.php">Contacto<span></span></a></li>
                </ul>
            </li>
        </ul> 
    </div>


<!--&&&&&&&&&&&&&&&&&&&&&&&& script- para el menu principal &&&&&&&&&&&&&&&&&&&&&&&&-->

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

<!--&&&&&&&&&&&&&&&&&&&&&&&& calendario con sus eventos de modificacion de tiempo alta y consulta &&&&&&&&&&&&&&&&&&&&&&&&-->

    <div id='calendar'></div>
    <script>

 $(document).ready(function(){

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({   
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},                                                  
			editable: true,
                        events: "http://localhost/driveservice/driveservice/mecanicos/events.php",
                        selectable: true,
                        selectHelper: true,
                        select: function(start, end, allDay) {                             
                         var title = prompt('Nuevo Evento:');
                         if (title) {
                         start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
                         end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
                         $.ajax({
                         url: 'http://localhost/driveservice/driveservice/mecanicos/add_events.php',
                         data: 'title='+ title+'&start='+ start +'&end='+ end ,
                         type: "POST",
                         success: function(json) {
                         alert('El evento ha sido creado');
                         }
                         });
                         calendar.fullCalendar('renderEvent',
                         {
                         title: title,
                         start: start,
                         end: end,
                         allDay: allDay
                         },
                         true // make the event "stick"
                         );
                         }
                         calendar.fullCalendar('unselect');
                        },
                        editable: true,
                            eventDrop: function(event, delta) {
                             start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                             end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                             $.ajax({
                             url: 'http://localhost/driveservice/driveservice/mecanicos/update_events.php',
                             data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                             type: "POST",
                             success: function(json) {
                             alert("El dia de trabajo ha cambiado");
                             }
                             });
                            },
                            eventResize: function(event) {
                             start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                             end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                             $.ajax({
                             url: 'http://localhost/driveservice/driveservice/mecanicos/update_events.php',
                             data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                             type: "POST",
                             success: function(json) {
                             alert("Se ha modificado el tiempo de trabajo");
                             }
                             });

                            }
		});
                });
            

    </script>

<!--&&&&&&&&&&&&&&&&&&&&&&&& estilo para el calendario &&&&&&&&&&&&&&&&&&&&&&&&-->

    <style>

	body {
		margin-top: 6px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		width: 810px;
		margin: 0 auto;
		}

    </style>
    </body>
</html>  