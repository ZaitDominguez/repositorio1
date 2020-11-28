<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$email = $_POST["email"];
$edad = $_POST["edad"];

$insertar = "INSERT INTO usuarios2 (nombre,clave,email,edad) VALUES ('$nombre','$clave','$email','$edad')";
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo "Error al registrarse";

}else{

	header("location:index.html");
}

mysqli_close($conexion);