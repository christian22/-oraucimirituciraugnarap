<?php  @session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mecanico</title>
        <link rel="stylesheet" href="css/sMenuPrincipalMecanico.css">
        <link rel="stylesheet" href="css/sPublicarOfertas.css">
        <link rel="stylesheet"  href="css/Hover_Animation.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
 <!--&&&&&&&&&&&&&&&&&&&&&&&& Msj Validacion &&&&&&&&&&&&&&&&&&&&&&&&-->  
                <script>
                    function validacion (id){
                        document.getElementById(id);
                        var elem=document.getElementBiId(id);
                        if(elem.checkValidity())
                        elem.style.borderColor="blue";
                       else
                           elem.style.borderColor="red";
                    }
                    function enviado()
                    {
                        var filesValido= document.getElementById('file').checkValidity();
                        if(filesvalido)
                            alert("LA INFORMACION FUE ENVIADA CORRECTAMENTE...")
                        else
                           alert("POR FAVOR REVISE SUS CAMPOS...")
                    }
                </script>
 <!--&&&&&&&&&&&&&&&&&&&&&&&& Msj Validacion &&&&&&&&&&&&&&&&&&&&&&&&-->  
                
    </head>
    <body>

<!--&&&&&&&&&&&&&&&&&&&&&&&& MENU &&&&&&&&&&&&&&&&&&&&&&&&-->  

<!--&&&&&&&&&&&&&&&&&&&&&&&& caja publicar ofertas &&&&&&&&&&&&&&&&&&&&&&&&-->

        <div id="caja">
		<form metod="get" action="insert_oferta.php"> <!-- empieza formulario -->
		
            <h1> Publicar Ofertas </h1><br>
			
                <label>Escribe tu oferta:</label><br><br>
				
                    <textarea id="comment" name="comment" placeholder="Introduce tu publicacion aquí..."></textarea><br>
                    <input type="file" id="file" name="files" multiple id="files" oninput="validacion('files')"/>
                <output id="list"></output>

            <script>
                function handleFileSelect(evt) {
                    var files = evt.target.files; // FileList object
    // Loop through the FileList and render image files as thumbnails.
                    for (var i = 0, f; f=files[i]; i++) {
      // Only process image files.
                        if (!f.type.match('image.*')) {
                            continue;
                        }
                        var reader = new FileReader();
      // Closure to capture the file information.
                        reader.onload = (function(theFile) {
                            return function(e) {
          // Render thumbnail.
                                var span = document.createElement('span');
                                span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                '" title="', escape(theFile.name), '"/>'].join('');
                                document.getElementById('list').insertBefore(span, null);
                            };
                        })(f);
      // Read in the image file as a data URL.
                        reader.readAsDataURL(f);
                    }
                }
                document.getElementById('files').addEventListener('change', handleFileSelect, false);
            </script>
			
            <input type="submit" class="push" name="publicar" value="publicar"/>
			<!--<?php require 'insert_oferta.php'; ?>-->
					</form><!-- termina formulario -->
        </div>

         
        <div class="footer">
    <p class="rights">Copyright 2014 Pixki todos los derechos reservados/ <a href="#"> ir a inicio</a></p>
         <p class="volver">/ <a href="#"Volver arriba</a></p>
       </div> 
    </body>
</html>
