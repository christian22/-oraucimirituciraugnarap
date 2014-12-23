<?php
  include("conexion.php");
    $idcita = $_GET["cita"];

if (isset($_GET['Aceptar'])){
    $statusa='2';
    $codcolor='#3a87ad';
    $sqla = "UPDATE evenement SET estado_cita='$statusa', color='$codcolor' where id='$idcita'";
    mysqli_query($con,$sqla);
    header("location:Menu.php");
}
if (isset($_GET['rechazar'])){
    $statusa='0';
    $codcolor='#fff';
    $sqla = "UPDATE evenement SET estado_cita='$statusa', color='$codcolor' where id='$idcita'";
    mysqli_query($con,$sqla);
    header("location:Menu.php");
}

?>

