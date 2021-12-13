<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="estilo10.css">
</head>
<body>
        <?php
            $longitud = strlen($_POST["texto"]);

            echo "<h1> La longitud es: $longitud</h1>";

            $esPar = true;

            if ($longitud%2 == 1){
                echo "<h3> El texto introducido es impar </h3>";
                $esPar = false;

            } else {
                echo "<h3> El texto introducido es par </h3>";
                $esPar = true;
            }

            $colorTexto= $_POST['color'];

            for ($i = 1 ; $i <= $longitud ; $i++){

                if ($esPar) {
                    echo "<p style = \"color:$colorTexto; \" ><b>".$_POST['texto']."</b></p>";

                } else{
                    echo "<p style = \"color:$colorTexto;\" ><i>".$_POST['texto']."</i></p>";
                }


            }


        ?>





</body>
</html>