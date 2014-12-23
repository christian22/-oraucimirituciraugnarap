<?php  @session_start() ?>

<?php
              require 'conexion.php';  
                        if(isset($_POST['guardar'])) {  
 
//-------------------------------------------------------------------------servicios
                                @$afinacion=$_POST["afinacion"];
                                @$frenos=$_POST["frenos"];
                                @$aceite=$_POST["aceite"];
                                @$transmision=$_POST["transmision"];
                                @$inyeccion=$_POST["inyeccion"];
                                @$chapa=$_POST["chapa"];
                                @$electricidad=$_POST["electricidad"];
                                @$lubricacion=$_POST["lubricacion"];
//-------------------------------------------------------------------------dias
                                @$domin=$_POST["domingo"];
                                @$lun=$_POST["lunes"];
                                @$mart=$_POST["martes"];
                                @$mierc=$_POST["miercoles"];
                                @$juev=$_POST["jueves"];
                                @$vier=$_POST["viernes"];
                                @$saba=$_POST["sabado"];

                                $serv= "UPDATE servicios SET afinacion='$afinacion', frenos='$frenos', cambio_aceite='$aceite', transmision='$transmision', electrica_mecanica='$inyeccion', "
                                        . "chapa_pintura='$chapa', electricidad_automotriz=$electricidad', lubricacion='$lubricacion' WHERE id_meca=$varmystic"; 
                                
                                $hor= "UPDATE dias_semana SET domingo='$domin', lunes='$lun', martes='$mart', miercoles='$mierc', "
                                        . "jueves='$juev', viernes='$vier', sabado='$saba' WHERE id_meca=$varmystic"; 
                               
                               mysqli_query($con,$serv);
                               mysqli_query($con, $hor);
                              header("location: Menu_principal_mecanicos.php");
                                     } ?>
									 
