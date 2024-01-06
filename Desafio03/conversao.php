<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Conversor de moedas</h1>
    <?php
    //Cotação copiada do google 
    $cotacao = 5.07;

    //Quanto $$ você tem
    $real = $_REQUEST["dinheiro"] ?? 0;

    //Equivalência em dólar 
    $dolar = $real / $cotacao;

    //Mostrar o resultado
    //  echo "Seus R\$" . number_format($real, 2, "," , ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

    //Formatação de moedas com internacionalização!
    //Biblioteca intl (internalization PHP)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    //Formatador numérico, valor numérico da moeda, String que representa o valor da moeda formatada.   
    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
    ?>
   
  </main>
  <button onclick="javascript:history.go(-1)"><- Voltar</button>
</body>

</html>