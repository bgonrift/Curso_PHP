<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal , 0b = binário, 0 = octal
    //   $num = 010;
    //   echo "O valor da variáverl é $num"  

    // $var = true;
    // var_dump($var)

    // $num = 3e2; // 3 x 10(2)
    // echo "O valor é $num";

    $num = (int) "590"; // ****** Coerção *********
    var_dump($num);
    ?>
</body>
</html>