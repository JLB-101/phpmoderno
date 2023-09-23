<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno, Desafio ex005 <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">click aqui</a></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/index.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/menutop.css">
    <link rel="stylesheet" type="text/css" href="../ex007/index.css">
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
              $num = $_POST["n"] ?? 0;


            //
            echo ('<div> <b>NB:</b>  Analyzing the number entered by user | Analisando o numero  informado pelo usario: </div');


            echo "<br><br> Analisando o numero: " . number_format($num, 3, ",", ".");

            $int = (int) $num;
            $fra = $num - $int;

            //print result | imprimir resultado 
           
            echo " <div> <h6>Exchanged Money</h6>  </div> ";

           
            echo " <div> <form>";
            
            echo ' A parte inteira do numero e: ' . number_format($int, 0, ",", ".");
            echo ' <br><br>A parte Francionario do numero e: ' . number_format($fra, 3, ",", ".");
            echo "</form> </div>";




            ?>
            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
            <button onclick='javascript:history.go(-1)'>voltar</button>

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