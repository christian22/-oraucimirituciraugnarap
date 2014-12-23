<?php 
$DB_SERVER ='localhost' ;
$DB_NAME = 'driveservice'; 
$DB_USER = 'root'; 
$DB_PASS = ''; 
$con = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);
if (!$con){
    die('no se pudo conectar wey!!'.mysqli_error());
}
?>