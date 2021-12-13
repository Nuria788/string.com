<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
        <title>Hola pepe</title>
    </head>
    <body>
        <div class="titulo"> Galeria imagenes aleatorias</div>
        <div class="galeria">
            
        
            
        <?php
            for ($i=1; $i <=100; $i++) { 
                $numeroAletorio = rand(1,5);

                echo "<div>";
                echo    "<p> IMG$i </p>";

                if ($i <= 20){
                    echo    "<img src=\"a$numeroAletorio.jpg\" class=\"oscuro\" >";

                }elseif ($i <= 39){
                    echo    "<img src=\"a$numeroAletorio.jpg\" class=\"claro\" >";
                    
                }elseif ($i <= 59){
                    echo    "<img src=\"a$numeroAletorio.jpg\" class=\"borde\" >";
                    
                }elseif ($i <= 79){
                    echo    "<img src=\"a$numeroAletorio.jpg\" class=\"grande\" >";
                    
                }elseif ($i <= 100){
                    echo    "<img src=\"a$numeroAletorio.jpg\" class=\"opacidad\" >";
                    
                }

                echo "</div>";
                
            }
        ?>
        </div>
        <div class="copyright"> copyright IES Sierra de guara</div>
        


        
        
    </body>
</html>