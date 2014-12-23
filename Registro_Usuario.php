<?php
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('driveservice')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

            if(isset($_POST['Registrar'])) { 
                if($_POST['nombre'] == '' or $_POST['apellidop'] == '' or $_POST['email'] == '' or $_POST['contrasena'] == '' or $_POST['contrasenar'] == '') { 
                    echo 'Por favor llene todos los campos.'; 
                }else{ 
                    $sql = 'SELECT * FROM usuarios'; 
                    $rec = mysql_query($sql); 
                    $verificar_usuario = 0;  
                    while($result = mysql_fetch_object($rec)){ 
                        if($result->email == $_POST['email']){ 
                            $verificar_usuario = 1; 
                        } 
                    } 
                    if($verificar_usuario == 0){ 
                        if($_POST['contrasena'] == $_POST['contrasenar']){

                            $usuario = $_POST['nombre'];
                            $apellidop =$_POST['apellidop'];
                            $apellidom =$_POST['apellidom'];
                            $email =$_POST['email'];
                            $password = md5($_POST['contrasena']); /*Encriptar contraseña*/
                            $status = 1;
                            $cadena = "INSERT INTO usuarios (nombre,apellidop,apellidom,email,contrasena,status) VALUES ('$usuario','$apellidop','$apellidom','$email','$password','$status')"; 
                            mysql_query($cadena);
//                            print_r($cadena);
//                            echo 'Usted se ha registrado correctamente.'; 
                            header('Location:/pixki/usuarios/Menu.php');
                            //header('Location: Completar_Datos_Perfil.php');                                
                            //header('Location: http://localhost/driveservice/driveservice/usuarios/ejemplo.php#Completar_Datos_Perfil');
                        }else{ 
                            echo 'Las contraseñas no coinciden, intente de nuevo';
//                            echo "<script language=JavaScript>alert('El usuario no es Correcto.');</script>"; 
                        } 
                    }else{ 
                        echo 'El correo electrónico ya existe'; 
                    } 
                } 
            } 
        ?>


