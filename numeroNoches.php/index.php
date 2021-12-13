
<?php

if(isset($_REQUEST['enviar'])){
  //  echo "enviar";       // no quiero enviar, sino recojer el numero de noches

  $noches = $_REQUEST['noches']; /*numero noches */
  $ciudad = $_REQUEST['ciudad']; /*Pongo lo que he puesto en htlm   
                                    en select  'ciudad' a la que quiero ir */
  $ch = coste_hotel($noches);
  $ca = coste_avion($ciudad);  /* variale de la function coste_avion y dentro
                                 ciudad que es donde quiero ¡ir */

  $cc = coste_alquiler_coche($noches);  
  $resultado = $ $ch + $ca + $cc;
  echo  $resultado;  /*Coste del hotel y del avion */
}

/*Coste hotel */
function coste_hotel($n){
    $coste_hotel = $n*140;
    return $coste_hotel;
}
/*Coste avion  segun ciudad elegidad */
function coste_avion($c){
    $coste_viaje = 0;
    if($c == "oviedo"){
        $coste_viaje = 183;
    }else if ($c == "tokyo"){
        $coste_viaje = 220; /* 220, 183 ... es el precio del billete de avion */
    }else if($c == "madrid"){
        $coste_viaje = 222;
    }else{
        $coste_viaje = 475;
    }
    return $coste_viaje;
}
/*Alquiler de coche
.- Cada dia de alquiler es de 40€ 
.- 3 dias de alquiler o más descuento de 20€ del total
.- 7 noches o mas descuento de 50€


*/

function coste_alquiler_coche($n){
    $coste = 0;
    $coste = $n * 40;  /*numero de nocnes x 140€ que es el precio del alquiler del coche diario  */
    
   if ($n > 7){

    $coste = $coste - 50;
   }else if ($n > 3){
       $coste = $coste - 20;
   }
    return $coste;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="#">
        <!-- numero noches-->
        <label for="noches">Número de noches:</label>
        <input type="text" name ="noches";> <br><br>
        
         <!-- avion-->
         <label for="ciudad">Ciudad</label>
         <select name="ciudad" id="ciudad">   <<!-- el id debe de coincidir con el for del label-->

            <option value="oviedo">Oviedo</option>
            <option value="tokyo">Tokyo</option>
            <option value="madrid">Madrid</option>
            <option value="barcelona">Barcelona</option>
         </select>  <br><br>
  

         <!--Boton-->
         <input type="submit"name ="enviar">
    </form>


</body>
</html>