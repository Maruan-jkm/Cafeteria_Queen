<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Promos - Cafetería</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <style>
    .unbounded-apadrina {
            font-family: "Unbounded", sans-serif;
            font-weight: 700;
        }
        .limelight-regular {
          font-family: "Limelight", sans-serif;
          font-weight: 800;
          font-style: normal;
        }

  </style>
</head>
<body class="bg-black text-[#fffaf0] font-sans leading-relaxed">

 <div class="fixed top-0 w-full bg-[#6f4e37] text-[#bfa75c] font-bold p-4 z-20">
    <header>
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center p-2">
            <div class="flex items-center mb-4 sm:mb-0">
                <img src="img/logo.png" alt="Logo" class="h-16 w-auto ml-4" />
                <img src="/imagenes/menu.png" alt="Menu" class="w-10 h-10 sm:hidden" onclick="toggleMenu()"/> <!-- Imagen del menú en móviles -->
            </div>

            <nav id="nav-menu" class="hidden sm:flex space-x-4">
                <a href="index.html" class="block text-base px-2 py-2 hover:text-amber-100 focus:text-cyan-500 underline decoration-amber-500 font-semibold">INICIO</a>
                <a href="Menu principal.php" class="block px-2 py-2 hover:text-amber-100 focus:text-cyan-500 underline decoration-amber-500 font-semibold">MENÚ</a>
                <a href="pedidos.php" class="block px-2 py-2 hover:text-amber-100 focus:text-cyan-500 underline decoration-amber-500 font-semibold">PEDIDOS</a>
                <a href="Nosotros.php" class="block px-2 py-2 hover:text-amber-100 focus:text-cyan-500 underline decoration-amber-500 font-semibold">NOSOTROS</a>
                <a href="promos.php" class="block px-2 py-2 hover:text-amber-100 focus:text-cyan-500 underline decoration-amber-500 font-semibold">PROMOCIONES</a>

            </nav>
        </div>
    </header>
</div>

  <!-- Sección de promociones -->
  <section class="mb-4 mt-40 bg-[#111] text-center px-4 py-12">
    <h1 class="unbounded-apadrina text-4xl text-[#d8cfc0] font-bold mb-4">PROMOCIONES Y MÁS...</h1>
    <p class="limelight-regular text-lg text-gray-300 mb-8">¡Conoce nuestras promociones, eventos especiales según la temporada y mucho más!</p>

    <div class="flex flex-wrap justify-center gap-6">
      <div class="bg-[#1f1f1f] rounded-xl shadow-lg overflow-hidden w-[220px] hover:scale-105 transition-transform">
        <img src="img/mama.jpg" alt="Desayuno para mamá" class="promo-img w-full h-[300px] object-cover cursor-pointer" />
        <h2 class="bg-[#bfa75c] text-black font-bold text-lg p-2">Desayuno para mamá 🎀</h2>
      </div>

      <div class="bg-[#1f1f1f] rounded-xl shadow-lg overflow-hidden w-[220px] hover:scale-105 transition-transform">
        <img src="img/promo.jpg" alt="Promo fin de semana" class="promo-img w-full h-[300px] object-cover cursor-pointer" />
        <h2 class="bg-[#bfa75c] text-black font-bold text-lg p-2">Promo de fin de semana</h2>
      </div>

      <div class="bg-[#1f1f1f] rounded-xl shadow-lg overflow-hidden w-[220px] hover:scale-105 transition-transform">
        <img src="img/promo2.jpg" alt="Promo san lunes" class="promo-img w-full h-[300px] object-cover cursor-pointer" />
        <h2 class="bg-[#bfa75c] text-black font-bold text-lg p-2">Promo de san lunes 😎</h2>
      </div>

      <div class="bg-[#1f1f1f] rounded-xl shadow-lg overflow-hidden w-[220px] hover:scale-105 transition-transform">
        <img src="img/promo3.jpg" alt="Promo sábado" class="promo-img w-full h-[300px] object-cover cursor-pointer" />
        <h2 class="bg-[#bfa75c] text-black font-bold text-lg p-2">Promo de sábado 😎</h2>
      </div>

      <div class="bg-[#1f1f1f] rounded-xl shadow-lg overflow-hidden w-[220px] hover:scale-105 transition-transform">
        <img src="img/valentin.jpg" alt="Paquete San Valentín" class="promo-img w-full h-[200px] object-cover cursor-pointer" />
        <h2 class="bg-[#bfa75c] text-black font-bold text-lg p-2">Paquete de San Valentín</h2>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
    <span id="cerrarModal" class="absolute top-4 right-4 text-white text-3xl cursor-pointer">&times;</span>
    <img id="imagenModal" src="" alt="Imagen ampliada" class="max-h-[90vh] max-w-[90vw] rounded-lg shadow-lg" />
  </div>

  <footer class="bg-[#6f4e37] text-white text-center py-10 px-5 mt-10">
    <h2 class="italic text-4xl mb-2 font-bold">Contacto</h2>
    <p class="italic text-xl mb-4">Contactanos via whatsApp o visita nuestro local, contamos con servicio a domicilio:</p>
    <p class="italic text-xl mb-4">Teléfono: <strong>99-11-13-73-05</strong></p>

    <h3 class="italic text-2xl mb-4">Síguenos en nuestras redes</h3>
    <div class="flex justify-center gap-6 mt-4">
      <a href="https://www.facebook.com/share/16otKKH6g7/" target="_blank">
        <img src="img/facebook.png" alt="Facebook" class="w-10 h-10 hover:scale-110 transition-transform duration-300" />
      </a>
      <a href="https://www.instagram.com/cafeteriaqueen_?igsh=OGZoaGJ0aG9uaWNh" target="_blank">
        <img src="img/instagram.png" alt="Instagram" class="w-10 h-10 hover:scale-110 transition-transform duration-300" />
      </a>
      <a href="https://www.tiktok.com/@cafeteria_queen?is_from_webapp=1&sender_device=pc" target="_blank">
        <img src="img/tiktok.png" alt="TikTok" class="w-10 h-10 hover:scale-110 transition-transform duration-300" />
      </a>
    </div>
  </footer>
  <script>
  const modal = document.getElementById('modal');
  const imagenModal = document.getElementById('imagenModal');
  const cerrarModal = document.getElementById('cerrarModal');

  document.querySelectorAll('.promo-img').forEach(img => {
    img.addEventListener('click', () => {
      imagenModal.src = img.src;
      modal.classList.remove('hidden');
    });
  });

  cerrarModal.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  // Cierra el modal al hacer clic fuera de la imagen
  modal.addEventListener('click', (e) => {
    if (e.target === modal || e.target === cerrarModal) {
      modal.classList.add('hidden');
    }
  });
</script>
</body>
</html>