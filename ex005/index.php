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
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../index.php">PHP modero, </a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF"
            target="_blank" rel="noopener noreferrer">By: Curso em Video</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <section class="section">
        <p> Eng: interaction with the form |
            Pt: interação com o formulário</p>

        <div class="container">



        </div>

    </section class="section">

    <section class="section">
        <p>Enter a number | Diginte um numero</p>

        <div class="container">
            <!-- form | formulário -->
            <form action="cad.php" method="POST">
                <label for="sobrenome">Digite um numero</label>
                <input type="number" name="n" id="n" required>
                <input type="submit" value="Enviar">
            </form>

            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <h3>Video da Aula:</h3>
            <p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0oztg9RSpOo?si=_orGEjO-uavCqRei" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                
            </p>
        </div>
        <section>

        </section>
        <!-- js scripts -->
        <script src="/js/topnav.js"></script>
        <?php require_once("../view/footer.php"); ?>
</body>

</html>