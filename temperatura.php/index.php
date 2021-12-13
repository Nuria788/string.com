<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Convertidor de temperaturas Celsius / Fahrenheit (Formulario)</h1>

<form action="pagina2.php" method="get">
  <p>Escriba una temperatura en grados Celsius o Fahrenheit (-273.15 &le; Celsius &lt; 10.000;
    -459.67 &le; Fahrenheit &lt; 10.000) para convertila a la otra unidad (Fahrenheit o Celsius).
  </p>

  <p>
    <label>
      Temperatura:
      <input type="number" name="temperatura" min="-500" max="10000" step="any">
    </label>
    <select name="unidad">
      <option value="c" selected>Celsius</option>
      <option value="f">Fahrenheit</option>
    </select>
  </p>

  <p>
    <input type="submit" value="Convertir">
    <input type="reset" value="Borrar">
  </p>
</form>

</body>
</html>