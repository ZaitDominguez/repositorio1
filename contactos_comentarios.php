<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$conexion=mysqli_connect("localhost", "root", "", "contactanos");
$insertar = "INSERT INTO comentarios (nombre,email,mensaje) VALUES ('$nombre','$email','$mensaje')";
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo "Error al registrarse";

}else{

	header("location:index.html");
}

mysqli_close($conexion);