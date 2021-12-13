<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $letraAbuscar = $_POST['letra'];
        $textoDonde = $_POST['texto'];

        $longitudTexto = strlen($textoDonde);
        $contador = 0 ;

       
        for ($i = 0; $i <= $longitudTexto ; $i++){

            if ($textoDonde[$i] == $letraAbuscar){
                echo "<p>La letra $letraAbuscar está en la posición $i </p>";
                
                $contador = $contador +1;
            }

        }


        while (true) {
            $pos = strpos($textoDonde,$letraAbuscar);
            

            if ($pos) {
                echo "<p>La letra $letraAbuscar está en la posición $pos </p>";
                $contador = $contador +1;
                $textoDonde[$pos] = "1";
                
            }else{
                break;
            }
        }


        echo "<p> Hay $contador letras $letraAbuscar</p>";





    ?>




</body>
</html>