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

/*
Crear un array llamado meses y que almacene el nombre de los doce meses del año.
Recorrerlo coN For para mostrar por pantalla los doce meses.

*/

echo "<h2>Ejercicio 1</h2>"; 

$meses = array(
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
    "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre");
     // Así sacaría solo el mes de Marzo          echo  $meses[2];

     for ($i = 0; $i < count($meses);  $i++){
         echo $meses[$i] . "</br>";
     }


     echo "<hr>";
     echo "<h2>Ejercicio 2  lo mismo pero con foreach</h2>"; 

     $meses = array(
         "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
         "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre");
          // Así sacaría solo el mes de Marzo          echo  $meses[2];
    
        foreach ($meses as $mes) {
            echo $mes . "<br/>";
        }

          
     







?>




</body>
</html>
