<?php 

//getting last 7 days's date | obtendo a data dos ultimos 7 dias
$i = date("m-d-Y", strtotime("-7 days"));

//getting today's date | obtendo a data  de hoje
$l = date("m-d-Y");

//getting data from api: bcb.gov.br
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $i.'\'&@dataFinalCotacao=\''. $l.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

// echo ('<div><b>Fonte dos dados: API (</b><a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2709-15-2023%27&@dataFinalCotacao=%2709-22-2023%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=text/html&$select=cotacaoCompra,dataHoraCotacao" target="_blank" rel="noopener noreferrer" >Banco Central do Brasil</a>)</div>');
// //'
$dados = json_decode(file_get_contents($url), true);

//printing json data as array
// var_dump($dados);

//take values on array
$cotecao = $dados["value"][0]["cotacaoCompra"];
// echo "<div> A contacao foi: $cotecao </div>";
















?>
