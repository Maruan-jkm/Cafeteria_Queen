<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Queen Cafetería</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body::before {
            content: "";
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGi8Irpq_ZZBpAY97f-1f0ZdJGDwZ5HTIZIg&s');
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            filter: blur(8px) brightness(0.7);
            z-index: -1;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">

    <!-- Contenedor general -->
    <div id="loginForm"
        class="bg-white bg-opacity-90 rounded-xl shadow-lg p-8 w-full max-w-md border-t-8 border-blue-800 transition duration-300 backdrop-blur-sm">
        <h1 class="text-3xl font-bold text-blue-800 text-center mb-2">Queen Cafetería</h1>
        <p class="text-center text-gray-600 mb-6">Inicio de Sesión</p>
        <form action="iniciar_sesion.php" method="post" class="space-y-4">
            <input type="email" name="correo" placeholder="Correo" required
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-300">
            <input type="password" name="contraseña" placeholder="Contraseña" required
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-300">
            <input type="submit" value="Iniciar Sesión"
                class="w-full bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded cursor-pointer">
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            ¿No tienes cuenta?
            <a href="#" onclick="mostrarRegistro()" class="text-yellow-700 hover:underline">Regístrate aquí</a>
        </p>
    </div>

    <!-- Contenedor de registro oculto -->
    <div id="registerForm"
        class="bg-white bg-opacity-90 rounded-xl shadow-lg p-8 w-full max-w-md border-t-8 border-yellow-700 hidden transition duration-300 backdrop-blur-sm">
        <h1 class="text-3xl font-bold text-yellow-700 text-center mb-2">Registrarte a Queen Cafetería</h1>
        <p class="text-center text-gray-600 mb-6">Crea tu cuenta de usuario</p>
        <form action="registrar.php" method="post" class="space-y-4">
            <input type="text" name="nombre" placeholder="Nombre" required
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-yellow-300">
            <input type="email" name="correo" placeholder="Correo" required
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-yellow-300">
            <input type="tel" name="telefono" placeholder="Teléfono" pattern="\d{10}" required
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-yellow-300">
            <input type="password" name="contraseña" placeholder="Contraseña" required
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-yellow-300">
            <input type="submit" value="Registrarse"
                class="w-full bg-yellow-700 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded cursor-pointer">
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            ¿Ya tienes cuenta?
            <a href="#" onclick="mostrarLogin()" class="text-blue-700 hover:underline">Inicia sesión aquí</a>
        </p>
    </div>

    <script>
        function mostrarRegistro() {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('registerForm').classList.remove('hidden');
        }

        function mostrarLogin() {
            document.getElementById('registerForm').classList.add('hidden');
            document.getElementById('loginForm').classList.remove('hidden');
        }
    </script>

</body>
</html>