@extends('layouts.app')

@section('title', __('Cart'))

@section('content')
    <div class="container mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">{{ __('Shopping Cart') }}</h1>

        @if (session('success'))
            <div class="alert alert-success mb-4 p-2 bg-green-100 text-green-800 border border-green-300 rounded">
                {{ session('success') }}
            </div>
        @endif

        
    </div>
@endsection
