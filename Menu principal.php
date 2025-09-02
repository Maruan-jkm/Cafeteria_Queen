<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menú - Cafetería Queen</title>
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

    @keyframes slide {
      0% {
        transform: translateX(0);
      }

      25% {
        transform: translateX(-100%);
      }

      50% {
        transform: translateX(-200%);
      }

      75% {
        transform: translateX(-300%);
      }

      100% {
        transform: translateX(0);
      }
    }

    .carousel {
    position: relative;
    width: 90%;
    max-width: 100px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
.carousel {
  position: relative;
  width: 90%;
  max-width: 800px;
  aspect-ratio: 16 / 9; /* Esto asegura que todas las imágenes tengan el mismo marco */
  margin: 0 auto;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.carousel-track {
  display: flex;
  height: 100%;
  animation: slide 12s infinite;
}

.carousel-track img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Mantiene proporción sin deformar */
  flex-shrink: 0;
}
.pulse-effect:active {
            transform: scale(0.9); /* Reduce ligeramente el tamaño del botón cuando se hace clic */
        }
.pulse-efectoImg {

            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out; /* Transición suave del efecto de pulsación */
        }
        .pulse-efectoImg:hover {
            transform: scale(0.9); /* Reduce ligeramente el tamaño del botón cuando se hace clic */
            opacity: 60%;

        }
  </style>
</head>

<body class="bg-[#96c2b0] text-[#333] font-sans">

    <div class="fixed top-0 w-full bg-[#6f4e37] text-[#bfa75c] font-bold p-4 z-20">
      <header class="bg-[#6f4e37] py-4">
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

  <main class="mb-4 mt-40 px-4 py-10">
    <section class="text-center mb-10">
      <h1 class="text-4xl sm:text-5xl unbounded-apadrina mb-6">Explora Nuestro Menú</h1>
    </section>

    <div class="carousel">
  <div class="carousel-track">
    <img src="img/portada.jpeg" alt="imagen 1" />
    <img src="img/portada1.jpg" alt="imagen 2" />
    <img src="img/portda2.jpg" alt="imagen 3" />
    <img src="img/portada3.jpg" alt="imagen 4" />
  </div>
</div>

    <section class="text-center mt-16 mb-8">
      <p class="poppins-regular text-xl sm:text-2xl mb-4 font-bold">Tenemos una gran variedad de bebidas y snacks que te encantarán 🍰☕</p>
      <p class="poppins-regular text-xl sm:text-2xl mb-4 font-bold">Selecciona una categoría para ver más detalles.</p>
    </section>

    <section class="flex flex-wrap justify-center gap-6 max-w-5xl mx-auto">
      <a href="seccion desayunos.html" class="pulse-efectoImg bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transformcategoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200">
        <i class="fas fa-mug-hot text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Desayunos</span>
      </a>
      <a href="seccion snack.html" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-ice-cream text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Snacks</span>
      </a>
      <a href="cenas.html" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-ice-cream text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Cenas</span>
      </a>
      <a href="Sección frappes.html" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-blender text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Frappés</span>
      </a>
      <a href="smothie.html" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-cookie-bite text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Smoothies</span>
      </a>
      <a href="#" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-cookie-bite text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Cafes</span>
      </a>
      <a href="#" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-cookie-bite text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Licuados</span>
      </a>
      <a href="#" class="categoria active:bg-[#bfa75c] hover:bg-[#bfa75c] transition duration-200 bg-white w-36 h-36 rounded-xl flex flex-col items-center justify-center text-[#6f4e37] shadow-md hover:scale-105 transition transform">
        <i class="fas fa-cookie-bite text-3xl mb-2"></i>
        <span class="poppins-regular text-center font-bold">Crepas</span>
      </a>
    </section>
  </main>

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
</body>
</html>