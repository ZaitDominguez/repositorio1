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
    <title>LOS MEJORES CANALES EN VIVO</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos_menu.css">
     <link rel="stylesheet" href="css/canal 19.css">

</head>
<body>

    
    <section class="title" class="logotipo">
        <h1>canal de Cinevision</h1>
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

   <center><img src="img/canal 19.jpg" alt=""></center>

    <div class="container">
        <div class="row">
            <div class="col-8">

                <iframe src="https://canalesdominicanosenvivo.com/asset/play/rep.php?id=197&fbclid=IwAR1u6U-fB1DbPBSbE2oYEsaxvTxbnoMmXrgugnDZXdIay42ps4AlMgGNmfs" frameborder="0" height="500" width="600" allowfullscreen></iframe>

            </div>

            <div class="col-4">
<p id="parrafo">Cinevision 19 es un canal de TV de la República Dominicana, que ofrece una programación con producciones propias, que incluye informativos y periodísticos, además de música y entretenimiento. Algunos programas: Kcolmado, Registro Informativo, A Ritmo, Tiempo de impacto.</p>
            </div>

        </div>
    </div>

<script src="js/jquery-3.4.1.min -.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/popper.min.js"></script>


</body>
</html>