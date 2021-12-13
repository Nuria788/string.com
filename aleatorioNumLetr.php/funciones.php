
    <?php
echo "<h2>Ejercicio 1 Funciones  Generar un numero aleatorio entre dos numeros</h2>"; 

function generarNumeroAleatorio($inicio, $fin){

    if(!is_numeric($inicio) || !is_numeric($fin)){
        echo "Los parámetros deben ser numéricos<br/>";
        return 0;    
    }else{
        return rand($inicio, $fin);
    }

    }
    echo "<h2>Ejercicio 2 Crear una función que nos devuelva el factorial de un numero</h2>";

    function factorial($num){

        if (!is_numeric($num)){
            echo "Los parametros deben de ser numéricos <br/>";
            return 0;

        }else{
            $resultado = $num;
            for ($i = $num-1; $i > 1; $i--){
                $resultado *= $i;
            }
            return $resultado;
        }
    }



    echo "<h2>Ejercicio 3 Crear una función que nos devuelva una letra aleatoria</h2>";
    
    function generarLetraAleatorio(){

        $eleccion = generarNumeroAleatorio (1,2);
        
        if ($eleccion === 1){

    //Minuscula
    return chr(generarNumeroAleatorio(97,122));
}else{
    //Mayuscula
    return chr(generarNumeroAleatorio(65,90));
}
    
    }

?>
