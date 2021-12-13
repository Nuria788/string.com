<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name = "calc" action = "calc.php" method="post">

<p>  <label>A</label>   <input type="text" name = "a" size = "10"></p>
<p>  <label>B</label> <input type="text" name = "b" size = "10"></p>
<br>

<input type="submit" value ="Suma" name = "btsuma">
<input type="submit" value ="Resta" name = "btresta">
<input type="submit" value ="Multiplicacion" name = "btmlt">
<input type="submit" value ="Division" name = "btdiv">


<h1>Otra calculadora</h1>
<form name = "calc" action = "calc.php" method="post">

  <input type="text" name = "n1">
<select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<input type="text" name ="n2">
<input type="submit" name="enviar">



</form>

</body>
</html>