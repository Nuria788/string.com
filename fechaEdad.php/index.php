<?php

function obtener_edad_fecha_nacimiento($fecha_nac){
$fecha_nac = strtotime($fecha_nac);
$edad = date('Y', $fecha_nac);
 if (($mes = (date('m') - date('m', $fecha_nac))) < 0) {
  $edad++;
 } elseif ($mes == 0 && date('d') - date('d', $fecha_nac) < 0) {
  $edad++;
 }
return date('Y') - $edad;
}

//Edad en formato aaaa/mm/dd
echo "La edad del usuario es: ". obtener_edad_fecha_nacimiento('1988/08/06');

echo "<br><br>";

$fecha_nacimiento = new DateTime("1998-01-25");
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);
echo $edad->y;



echo "<br><br>";
$date = getdate();
$anioact = $date["year"];
$mesact = $date["mon"];
$diaact = $date["mday"];

// Fecha de nacimiento de ejemplo para el test
$fechanac = "1981-07-04";
// Desglosamos la fecha recibida, como si fuese ingreada en un Form u obtenida de una base de datos
list( $anionac, $mesnac, $dianac ) = split('-', $fechanac);
//Verificamos que la fecha es correcta
if (checkdate ( $mesnac, $dianac, $anionac )){
$fechanac = ($anionac."-".$mesnac."-".$dianac);
} else {
echo "Fecha incorrecta";
}


?>