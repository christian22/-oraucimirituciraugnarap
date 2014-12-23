<!DOCTYPE html> 
<html lang="es">
 <head> 
 <meta charset="utf-8"> 
 <title>Ejemplo scroll de noticias</title>
 <style type="text/css"> 
.scrollWrapper
 { width:200px;
 height:800px; 
 overflow:hidden; 
 border:2px solid #0078B3; 
 font-family:Arial;
 font-size:0.8em;
        margin-left:5%; 

 }
  
  .scrollTitle 
  { background-color:#6b6df7; 
  color:#fff; 
  padding:5px; 
  font-weight:bold; 
  text-align:center; }
  
   #scroll 
   {
 
  color:#fff;
   width:auto; 
   margin:3px; 
   z-index: -1;
   padding:5px; }
   
    #scroll .title 
	{
	color:#7bdaf7;
	margin-top:20px;
	} 
	</style>
	<script type="text/javascript">
	 // determina el numero de pixeles que se moveran las noticias para // cada iteracion en milisegundos de "speedjump" 
	 var  scrollspeed=1;
	  // determina la velocidad en milisgundos 
	  var speedjump=30;
	  // segundos antes de empezar el movimiento 
	  var startdelay= 1;
	  // posicion inicial superior en pixeles para cuando inicia 
	  var topspace=-10;
	   // altura del marco donde se mostraran las noticias // Si se modifica la altura del contenedor de las noticas hay que // modificar tambien este valor 
	   var frameheight=270;
	   // variable temporal que variara su valor en función de si estan las // noticias en movimiento o paradas 
	   current=scrollspeed;
	   
	   /** * Inicio del scroll * Esta función es llamada en el body de la pagina. * Tiene que recibir el id del scroll */
	   
	    function scrollStart() {
	   dataobj = document.getElementById("scroll"); // cogemos la altura maxima de la capa de las noticias
	   alturaNoticias = dataobj.offsetHeight; // posicionamos la capa del scroll en su posicion inicial
	   dataobj.style.top = topspace + 'px';
	  setTimeout("scrolling()", (startdelay * 1000)); 
	  } 
	  /** * Funcion que realiza el movimiento */
	   function scrolling() {
	   // Restamos a la propiedad top de la capa el valor en pixeles // establecido en la variable "scrollspeed", para hacer el // movimiento hacia arriba.
	   dataobj.style.top = parseInt(dataobj.style.top) - scrollspeed + 'px';
	   // Si la capa ha sobrepasado la altura del area por donde se muestran // las noticias ("alturaNoticias")
	  if (parseInt(dataobj.style.top) < alturaNoticias * (-1)) {
	  // Posicionamos la capa en la parte inferior del recuadro, para // que simule que vienen las noticias de la parte inferior
	   dataobj.style.top = frameheight + 'px';
	   setTimeout("scrolling()", 0);
	             }else{
	   setTimeout("scrolling()", speedjump); } 
	   }
	  </script>
	</head>  
	 
<body onLoad="scrollStart();">	 
	  
	<div class="scrollWrapper" onMouseover="scrollspeed=0" onMouseout="scrollspeed=current">  
	  <div class="scrollTitle">Últimas Noticias</div>
	  <?php 
	  require ('conexion.php');
	  $cadena= 'SELECT * FROM noticias ORDER BY id_not'; 
	  $result=mysqli_query($con,$cadena);
	   while($reg=mysqli_fetch_array($result)){
	   $id=$reg['id_not'];
	   $encabezado=$reg['titulo'];
	   $contenido=$reg['contenido'];
	   $fecha=$reg['fecha'];
	   
	   ?>
	   
	  <div id="scroll" >
	   <div class="title"><center><a href="Menu.php?llamar=12&news=<?php echo $id; ?>"style="color: #ddb6de;"><strong><?php echo $encabezado; ?></strong></a></center></div>
	   <div class="content"><label><?php echo $contenido ?> </label></div>
	   <div class="content"><label>fecha de publicacion: <?php echo $fecha ?> </label></div>
	   
	
	   
	   
	
	  
	  
	   </div> 
	 
	   <?php 
	   }
	 
	  ?>
	   </div>
	   </body> 
	   </html>
	  
	  
	  
	  
	  
	  
	  
	  
	  