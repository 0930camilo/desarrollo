<?php
include 'conexion_b.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$query = "INSERT INTO usuario (nombre, correo, clave)
                  VALUES ('$nombre_completo', '$correo', $clave)";

$ejecutar = mysqli_query($conexion, $query);
?>