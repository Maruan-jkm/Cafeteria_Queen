<?php
$host = "localhost";
$usuario = "root";
$contrasena = "12554698"; // O tu contraseña si configuraste una
$baseDeDatos = "cafeteria"; // Cámbialo por el nombre correcto

$conexion = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>