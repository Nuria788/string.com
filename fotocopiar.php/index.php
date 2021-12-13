


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


$numero=0;
while ($numero<=100){
	echo "$numero, ";	
	$numero++;
}
echo "<br>";
$numero=0;
while ($numero<=100){
	echo $numero;
	if($numero !=100) echo ", ";
	$numero++;
}

echo "<br>";
for ($i=0; $i < 10; $i++) {
    echo "Hola, soy el saludo numero " . $i . PHP_EOL;
}
echo "<h1> Muestra la palabra de letra en letra</h1>";
echo "<br><br>";

$cadena = "Hola mundo";
for ($i=0; $i < strlen($cadena); $i++) {
    echo $cadena[$i] . PHP_EOL;
}

echo "<h1> Recorrer un array</h1>";
echo "<br><br>";
$array = array('Hola', 'Mundo', 'Hello', 'World');
for ($i=0; $i < count($array); $i++) {
    echo $array[$i].PHP_EOL;
}

echo "<h1> Recorrer letras</h1>";
echo "<br><br>";
for ($i='a'; $i < 'z'; $i++) {
    echo $i.PHP_EOL; // Mostraria a, b, c, d, e.. hasta la y
}

echo "<h1> Abecedario</h1>";
echo "<br><br>";
for ($i ='a'; ; $i++ ) {
    echo $i.PHP_EOL; // Mostrariamos de la a hasta la z
    if ($i == 'z') {
        break;
    }
}
echo "<h1> del 1 al 10</h1>";
echo "<br><br>";
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);


echo "<br><br>";
$coches=array("Volvo", "Peugeot", "Seat", "Renault"); 
foreach($coches as $coche) echo $coche;




$numeros=array(2, 24, 80, 5, 7, 20 ,32 ,45 ,67);
function mostrarArray($numeros){
	foreach($numeros as $numero) 
    echo $numero."<br>";
    sort($numeros);

mostrarArray($numeros);
}

//Ordenar el array

sort($numeros);

mostrarArray($numeros);


//Contamos el número de elementos del array

echo "<h3>Número de elementos del Array</h3>".count($numeros);
//Buscamos un elemento en el array

$elemento=10;
if(array_search($elemento, $numeros)){
	echo "<h3>El número $elemento se encuentra en el array</h3>";
}else{
	echo "<h3>El número que deseas buscar no se encuentra en el array</h3>";
}

echo "<br><br>";
echo "Array asociativos";
$personas=array(
	"nombre"=>"Jesús",
	"apellidos"=> "Fernández Toledo",
	"Ciudad"=>"Casas de Fernando Alonso"
);
echo $personas["apellidos"]; //Mostramos la segunda posición del array
var_dump($personas); //Vemos todas las posiciones del array


echo "<br><br>";

echo «La raiz cuadrada de 4 es: «.sqrt(4);

echo «Número aleatorio entre 1 y 10: «.rand(1,10);

echo «Redondeo: «.round(3.45678); //Mostraría 3

echo «Redondeo: «.round(3.5678); //Mostraría 4

echo «Redondeo: «.round(3.5678,2); //Mostraría 3.57



echo "<br><br>";
echo gettype($edad); //Mostraría integer

is_string(nombre_variable), is_float(nombre_variable), …

isset(nombre_variable); //muestra si existe la variable o no existe

trim() //Elimina espacios por delante y por detrás de una variable. Muy útil para formularios.

$nombre=»   jesus fernandez toledo        «;

trim($nombre);

empty() //Comprueba si una variable está vacía

if(empty($nombre)) echo «Variable vacía»;



echo "Funciones para cadenas de txsto<br><br>";
strlen() //Contar caracteres de una cadena de texto (de un string)

echo strlen($nombre);

strpos() //busca un carácter o texto dentro de una cadena de caracteres.

$frase=»Pienso luego existo»

echo strpos($frase, «existo»); //Muestra 13. Muestra donde comienza palabra. Se cuenta desde el 0

echo strpos($frase, «o»); //Muestra 5

str_replace() //remplaza palabras de una cadena de caracteres

$frase=str_replace(«existo»,»desisto»,$frase);

echo $frase;

strtolower($frase); //convierte a minúsculas

strtoupper($frase); //coonvierte a mayúsculas


echo "<br>Ordena alfabeticamente<br>";
asort() //Ordena Alfabéticamente

$coches=["renault", "volvo", "mercedes"];
asort($coches);
var_dump($coches);

echo "<br><br>";
arsort()// Ordena Alfabéticamente en orden inverso

array_push(array,elemento_a_añadir) //Añadir elementos a la última posición del array

$elementos=array();
for(j=0;j<20;$j++){
   array_push($elementos,"elemento ".$j);
}
//var_dump($elementos); //Para ver todos los valores insertados al array
//echo $elementos[12]; //Imprime el valor insertado en la posición 12
echo "<br><br>";
array_pop(array) //Quita el elemento de la última posición del array

unset(array[posición]) //Quita el elemento del array de la posición indicada

array_search() //Busca un elemento dentro de un array
$coches=["mercedes","volvo","renault"];
$resultado=array_search("volvo", $coches);
var_dump($resultado);
count //Cuenta los elementos de un array

echo count($coches) //Mostraría 3



?>



</body>
</html>

