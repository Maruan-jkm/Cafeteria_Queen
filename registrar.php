<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $contrasena = trim($_POST['contraseña']);

    $mensaje = "";

    // Validación de datos
    if (!empty($nombre) && filter_var($correo, FILTER_VALIDATE_EMAIL) && preg_match("/^\d{10}$/", $telefono)) {

        // Verificar si el teléfono ya existe en la base de datos
        $stmt_check = $conex->prepare("SELECT * FROM usuarios WHERE telefono = ?");
        $stmt_check->bind_param("s", $telefono);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            $mensaje = "El número de teléfono ya está registrado.";
        } else {
            // Hashear contraseña
            $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

            // Insertar nuevo registro
            $rol = "usuario"; 
            $stmt_insert = $conex->prepare("INSERT INTO usuarios (nombre, correo, telefono, contrasena, rol) VALUES (?, ?, ?, ?, ?)");
            $stmt_insert->bind_param("sssss", $nombre, $correo, $telefono, $hashed_password, $rol);

            if ($stmt_insert->execute()) {
                $mensaje = "Tu registro se ha completado correctamente.";
            } else {
                $mensaje = "Error al guardar los datos. Inténtalo más tarde.";
            }
            $stmt_insert->close();
        }
        $stmt_check->close();
    } else {
        $mensaje = "Por favor, verifica los datos ingresados.";
    }
    // Mostrar mensaje
    echo "<script>alert('$mensaje'); window.location.href = 'formulario.php';</script>";
}
$conex->close();
?>