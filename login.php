<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST['correo']);
    $contrasena = trim($_POST['contraseña']); // Asegúrate que en el HTML también sea "contraseña"

    $stmt = $conex->prepare("SELECT * FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($contrasena, $usuario['contrasena'])) {
            $_SESSION['usuario'] = $usuario['nombre'];
            $_SESSION['rol'] = $usuario['rol'];

            // Redirigir según el rol
            if ($usuario['rol'] === 'admin') {
                header("Location: admin_productos.php");
                exit();
            } else {
                header("Location: index.html");
                exit();
            }
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.location.href = 'formulario.php';</script>";
        }
    } else {
        echo "<script>alert('No se encontró el usuario con ese correo.'); window.location.href = 'formulario.php';</script>";
    }
    $stmt->close();
}
$conex->close();
?>