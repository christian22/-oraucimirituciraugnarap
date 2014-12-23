<?php
function verificar_login($user,$nume,$password,&$result){
		require "superusuario/conexion.php";
	$u = mysqli_real_escape_string($con,$user);/*aqui se limpian las variables de los caracteres especiales*/
    $n = mysqli_real_escape_string($con,$nume);
    $p = mysqli_real_escape_string($con,$password); 
	
	
    $sql = "SELECT * FROM superusuario WHERE BINARY nombre = '$u' AND nempleado= '$n' AND BINARY contrasena = '$p' ";
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

if(isset($_POST['login'])){/*si se a precionado el boton de login entra al ciclo*/
        if(verificar_login($_POST['user'],$_POST['num'],$_POST['password'],$result) == 1){ /*llama a la funcion se le envia como parametros las variables del formulario del login*/
		 session_start();  /*si la funcion retorna 1 quiere decir que el usuario realmente existe y asigna las variables de session utilizando la matriz guardad en $result*/
			$_SESSION['id_su'] 		= 	$result->id_su;
			$_SESSION['nombre'] 	= 	$result-> nombre;
			$_SESSION['contraseña'] =	$result->contrasena;
			$_SESSION['apellidop'] 	=	$result->apellidop;
			$_SESSION['apellidom'] 	=	$result->apellidom;
			$_SESSION['Activa']		= 	"SI";
           header("location:index.php");
			/*	print_r ($result);
				print_r ($_SESSION);	*/
        }
        else{
            echo '<div class="error"> ¡Campos incorrectos! </div>';
        }
    }
?>