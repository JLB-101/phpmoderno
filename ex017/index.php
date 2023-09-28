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
            <h1>Calculadora de Tempo (v1.0)</h1>
        </div>
    </section class="section">

    <script>
        // php
        <?php
        $totalSegundos= $_GET['seg'] ?? 0;


        ?>
    </script>

    <section class="section">
        <p>informe o numero para calcular-se as raizes:</p>
        <div class="container">
            <!-- form | formulário -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <label for="sobrenome"> Qual e o tempo em segundos?</label>
                <input type="number" name="seg" id="seg"  min="0" step="0.1" requered>
                <input type="submit" value="Calcular 🔍︎">
            </form>

            <form action="">
                <?php
                //calcular as raizes
              
                $sobra = $totalSegundos;
                
                //total de Semanas
                $semana = (int)($sobra / 604_800);
                $sobra = $sobra %  604_800;

                //tOtal de Dias
                $dia = (int)($sobra / 86_400);
                $sobra = $sobra % 86_400;

                //Total de Horas
                $hora = (int)($sobra / 3_600);
                $sobra = $sobra % 3_600;

                //total de Minutos
                $minuto = (int)($sobra / 60);
                $sobra = $sobra % 60;

                //Total de Segundos
                $segundo = $sobra;


               
                ?>

                <h2>Totalizando tudo</h2>
                <p>Analizando o valor que voce digitou, { <b><?=$totalSegundos;?></b> } segundos equivalem a um total de: </p>
                <ul>
                    <li>{<?=$semana;?>} semanas</li>
                    <li>{<?=$dia; ?>} Dias</li>
                    <li>{<?=$hora;?>} Horas</li>
                    <li>{<?=$minuto; ?>} minutos</li>
                    <li>{<?=$segundo; ?>} segundos</li>

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