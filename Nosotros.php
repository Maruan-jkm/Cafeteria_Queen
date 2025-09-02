<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros - Cafetería Queen</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .titan-one-regular {
              font-family: "Titan One", sans-serif;
              font-weight: 400;

              }
      .poppins-regular {
                font-family: "Poppins", serif;
                font-weight: 400;

           }
        .unbounded-apadrina {
            font-family: "Unbounded", sans-serif;
            font-weight: 800;
        }
        .aclonica-regular {
            font-family: "Aclonica", sans-serif;
            font-weight: 400;
            font-style: normal;
          }


    </style>
  </head>
  <body class="bg-emerald-300 text-[#333] font-sans">
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
    <section class="mb-4 mt-40 text-center px-5 py-10">
      <h1 class="unbounded-apadrina text-6xl text-[#6f4e37] mb-5">Acerca de Cafetería Queen</h1>
      <div class="grid max-w-5xl mx-auto gap-8 sm:grid-cols-2">
        <div class="text-center">
          <h2 class="titan-one-regular text-amber-600 text-2xl font-semibold mt-8 mb-4">Fundada el 29 de julio de 2017</h2>
          <img src="img/local.jpg" alt="Imagen del local de Cafetería Queen" class="w-full h-50 rounded-lg mb-4 " />
        </div>
        <div class="text-center">
          <h3 class="titan-one-regular text-amber-600 text-2xl font-semibold mt-8 mb-4">Nuestro logo.</h3>
          <img src="img/logo.png" alt="logo de la cafeteria" class="w-full h-50 rounded-lg mb-4" />
        </div>
      </div>
    </section>

    <section class="bg-cyan-200 text-[#6f4e37] px-5 py-10 text-center">
      <h2 class="unbounded-apadrina text-4xl mb-5">Horario de Servicio</h2>
      <p class="aclonica-regular max-w-2xl mx-auto mb-6">
        ¡Hola! Bienvenido a Cafetería Queen. A continuación te dejamos nuestro horario laboral. Este puede estar sujeto a cambios debido a días festivos, inconvenientes o extensiones por eventos en nuestra villa de Baca.
        Ahora descansamos los MARTES, ¡Agradecemos su comprensión!
      </p>
      <div class="grid max-w-5xl mx-auto gap-8 sm:grid-cols-2">
        <div class="text-center">
          <img src="img/horario.jpg" alt="Imagen horario" class="w-72 mx-auto rounded-lg" />
        </div>
        <div class="text-center">
          <img src="img/descanso.jpg" alt="foto descanso" class="w-72 mx-auto rounded-lg" />
        </div>
      </div>
    </section>

    <section class="bg-[#80f3f5] text-[#6f4e37] px-5 py-10 text-center">
      <h2 class="unbounded-apadrina text-4xl mb-5"><i class="fas fa-map-marker-alt"></i> Ubicación</h2>
      <p class="aclonica-regular max-w-2xl mx-auto mb-6">
        Nos encontramos en el interior del mercado municipal de la villa de Baca, Yucatán. Puedes visitarnos en nuestro local para disfrutar de todos nuestros productos.
      </p>
      <div class="w-full max-w-2xl mx-auto rounded-lg overflow-hidden shadow-lg">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.934024951511!2d-89.40031717496629!3d21.108560930560813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f55d5003d6930b3%3A0xd7c53964246febf0!2sMercado%20municipal%20Baca%20Yuc.!5e1!3m2!1ses!2smx!4v1747445179352!5m2!1ses!2smx"
          width="600"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>

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