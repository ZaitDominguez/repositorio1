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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style/estilos_menu.css">
    <link rel="stylesheet" href="style/sesion.css">
    <link rel="stylesheet" href="">
    <title>Los mejores canales en vivo</title>
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

    <br>
    <br>

    <a href="cerrar_session.php">cerrar session</a>

    <h2>Bienvenido: <?php echo $_SESSION['email'] ?></h2>
  
    <hr>

    <div class="container">
            
        <div class="card-deck mb-3 text-center" id="contenido">
            
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/tele_antillas.jpg" class="card-img-top" height="200">
                    <a href="tele_antillas.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/telesistema-canal11.jpg" class="card-img-top" height="200">
                    <a href="telesistemas.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/canal25.jpg" class="card-img-top" height="200">
                    <a href="canal25.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/cinevision.jpg" class="card-img-top" height="200">
                    <a href="cinevision_canal_19.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

        </div>

            <div class="card-deck mb-3 text-center" id="contenido">
            
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <img src="imagenes_de_los_canales/rnn_canal27.png" class="card-img-top" height="200">
                        <a href="rnn_canal27.html" class="btn btn-block btn-primary">Ver</a>
                    </div>
                </div>
    
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <img src="imagenes_de_los_canales/supertv55santiago.png" class="card-img-top" height="200">
                        <a href="supertv55santiago.html" class="btn btn-block btn-primary">Ver</a>
                    </div>
                </div>
    
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <img src="imagenes_de_los_canales/tv_recuerdos_canal_56_santo_domingo.jpg" class="card-img-top" height="200">
                        <a href="tv_recuerdos_canal56.php" class="btn btn-block btn-primary">Ver</a>
                    </div>
                </div>
    
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <img src="imagenes_de_los_canales/bonao tv.jpeg" class="card-img-top" height="200">
                        <a href="canal8.php" class="btn btn-block btn-primary">Ver</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center" id="contenido">
            
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/teleunion.jpeg" class="card-img-top" height="200">
                    <a href="canal16.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/peravia_vision.jpeg" class="card-img-top" height="200">
                    <a href="canal12.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/COLOR-VISION.jpg" class="card-img-top" height="200">
                    <a href="colorvision.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/Canal-4.png" class="card-img-top" height="200">
                    <a href="canal4.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

        </div>

        <div class="card-deck mb-3 text-center" id="contenido">
        
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/teleuniverso.jpg" class="card-img-top" height="200">
                    <a href="teleuniverso.php" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/" class="card-img-top" height="200">
                    <a href="" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/" class="card-img-top" height="200">
                    <a href=".html" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="imagenes_de_los_canales/" class="card-img-top" height="200">
                    <a href="" class="btn btn-block btn-primary">Ver</a>
                </div>
            </div>

        </div>

        </div>

</div>

        <script src="js/popup.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.4.1.min.js"></script>

    
</body>
</html>