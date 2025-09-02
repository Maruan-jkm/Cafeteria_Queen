<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['id_usuario'])) {
    echo "<script>alert('Debes iniciar sesión para ver tus pedidos'); window.location.href='formulario.php';</script>";
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

// Eliminar pedido si se solicita
if (isset($_GET['eliminar'])) {
    $idPedido = intval($_GET['eliminar']);
    $stmtDel = $conex->prepare("DELETE FROM pedidos WHERE id = ? AND id_usuario = ?");
    $stmtDel->bind_param("ii", $idPedido, $id_usuario);
    $stmtDel->execute();
    header("Location: pedidos.php");
    exit();
}

$sql = "SELECT p.id, p.producto, p.cantidad, p.precio_total, u.nombre 
        FROM pedidos p 
        JOIN usuarios u ON p.id_usuario = u.id 
        WHERE p.id_usuario = ?";
$stmt = $conex->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pedidos - Cafetería</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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

<body class="bg-cyan-300 text-[#333] font-sans">
  <div class="fixed top-0 w-full bg-[#6f4e37] text-[#bfa75c] font-bold p-4 z-20">
    <header>
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center p-2">
            <div class="flex items-center mb-4 sm:mb-0">
                <img src="img/logo.png" alt="Logo" class="h-16 w-auto ml-4" />
                <img src="/imagenes/menu.png" alt="Menu" class="w-10 h-10 sm:hidden" onclick="toggleMenu()"/>
            </div>

            <nav id="nav-menu" class="hidden sm:flex space-x-4">
                <a href="index.html" class="block text-base px-2 py-2 hover:text-amber-100 underline font-semibold">INICIO</a>
                <a href="Menu principal.php" class="block px-2 py-2 hover:text-amber-100 underline font-semibold">MENÚ</a>
                <a href="pedidos.php" class="block px-2 py-2 hover:text-amber-100 underline font-semibold">PEDIDOS</a>
                <a href="Nosotros.php" class="block px-2 py-2 hover:text-amber-100 underline font-semibold">NOSOTROS</a>
                <a href="promos.php" class="block px-2 py-2 hover:text-amber-100 underline font-semibold">PROMOCIONES</a>
            </nav>
        </div>
    </header>
  </div>

  <div class="container mx-auto p-6 mt-40">
    <h1 class="unbounded-apadrina text-4xl font-bold mb-4 text-center text-brown-500">Tu lista de Pedidos</h1>
    <div class="mt-12 overflow-x-auto shadow-lg rounded-lg border border-yellow-200 bg-white">
      <table class="min-w-full">
        <thead>
          <tr class="bg-yellow-800 text-white uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Total</th>
            <th class="py-3 px-6 text-left">Producto</th>
            <th class="py-3 px-6 text-left">Cantidad</th>
            <th class="py-3 px-6 text-left">Cliente</th>
            <th class="py-3 px-6 text-left">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($fila = $resultado->fetch_assoc()): ?>
          <tr class="text-sm text-gray-800 bg-yellow-50 border-t border-yellow-200">
            <td class="py-3 px-6">$<?= number_format($fila['precio_total'], 2) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($fila['producto']) ?></td>
            <td class="py-3 px-6"><?= $fila['cantidad'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($fila['nombre']) ?></td>
            <td class="py-3 px-6">
              <a href="editar_pedido.php?id=<?= $fila['id'] ?>" class="bg-yellow-700 hover:bg-yellow-800 text-white px-4 py-1 rounded mr-1">Editar</a>
              <a href="?eliminar=<?= $fila['id'] ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este pedido?')" class="bg-red-600 hover:bg-red-700 text-white px-4 py-1 rounded">Eliminar</a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

  <footer class="bg-[#6f4e37] text-white text-center py-10 px-5 mt-10">
    <h2 class="italic text-4xl mb-2 font-bold">Contacto</h2>
    <p class="italic text-xl mb-4">Contáctanos vía WhatsApp o visita nuestro local, contamos con servicio a domicilio:</p>
    <p class="italic text-xl mb-4">Teléfono: <strong>99-11-13-73-05</strong></p>

    <h3 class="italic text-2xl mb-4">Síguenos en nuestras redes</h3>
    <div class="flex justify-center gap-6 mt-4">
      <a href="https://www.facebook.com/share/16otKKH6g7/" target="_blank">
        <img src="img/facebook.png" alt="Facebook" class="w-10 h-10 hover:scale-110 transition-transform" />
      </a>
      <a href="https://www.instagram.com/cafeteriaqueen_" target="_blank">
        <img src="img/instagram.png" alt="Instagram" class="w-10 h-10 hover:scale-110 transition-transform" />
      </a>
      <a href="https://www.tiktok.com/@cafeteria_queen" target="_blank">
        <img src="img/tiktok.png" alt="TikTok" class="w-10 h-10 hover:scale-110 transition-transform" />
      </a>
    </div>
  </footer>
</body>
</html>