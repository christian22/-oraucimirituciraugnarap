<?php
@mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
@mysql_select_db('driveservice')or die ('Error al seleccionar la Base de Datos: '.mysql_error()); 

if(isset($_POST['agendar'])) {

$mensaje = $_POST["comment"];   
$fecha1 = $_POST["fecha1"];
$idmeca = $_POST["idmeca"];
$_SESSION['id_usuario'];
$result= mysql_query ("INSERT INTO `evenement`(`title`, `start`, `id_user`, `id_mec`)" 
        . "VALUES ('$mensaje','$fecha1', '$_SESSION[id_usuario]','$idmeca')");
mysql_close();
?> 
<script languaje="javascript">
    location.href = "Menu.php?llamar=5";
   </script>
<?php } ?>