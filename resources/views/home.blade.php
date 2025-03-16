@extends('layouts.appbook')
@section('title', 'Home Page')

@section('content')

    <!-- Encabezado -->
    <div class="text-center py-16 bg-gradient-to-r from-blue-900 to-indigo-800">
        <h1 class="text-5xl font-extrabold text-white tracking-wider">Encuentra el Mejor Precio para Tus Libros Favoritos</h1>
    </div>

    <!-- Búsqueda de Libros -->
    <div class="flex justify-center items-center my-8">
        <input type="search" placeholder="Busca tu libro favorito..." class="p-4 w-full max-w-md rounded-l-xl border-2 border-gray-500 focus:ring-4 focus:ring-blue-300 transition-all shadow-lg bg-gray-800 text-white">
        <button class="px-6 py-3 bg-gradient-to-r from-teal-500 to-cyan-500 text-white rounded-r-xl font-semibold hover:bg-gradient-to-l transition-all duration-300">Buscar</button>
    </div>

    <!-- Libros Destacados -->
    <section class="my-16 bg-indigo-900 text-white">
        <h2 class="text-4xl font-semibold text-teal-400 mb-6">Libros Destacados</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($books as $book)
            <div class="bg-gray-800 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300">
                <!-- Imagen -->
                <div class="w-full h-72 bg-gray-700 rounded-t-xl flex justify-center items-center">
                    <img src="{{ $book->cover == '' ? 'https://via.placeholder.com/150x220' : $book->cover }}" alt="{{$book->title}}" class="w-48 h-auto object-cover rounded-lg">
                </div>

                <!-- Información -->
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-teal-300">{{$book->title}}</h3>
                    <p class="text-sm text-gray-400">{{$book->author}}</p>
                    <p class="text-lg font-semibold text-teal-400 mt-4">Mejor Precio: <span class="text-yellow-500">$19.99</span></p>
                    <p class="text-gray-300 mt-2">Descripción breve del libro. Aquí iría un pequeño resumen para captar la atención.</p>
                    <button class="mt-6 px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-lg font-semibold hover:bg-gradient-to-l transition-all duration-300"><a href="{{$book->route()}}">Más Detalles</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection
