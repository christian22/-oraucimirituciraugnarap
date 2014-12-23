
<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Foto de perfil</title>
		<link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="css/profile.php">
		
	</head>
    <body>
          <div id="profile">
                    <?php 
                    require("conexion_stark.php");
                    $cadena="select * from superusuario where id_su= $_SESSION[id_su]";
                    $result=mysqli_query($con,$cadena);
                    while ($reg=mysqli_fetch_array($result)) 
                        {

                            $nombre=$reg["nombre"];
                            $profile=$reg["profile"];
                            //echo "$nombre";
                            echo '<img src="'.$profile.'" />';
                        }
                        mysqli_free_result($result);
                        mysqli_close($con);

                   ?>
            </div>
    </body>
</html>
