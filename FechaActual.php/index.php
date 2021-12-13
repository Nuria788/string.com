<?php

include "fecha.php";


// mostrarFechaActual();
// Calcular la edad de una persona


$fechanac='1973/05/09';
$fecha=calcularFechaActual();

$edad=round((strtotime($fecha) - strtotime($fechanac))/31536000,4);
echo "<p>La edad es: " . $edad . " años <p>";

echo $fecha;

?>
