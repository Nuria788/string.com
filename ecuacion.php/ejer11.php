<!DOCTYPE html>
<html lang="en">
<head>
  <!--  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->
</head>
<body>
<?php

        $A=1; //$A = $_POST["A"]
        $B=5;
        $C=4;

        $resta = $B**2 - 4 * $A *$C;

        if ($resta<0){
            echo "<p> no tiene solucion </p>";

        } else {

            $raiz = $resta ** 0.5;  //sqrt($resta)
             
            $numerador1 = -$B + $raiz;
            $numerador2 = -$B - $raiz;

            $x1 = $numerador1 / 2 / $A;  //$numerador1 / (2 * $A); //$numerador1 / $A *0.5;
            $x2 = $numerador2 / 2 / $A;

            echo "<p> la solucion x1 = $x1 </p>";
            echo "<p> la solucion x2 = $x2 </p>";




        }





    ?>
    
</body>
</html>