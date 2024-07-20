<?php
include 'conexion.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo_electronico =$_POST['correo'];
$password = $_POST['contraseña'];


$sql = "INSERT INTO usuarios (Nombre, Apellidos, Usuarios, Correo, Contraseña, ) VALUES ('$nombre', '$apellido', '$usuario', '$correo','$contraseña');";

$resultado = mysqli_query($db,$sql);
?>