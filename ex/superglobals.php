<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php curso aula, Super globals</title>

    <link rel="stylesheet" type="text/css" href="../ccstyle/index.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/menutop.css">
    <link rel="stylesheet" type="text/css" href="../ex007/index.css">
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="../index.php" class="text">PHP modero, By:</a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF"
            target="_blank" rel="noopener noreferrer">Curso em Video</a>
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

            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
            
            echo "<form><h1> Superglobais: </h1>";

            echo "<label> Superglobal COOKIE  </label>";
            //getting data from url with GET method
          
            var_dump($_COOKIE);

            echo "<label> Superglobal _SESSION  </label>";
            //getting data from url with GET method
            $_SESSION["teste"] = "FUNCIONOU";
            var_dump($_SESSION);


            
            echo "<label>  Superglobal GET </label> ";

            //getting data from url with GET method
            var_dump($_GET);


            echo "<label> Superglobal POST </label> ";
           

            //getting data from  post method
            var_dump($_POST);

            echo "<label> Superglobal _REQUEST </label>";
           

            //getting data from  post method
            var_dump($_REQUEST);


            echo "<label> Superglobal ENV  </label>";
            //getting data from url with GET method
           
            var_dump($_ENV);
            // foreach(getenv() as $c => $v) {
            //     echo "<br> $c -> $v";
            // }

            echo "<label> Superglobal SERVER  </label>";
            //getting data from url with GET method
           
            var_dump($_SERVER);


            echo "<label> Superglobal GLOBAL  </label>";
            //getting data from url with GET method
           
            var_dump($GLOBALS);
           



            echo "</form>";

            ?>
            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
            <button onclick='javascript:history.go(-1)'>voltar</button>

        </div>

    </section>



    <section class="section">
        <div class="container">
            <a href="https://github.com/gustavoguanabara/php-moderno" target="_blank"
                rel="noopener noreferrer">Resitorio de phpmoderno</a>
        </div>
    </section>
    <!-- js scripts -->
    <script src="../js/topnav.js"></script>
    <?php require_once("../view/footer.php"); ?>
</body>

</html>