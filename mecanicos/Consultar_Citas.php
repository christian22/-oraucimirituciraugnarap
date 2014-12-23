<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Consultar Citas</title>
        <meta charset="UTF-8"/>
        <link href='css/fullcalendar.css' rel='stylesheet'/>
        <script src='js/jquery-1.9.1.min.js'></script>
        <script src='js/jquery-ui-1.10.2.custom.min.js'></script>
        <script src='js/fullcalendar.min.js'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
<!--        <link rel="stylesheet" href="css/sConsultar_Citas.css"/>-->
   
    </head>
    <body>
             
        <div id="caja">
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
			editable: false,
                        events: "http://localhost/pixki/mecanicos/events.php",
                        selectable: false,
                        selectHelper: false,
                        select: function(start, end, allDay) {                             
                        
                         if (title) {
                         start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
                         end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
                         
                         calendar.fullCalendar('renderEvent',
                         {
                         title: title,
                         start: start,
                         end: end,
                         allDay: allDay
                         },
                         false // make the event "stick"
                         );
                         }
                         calendar.fullCalendar('unselect');
                        },
                        editable: false,
                            eventDrop: function(event, delta) {
                             start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                             end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                             $.ajax({
                             url: 'http://localhost/pixki/mecanicos/update_events.php',
                             data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                             type: "POST",
                             success: function(json) {
                             alert("El dia de trabajo ha cambiado");
                             }
                             });
                            },
                            monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ], 
                            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                            dayNames: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                            dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
                            buttonText: {
                            today: 'hoy',
                            month: 'mes',
                            week: 'semana',
                            day: 'día'
                             },
                            eventResize: function(event) {
                             start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                             end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                             $.ajax({
                             url: 'http://localhost/pixki/mecanicos/update_events.php',
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
              
        </div>
    </body>
</html>