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
 //guardo las variables que me vienen del formulario de la pagina anterior
 $num1   = $_POST['num1'];
 $num2   = $_POST['num2'];
 $texto1 = $_POST['texto1'];



function sumatorio($n) {
 $resultado = 0;
 while ($n >= 1 ) {
 $resultado = $resultado + $n;
 $n = $n - 1;
 }
 return $resultado;
}
 $n = rand(1, 20);
 print("Sumatorio de $n es: ".sumatorio($n)."<br />");
?> 

</body>
</html>