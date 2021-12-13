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

$anyo = recoge("anyo");

$anyoOk = false;

if ($anyo == "") {
    print "  <p class=\"aviso\">No ha escrito el año.</p>\n";
    print "\n";
} elseif (!is_numeric($anyo)) {
    print "  <p class=\"aviso\">No ha escrito el año como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($anyo)) {
    print "  <p class=\"aviso\">No ha escrito el año como número "
        . "entero positivo (sin parte decimal).</p>\n";
    print "\n";
} elseif ($anyo >= 10000) {
    print "  <p class=\"aviso\">El año no es inferior a 10.000.</p>\n";
    print "\n";
} else {
    $anyoOk = true;
}

if ($anyoOk) {
    if ($anyo % 400 == 0) {
        print "  <p>El año $anyo es bisiesto porque es múltiplo de 400.</p>\n";
    } elseif ($anyo % 100 == 0) {
        print "  <p>El año $anyo no es bisiesto porque es múltiplo de 100, "
            . "pero no es múltiplo de 400.</p>\n";
    } elseif ($anyo % 4 == 0) {
        print "  <p>El año $anyo es bisiesto porque es múltiplo de 4, "
            . "pero no es múltiplo de 100.</p>\n";
    } else {
        print "  <p>El año $anyo no es bisiesto porque no es múltiplo de 4.</p>\n";
    }
    print "\n";
}
?>