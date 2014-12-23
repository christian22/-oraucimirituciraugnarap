<?php session_start();?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <!--<link rel='stylesheet' id='camera-css'  href='css/Banner_Publicidad/camera.css' type='text/css' media='all'>--> 
        <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
        <script type='text/javascript' src='js/Banner_Publicidad/jquery.min.js'></script>      
        <script type='text/javascript' src='js/Banner_Publicidad/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='js/Banner_Publicidad/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='js/Banner_Publicidad/camera.min.js'></script>  
    </head>
<!--&&&&&&&&&&&&&&&&&&&&&&&& baner principal &&&&&&&&&&&&&&&&&&&&&&&&-->
        <style>
/*                body{
			margin: 0;
			padding: 0;
		}*/
/*		a {
			color: #09f;
		}*/
/*		a:hover {
			text-decoration: none;
		}*/
		#back_to_camera {
			clear: both;
			display: block;
			height: 0px;
			line-height: 40px;
			padding: 20px;
                        margin-top: 45px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 700px;
			width: 90%;
		}
	</style>  
        <script>
            jQuery(function(){
                jQuery('#camera_wrap_1').camera({
                    thumbnails: true
		});
            });
	</script>


    <body>
 
        <div id="back_to_camera"></div>
        <div class="fluid_container">
    <!--   	<p>Bla</p>-->
            <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                <div data-src="images/Banner_Publicidad/bridge.jpg">
                    <div class="camera_caption fadeFromBottom">
                        <em>Try to resize the browser window</em>
                    </div>
                </div>
                <div data-src="images/Banner_Publicidad/road.jpg">
                    <div class="camera_caption fadeFromBottom">
                        <em>It's completely free</em>
                    </div>
                </div>
                <div data-src="images/Banner_Publicidad/sea.jpg">
                    <div class="camera_caption fadeFromBottom">
                        <em>to customize your project</em>
                    </div>
                </div>
                <div  data-src="images/Banner_Publicidad/shelter.jpg">
                    <div class="camera_caption fadeFromBottom">
                        <em>it's validated in HTML5</em>
                    </div>
                </div>
                <div  data-src="images/Banner_Publicidad/tree.jpg">
                    <div class="camera_caption fadeFromBottom">
                        <em>fullscreen ready too</em>
                    </div>
                </div>
            </div><!-- #camera_wrap_1 -->
        </div><!-- .fluid_container -->
        
    </body>    
</html>