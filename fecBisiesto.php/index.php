<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora de años bisiestos (Formulario)</h1>

<form action="pagina2.php" method="get">
  <p>Escriba un año (0 &le; año &lt; 10.000) para comprobar si es bisiesto o no.</p>

  <p><label>Año: <input type="number" name="anyo" min="0" max="10000"></label></p>

  <p>
    <input type="submit" value="Comprobar">
    <input type="reset" value="Borrar">
  </p>
</form>

<footer>
  <p class="ultmod">
    Última modificación de esta página:
    <time datetime="2019-10-24">24 de octubre de 2019</time>
  </p>

  <p class="licencia">
    Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
    web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes Marco</a>.<br>
    El programa PHP que genera esta página se distribuye bajo
    <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
  </p>
</footer>
</body>
</html>