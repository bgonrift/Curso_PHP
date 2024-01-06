<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
   //  var_dump($_REQUEST); // $_GET  $_POST $_COOKIES 
    $nome =  $_GET["Nome"] ?? "sem nome";
    $sobrenome = $_GET["Sobrenome"] ?? "sem sobrenome";
    $idade = $_GET["Idade"];
    $dtNascimento = $_GET["DtNascimento"];
    $sexo = $_GET["Sexo"];
                                                                                             //Formata data de nascimento
    echo "<p>É um prazer te conhecer, $nome $sobrenome! Idade: $idade, Data de nascimento: ".date("d/M/Y", strtotime($dtNascimento)). ", Sexo: $sexo";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
  </main>  
</body>
</html>