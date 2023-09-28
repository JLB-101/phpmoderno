<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno,  Desafio 10 Maquina do tempo - curso em video <a
            href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF"
            target="_blank" rel="noopener noreferrer">click aqui</a></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/index.css">
    <link rel="stylesheet" type="text/css" href="../ccstyle/menutop.css">
    <link rel="stylesheet" type="text/css" href="../ex007/index.css">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../index.php">PHP modero,🐘</a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF"
            target="_blank" rel="noopener noreferrer">By: Curso em Video</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <section class="section">
        <div class="container">
            <p>Interaction with the form | Interação com o formulário</p>
            <h1> MAquina do Tempo (v1.0)</h1>
        </div>
    </section class="section">

    <script>
        // php
        <?php
        $nasc = $_GET['x'] ?? 1995;
        
        $atual = date("Y") ?? 2023;

        ?>
    </script>

    <section class="section">
        <p>informe as datas, para Saber Quantos anos Atualmente</p>
        <div class="container">
            <!-- form | formulário -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <div>
                    <label for="sobrenome"> Data atual</label>
                    <input type="number" name="y" id="y" value="<?=$atual; ?>" step="0.001" requered>
                    <label for="sobrenome">Data nascimento</label>
                    <input type="number" name="x" id="x"  value="<?=$nasc; ?>" step="0.001" requered>
                </div>
              
                <input type="submit" value="Calcular 🔍︎">
            </form>

            <form action="">
                <?php
                //calcular as raizes
                $idade = ($atual - $nasc) ;
               
                echo "<p> Quem nasceu em <b>$nasc</b>,  <b> tem ". number_format($idade, 2, ",", ".") . " </b></p>";
               
                ?>
            </form>

            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
            <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <h3>Video da Aula:</h3>
            <p>
                <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/xPDsdZl42Rw?si=9VRM3wEB1sDi2maY&amp;start=2"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </p>
        </div>
        <section>

        </section>
        <!-- js scripts -->
        <script src="/js/topnav.js"></script>
        <?php require_once("../view/footer.php"); ?>
</body>

</html>