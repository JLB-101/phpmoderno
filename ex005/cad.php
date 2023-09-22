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
       
       
        <?php 

            //eng: Message  || pt: Variavel de Mensagem
            $msg;
            
            //eng: getting values from index.php  || pt: recebendo (pegendo) valores vindo de index.php
            $n= $_POST["n"] ?? $msg="enter a number | digite um numero";

           
            echo"\n<form> <p> finding predecessor and successor of <b>$n</b> | achando antecessor e sucessor de <b>$n</b> </p> \n";
            //operation: finding predecessor and successor || operacoes: achando antecessor e sucessor
            $x = ($n-1);// get predecessor of (n)|| obter antecessor de (n)
            $y = ($n+1);// get successor of (n)|| obter sucessor de (n)


            //print result || imprimir resultado
            echo "<p> the predecessor of $n  is: <b>$x</b> || <br> O antecessor de $n e: <b>$x<b></p>";
            echo "<p> the successor of $n  is: <b>$x</b> || <br> O sucessor de $n e: <b>$y<b></p> </form>";
            

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
    <?php require_once("./view/footer.php"); ?>
</body>
</html>
