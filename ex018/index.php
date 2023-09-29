<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno,Desafio 12 Calculadora de Tempo - curso em video <a
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
            <h1>Simulando um Caixa Eletronica (v1.0)</h1>
        </div>
    </section class="section">

    <script>
        // php
        <?php
        $saque = $_GET['s'] ?? 0;


        ?>
    </script>

    <section class="section">
        <p>Caixa eletronico:</p>
        <div class="container">
            <!-- form | formulário -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <label for="sobrenome"> Qual e o valor que deseja sacar?</label>
                <input type="number" name="s" id="s"  min="0" step="0.1" requered>
                <input type="submit" value="Sacar 🔍︎">
            </form>

            <form action="">
                <?php
                //calcular os saques
              
                $resto = $saque;

                //saque de 100
                $tot100 = floor($resto / 100);
                $resto %= 100; //$resto = $resto % 100;

                //saque de 100
                $tot50 = floor($resto / 50);
                $resto %= 50;

                //saque de 10
                $tot10 = floor($resto / 10);
                $resto %= 10;

                 //saque de 5
                 $tot5= floor($resto / 5);
                 $resto %= 5;

                
                ?>

                <h2>Calculando o Saque</h2>
                <p> Seu saque de MTN { <b><?=$saque;?></b> } vai resultar em:   </p>
                <ul>
                    <li>{<?=$tot100;?>} notas de 100 MTN</li>
                    <li>{<?=$tot50; ?>} notas de 50 MTN</li>
                    <li>{<?=$tot10;?>} notas de 10 MTN</li>
                    <li>{<?=$tot5; ?>} notas de 5 MTN</li>
                    <li>{<?=$resto; ?>} Faltou sacar</li>

                </ul>
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