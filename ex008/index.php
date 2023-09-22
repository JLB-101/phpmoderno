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
    <p>Interaction with the form |
            Interação com o formulário</p>

        <h1>Currency converter | conversor de moedas RS$ - US$ </h1>
        <p><b>NB: Saiba Quanto vale o Seu Real RS$ em dollar americano US$ <br> O valor de compra do dollar hoje e: <?php include_once("../ex008/testeapi.php"); echo $cotecao; ?></b> </p>

        <div class="container">



        </div>

    </section class="section">

    <section class="section">
        <p>Click the button to get the number  Currency conversion| Clique no botao para obter a conversao da moeda </p>

        <div class="container">
            <!-- form | formulário -->
            <form action="converter.php" method="get">
                <label for="sobrenome"> Quantos Reias tens na carteira  R$ </label>
                <input type="number" name="n" id="n" required>
                <input type="submit" value="$ Converter $">
            </form>

            <!-- Eng: return to previous page || Pt: voltar a pagina anterior -->
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <h3>Video da Aula:</h3>
            <p>
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/01fQmB7aR5s?si=OYrkyVCGb6Gyn4Xw&amp;start=738" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                
            </p>
        </div>
        <section>

        </section>
        <!-- js scripts -->
        <script src="/js/topnav.js"></script>
        <?php require_once("../view/footer.php"); ?>
</body>

</html>