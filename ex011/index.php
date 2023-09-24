<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno, Formulario retro alimentado <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">click aqui</a></title>

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

        <div class="container">
            <p>
                Interaction with the form |
                Interação com o formulário
            </p>
            <h1> Anatomia de uma divisao (v1.0)</h1>
            <?php
            //getting datas from this page ||  pegando valor desta pagina
            $x = $_GET["x"] ?? 0;
            $y = $_GET["y"] ?? 0;
            ?>
        </div>

    </section>

    <section class="section">
        <p>!enter the numbers | digite os numeros !</p>

        <div class="container">
            <!-- form | formulário retroalimentado -->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">

                <div>
                    <label for="sobrenome">numero dividendo </label>
                    <input type="number" name="x"  value="<?php $x; ?>" requered>
                </div>
                <div>
                    <label for="sobrenome">Numero  divisor</label>
                    <input type="number" name="y"  value="<?php $x; ?>"" requered>
                </div>



                <input type="submit" value="Dividir">
            </form>


        </div>

    </section>

    <section class="section">

        <div class="container">
        <h1> Result | Resultado da divisao</h1>
            <?php
              
              $soma = ($x+$y);

                echo "  <label for='resultadoSoma'> A soma entre $x + $y e igual a: </label>";
                echo "  <input type='number' value='$soma' >";
                
            ?>
            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
            <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>

    </section>
    </div>


    <section class="section">
        <div class="container">
            <h3>Video da Aula:</h3>
            <p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/xPDsdZl42Rw?si=9VRM3wEB1sDi2maY&amp;start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </p>
        </div>
        <section>

        </section>
        <!-- js scripts -->
        <script src="/js/topnav.js"></script>
        <?php require_once("../view/footer.php"); ?>
</body>

</html>