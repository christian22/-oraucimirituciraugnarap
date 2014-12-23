<?php
require("conexion.php");

    if(isset($_POST['Guardar'])) { 

        if($_POST['nombre'] == '' or $_POST['apellidop'] == '' or $_POST['rfc'] == '' 
            or $_POST['empresa'] == '' or $_POST['calle'] == '' or $_POST['colonia'] == '' or $_POST['cp'] == '' 
            or $_POST['telefono'] == '' or $_POST['email'] == '' or $_POST['cel'] == '' ) { 
            echo 'Por favor llene todos los campos.'; 
        }else{ 
            $sql = 'SELECT email,telefono,rfc FROM mecanicos ORDER BY rfc'; 
            $rec = mysqli_query($con, $sql); 
            $verificar_mecanico = 0; 
            while($result = mysqli_fetch_object($rec)){ 
                if($result->email == $_POST['email'] or $result->telefono == $_POST['telefono'] or $result->rfc == $_POST['rfc']){ 
                    $verificar_mecanico = 1; 
                } 
            } 
            if($verificar_mecanico == 0){
                $usuario = $_POST['nombre'];
                $apellidop =$_POST['apellidop'];
                $apellidom =$_POST['apellidom'];
                $rfc =$_POST['rfc'];
                $empresa = $_POST['empresa'];
                $municipio= $_POST['municipio'];
                $estado = $_POST['estado'];
                $calle = $_POST['calle'];
                $colonia = $_POST['colonia'];
                $cp = $_POST['cp'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $cel =$_POST['cel'];
                $su=$_SESSION['id_su'];
                $latitud=$_POST['lat'];
                $longitud =$_POST['lng'];
                
                 function generar_clave($longitud){ 
                    $cadena="[^A-Z0-9]"; 
                    return substr(eregi_replace($cadena, "", (rand())) . 
                    eregi_replace($cadena, "", (rand())) . 
                    eregi_replace($cadena, "", (rand())), 
                    0, $longitud); 
                } 
                    $clave=''.generar_clave(7).'';
                    $send=mail($email,"Recuperacion de contraseña","Su nueva contraseña asignada es: ".$clave."","From:example@example.com"); 
                    $contrasena=md5($clave);
                    
                $sql = "INSERT INTO mecanicos (nombre,apellidop,apellidom,rfc,empresa,estado,municipio,calle,colonia,cp,telefono,email,contrasena,latitud,longitud,cel,idsu) VALUES ('$usuario','$apellidop','$apellidom','$rfc','$empresa','$estado','$municipio','$calle','$colonia','$cp','$telefono','$email','$contrasena','$latitud','$longitud','$cel','$su')";  
                $r=mysqli_query($con, $sql); 
                echo 'Usted se ha registrado correctamente.'; 
            }else{ 
                echo 'El email y/o el celular ya fueron registrados en una cuanta anterirormente'; 
            } 
        } 
    }                           
?>