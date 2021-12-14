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
 echo "<h4>Ejercicio 1</h4>";
$nombre = "Pepe";
if ($nombre == "Juan") {
  print "<p>Tu nombre es Juan.</p>\n";
}
if ($nombre != "Juan") {
  print "<p>Tu nombre no es Juan.</p>\n";
}


echo "<h4>Ejercicio 2</h4>";
$nombrePadre = "Pepe";
$nombreHijo  = "Pepe";

if ($nombrePadre == $nombreHijo) {
  print "<p>El hijo se llama como el padre.</p>\n";
}

if ($nombrePadre != $nombreHijo) {
  print "<p>El hijo no se llama como el padre.</p>\n";
}

echo "<h4>Ejercicio 3</h4>";
$entero = 6;
$cadena = "6";
$decimal = 6.0;

if ($entero == $cadena && $entero == $decimal) {
    print "<p>$entero, $cadena y $decimal son iguales.</p>\n";
} else {
    print "<p>$entero, $cadena y $decimal son distintos.</p>\n";

}

echo "<h4> 4.- && Verdadero si los dos son verdaderos</h4>";
print "<p>true && true = " . var_export(true && true, 1) . "</p>\n";
  print "\n";
  print "<p>true && false = " . var_export(true && false, 1) . "</p>\n";
  print "\n";
  print "<p>false && true = " . var_export(false && true, 1) . "</p>\n";
  print "\n";
  print "<p>false && false = " . var_export(false && false, 1) . "</p>\n";
  print "\n";

  echo "<h4> 4.1 || (o ).  false si y sólo si sus dos operandos son false:- </h4>";
  print "<p>true || true = " . var_export(true || true, 1) . "</p>\n";
  print "\n";
  print "<p>true || false = " . var_export(true || false, 1) . "</p>\n";
  print "\n";
  print "<p>false || true = " . var_export(false || true, 1) . "</p>\n";
  print "\n";
  print "<p>false || false = " . var_export(false || false, 1) . "</p>\n";
  print "\n";

  echo "<h4> 4.1 ! (negación). </h4>";
  print "<p>!true = " . var_export(!true, 1) . "</p>\n";
  print "\n";
  print "<p>!false = " . var_export(!false, 1) . "</p>\n";
  print "\n";

  /*
Crea dos variables cuyo nombre sea "uno" y "dos"
he imprimelas por pantalla. Pon un comentario 
con el tipo de dato que contienen
Ejercicio 1
*/

// String
echo "<h2>Ejercicio 1</h2><br>";
$uno = "Contenido de la variable 1";

// Integer

$dos = 245;

echo "UNO: " . $uno. "<br>";
echo "DOS: " . $dos. "<Hr>";


/* Crea una funciones para el manejo de arreglos mediante el paso de parametros
(Agregar, Mostrar y Ordenar) */

echo "<h2>Ejercicio 9 Ordenar</h2>"; 
function agregar($arreglo,$numero){
    $arreglo[] = $numero;
    return $arreglo;
}
function mostrar($arreglo){
    for ($i = 0; $i < count($arreglo); $i++){
        echo "[$i] = $arreglo[$i] ";
    }
    echo "<br>";
}

function ordenar ($arreglo){
        for ($i = 0; $i < count($arreglo); $i++){
            for ($j = 0; $j < count($arreglo)-1; $j++){
                if($arreglo[$j] > $arreglo[$j + 1 ]){
                    $temp = $arreglo[$j]; //temp =  9
                    $arreglo[$j] = $arreglo[$j + 1];
                    $arreglo [$j+1] = $temp;                
            }  
        }
        mostrar($arreglo);
    }
    return $arreglo;
}
$a = array();
$a = agregar($a,5);
$a = agregar($a,8);
$a = agregar($a,9);
$a = agregar($a,1);
$a = agregar($a,7);
mostrar($a);
$a = ordenar($a);
echo "<br>";
mostrar ($a);

?>
</body>
</html>