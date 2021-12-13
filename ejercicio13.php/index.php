<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- n este ejercicio tenéis que crear una galería de imágenes aleatorias.


Tienen que tener todas el mismo tamaño.
Dentro de cada imagen debe aparecer un texto con IMG# y donde está la 
almohadilla poner su numero de imagen.


Crear 100 imagenes.
Que se escojan de forma aleatoria entre las 6 que he adjuntado


A las primeras 20 ponerles una animación cuando se pase el cursor por encima que las oscurezca
De la 20 a la 39  ponerles una animación cuando se pase el cursor que las clarifique. 
De la 40 a la 59  ponerles un borde cuando se pase el cursor por encima
De la 60 a la 79  hacerlas grande cuando el cursor pase por encima
De la 80 a la 100  que tenga opacidad 0.5 y cuando se pase el cursor por -->$_COOKIE


<div class= "titulo"> Galería de imagenes aleatorias</div>
<div class = "Galeria"> Galería

<?php

for ($i=0; $i <100; $i++){
$numeroAleatorio = rand(1,5);
echo "<div>";
echo "<p> IMG$i </p>";
echo "<img src=\"a$numeroAleatorio.jpg\" >";
echo "</div>";

if ($i <= 20) {
    
}elseif ($i <= 39){

}elseif ($i <= 59){
    
}elseif ($i <= 79){
    
}elseif ($i <= 39){
    
}elseif ($i <= 100){
    
}
}

echo <img src="./imagenes/PlatinumEnd.jpg">;
echo <img src="./imagenes/Sakugan.jpg">;
echo <img src="./imagenes/ShiroiSuna.jpg">;
echo <div> class ="divimagen"</div>
}
?>
</div>

<div class ="Copyrght"> Copyrght IES Sierra</div>

</body>
</html>