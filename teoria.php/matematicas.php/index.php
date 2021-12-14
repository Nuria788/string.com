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
    
    /*PI */
    echo(pi()); // returns 3.1415926535898
    echo "<br>";
    
    echo "<h4>1.- Máximo y mínimo
    Las funciones max() y min() devuelven el máximo y el mínimo, 
    respectivamente, de una lista o matriz de valores.. </h4> ";
   
    echo(min(0, 150, 30, 20, -8, -200));  // returns -200  
    print "<p>El mínimo es " . min(20, 40, 25.1, 14.7) . "</p>\n";
    
    $datos = [20, 40, 25.1, 14.7];
    print "<p>El mínimo es " . min($datos) . "</p>\n";
    echo "<br>";

    echo(max(0, 150, 30, 20, -8, -200));  // returns 1505 
    print "<p>El máximo es " . max(20, 40, 25.1, 14.7) . "</p>\n";


echo "<h4> 2.- Hayar el resto</h4>";
print "<p>El resto de 17 dividido entre 3 es " . 17 % 3 . "</p>\n";

echo "<h4> 3.- round   redondear</h4>";
print "<p>2.6 se redondea con round() a " . round(2.6) . "</p>\n";// 3
print "<p>2.3 se redondea con round() a " . round(2.3) . "</p>\n";// 2
print "<p>-2.6 se redondea con round() a " . round(-2.6) . "</p>\n";// -3
print "<p>-2.3 se redondea con round() a " . round(-2.3) . "</p>\n";// -2
echo(round(0.60) . "<br>"); // 1
echo(round(0.50) . "<br>");// 1
echo(round(0.49) . "<br>"); // 0
echo(round(-4.40) . "<br>"); // -4
echo(round(-4.60)); // -5


echo "<h4> 4.-verificar si un número es un número entero 
(positivo o negativo), comprobando si un número coincide con su valor redondeado. </h4>";
$numero = 4.3;
if ($numero == round($numero)) {
    print "<p>$numero es un número entero</p>\n";
} else {
    print "<p>$numero no es un número entero</p>\n";
}

$numero = -6;
if ($numero == round($numero)) {
    print "<p>$numero es un número entero</p>\n";
} else {
    print "<p>$numero no es un número entero</p>\n";
}

echo "<h5> 4.- La función round(x,n) 
REDONDEA x con n decimales (si n es negativo redondea a decenas, centenas, etc.).</h5>";
print "<p>2.6574 se redondea con round() con dos decimales a " . round(2.6574, 2) . "</p>\n";
print "<p>3141592 redondeado con round() con centenas es " . round(3141592, -2) . "</p>\n";

echo "<h5> 4.- La función floor(x) redondea el número x al 
entero inferior (es decir, devuelve la parte entera).</h5>";
print "<p>2.6 se redondea con floor() a " . floor(2.6) . "</p>\n";
print "<p>2.3 se redondea con floor() a " . floor(2.3) . "</p>\n";
print "<p>-2.6 se redondea con floor() a " . floor(-2.6) . "</p>\n";
print "<p>-2.3 se redondea con floor() a " . floor(-2.3) . "</p>\n";


echo "<h4> 5.- Potencias y RAICES
La función pow(x, y) calcula x elevado a y.</h4>";
print "<p>2<sup>4</sup> = " . pow(2, 4) . "</p>\n";
print "\n";
print "<p>2<sup>3</sup> = " . 2 ** 3 . "</p>\n";
print "<p>La raíz cuadrada de 25 es " . pow(25, 1 / 2) . "</p>\n";
print "\n";
print "<p>La raíz cuadrada de 25 es " . pow(25, 0.5) . "</p>\n";
print "\n";
print "<p>La raíz cuadrada de 25 es " . 25 ** (1 / 2) . "</p>\n";
print "\n";
print "<p>La raíz cuadrada de 25 es " . 25 ** 0.5 . "</p>\n";
print "\n";
print "<p>La raíz cúbica de 1000 es " . pow(1000, 1 / 3) . "</p>\n";
print "\n";
print "<p>La raíz cúbica de 1000 es " . 1000 ** (1 / 3) . "</p>\n";


echo "<h5> 5.-En el caso de las raíces cuadradas, se puede utilizar también la función sqrt(x). </h5>";
print "<p>La raíz cuadrada de 25 es " . sqrt(25) . "</p>\n";


echo "<h4> 6.-FORMATEAR UN NUMERO. ponerle , </h4>";
print "<p>" . number_format(1300, 5) . "</p>\n"; // 1,300.00000
print "<p>" . number_format(123456.789, 2) . "</p>\n"; //123,456.79
print "<p>" . number_format(123456789123, 0, ",", ".") . "</p>\n";//123.456.789.123
print "<p>" . number_format(123456789123456.789, 2, ",", ".") . "</p>\n"; 
//123.456.789.123.456,78

echo "<h4> 7.-Números ALEATORIOS rand()
Argumentos El primer argumento es el valor mínimo que se quiere obtener
El segundo argumento es el valor máximo que se quiere obtener. </h4>";


echo "<p>" . rand(-5, 25) . "</p>\n"; 
print "<p>" . rand(-10, 10) . "</p>\n";
print "<p>" . rand(-10, 10) . "</p>\n"; 
echo(rand(10, 100));
?>
</body>
</html>