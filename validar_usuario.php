<!--===============================Validacion Usuario==============================================
 <?php
function verificar_usuario($user,$password,&$result){
    require "conexion_stark.php";
    $u = mysqli_real_escape_string($con,$user);/*aqui se limpian las variables de los caracteres especiales*/
    $p = mysqli_real_escape_string($con,$password); 
	
	
    $sql = "SELECT * FROM usuarios WHERE BINARY email = '$u' AND BINARY contrasena = '$p' ";
    $rec = mysqli_query($con,$sql); /*en la consulta de arriba <$sql> la palabra BINARY es la que distingue minusculas de MAYUSCULAS */
	
    $count = 0;

    while($row = mysqli_fetch_object($rec)){/*inicia el bucle con la consulta anterior*/
        $count++;
        $result = $row;/*todo el resultado queda guardado en la variable $result*/
    }

    if($count == 1){
        return 1;}
		
	else{
		return 0; }
		
}

if(isset($_POST['aceptar'])){/*si se a precionado el boton de login entra al ciclo*/
        if(verificar_usuario($_POST['email'],md5($_POST['contrasena']),$result) == 1){ /*llama a la funcion se le envia como parametros las variables del formulario del login*/
		 session_start();  /*si la funcion retorna 1 quiere decir que el usuario realmente existe y asigna las variables de session utilizando la matriz guardad en $result*/
			$_SESSION['email']   = $result->email;
                        $_SESSION['contraseña'] = $result->contrasena;
                        $_SESSION['id_usuario'] = $result->id_usuario;
                        $_SESSION['apellidop'] = $result->apellidop;
                        $_SESSION['apellidom'] = $result->apellidom;
                        $_SESSION['Activau'] = "SI";
           header("location:index.php");
//				print_r ($result);
//				print_r ($_SESSION);	
        }
        else{
            echo '<div class="error"> ¡Campos incorrectos! </div>';
        }
    }
?>
 <!---------------------------------------Mecanico----------------------------------------------------------->
 <?php
function verificar_mecanico($user,$password,&$result){
    require "conexion_stark.php";
    $u = mysqli_real_escape_string($con,$user);/*aqui se limpian las variables de los caracteres especiales*/
    $p = mysqli_real_escape_string($con,$password); 
	
	
    $sql = "SELECT * FROM mecanicos WHERE BINARY email = '$u' AND BINARY contrasena = '$p' ";
    $rec = mysqli_query($con,$sql); /*en la consulta de arriba <$sql> la palabra BINARY es la que distingue minusculas de MAYUSCULAS */
	
    $count = 0;

    while($row = mysqli_fetch_object($rec)){/*inicia el bucle con la consulta anterior*/
        $count++;
        $result = $row;/*todo el resultado queda guardado en la variable $result*/
    }

    if($count == 1){
        return 1;}
		
	else{
		return 0; }
		
}

if(isset($_POST['aceptar'])){/*si se a precionado el boton de login entra al ciclo*/
        if(verificar_mecanico($_POST['email'],md5($_POST['contrasena']),$result) == 1){ /*llama a la funcion se le envia como parametros las variables del formulario del login*/
		 session_start();  /*si la funcion retorna 1 quiere decir que el usuario realmente existe y asigna las variables de session utilizando la matriz guardad en $result*/
			$_SESSION['email']   = $result->email;
                        $_SESSION['contraseña'] = $result->contrasena;
                        $_SESSION['id_meca'] = $result->id_meca;
                        $_SESSION['Activa'] = "SI";
           header("location:index.php");
//				print_r ($result);
//				print_r ($_SESSION);	
        }
        else{
            echo '<div class="error"> ¡Campos incorrectos! </div>';
        }
    }
?>