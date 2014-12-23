<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
       
        <link rel="stylesheet" href="css/sCitasConfirmadas.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
      
    </head>
    <body >
<!--&&&&&&&&&&&&&&&&&&&&&&&& popup de detalle citas  &&&&&&&&&&&&&&&&&&&&&&&&-->

<a href="" class="overlay" id="detalle_cita_form"></a>
        <div class="popup">
            <h1>Detalle Cita</h1>         
                <b>CLIENTE </b><br><br>
                    <label>Nombre completo:</label>
                        <input type="text" name="cliente" value="" ><br>
                        <form name="ejemplo1" action="15-html5-tel-input-demo2.php" method="POST"></form>
                    <label> Telefono: </label>
                        <input type="tel" name="telefono1" value="" ><br>
                        <label>Correo electronico</label>
                        <input type="text" name="correo" value=""  placeholder="Ejemplo@email.com"><br>
                    <label> Carro: </label>
                        <input type="text" name="carro" value="" placeholder="Escribe Modelo, tipo, marca">
                        <article> Mensaje: </article><br>
                    <textarea id="comment" name="mensaje" placeholder="Introduce tu mensaque aqui..." ></textarea><br>
                <b>MECANICO </b><br><br>
                    <label>Taller:</label>
                        <input type="text" name="taller" value="" >
                    <label>Responsable:</label>
                        <input type="text" name="responsable" ><br>
                    <label> Domicilio: </label>
                        <input type="text" name="domicilio" value=""  placeholder="Calle, numero, colonia"><br>
                    <label> Telefono: </label>
                        <input type="tel" name="telefono" value="" placeholder="(669)---,--,--"><br>
                    <label> Correo electronico: </label>
                        <input type="text" name="correo" value="" placeholder="Ejemplo@email.com"><br>
                    <label> Fecha solicitada </label> 
                        <input type="date" name="fecha" step="1" min="2014-11-01" max="2200-12-31" value="2014-11-01" >
                    <label> Horario: </label>
                        <input type="time" name="hora" step="1" min="00:00" max="12:00" value="12:00" >
            <a class="close" href="#close"></a>
        </div> 
    <div class="footer">
        <p class="rights">Copyright 2014 Pixki todos los derechos reservados/ <a href="#"> ir a inicio</a></p>
            <p class="volver">/ <a href="#"Volver arriba</a></p>
        
    </div>
    </body>
</html>
