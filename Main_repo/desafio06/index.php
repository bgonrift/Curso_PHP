<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PhP 06</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
      //Capturando os dados para o formulário retroalimentado
      $vDividendo = $_GET['dividendo'] ?? 0;
      $vDivisor   = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<? $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$vDividendo ?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$vDivisor ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="estrutura">
        <h2>Estrutura da divisão</h2>
        <?php 
            $quociente = intdiv($vDividendo, $vDivisor);
            $resto     = $vDividendo % $vDivisor;

            //print "<p>O dividendo é $vDividendo, o divisor é $vDivisor, o resultado é $resultado e o resto é $resto.</p>"
            echo "<ul>";
            echo "<li>Dividendo = $vDividendo</li>";
            echo "<li>Divisor = $vDivisor</li>";
            echo "<li>Resultado = $quociente</li>";
            echo "<li>Resto = $resto</li>";
            echo "</ul>";
        ?>
    </section>
</body>

</html>