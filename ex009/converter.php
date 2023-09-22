<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno, curso em video <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">click aqui</a></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/index.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/menutop.css">
    <link rel="stylesheet" type="text/css" href="../ex007/index.css">
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="text">PHP modero, By:</a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">Curso em Video</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <section class="section">
        <h1>Resultados do procesamento</h1>

        <div class="container">
            <!-- php-code -->
            <?php

            include_once("../ex008/testeapi.php");

            //
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //getting value from index.php | obtendo valor do index.php
            $n = $_GET["n"] ?? $n = 0.00;

            //real to dollar
            $r = $n;

            //get values( dollar to real) from api
            $cotecao;

            //convert dollar to real: USD($)-RBL(R$) | conversao de dollar para metical, valor de compra.
            $dolar = $r / $cotecao;

            //
            $metical = $r * 12.82;






            echo ('<div><b>Fonte dos dados: API (</b><a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2709-15-2023%27&@dataFinalCotacao=%2709-22-2023%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=text/html&$select=cotacaoCompra,dataHoraCotacao" target="_blank" rel="noopener noreferrer" >Banco Central do Brasil</a>)</div>');
            //print result | imprimir resultado 
            echo "
                <di>
                    <p>
                    <b>NB:</b> acording to the currncy exchange rate of the  | de acordo com a taxa de cambio do dia : 
                   compra do dollar hoje e:  $cotecao</b>
                   </p>

                    
                    
                    <h6>Exchanged Money</h6>
            
                    <!-- form | formulário -->
                    <form action='' method=''>

                  
                      
                        <div>
                            <label for=''>   Your money: $n  R$ in real | O seu dinhiro $n R$ em Real</label>
                            <!-- <input type='number' name='n' id='n' required> -->
                            <input type='text' value=' " . numfmt_format_currency($padrao, $r, 'BRL') . "  '>
                        </div>
                        <div>
                        <label for=''>Now In USD$ dollar | Agora em USD$ dollar americano</label>
                        <!-- <input type='number' name='n' id='n' required> -->
                        <input type='text' value=' " . numfmt_format_currency($padrao, $dolar, 'USD') . "  '>
                        </div>
                        <div>
                        <label for=''>Now In MZN Metical MT | Agora em MZN Metical de Mozambique</label>
                        <label for=''>From: Google | 22/09/23, 19:52 UTC</label>
                        
                        <input type='text' value=' " . numfmt_format_currency($padrao, $metical, 'MZN') . "  '>
                        </div>
                    </form>
                </di>
            ";

            ?>
            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
            <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>

        </div>

    </section>



    <section class="section">
        <div class="container">
            <a href="https://github.com/gustavoguanabara/php-moderno" target="_blank" rel="noopener noreferrer">Resitorio de phpmoderno</a>
        </div>
    </section>
    <!-- js scripts -->
    <script src="/js/topnav.js"></script>
    <?php require_once("../view/footer.php"); ?>
</body>

</html>