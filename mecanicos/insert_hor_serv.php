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

                                $serv= "INSERT INTO servicios (afinacion, frenos,cambio_aceite,transmision,electrica_mecanica, chapa_pintura, electricidad_automotriz, lubricacion, id_meca) "
                                 . "VALUES ('$afinacion','$frenos','$aceite','$transmision','$inyeccion','$chapa','$electricidad','$lubricacion', '$_SESSION[id_meca]')";
                                
                                $hor= "INSERT INTO dias_semana (domingo, lunes,martes,miercoles,jueves, viernes, sabado, id_meca) "
                                 . "VALUES ('$domin','$lun','$mart','$mierc','$juev','$vier','$saba', $_SESSION[id_meca])";
                               
                               mysqli_query($con,$serv);
                               mysqli_query($con, $hor);
                              header("location: Menu_principal_mecanicos.php");
                                     } ?>
									 