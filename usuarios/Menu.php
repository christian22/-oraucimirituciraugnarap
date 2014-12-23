<?php session_start();
if(isset($_SESSION['Activau'])){?>
<!DOCTYPE html>
<html lang="es" >
    <head>
        <title>Pixki</title>
        <meta charset="UTF-8"/>
        <link href="css/Menu/tabcontent.css" rel="stylesheet" type="text/css"/>
        <link href="css/Menu/bootstrap.min.css" rel="stylesheet">
        <link href="css/Hover_Animation.css" rel="stylesheet">
        <link href="css/Animation.css" rel="stylesheet">
        <script src="js/Menu/tabcontent.js" type="text/javascript"></script>
		   <script src="js/mapita.js" type="text/javascript"></script>
        <script src="js/Menu/jquery.min.js"></script>
        <script src="js/Menu/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script>
            function myFunction() {  
                if (confirm("¿Esta seguro de cerrar sesión?") == true){
                    location.href="logout.php"
                }else{
                }
                document.getElementById("demo").innerHTML = x;
            }
        </script>        
    </head>
    <body style="font-family:Arial;">
            
        <div id="navbar">
        <!--El logotipo y el icono que despliega el menú se agrupan-->
        <!--para mostrarlos mejor en los dispositivos móviles-->
            <div id="navbar2"><!--No borrar id logotipo es referencia de las animaciones--->
                <a href="menu.php" ><img src="images/Menu/logoblanco.png" class="logotipo" id="logotipo"  alt="Pixki" title="Pixki"/></a>
                <script>
                $(document).ready(function(){

                    if(location.href=="http://localhost/pixki/usuarios/menu.php"){
               $('#logotipo').addClass('animated bounceInRight');  
               }
            });

                </script>
                    <!--div para foto de perfil, no borrar miguel-->
                <div id="profile">
                    <?php 
                    require("conexion_stark.php");
                    $cadena="select * from usuarios where id_usuario=$_SESSION[id_usuario]";
                    $result=mysqli_query($con,$cadena);
                    while ($reg=mysqli_fetch_array($result)) 
                        {
                            $nombre=$reg["nombre"];
                            $profile=$reg["profile"];
                            //echo "$nombre";
                            echo '<img class="fotito" src="'.$profile.'" />';
                        }
                        mysqli_free_result($result);
                        mysqli_close($con);

                   ?>
                </div> 
            </div>
        </div>
                        
        <div class="ventana">
            <div class="uno">
                <div class="wrapper">
                    <ul class="tabs">
                        <li><a href="#view1" onclick="setSrc()" class="pulse"><img src="images/Menu/inicio.png" alt="Inicio" title="Inicio"></a></li>
                        <li><a href="#view2" onclick="cambio()"class="pulse"> <img src="images/Menu/autos.png" alt="Vehiculos" title="Vehiculos"></a></li>
                        <li><a href="#view3" onclick="notas()"class="pulse"> <img src="images/Menu/mecanico.png" alt="Mecanicos" title="Mecanicos"></a></li>
                        <li><a href="#view4" onclick="citas()"class="pulse"> <img src="images/Menu/citas.png" alt="Citas" title="Citas"></a></li>
                        <li><a href="#view5" onclick="mensaje()"class="pulse"> <img src="images/Menu/mensajes.png" alt="Mensajes" title="Mensajes"></a></li>
                    </ul>  
                
                    <!--<div class="tabcontents" ESTA NO>-->
                        <div id="view1">
                                <li class="subitem1"> <a href="Menu.php?llamar=7"  style="color: #EFFBFB;" class="wobble-horizontal"><img src="images/configuracion.png" style="width:20px; height:20px"> <strong>Configuración</strong><span></span></a></li> 
                                <li class="subtiem2"> <a href="Menu.php?llamar=6"  style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/fotoperfil.png" style="width:20px; height:20px"><strong> Foto de perfil</strong><span></span></a></li>
                                <li class="subitem3"> <a href=""  style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/seguridad.png" style="width:20px; height:20px"><strong>Seguridad</strong><span></span></a></li>
                                <li class="subitem4"> <a href="Menu.php?llamar=11"  style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/ayuda.png" style="width:20px; height:20px"><strong>Ayuda</strong><span></span></a></li>
                                <li class="subitem5"> <a href="#" onclick="myFunction()" style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/cerrarsesion.png" style="width:20px; height:20px"><strong> Cerrar sesión</strong><span></span></a></li>                                                           
                            </ul>
                        </div>

                        <div id="view2">
                            <ul>
                                <li class="subitem1" > <a href="Menu.php?llamar=0" style="color: #EFFBFB;" class="wobble-horizontal"><img src="images/agregarauto.png" style="width:20px; height:20px"><strong>Nuevo vehículo</strong><span></span></a></li> 
                                <li class="subtiem2" > <a href="Menu.php?llamar=1" style="color: #EFFBFB;" class="wobble-horizontal"><img src="images/autos.png" style="width:20px; height:20px"><strong>Mis vehículos</strong><span></span></a></li>
                                <li class="subtiem3" > <a href="Menu.php?llamar=13" style="color: #EFFBFB;" class="wobble-horizontal"><img src="images/Menu/rastrear.png" style="width:20px; height:20px"><strong>Localizar vehículo</strong><span></span></a></li>
                                <li class="subitem4"> <a href="Menu.php?llamar=2" style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/historial.png" style="width:20px; height:20px"><strong>Reportes</strong><span></span></a></li>
                                <li class="subitem5"> <a href="" style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/serviciotecnico.png" style="width:20px; height:20px"><strong>Consejos técnicos</strong><span></span></a></li>
                            </ul>
                        </div>

                        <div id="view3">
                            <ul>
                                
                                <li class="subitem1"> <a href="Menu.php?llamar=3" style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/buscarauto.png" style="width:20px; height:20px"><strong>Buscar mecánicos</strong><span></span></a></li>
                                <li class="subitem2"> <a href="Menu.php?llamar=4" style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/mis_mecanicos.png" style="width:20px; height:20px"><strong>Mis mecánicos</strong><span></span></a></li>
                            </ul>
                        </div>

                        <div id="view4">
                            <ul>
                                <li class="subitem1"><a href="Menu.php?llamar=5" style="color: #EFFBFB;"class="wobble-horizontal"><img src="images/consultarcitas.png" style="width:20px; height:20px"><strong>Consultar citas</strong><span></span></a></li>
								
                            </ul>
                        </div>
                        
                        <div id="view5"></div>		
                    <!--</div>-->    
                </div>
            </div>
            <div class="medio">
		<?php
                    if (isset($_GET['llamar'])){
                        $llamar = $_GET['llamar'];

                        switch ($llamar){

                            case 0:
                                include("Agregar_Vehiculo.php"); break;
                            case 1:
                                include("Mis_Vehiculos.php"); break;
                            case 2:
                                include("Historial.php"); break;
                            case 3:
                                include("Buscar_mecanicos.php"); break;
                            case 4:
                                include("Mis_mecanicos.php"); break;
                            case 5:
                                include("Consultar_Citas.php"); break;
                            case 6:
                                include("profile.php"); break;
                            case 7: 
                                include("config_usuario.php");break;
                            case 8:
                                include("agendar_cita.php"); break;
                            case 9:
                                include("Detalles_mecanico.php"); break;
                            case 10:
                                include("Ficha_Tecnica_Mecanico.php"); break;
							case 11:
								include("ayuda_usuario.php");break;
							case 12:
								include("noticias.php");break;
							case 13: 
								include("Localizar_Autos.php");break;
							case 14:
								include("Detalles_Vehiculo.php"); break;
								case 15:
								include("editar_vehiculo.php");break;
								case 16:
								include("Menu.php"); break;
                        }			
                ?>
				 
                <?php
                    }
                    else
                    {
                        include("publicidad2.php");
                    } 
					
		?>
		
			
            </div>
            <div class="dos">
		<?php include ("scroll.php"); ?>			
            </div>
        </div>
    </body>
</html>
<?php

}else {header('location: ../index.php');}

?>
