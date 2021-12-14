<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

    .resaltar{
        color:#F00;
        font-weight:bold;
    }

</style>

</head>
<body>

    <?php 
    
# Pongo estilos debajo de title y creo <style>  dentro creo estilos </style>
# Creo function echo "Estlo.....";
# Pero le pongo el atributo resaltar que he creado en <style>
# Debo de crear el string con comillas hijas en comillas padre, 
# por lo que deberá ser "  ''  ". Comillas distintas.

# Tambien se podría hacer con barra de escape 
#  echo "<p class=\'resaltar\'> Esto es un ejemplo de frase </p>";

    echo "<p class='resaltar'> Esto es un ejemplo de frase  1 </p>";



# Concatenar string  la variable con lo que yo le pongo en echo.
echo "<h4> 2.- Concatenar sting  .  </h4>";
$nombre= "Juan!";
echo "Hola $nombre <br>";
echo "Hola1" . $nombre . "!!" . "<br>";
echo "<br>";
# Comparación Dde caracteres para saber si son iguales o no.

# strcmp  Compara caracteres teniendo en cuenta si estas comparando Mayúsculas / minusculas 
# strcasecmp  Compara dos string ignorando si estan en mayusculas o minusculas.
# Ambas devuelven un 0 si los valores string coinciden y 1 si no coinciden
# 1  true  y 0 false.
echo "<h4>3.-  strcmp -- compara caracteres teniendo en cuenta Mays-minus</h4>";
$variable1="casa";
$variable2="CASA";

$resultado=strcmp($variable1,$variable2); // Devuelve 1 si no son iguales  0 si son iguales

if($resultado){
    echo "No coinciden";
}else{
    echo "Coinciden";
   
}
echo "<br>";
echo "<hr>";
echo "<h4>4.-  strcasecmp -- compara caracteres teniendo en cuenta Mays-minus</h4>";
$variable1="casa";
$varuable2="CASA";

$resultado=strcasecmp($variable1,$varuable2); // Devuelve 1 si no son iguales  0 si son iguales
         // echo "El resultado es " . $resultado;

if($resultado){
    echo "No coinciden";
}else{
    echo "Coinciden";
}
echo "<br>";


# --------------------------------
    
# En este caso ponemos una negación en el IF delante de !$resultado
# En este caso habrá que cambiar el echo al reves del anterior.
$variable1="casa";
$varuable2="CASA";

$resultado=strcasecmp($variable1,$varuable2); 

if(!$resultado){
    echo "Coinciden";
}else{
    echo "No coinciden";
}
echo "<br>";
echo "<hr>";
#--------------------------
/*La función PHP devuelve la longitud de una cadena.strlen() */
$mensaje = "Hoy voy a aprender mucho";

echo "<h4>5.- devuelve la longitud de una cadena.strlen()</h4>";
echo strlen("Hello world!"); // outputs 12
echo "<br>";
echo strlen($mensaje);
echo "<hr>";
#----------------------
/*La función PHP invierte una cadena.strrev() */
echo "<br>";

echo "<h4>6.- invierte una cadena.strrev()</h4>";
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo strrev($mensaje);
echo "<hr>";
/*La función PHP cuenta el número de palabras de una cadena.str_word_count() */
echo "<br>";
echo "<h4>7.- cuenta el número de palabras de una cadena.str_word_count()</h4>";
echo str_word_count("Hello world!"); // outputs 2

echo "<br>";
echo str_word_count ($mensaje);
echo "<hr>";
echo "<br>";
/*Busque el texto "mundo" en la cadena "¡Hola mundo!": */
echo "<h4>8.- Busque el texto mundo en la cadena ¡Hola mundo!   strpos: </h4> ";
echo strpos("Hello world!", "world". " "); // outputs 6
echo "strops --- busca texto en la cadena";
echo "<br>";
echo strpos($mensaje, "aprender"); // el mensaje es Hoy voy a prender mucho
echo "<br>";
echo "<hr>";
/*.str_replace()  reemplaza algunos caracteres con algunos otros caracteres en una cadena*/
echo "<h4>9.-  .str_replace()  reemplaza algunos caracteres con algunos otros caracteres en una cadena</h4> ";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";
echo str_replace("aprender", "nadar", $mensaje);
echo "<hr>";
echo "<br>";
/*La función substr_replace() reemplaza una parte de una cadena por otra cadena. */
echo "<h4>10.-  substr_replace() reemplaza una parte de una cadena por otra cadena.</h4> ";

echo substr_replace("Hello","world",0); echo "<br>";
echo substr_replace("Hello world","earth",6);echo "<br>";
echo substr_replace("Hello world","earth",-5);echo "<br>";
echo substr_replace("world","Hello ",0,0);echo "<br>"; // insertar Hola delante

//Reemplace varias cadenas a la vez. Reemplace "AAA" en cada cadena por "BBB"
echo "<h5>  substr_replace() Reemplace varias cadenas a la vez. Reemplace AAA en cada cadena por BBB
</h5> ";
$replace = array("1: AAA","2: AAA","3: AAA");echo "<br>";
echo implode("<br>",substr_replace($replace,'BBB',3,3));
echo "<br>";
echo "<hr>";

/*Repita la cadena "Wow" 13 veces: */
echo "<h4>11.-  Repita la cadena Wow 13 veces:   str_repeat()(</h4> ";
echo str_repeat("Wow",13);
echo "str_repeat  repite";
echo "<br>";
echo "<hr>";
/*Grupos de letras */
echo "<h4>12.-   Grupos de letras   str_split()</h4> ";
print_r(str_split("Hello"));
print_r(str_split("Hello",3));// en grupos de 3 letras
echo "<br>";
echo "<hr>";
/*Contar palabras*/
echo "<h4>13.-  Contar palabras  str_word_count()</h4> ";
echo str_word_count("Hello world!");
print_r(str_word_count("Hello world!",1));
echo "<br>";
echo "<hr>";
/*La función strchr() busca la primera aparición de una cadena dentro de otra cadena.*/
echo "<h4>14.- strchr() busca la primera aparición de una cadena dentro de otra cadena</h4> ";
echo strchr("Hello world!","world");
echo "<br>";    
echo strchr("Hello world!","world",true);
echo "<br>";
echo "<hr>";
/* Cuente el número de veces que aparece "mundo" en la cadena:*/
echo "<h4>15.- substr_count cuenta el numero de veces que aparece una palabra en una cadean</h4> ";
echo substr_count("Hello world. The world is nice","world");
echo "<br>";
echo substr_count($mensaje, "aprender");
echo "<hr>";
/*Para acceder a una variable declarada fuera de una function se empolea  GLOBAL*/
echo "<br>";
$x = 5;
$y = 10;

function myTest() {
  global $x, $y; // GLOBAL
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
echo "<br><br><br>";

$nota1 = 10;
$nota2 = 7;
$nota3 = 8;
echo "Juan aprobó la materia con las notas $nota1, $nota2 y $nota3";



    ?>
</body>
</html>