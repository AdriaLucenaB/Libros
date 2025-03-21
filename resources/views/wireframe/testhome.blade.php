@extends('layouts.appbook')
@section('title', 'Home Page')

@section('content')

        <div class="text-center py-8">
            <h1 class="text-4xl font-bold text-purple-deep">Encuentra el mejor precio para tus libros favoritos</h1>
        </div>

        <div class="flex justify-center items-center my-8">
            <input type="search" placeholder="Buscar libros..." class="p-2 w-full max-w-lg rounded-l-lg border-0 focus:ring-2 focus:ring-purple-deep" style="outline: none;">
            <button class="px-4 py-2 accent-color rounded-r-lg font-bold">Buscar</button>
        </div>

        <section class="my-12">
            <h2 class="text-3xl font-bold text-purple-deep mb-4">Libros Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Portada del Libro" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Portada del Libro" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Portada del Libro" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- segon intent -->
        <section class="my-12">
            <h2 class="text-3xl font-bold text-purple-deep mb-4">Libros Destacados imatge vertical</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
            </div>
        </section>

        <!-- tercer intent -->
        <section class="my-12">
            <h2 class="text-3xl font-bold text-purple-deep mb-4">Libros Destacados lateral</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Columna de la Imagen -->
                    <div class="w-1/3 flex justify-center items-start">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                
                    <!-- Columna de Información -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Columna de la Imagen -->
                    <div class="w-1/3 flex justify-center items-start">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                
                    <!-- Columna de Información -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Columna de la Imagen -->
                    <div class="w-1/3 flex justify-center items-start">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                
                    <!-- Columna de Información -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                
            </div>
        </section>
@endsection