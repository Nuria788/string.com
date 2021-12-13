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

// DOS FORMAS DE HACERLO

// Llamada des index.php con     mostrarFechaActual(); 

function mostrarFechaActual(){
$dia=date('d');
$mes=date('m');
$year=date('Y');
$fechaactual=$dia . "/" . $mes . "/" . $year;
echo "La fecha actual es: " .$fechaactual;
} 

// La llamda desde index con 
// $fecha=calcularFechaActual();
// echo "$fecha";


function calcularFechaActual(){
    $dia=date('d');
    $mes=date('m');
    $year=date('Y');
    $fechaactual=$dia . "/" . $mes . "/" . $year;
    return "La fecha actual es: " .$fechaactual;
    } 

?>


</body>
</html>