<?php
include("conexion.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST['correo']);
    $contrasena = trim($_POST['contraseña']);

    $stmt = $conex->prepare("SELECT id, contrasena, rol FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($contrasena, $usuario['contrasena'])) {
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['rol'] = $usuario['rol'];

            // Redirigir según el rol
            if ($usuario['rol'] === 'administrador') {
                header("Location: http://localhost/queen/admin_productos.php");
            } else {
                header("Location: http://localhost/queen/index.html");
            }
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href='formulario.php';</script>";
        }
    } else {
        echo "<script>alert('Correo no registrado'); window.location.href='formulario.php';</script>";
    }

    $stmt->close();
}

$conex->close();
?>