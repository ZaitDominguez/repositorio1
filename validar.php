<?php
 session_start();

$email=$_POST['email'];
$clave=$_POST['clave'];

//conectar a la base de datos
$_SESSION['email'] = $email;
$conexion=mysqli_connect("localhost", "root", "", "sesion");
$consulta="SELECT * FROM usuarios2 WHERE email='$email' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {  header("location:index.php"); 
   
}
else {
    echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>