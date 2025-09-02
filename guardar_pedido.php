<?php
include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['id_usuario'])) {
        echo "Error: Debes iniciar sesión para hacer pedidos.";
        exit();
    }

    $id_usuario = $_SESSION['id_usuario'];
    $producto = $_POST["producto"];
    $cantidad = (int) $_POST["cantidad"];
    $precio_unitario = (float) $_POST["precio"];
    $precio_total = $cantidad * $precio_unitario;

    $sql = "INSERT INTO pedidos (producto, cantidad, precio_total, id_usuario)
            VALUES (?, ?, ?, ?)";

    $stmt = $conex->prepare($sql);
    $stmt->bind_param("sidi", $producto, $cantidad, $precio_total, $id_usuario);

    if ($stmt->execute()) {
        echo "✅ Pedido guardado correctamente.";
    } else {
        echo "❌ Error al guardar el pedido: " . $stmt->error;
    }

    $stmt->close();
    $conex->close();
}
?>
