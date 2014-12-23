<!--===============================Validacion Usuario==============================================-->

<?php
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('driveservice')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

//------------------------chupa el hongo---------------------------------//
if(isset($_POST['entrar'])){
//------------------------------validacion-------------------------------//

$usuario = $_POST["nombre"];
$empleado = $_POST["nempleado"];
$password = $_POST["contrasena"];
@$_SESSION['id_su'] =$row["id_su"];
   
$result= mysql_query ("SELECT * FROM superusuario WHERE nombre = '$usuario'");
if($row = mysql_fetch_array($result))
{ 
 if($row["nempleado"] == $empleado)
 { 
 if($row["contrasena"] == $password)
 {    
  session_start();  
  $_SESSION['nombre'] = $usuario; 
  $_SESSION['contraseña'] =$password;
  $_SESSION['id_su'] =$row["id_su"];
  $_SESSION['apellidop'] =$row["apellidop"];
  $_SESSION['apellidom'] =$row["apellidom"];
  header("Location:/driveservice/driveservice/superusuario/Menu_Principal_SU.php");
 }
 else
 {
  ?>
   <script languaje="javascript">
    alert("Contraseña Incorrecta");
    location.href = "AdInSesn.php";
   </script>
  <?php
 }          
 }
 else
{
?>
<script languaje="javascript">
  alert("El Numero de empleado no es correcto!");
  location.href = "AdInSesn.php";
 </script>
<?php
}}

else
{
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "AdInSesn.php";
 </script>
 <?php           
}
}
@mysql_free_result($result);
mysql_close();
?> 