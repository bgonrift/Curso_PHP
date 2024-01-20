<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>

    <main>
        <?php
           $numero = $_REQUEST["Numero"] ?? 0;
           $antecessor = $numero - 1;
           $sucessor = $numero +1; 
           echo "<p>O número escolhido foi <strong>$numero</strong>. O seu Antecessor é <strong>$antecessor</strong>. O seu sucessor é <strong>$sucessor</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'"><- Voltar</button>
    </main>
</body>

</html>