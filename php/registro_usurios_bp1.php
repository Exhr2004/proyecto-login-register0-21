<?php 
include 'php/conexionbasededatosbe.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre_completo, correo, usuraio, contrasena) 
         VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


$EJECUTAR = mysqli_query($conexion, $query)
?>