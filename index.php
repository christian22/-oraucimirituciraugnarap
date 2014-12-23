<?php session_start();
                if(isset($_SESSION['Activa'])){
                echo "nada se mira :P";
		header('location: mecanicos/menu.php');
		}if(isset($_SESSION['Activau'])){
                    echo "nada se mira :P";
		header('location: usuarios/menu.php');
                }else{	
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Pixki</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="css/Index/sIndex.css"/>
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
        <img id="background"  src="img/Index/fondo_login.png" alt="" Title=""/>
        
        <div class="ventana">          
            <div class="ventdescripcion">
                <img src="img/Index/logoblanco.png" alt="Pixki" title="Pixki" style="margin-left: 325px;"/>
                <p class="descripcion2">Pixki es una red social gratuita para todos los 
                    usuarios de automóviles y/o cualquier vehículo móvil, mediante el uso 
                    de tecnología móvil, con la intención de que todas sus partes consumibles 
                    sean repuestas en tiempo y forma impidiendo que el vehículo no tenga 
                    mayor desgaste o afecte a otras  partes y así garantizar el buen 
                    funcionamiento y rendimiento del mismo.
                </p>
            </div>

            <div class="login">
                <?php  require 'validar_usuario.php'; ?>
                
                <form id="loginForm" method="post" action=""> 
                    <input name="email" type="text" placeholder="Correo eletrónico"> 
                    <input name="contrasena" type="password" placeholder="Contraseña">
                    <input name="aceptar" type="submit" value="Iniciar sesión">
                    <a href="#contraseña" name="a1">¿Haz olvidado tu contraseña?</a>
                    <text>Si aun no eres usuario</text> 
                    <a href="#registro" name="a2">Registrate</a>
                </form>
            </div>                   
        </div>               
         
        <div id="registro" class="modalmask">
            <div class="modalbox movedown">
                <a href="#close" title="Close" class="close">X</a>         
                <label1>¡Registrate!</label1>
                <form class="registrar" method="post" action="Registro_Usuario.php" >   
                        <input type="text" name="nombre" placeholder="Nombre" required=""/>
                        <input type="text" name="apellidop" placeholder="Apellido paterno" required=""/>          
                        <input type="text" name="apellidom" placeholder="Apellido materno" required=""/>            
                        <input type="text" name="email" placeholder="Correo electrónico" required=""/>           
                        <input type="password" name="contrasena" placeholder="Contraseña" required=""/>              
                        <input type="password" name="contrasenar" placeholder="Confirmar contraseña" required=""/>
                        <input type="submit" name="Registrar" value="Registrar"/>
                   </form>
                <a class="close" href="#close"></a>
            </div>
        </div>

        <div id="contraseña" class="modalmask">
            <div class="modalbox2 movedown">
                <a href="#close" title="Close" class="close">X</a>         
                <label1>Recupera tu contraseña</label1>
                <label2>Enviaremos una nueva contraseña a tu email o telefono que proporciones</label2>
                <form class="registrar" method="post" action="enviaremail.php"> 
                    <input type="text" name="email" placeholder="Ingresa tu email o numero de telefono" required=""/>
                    <input type="submit" name="Enviar" value="Enviar"/>
                </form>
                <a class="close" href="#close"></a>
            </div>
        </div>

        <?php
            
            include 'pie_de_pagina.php';
            
        ?>
        
    </body>
</html>
<?php

}

?>