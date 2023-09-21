<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-moderno, curso em video <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">click aqui</a></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ccstyle/index.css">
    <link rel="stylesheet" type="text/css" href="ccstyle/menutop.css"> 
</head>
<body>

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="text">PHP modero, By:</a>
        <a href="https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&si=5AJfj8OuyTrydVKF" target="_blank" rel="noopener noreferrer">Curso em Video</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <section class="section">
       <h1>Lista de Exercicios</h1>
       
       <div class="container">
        <!-- PHP-scope -->
        <?php 
        $d = dir(".");
        echo "<ul>";
        while(false !== ($entry = $d->read())) {

            if($entry[0] == "e" && $entry[1] == "x"){

                 /*Eng: print | Pt: imprima*/
                echo "<li style='color:blue ;'><a href='{$entry}'>{$entry}</a></li>";
            }else{

                /*Eng: dont print | Pt: não imprima*/
                
            }
            
        }
        echo "</ul>";
        $d->close();
        
        ?>
       </div>

    </section>
    <!-- js scripts -->
    <script src="/js/topnav.js"></script>
    <!-- <?php require_once("./view/footer.php"); ?> -->
</body>
</html>
