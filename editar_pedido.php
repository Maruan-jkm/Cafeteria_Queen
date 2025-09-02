<?php
include("conexion.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
    echo "<script>alert('Debes iniciar sesión primero'); window.location.href = 'formulario.php';</script>";
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

if (isset($_GET['id'])) {
    $id_pedido = intval($_GET['id']);

    // Obtener datos del pedido para mostrar en el formulario
    $stmt = $conex->prepare("SELECT * FROM pedidos WHERE id = ? AND id_usuario = ?");
    $stmt->bind_param("ii", $id_pedido, $id_usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $pedido = $resultado->fetch_assoc();
    } else {
        echo "<script>alert('Pedido no encontrado o no tienes permiso'); window.location.href = 'pedidos.php';</script>";
        exit();
    }
    $stmt->close();
} else {
    echo "<script>alert('ID de pedido no proporcionado'); window.location.href = 'pedidos.php';</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nueva_cantidad = intval($_POST['cantidad']);
    $precio_unitario = floatval($_POST['precio_unitario']);
    $nuevo_total = $nueva_cantidad * $precio_unitario;

    $stmt = $conex->prepare("UPDATE pedidos SET cantidad = ?, precio_total = ? WHERE id = ? AND id_usuario = ?");
    $stmt->bind_param("idii", $nueva_cantidad, $nuevo_total, $id_pedido, $id_usuario);

    if ($stmt->execute()) {
        echo "<script>alert('Pedido actualizado correctamente'); window.location.href = 'pedidos.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar el pedido');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Pedido</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-center text-yellow-700">Editar Pedido</h2>
        <form action="" method="post" class="space-y-4">
            <div>
                <label class="block text-gray-700">Producto:</label>
                <input type="text" name="producto" value="<?php echo htmlspecialchars($pedido['producto']); ?>" class="w-full border p-2 rounded bg-gray-100" disabled>
            </div>
            <div>
                <label class="block text-gray-700">Cantidad:</label>
                <input type="number" name="cantidad" min="1" value="<?php echo $pedido['cantidad']; ?>" class="w-full border p-2 rounded" required>
            </div>
            <input type="hidden" name="precio_unitario" value="<?php echo $pedido['precio_total'] / $pedido['cantidad']; ?>">
            <div>
                <button type="submit" class="w-full bg-yellow-700 hover:bg-yellow-800 text-white py-2 rounded">Guardar cambios</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a href="pedidos.php" class="text-blue-600 hover:underline">Volver a pedidos</a>
        </div>
    </div>
</body>
</html>