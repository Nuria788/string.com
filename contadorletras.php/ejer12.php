
<?php

/* Crear un formulario donde se introduzca un texto y una letra.


Tendréis que crear una función que localice la posición de todas 
la letras iguales a la introducida
Y tendréis que contar cuantas letras hay en ese texto.


Sacar por pantalla la cantidad de letras de ese tipo.
Y la posición, en las que se encuentran. */




$letraAbuscar = $_POST['letra'];
$textoDonde = $_POST['texto'];

$longitudTexto = strlen($textoDonde);
$contador = 0 ;


for ($i = 0; $i <= $longitudTexto ; $i++){

    if ($textoDonde[$i] == $letraAbuscar){
        echo "<p>La letra $letraAbuscar está en la posición $i </p>";
        
        $contador = $contador +1;
    }

}


while (true) {
    $pos = strpos($textoDonde,$letraAbuscar);
    

    if ($pos) {
        echo "<p>La letra $letraAbuscar está en la posición $pos </p>";
        $contador = $contador +1;
        $textoDonde[$pos] = "1";
        
    }else{
        break;
    }
}


echo "<p> Hay $contador letras $letraAbuscar</p>";





?>


