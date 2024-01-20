<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
     $nome = "Franklin";
     const ESTADO = "RS";
     $LutadorNome = "Rodrigo";
     $LutadorSobrenome = "Nogueira";
     
     echo "$nome ";
     echo ' $nome ';

     //echo " Moro no ESTADO"; //errado
     echo " Moro no ".ESTADO;

     echo " ; $LutadorNome \"Minotauro\" $LutadorSobrenome";
    ?>
</body>
</html>