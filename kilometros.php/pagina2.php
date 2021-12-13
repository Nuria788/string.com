<?php
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$distancia = recoge("distancia");

$distanciaOk = false;

if ($distancia == "") {
    print "  <p class=\"aviso\">No ha escrito la distancia.</p>\n";
    print "\n";
} elseif (!is_numeric($distancia)) {
    print "  <p class=\"aviso\">No ha escrito la distancia como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($distancia)) {
    print "  <p class=\"aviso\">No ha escrito la distancia como número "
        . "entero positivo (sin parte decimal).</p>\n";
    print "\n";
} elseif ($distancia >= 1000000000) {
    print "  <p class=\"aviso\">La distancia no es inferior a 1.000.000.000.</p>\n";
    print "\n";
} else {
    $distanciaOk = true;
}

if ($distanciaOk) {
    $distanciaOriginal = $distancia;
    if ($distancia >= 100000) {
        $km        = floor($distancia / 100000);
        $distancia = $distancia % 100000;
    }
    if ($distancia >= 100) {
        $m         = floor($distancia / 100);
        $distancia = $distancia % 100;
    }

    print "  <p>$distanciaOriginal cm son ";

    if ($distanciaOriginal == 0) {
        print "0 cm.";
    }
    if (isset($km)) {
        print "$km km";
        if (isset($m)) {
            if ($distancia != 0) {
                print ", ";
            } else {
                print " y ";
            }
        } else {
            if ($distancia != 0) {
                print " y ";
            }
        }
    }
    if (isset($m)) {
        print "$m m";
        if ($distancia != 0) {
            print " y ";
        }
    }
    if ($distancia != 0) {
        print "$distancia cm";
    }
    print ".</p>\n";
    print "\n";
}
?>