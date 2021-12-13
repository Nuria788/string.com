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

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = " .($numero * $contador). "</br>";
    $contador++;
}
echo "<br> <br>";

/* ejercicio 5
Ejercicio 5

Haz un código para que se imprima en pantalla la tabla de 
multiplicar del 5 y del 7
  */  
  $numero=rand(7,8);

  echo "<h1>  Tabla del $numero </h1>";
  echo "<br><br>";
  for ($num=1; $num<=10; $num++){
      $resultado=$num * $numero;
      echo " ",$numero,"x", $num, "=", $resultado;
      echo "<br><br>";
  }

// ------------------------



/*Crea un array que tenga la tabla de multiplicar del 5 
restandole 2 e imprimelo por pantalla*/ 


$numero=5;
$resta= 2;
echo "<h1>Tabla del $numero menos 2 </h1>";
echo "<br><br>";
for ($num=1; $num<=10; $num++){
  $resultado=$num * $numero;
  echo " ",$numero,"x", $num, "=", $resultado - $resta;
  echo "<br><br>";
}


?>


</body>
</html>