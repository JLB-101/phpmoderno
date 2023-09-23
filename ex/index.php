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
        <h1>Lista de Aulas</h1>

        <div class="container">
            <!-- PHP-scope -->
            📁
            <?php
            $d = dir(".");
            echo "<ul>";
            while (false !== ($entry = $d->read())) {

                if ($entry[0] == "a" && $entry[1] == "u") {

                    /*Eng: print | Pt: imprima*/
                    echo "📁<li style='color:blue ;'><a href='{$entry}'>{$entry}</a></li>";
                } 
            }
            echo "</ul>";
            $d->close();
            ?>
        </div>
        <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
        <!-- <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p> -->
    </section>

    <!-- github repository -->
    <section class="section">
        <div class="container">
            <a href="https://github.com/gustavoguanabara/php-moderno" target="_blank" rel="noopener noreferrer">Resitorio de phpmoderno</a>
        </div>
    </section>


    <!-- link to curso em video -->
    <section class="section">
        <div class="container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/TfsO0BGvGn0?si=Js54HUIviEq8o9Oa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </section>


    <!-- js scripts -->
    <script src="../js/topnav.js"></script>
    <?php require_once("../view/footer.php"); ?>

</body>
</html>