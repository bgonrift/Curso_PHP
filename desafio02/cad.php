<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>

    <main>
       <?php 
         $min = 0;
         $max = 100;

         $num = mt_rand($min, $max);
         //rand() = 1951 - linear Congrential Generator
         //mt_rand() = 1997 - Mersenne Twister
         // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
         // random_int() gera números aleatórios criptograficamente seguros 

         echo "<p> Gerando número aleatório entre $min e $max ... <br>
         O valor gerado foi <strong>$num</strong></p>";
         
       ?>
    </main>
    <!-- Botão para de recarregar a page -->
    <input type="button" value="Gerar outro" onclick="window.location.reload()">
</body>

</html>