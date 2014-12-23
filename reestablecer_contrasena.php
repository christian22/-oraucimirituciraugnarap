<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Reestablecer contraseña</title>
        <meta charset="UTF-8"/>
       <link rel="stylesheet" href="css/sReestablecer_contrasena.css" type='text/css'/> 
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>		
    </head>
    <body>
        <img id="background"  src="img/reest_contra.png" alt="" Title=""/>

        <div class="caja">

            <!--&&&&&&&&&&&&&&&&&&&&&&&&  Reestablecer contraseña &&&&&&&&&&&&&&&&&&&&&&&&-->
            <div class="reestablecerContrasena">
                <h1>Reestablece tu contraseña</h1>
                <form action="" method="post">  
                    <label1>Escribe tu nueva contraseña</label1>
                        <input type="password" name="contn" placeholder="" required="" value=""/>				
                    <label2>Confirma tu nueva contraseña</label2>
                        <input type="password" name="contn2" placeholder="" required="" value=""/>					              
                    <input type="submit" name="btnA" value="Aceptar"/>
                </form>				
            </div>
            
        </div>
        
        <?php
            include 'pie_de_pagina.php';
        ?>
    
    </body> 
</html>