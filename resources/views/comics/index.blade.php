@extends('layouts.app')

@section('title', 'Panini Comic')

@section('content')
    <div class="flex">
        {{-- Sidebar de filtros --}}
        <div class="w-1/4 p-4 bg-grey-200">
            @include('partials.filters', [
                'items' => $comics,
                'route' => 'comic.index',
            ])
        </div>

        {{-- Contenido principal --}}
        <div class="w-3/4 p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"> <!-- Grid layout -->
                @foreach ($comics as $comic)
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ $comic->image_url }}" alt="{{ $comic->title }}" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $comic->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $comic->description }}</p>

                            <dl
                                class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                <div class="flex flex-col pb-3">
                                    <dd class="text-lg font-semibold">{{ $comic->author }}</dd>
                                </div>
                            </dl>

                            <a href="{{ route('comic.show', $comic->id) }}"
                                class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{ __('Read more') }}
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection
