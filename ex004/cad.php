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

        <?php
            
            //Eng: getting values 
            $nome = $_POST["nome"] ?? "Sem nome";
            $sobreNome = $_POST["sobrenome"]  ?? "desconhecido";

            echo "<p> Welcome sr(a). <b>$nome $sobreNome </b>!!!  to my website <br> Bem vindo sr(a). <b>$nome $sobreNome </b>!!! ao meu website</p>";
            echo "<a href='index.php'>voltar</a>";

        ?>
       </div>

    </section>

    <section class="section">
       <h1>Resultados do procesamento</h1>
       
       <div class="container">
        <?php
            //  Eng: junction of 3 superglobals $_GET, $_POST, $_COOKIES ||  Pt: junção de 3 superglobais $_GET, $_POST, $_COOKIES
            var_dump($_POST)

            
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
