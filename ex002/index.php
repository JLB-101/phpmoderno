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
        <a href="../index.php">PHP modero, </a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">By: Curso em Video</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <section class="section">
    <p> Eng: Ex01:getting date  || 
         Pt:Ex01: pegando a data</p>

        <div class="container">
            <!-- PHP-scope -->
            <?php

            //date_default_timezone_get("Africa/Maputo");
            echo "Hoje e dia: "  .$date("d/M/Y");
            echo "e a hora atual e " .date("G:i:s Y");

            
            ?>
            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
        </div>

    </section class="section">
    <div class="container">
        <h3>Video da Aula:</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/p9DVWhe5Euw?si=3MgIvxTBRO_YMeQu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <section>

    </section>
    <!-- js scripts -->
    <script src="/js/topnav.js"></script>
    <?php require_once("./view/footer.php"); ?>
</body>

</html>