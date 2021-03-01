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
    <title>  LOS MEJORES CANALES EN VIVO</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos_menu.css">
</head>
<body>

 <div class="container-fluid" id="principal">
     <div class="row">

        <div class="col-12">

			<img src="logo/telesistemaslogo.png" alt="" id="logo" height="90px" width="100px">  <h1 id="titulo"> Telesistemas canal 11 </h1>

        </div>
     </div>

 </div>





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
   
	</head>
	<body>
	
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 ">
					<h1> <span id="canal">Canal 11</span>  <span id="vivo" >EN VIVO</span> </h1>
				</div>

			</div>

		</div>

    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 ">
                
                
                <iframe src="https://canalesdominicanosenvivo.com/asset/play/rep.php?id=146" frameborder="0" height="700" width="800"></iframe> 
                
                
			</div>
			<div class="col-3">
<h1>Las mejores novelas,series, programas de television y mucho mas. </h1>
			</div>

        </div>
    </div>
 >
</body>
</html>