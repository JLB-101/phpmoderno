<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno, curso em video <a
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
        <a href="../index.php">PHP modero, 🐘</a>
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
            <h1>Calculo de medias aritimeticas simples e ponderada (v1.0)</h1>
        </div>
    </section class="section">

    <script>
        // php
        <?php
        $x = $_GET['x'] ?? 1;
        $px = $_GET['px'] ?? 1;
        $y = $_GET['y'] ?? 1;
        $py = $_GET['py'] ?? 1;


        ?>
    </script>

    <section class="section">
        <p>informe o numero para calcular as medias</p>
        <div class="container">
            <!-- form | formulário -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <div>
                    <label for="sobrenome"> valor 1a:</label>
                    <input type="number" name="x" id="x" value="<?=$x; ?>" step="0.001" requered>
                    <label for="sobrenome"> Peso 1a:</label>
                    <input type="number" name="px" id="px"  value="<?=$px; ?>" step="0.001" requered>
                </div>
                <div>
                    <label for="sobrenome"> valor 2a:</label>
                    <input type="number" name="y" id="n"  value="<?=$y; ?>" step="0.001" requered>
                    <label for="sobrenome"> Peso 2a:</label>
                    <input type="number" name="py" id="n"  value="<?=$py; ?>" step="0.001" requered>
                </div>
                <input type="submit" value="Calcular 🔍︎">
            </form>

            <form action="">
                <?php
                //calcular as raizes
                $ma = ($x + $y) / 2 ;
                $mp = (($x* $px) + ($y * $py)) / ($px + $py);

                echo "<p>A media Aritimetica simples entre  <b>$x</b> e  <b>$y</b>: <b>" . number_format($ma, 2, ",", ".") . " </b></p>";
                echo "<p>A media Aritimetica Ponderada entre  <b>$x</b>^$px e  <b>$y</b>^$py: <b>" . number_format($mp, 2, ",", ".") . " </b></p>";
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