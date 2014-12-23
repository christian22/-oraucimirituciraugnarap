<?php

    mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
    mysql_select_db('driveservice')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

    $usuario = $_POST["email"];
    $result= mysql_query ("SELECT * FROM usuarios WHERE email = '$usuario'");
        
    if($row = mysql_fetch_array($result))        
    {     
        if($row["email"] == $usuario)
        {
            $id=$row["id_usuario"];
           
            function generar_clave($longitud){ 
                $cadena="[^A-Z0-9]"; 
                return substr(eregi_replace($cadena, "", (rand())) . 
                eregi_replace($cadena, "", (rand())) . 
                eregi_replace($cadena, "", (rand())), 
                0, $longitud); 
            } 
                //Ejemplo de utilización para una clave de 10 caracteres: 
                $clave=''.generar_clave(7).'';
    //            $clave='Clave aleatoria: '.generar_clave(7).'';

            $send=mail($row['email'],"Recuperacion de contraseña","Su nueva contraseña asignada es: ".$clave."","From:example@example.com"); 
    //        $send=mail($row['email'],'Recuperacion de contraseña','Su nueva contraseña asignada es: ".$clave.".','From:example@example.com');
    //        mail('prueba@prueba.com', "Chekis.es", "Su nuevo password es:".$nueva_clave.".");
            
            if($send){
?>                
                <script languaje="javascript">
                    alert("Tu nueva contraseña asignada se envio correctamente");
                    location.href = "index.php";
                </script>
            <!--echo '<script type="text/javascript">alert ("Tu nueva contraseña asignada se envio correctamente");</script>';-->
<?php            
            }
            else
            {
?>
                <script languaje="javascript">
                    alert("No enviado intente nuevamente");
                    location.href = "index.php";
                </script>
            <!--echo '<script type="text/javascript">alert ("No enviado intente nuevamente");</script>';-->
<?php            
            }

            $contrasena=md5($clave);
            $actualizar="update usuarios set contrasena='$contrasena' where id_usuario=$id";
            mysql_query($actualizar);
        }
    }
    else
    {
?>      
        <script languaje="javascript">
            alert("No existe un usuario con este email");
            location.href = "index.php";
        </script>        
        <!--echo '<script type="text/javascript">alert ("No existe un usuario con este email");</script>';-->
<?php    
    }
?>