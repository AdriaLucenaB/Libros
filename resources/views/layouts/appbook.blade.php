<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @yield('customcss')
    <style>
        .bg-dark-blue { background-color: #1E2A47; }  /* Fondo azul oscuro */
        .bg-light-gray { background-color: #F5F5F5; }  /* Fondo gris claro */
        .bg-accent { background-color: #FF6F61; }  /* Fondo de color acento */

        .text-light-gray { color: #B0B0B0; }  /* Texto gris claro */
        .text-dark-gray { color: #444444; }  /* Texto gris oscuro */
        .text-white { color: #FFFFFF; }  /* Texto blanco */

        .accent-button { background-color: #FF6F61; color: white; }  /* Botón acento */
        .accent-button:hover { background-color: #FF4A3C; }  /* Hover del botón */

        .shadow-card { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }  /* Sombra de tarjetas */
        .shadow-card-hover:hover { box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); }  /* Hover de sombra en tarjetas */
    </style>
</head>
<body class="bg-light-gray text-dark-gray font-sans">

    @include('layouts.appbookmenu')

    <div class="container mx-auto p-4">

        @yield('content')

        @include('layouts.appbookfooter')
    </div>

</body>
@yield('customjs')
</html>
