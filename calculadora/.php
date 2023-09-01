
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculadora</title>
</head>
<body>
 <p> o resultado eh: <?php
    echo "<p>$resul </p>";
    ?> </p>
</body>
</html>

