<?php 
  $msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
  {
  $nome = $_POST["nome"];
  $idade = $_POST["idade"];
  $genero = $_POST["genero"];
  echo "nome: $nome " . " idade: $idade ". " genero: $genero ";
  $arqCad = fopen("cadastro.txt","a") or die("erro ao criar arquivo");
    $linha = "nome;idade;genero\n";
    $linha = $nome . ";" . $idade . ";" . $genero . "\n";
    fwrite($arqCad,$linha);
    fclose($arqCad);
    $msg = "arquivo criado com sucesso!";
  }

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta 
  name="viewport" 
  content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Criar Nova Disciplina</h1>
<form action="index.php" method="POST">
    Nome: <input type="text" name="nome">
    <br><br>
    Idade: <input type="text" name="idade">
    <br><br>
    Genero: <input type="radio" id="F" name="genero" value="f">
    <label for="F" >F</label>
    <input type="radio" id="M" name="genero" value="m">
    <label for="M" >M</label>
    <br><br>
    <input type="submit" value="Cadastrar">
</form>
<p><?php echo $msg ?></p>
<br>
</body>
</html>