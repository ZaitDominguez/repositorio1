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
     <link rel="stylesheet" href="css/canal25.css">
 </head>
 <body>


    <section class="title" class="logotipo">
        <h1>Los mejores canales en vivo</h1>
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



     
    <div class="container"> 
        <div class="row"> 
            <div class="col-12">
                <center><img src="img/canal25.png" alt=""></center>
            </div>
                 
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-9 mt-4">
                <iframe src="https://canalesdominicanosenvivo.com/asset/play/rep.php?id=140" frameborder="0" height="500" width="600"  allowfullscreen ></iframe>
               
            </div>      

            <div class="col-3 mt-4">
            Canal 25 está localizado en Santiago, República Dominicana. La Compañía está trabajando en Cine, Television y Video actividades de negocios.
            </div>
        </div>
    </div>

                   

 </body>
 </html>