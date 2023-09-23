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
    <link rel="stylesheet" type="text/css" href="../ccstyle/fildstyle.css">
</head>

<body>

<div class="topnav" id="myTopnav">
        <a href="../index.php">PHP modero, 🐘</a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">By: Curso em Video</a>
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

            //getting value from index.php | obtendo valor do index.php
            $n = $_GET["n"] ?? $n = 0.00;

            //convert MT to R$ | converter Metical para real
            $r = ($n / 12.86);

            //convert MT to US$ | converter Metical para dolar
            $u = ($n / 63.25);



            //print result | imprimir resultado 
            echo "
                <di>
                    <p><b>NB:</b> acording to the currncy exchange rate of the day | de acordo com a taxa de cambio do dia :
                    <h5>22/09/23, 14:56 UTC</h5>
                    
                   
                    
                       <h6> MZN(MT) - BRL(R$): 0,077 R$ | BRL(R$) - MZN(MT): 12.86 MT  </h6>
                        <h6>MZN(MT) - USD($): 0,016  $  | USD($) - MZN(MT) : 63.25 MT  </h6>
                    </p>

                    
                    <p>
                        Your money: $n  MZN in metical | O seu dinhiro $n MZN em Metical
                    </p>
                    <h6>Exchanged Money</h6>
            
                    <!-- form | formulário -->
                    <form action='' method=''>
                        <div>
                            <label for=''>Now In USD$ dollar | Agora em USD$ dollar americano</label>
                            <!-- <input type='number' name='n' id='n' required> -->
                            <input type='text' value='$$u '>
                        </div>
                        <div>
                            <label for=''> Now In BRL real from brazil | Agora em BRL real brasileiro</label>
                            <!-- <input type='number' name='n' id='n' required> -->
                            <input type='text' value='$r R$'> 
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
    <script src="../js/topnav.js"></script>
    <?php require_once("../view/footer.php"); ?>
</body>

</html>