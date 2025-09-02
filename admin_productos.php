<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel de Administración</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

  <!-- Contenido principal -->
  <div class="container mx-auto p-6 mt-40">
    <main class="bg-white rounded-lg shadow-md p-8 text-center">
      <h2 class="text-2xl font-semibold text-[#6f4e37] mb-4">Bienvenido, Administrador</h2>
      <p class="text-gray-700">Selecciona una opción del menú para administrar el sistema.</p>
    </main>
  </div>

</body>
</html>