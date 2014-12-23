<?php session_start();  
if(isset($_SESSION['Activa'])){
$visto="";   
?>
<!DOCTYPE html>
<html lang="es" >
    <head>
        <title>Pixki</title>
        <meta charset="UTF-8"/>
        <link href="css/Menu/tabcontent.css" rel="stylesheet" type="text/css"/>
        <link href="css/Menu/bootstrap.min.css" rel="stylesheet">
        <link href="css/citascolores.css" rel="stylesheet">
        <link rel="stylesheet" href="css/Hover_Animation.css"/>
        <link rel="stylesheet" href="css/Animation.css"/>
        <script src="js/Menu/tabcontent.js" type="text/javascript"></script>
        <script src="js/Menu/jquery.min.js"></script>
        <script src="js/Menu/bootstrap.min.js"></script>
        <script>
            function agregar(){
                var ifr=document.getElementById('perfil').contentDocument || document.getElementById('perfil').contentWindow.document;
                ifr.onmousedown=function(){}
            }
            window.onload=agregar;
        </script>
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
            <div id="navbar2">	<!--No borrar id logotipo es referencia de las animaciones--->
                <a href="Menu.php"><img src="img/Menu/logoblanco.png" class="logotipo" id="logotipo" alt="Pixki" title="Pixki"/></a>
                <script>
                $(document).ready(function(){
                    if(location.href=="http://localhost/pixki/mecanicos/menu.php"){
               $('#logotipo').addClass('animated bounceInRight');  
               }
            });
                </script>
<!--_________________________________div para foto de perfil, no borrar miguel_________________________ -->
                              
                                   <div id="profile">
                                            <?php 
                                            require("conexion.php");
                                            $cadena="select * from mecanicos where id_meca=$_SESSION[id_meca]";
                                            $result=mysqli_query($con,$cadena);
                                            while ($reg=mysqli_fetch_array($result)) 
                                                {
                                                    $nombre=$reg["nombre"];
                                                    $profile=$reg["profile"];                                                   
                                                    echo '<img class="fotito" src="'.$profile.'" />';
													//echo "$nombre";
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
                        <li><a href="#view1" onclick="setSrc()"class="pulse"> <img src="img/inicio.png"  alt="Inicio" title="Inicio"></a></li>
                        <li><a href="#view2" onclick="cambio()"class="pulse"> <img src="img/citas.png"  alt="Citas" title="Citas"></a></li>
                        <li><a href="#view3" onclick="notas()"class="pulse"> <img src="img/clientes.png"  alt="Clientes" title="Clientes"></a></li>
                        <li><a href="#view4" onclick="citas()"class="pulse"> <img src="img/noticia.png"  alt="Publicar" title="Publicar"></a></li>
                    </ul>  
                
                    <!--<div class="tabcontents" ESTA NO>-->
                        <div id="view1">
                            <ul>
                                <li class="subitem1"> <img src="img/configuracion.png" style="width:20px; height: 20px;" ><a href="Menu.php?llamar=0"  style="color: #EFFBFB;" class="wobble-horizontal"><strong> Configuración </strong><span></span></a></li> 
                                <li class="subtiem2"> <img src="img/fotoperfil.png"  style="width:20px; height: 20px;" ><a href="Menu.php?llamar=1"  style="color: #EFFBFB;" class="wobble-horizontal"><strong> Foto de perfil </strong><span></span></a></li>
                                <li class="subitem3"> <img src="img/horariosyservicio.png" style="width:20px; height: 20px;" ><a href="Menu.php?llamar=2"  style="color: #EFFBFB;" class="wobble-horizontal"><strong> Servicios y horarios </strong><span></span></a></li>
                                <li class="subitem5"> <img src="img/ayuda.png"  style="width:20px; height: 20px;" ><a href="Menu.php?llamar=4"  style="color: #EFFBFB;" class="wobble-horizontal"><strong> Ayuda </strong><span></span></a></li>
                                <li class="subitem6"> <img src="img/cerrarsesion.png"  style="width:20px; height: 20px;" ><a href="#" onclick="myFunction()" style="color: #EFFBFB;"class="wobble-horizontal"><strong> Cerrar sesión </strong><span></span></a></li>
                            </ul>
                        </div>

                        <div id="view2">
                            <ul>
                                <li class="subtiem1" > <img src="img/citasolicitadas.png" style="width:20px; height: 20px;" ><a href="Menu.php?llamar=5"  style="color: #EFFBFB;"class="wobble-horizontal"><strong>Citas solicitadas</strong><span></span></a></li>
                                <li class="subtiem2" > <img src="img/consultarcitas.png" style="width:20px; height: 20px;" ><a href="Menu.php?llamar=7"  style="color: #EFFBFB;"class="wobble-horizontal"><strong> Consultar citas </strong><span></span></a></li>
                            </ul>
                        </div>

                        <div id="view3">
                            <ul>
                                <li class="subitem1"> <img src="img/misclientes.png" style="width:20px; height: 20px;" ><a href="Menu.php?llamar=8"  style="color: #EFFBFB;"class="wobble-horizontal"><strong> Mis clientes </strong><span></span></a></li>
                            </ul>
                        </div>

                        <div id="view4">
                            <ul>
                                <li class="subitem1"> <img src="img/publicaroferta.png" style="width:20px; height: 20px;" ><a href="Menu.php?llamar=9"  style="color: #EFFBFB;"class="wobble-horizontal"><strong> Publicar oferta </strong><span></span></a></li>
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
                if($llamar != 7){$visto ="hidden";}else{$visto="";}
        
                switch ($llamar){
                 
                    case 0:include('Mi_perfil.php'); break;
                    case 1:include ('profile.php'); break;
                    case 2:include ('servicios_horarios.php');break;
                    case 3:include ('Editar_Mecanico.php');break;
                    case 4:include ('Ayuda_Mecanico.php'); break;
                    case 5:include ('Citas_Solicitadas.php'); break;
                    case 6:include ('Ver_Cita.php');break;
                    case 7:include ('Consultar_citas.php'); break;
                    case 8:include ('Mis_Clientes.php'); break;
                    case 9:include ('Publicar_Ofertas.php'); break;
                    case 10:include ('editar_servicios_horarios.php');break;
                    case 11:include ('eliminar_cliente.php');break;
                     
                }
                
                }else{
                        include ('Consultar_citas.php'); 
                }
                ?>
               
            </div>
            <div class="dos">
                <div class="paleta">
                    <input type="text" name="cuadrito1" <?php echo $visto; ?> value="">
                    <label name="cuadrito1" <?php echo $visto; ?> for="cuadrito1">Cita Aceptada</label>
                    <input type="text" name="cuadrito2" <?php echo $visto; ?> value="">
                    <label name="cuadrito2" <?php echo $visto; ?> for="cuadrito2">Cita Solicitada</label>
                </div>    
            </div>
        </div>
    </body>
</html>
<?php

}else {header('location: ../index.php');}

?>
