<pre>
<?php
$url = '
https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo
(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-03-2023\'&@dataFinalCotacao=\'04-07-2023\'&
$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao
';   
// Trata dados em json 
$dados = json_decode(file_get_contents($url), true);

//var_dump($dados);

$cotacao = $dados["value"][0]["cotacaoCompra"];

echo "A cotação foi $cotacao";
?>
</pre>