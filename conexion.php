<?php
$conex = new mysqli("localhost", "root", "12554698", "cafeteria");

if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}
?>