@extends('layout')

@section('title', $comic->title)

@section('content')
<div class="container mx-auto my-8">
    <div class="flex flex-col md:flex-row bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Imagen del producto -->
        <div class="md:w-1/3 p-4">
            <img src="{{ $comic->image_url }}" alt="{{ $comic->title }}" class="w-full h-auto object-cover rounded-lg">
        </div>

        <!-- Información del producto -->
        <div class="md:w-2/3 p-6">
            <h2 class="text-3xl font-bold mb-4 text-gray-800">{{ $comic->title }}</h2>
            <p class="text-gray-600 text-lg mb-4">{{ $comic->description }}</p>
            
            <div class="flex items-center mb-4">
                <span class="text-2xl font-bold text-blue-600">${{ $comic->price }}</span>
            </div>
            
            <!-- Selección de cantidad -->
            <div class="flex items-center mb-6">
                <label for="quantity" class="mr-4 text-gray-700">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1" class="w-16 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Botón de compra -->
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                Comprar ahora
            </button>
        </div>
    </div>
</div>
@endsection
