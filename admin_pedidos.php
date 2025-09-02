<?php
session_start();
include("conexion.php");

// Verificar si el usuario es administrador
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'administrador') {
    echo "<script>alert('Acceso denegado. Solo administradores.'); window.location.href='formulario.php';</script>";
    exit();
}

$sql = "SELECT p.id, p.producto, p.cantidad, p.precio_total, u.nombre 
        FROM pedidos p 
        JOIN usuarios u ON p.id_usuario = u.id";
$resultado = $conex->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pedidos - Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .poppins-regular {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
    }
    .unbounded-apadrina {
      font-family: "Unbounded", sans-serif;
      font-weight: 700;
    }
  </style>
</head>

<body class="bg-yellow-100 text-[#333] font-sans">
  <div class="fixed top-0 w-full bg-[#6f4e37] text-[#bfa75c] font-bold p-4 z-20">
    <header>
      <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center p-2">
        <div class="flex items-center mb-4 sm:mb-0">
          <img src="img/logo.png" alt="Logo" class="h-16 w-auto ml-4" />
        </div>
        <nav class="flex flex-col sm:flex-row justify-center gap-6 text-lg font-medium">
        <a href="pagina/menu.html" class="hover:text-yellow-300 transition">Gestión del Menú</a>
        <a href="admin_pedidos.php" class="hover:text-yellow-300 transition">Gestión de Pedidos</a>
        <a href="categorias.html" class="hover:text-yellow-300 transition">Gestión de Categorías</a>
        <a href="usuarios.html" class="hover:text-yellow-300 transition">Gestión de Usuarios</a>
      </nav>
      </div>
    </header>
  </div>

  <div class="container mx-auto p-6 mt-40">
    <h1 class="unbounded-apadrina text-4xl font-bold mb-4 text-center text-brown-500">Lista de Todos los Pedidos</h1>
    <div class="mt-12 overflow-x-auto shadow-lg rounded-lg border border-yellow-200 bg-white">
      <table class="min-w-full">
        <thead>
          <tr class="bg-yellow-800 text-white uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Total</th>
            <th class="py-3 px-6 text-left">Producto</th>
            <th class="py-3 px-6 text-left">Cantidad</th>
            <th class="py-3 px-6 text-left">Cliente</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($fila = $resultado->fetch_assoc()): ?>
          <tr class="text-sm text-gray-800 bg-yellow-50 border-t border-yellow-200">
            <td class="py-3 px-6">$<?= number_format($fila['precio_total'], 2) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($fila['producto']) ?></td>
            <td class="py-3 px-6"><?= $fila['cantidad'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($fila['nombre']) ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>