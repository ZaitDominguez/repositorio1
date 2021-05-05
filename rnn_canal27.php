<?php
session_start();
$varsession = $_SESSION['email'];
error_reporting(0);
if($varsession == null || $varsession = '') {
    echo'usted no tiene permisos para esta accion';
    die();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/estilos_menu.css">
    <link rel="stylesheet" href="css/styleE.css">
    <title>Los mejores canales en vivo</title>
</head>
<body>
    
    <section class="title" class="logotipo">
        <h1>Rnn canal27</h1>
    </section>

   


    <nav class="navegacion">
        <ul class="menu" >


            <li class="first-item">
                <a href="index.php">
                    <img src="img/home.jpg" alt="" class="imagen">
                    <span class="text-item">Inicio</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="canales_nacionales.php">
                    <img src="img/canales_nacionales.jpg" alt="" class="imagen">
                    <span class="text-item">Nacionales</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="canales_locales.php">
                    <img src="img/canales_locales.jpg" alt="" class="imagen">
                    <span class="text-item">Locales</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="radio.php">
                    <img src="img/Radio.jpg" alt="" class="imagen">
                    <span class="text-item">Radio</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="contactos.html">
                    <img src="img/contactos.jpg" alt="" class="imagen">
                    <span class="text-item">Contacto</span>
                    <span class="down-item"></span>
                </a>
            </li>

        </ul>
    </nav>

    <br>
    <br>
    <br>
    <hr>

    <div class="container">
        <div class="row">

            <div class="container">
                <div class="row">
                    <div class="col-8">

                       <center><img src="img/rnn_canal27.png" alt="" width="400" height="170"></center> 

                       <div class="embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://canalesdominicanosenvivo.com/asset/play/rep.php?id=214" allowfullscreen height="500" width="700" frameborder="0"></iframe>                
                        
                       
                    </div>

                    <div class="col-4">

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p id="parrafo"></p>

                    </div>

                </div>
            </div>
            
        </div>
    </div>
        


            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            

</body>
</html>