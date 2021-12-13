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

/*
Ejercicio 2
Calcula los cuadrados de los 30 primeros numeros naturales
*/
echo "<h2>Ejercicio 2</h2><br>";

for($i = 1; $i <= 30; $i++){
    echo "El numero de " . $i . " es ". ($i*$i) . "<br>";

    
}
echo "<hr>";
/*
Ejercicio 3
Modifica el ejercicio anterior para que muestre 
al lado de cada cuadrado si es par o impar */
echo "<h2>Ejercicio 3</h2><br>";

for($i = 1; $i <= 30; $i++){

    $cuadrado = $i*$i;

    echo "El cuadrado de " . $i . " es " . $cuadrado;    

    if($cuadrado % 2 == 0){

        echo " y es par";
    }else{
        echo " y es impar";
    }
    echo "<br>";
}
echo "<hr>";


/*
ESCRIBE UN PROGRAMA QUE MULTIPLIQUE LOS 
20 PRIMEROS NÚMEROS NATURALES, UTILIZANDO EL BUCLE whILE
*/ 
echo "<h2>Ejercicio 4</h2><br>";

$contador = 2;
$numero = 1;
while($contador <= 20){

    // es lo mismo que         $numero *= $contador;
    $numero = $numero * $contador;

    echo $numero ."<br>";

    $contador ++; 
    // Hay que poner esto para 
                  // que se le sume 1 cada vez que se ejecute un ciclo.
 }

 echo "El resultado de multiplicar los 20 primeros números :  " . $numero;

  echo "<h2>Ejercicio 5</h2>"; 
/*
Imprimir por pantalla la tabla de multiplicar 
del número pasado en un parámetro GET por la URL
*/


$numero = 5;
echo "<h2> Tabla de multiplicar de  ". $numero . "</h2>";

for ($i = 1; $i <= 10; $i++){
    echo $i. " x " .$numero. " = " . ($i*$numero). "<br>"; 
}

/*
http://wp.miblog.com/PHP.com/Variables.php/?numero=12
Añadiendo en la url un ?numero= 12     nos pondra la tabla 
de multipliar que le pongamos en la url 
*/


echo "<h2>Ejercicio 5 BIS</h2>"; 

if(isset($_GET["numero"])  && is_numeric($_GET["numero"])){
    $numero = $_GET["numero"];
}else{
    $numero = 5; // defecto
    echo "<p>Numero por defecto </p>";
}
echo "<h2> Tabla de multiplicar de  ". $numero . "</h2>";

for ($i = 1; $i <= 10; $i++){
    echo $i. " x " .$numero. " = " . ($i*$numero). "<br>"; 
}
echo "<hr>";


/*Crea una funcion que imprima un triangulo dependiendo del numero que se mande por parametro*/ 

echo "<h2>Ejercicio 6</h2>"; 

function triangulo($numero){
    for ($i=1; $i <= $numero; $i++) {
            for ($j=0; $j < $i; $j++){
                echo "*";
            }
            echo "<br>";
    }
}
triangulo(5);

/*Crear una function que muestre la suma de numeros consecutivos del 0 al numero mandado por parametro*/

echo "<h2>Ejercicio 7</h2>"; 

function suma ($numero){
    $s = 0;
    for ($i = 1; $i <= $numero; $i++){
        $s = $s + $i;
    }
    echo "La suma es: " . $s;
}
suma(3);

/* Crea una funcion que imprima un cuadrado dependiendo del numero que se mande por parametro*/

echo "<h2>Ejercicio 8 </h2>"; 


function cuadrado($numero){
    for ($i=1; $i <= $numero; $i++) {
            for ($j=0; $j < $numero; $j++){
                echo "* &nbsp; ";  //&nbsp; poner espacios extras
            }
            echo "<br>";
    }
}
cuadrado(6);



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