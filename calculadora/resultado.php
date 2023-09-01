<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="resultado.php" method="GET">
      numero 1: <input type="number" id="num1" name="num1"><br>
      Operador : <input type="text" id="op" name="op"><br>
      numero 2: <input type="number" id="num2" name="num2"><br>
      <input type="submit" value="Calcular">
    </form>     
      <p> o resultado eh: <?php
    echo "<p>$resul </p>";
    ?> </p>
</body>
</html>

<?php
 $primeiro = $_GET ["num1"];
 $op = $_GET ["op"];
 $segundo = $_GET ["num2"];
$resul=0;

 if($op == "+") 
 { $resul = $primeiro + $segundo;
 }
elseif($op == "-") 
{ $resul = $primeiro - $segundo;
}
elseif($op == "*") 
{ $resul = $primeiro * $segundo;
}
elseif($op == "/") 
{ $resul = $primeiro / $segundo;
}
?> 

