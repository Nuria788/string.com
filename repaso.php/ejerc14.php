<?php
        //guardo las variables que me vienen del formulario de la pagina anterior
        $num1   = $_POST['num1'];
        $num2   = $_POST['num2'];
        $texto1 = $_POST['texto1'];

        //creo la primera funcion
        function dividir($numA,$numB){

            //calculo el resultado de la division
            $resultado = $numA/$numB;
            //calculo el resto de la division
            $resto = $numA%$numB;

            //pongo ambos resultados dentro de una etiqueta h1 para que aparezca por pantalla
            echo "<h1> El resultado de dividir $numA entre $numB es igual a $resultado. </h1>";
            echo "<h1> El resto de dividir $numA entre $numB es igual a $resto. </h1>";
        }

        //creo la segunda funcion, strrev()
        function darLaVueltaString($textoAgirar){

            //creo una variable que contendra la string invertida
            $stringInvertida = "";

            //guardo el valor de la longitud de mi cadena para poder realizar el loop
            $longitud= strlen($textoAgirar);

            //inicio el loop para poder invertir el texto
            //lo inicio en orden descendiente para comenzar desde el final
            for ($i = $longitud ; $i >= 0; $i-- ){

                $stringInvertida =  $stringInvertida.$textoAgirar[$i];
            }

            echo "<h1> El texto invertido quedaria de la siguiente forma:$stringInvertida </h1> ";

        }

        //la funcion valor absoluto
        function valorAbsoluto($numero){

            //me lo guardo porque luego lo necesitare
            $numeroSinModificar = $numero;

            //miro si el numero es negativo
            if ($numero < 0 ){

                //si es negativo, lo vuelve positivo multiplicadolo por -1
                $numero = $numero * (-1);

            }

            
            echo "<h1> El valor absoluto de $numeroSinModificar es $numero </h1> ";
        }

        //creo la cuarta funcion, str_word_count()
        //para contar palabras tenemos que buscar los espacios que hay en el texto
        //
        function contarPalabras($textoContar){
           
            //guardo el valor de la longitud de mi cadena para poder realizar el loop
            $longitud= strlen($textoContar);

            //incializo la variable que servira para contar palabras
            //la inicio en 1 porque supongo que un texto siempre comenzara con una palabra
            $contador= 1;

            //inicio el loop para poder invertir el texto
            //lo inicio en orden descendiente para comenzar desde el final
            for ($i = 0 ; $i <= $longitud; $i++ ){

                //busco si el caracter del texto es un espacio
                if ($textoContar[$i] == " "){

                    //como he encontrado un espacio sumo 1 al contador
                    $contador++;
                }
            }

            echo "<h1>El texto tiene $contador palabras</h1> ";
        }


        //llamo a las funciones
        dividir($num1,$num2);
        darLaVueltaString($texto1);
        valorAbsoluto($num1);
        contarPalabras($texto1);
    ?>