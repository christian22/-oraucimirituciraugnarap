<?php session_start();
    if(isset($_SESSION['Activa'])){
        echo "nada se mira :P";
        header('location: superusuario/menu.php');
    }else{
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title style= "color:white">Pixki</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type = "text/css" href="superusuario/css/Index/sIndex.css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
        <img id="background"  src="superusuario/img/Index/fondosu.png" alt="" Title=""/>
        
        <div class="ventana">
            <div class="ventdescripcion">
                <img src="superusuario/img/Index/logoblanco.png" alt="Pixki" title="Pixki" style="margin-left: 325px;"/>
                <p class="descripcion2">Pixki es una red social gratuita para todos los 
                    usuarios de automóviles y/o cualquier vehículo móvil, mediante el uso 
                    de tecnología móvil, con la intención de que todas sus partes consumibles 
                    sean repuestas en tiempo y forma impidiendo que el vehículo no tenga 
                    mayor desgaste o afecte a otras  partes y así garantizar el buen 
                    funcionamiento y rendimiento del mismo.
                </p>
            </div>

            <div class="login">
                <form id="loginForm" method="post" action=""> 
                    <input name="user" type="text" placeholder="Nombre"> 
                    <input name="num" type="password" placeholder="No. de empleado">
                    <input name="password" type="password" placeholder="Contraseña">
                    <input name="login" type="submit" value="Iniciar sesión">
                </form>
                <?php require 'validar_superusuario.php'; ?>
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