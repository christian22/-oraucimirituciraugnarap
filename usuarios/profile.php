<?php @session_start();  ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Foto de perfil</title>
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="css/Animation.css">		
    </head>
    <script type="text/javascript">
        var miPopup 
        function ventanaSecundaria(pagina){ 
            miPopup = window.open(pagina,"miwin","width=400,height=180") 
            miPopup.focus() 
        } 
    </script>
    <body>
        <div class="caja">
            <div class="titulo">
                <h1>Foto de perfil</h1>
            </div>
            <form method="post" action="" name="fotito"> 
                <div class="profil">
                    <?php 
                        require("conexion_stark.php");
                        $cadena="select * from usuarios where id_usuario= $_SESSION[id_usuario]";
                        $result=mysqli_query($con,$cadena);
                        while ($reg=mysqli_fetch_array($result)) 
                            {
                                $nombre=$reg["nombre"];
                                $profile=$reg["profile"];
                                //echo "$nombre";
                                echo '<img class="imagenperfil" src="'.$profile.'" />';
                            }
                            mysqli_free_result($result);
                            mysqli_close($con);
                   ?>
                </div>
                <div class="cambiar">
                    <label1>Cambiar foto de perfil:</label1>
                    <a href="javascript:ventanaSecundaria('form_funcion.html')">Seleccionar</a>
                    <!--<a href="javascript:ventanaSecundaria('form_funcion.html')" class="grow" style="text-decoration:none">Seleccionar</a>-->                
                    <!--<input type="submit"  name="seleccionar" href="javascript:ventanaSecundaria('form_funcion.html')" class="wobble-vertical" value="Seleccionar" >-->                        
                </div>
            </form>
        </div>
    </body>
</html>