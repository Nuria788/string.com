<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kk.css">

    <title>Ejercicio8</title>
</head>
<body>

    <div class="principal" id="main">

        <?php
            $numMAX = $_GET['numero'];
            
            for ( $x = 1 ; $x <= $numMAX ; $x++ ){
               echo "<div class=\"".$_GET['color']."\">".$_GET['texto']."</div>";
            }
                
                
        ?>
        


    </div>

    

    
</body>
</html>