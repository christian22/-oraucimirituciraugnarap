 <?php @session_start() ;
 error_reporting(0);
        require 'conexion.php'; 
        $varmystic = $_SESSION['id_meca'];
            if(isset($varmystic)){
                $consulta1 = "SELECT * FROM servicios WHERE id_meca=$varmystic";
                $rs1 = mysqli_query($con,$consulta1);
                while ($reg = mysqli_fetch_array($rs1)){
                    $afi=$reg["afinacion"];
                    $fre=$reg["frenos"];
                    $ace=$reg["cambio_aceite"];
                    $trans=$reg["transmision"];
                    $inyec=$reg["electrica_mecanica"];
                    $cha=$reg["chapa_pintura"];
                    $ele=$reg["electricidad_automotriz"];
                    $lub=$reg["lubricacion"];
                }
                $consulta2 = "SELECT * FROM dias_semana WHERE id_meca=$varmystic";
                $rs2 = mysqli_query($con,$consulta2);
                while ($reg = mysqli_fetch_array($rs2)){
                    $doming=$reg["domingo"];
                    $lune=$reg["lunes"];
                    $marte=$reg["martes"];
                    $mierco=$reg["miercoles"];
                    $jueve=$reg["jueves"];
                    $viern=$reg["viernes"];
                    $sabad=$reg["sabado"];
                }
            }
            if($afi == 1){$a1="checked";}else{$a1="";}
            if($fre == 1){$a2="checked";}else{$a2="";}
            if($ace == 1){$a3="checked";}else{$a3="";}
            if($trans == 1){$a4="checked";}else{$a4="";}
            if($inyec == 1){$a5="checked";}else{$a5="";}
            if($cha == 1){$a6="checked";}else{$a6="";}
            if($ele == 1){$a7="checked";}else{$a7="";}
            if($lub == 1){$a8="checked";}else{$a8="";}
            if($doming == 1){$a9="checked";}else{$a9="";}
            if($lune == 1){$a10="checked";}else{$a10="";}
            if($marte == 1){$a11="checked";}else{$a11="";}
            if($mierco == 1){$a12="checked";}else{$a12="";}
            if($jueve == 1){$a13="checked";}else{$a13="";}
            if($viern == 1){$a14="checked";}else{$a14="";}
            if($sabad == 1){$a15="checked";}else{$a15="";}
        ?>  

