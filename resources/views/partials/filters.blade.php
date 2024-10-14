<div class="w-full bg-gray-100 text-black p-4 rounded-lg shadow">
    <h3 class="text-lg font-semibold mb-4">Filtros</h3>

    <form action="{{ route($route) }}" method="GET">
        {{-- Filtros por colección --}}
        <div class="mb-4 border-b pb-4">
            <label for="collection" class="block mb-2 font-semibold text-gray-700">
                {{ __('Collection') }}
            </label>
            <select name="collection" id="collection"
                class="form-select block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <option value="">{{ __('Seleccione una colección') }}</option>
                @foreach ($items as $item)
                    <option value="{{ $item->collection }}">{{ $item->collection }}</option>
                @endforeach
            </select>
        </div>

        {{-- Filtros por título --}}
        <div class="mb-4 border-b pb-4">
            <label for="title" class="block mb-2 font-semibold text-gray-700">
                {{ __('Title') }}
            </label>
            <select name="title" id="title"
                class="form-select block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <option value="">{{ __('Seleccione un título') }}</option>
                @foreach ($items as $item)
                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>

        {{-- Filtros por precio --}}
        <div class="mb-4 border-b pb-4">
            <label class="block mb-2 font-semibold text-gray-700">
                {{ __('Price Range') }}
            </label>
            <div class="flex space-x-4">
                <div class="flex-1">
                    <input type="number" name="min_price" id="min_price" placeholder="{{ __('Min Price') }}"
                        class="form-input block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                </div>
                <span class="flex items-center">-</span> <!-- Agregar un guion entre los campos -->
                <div class="flex-1">
                    <input type="number" name="max_price" id="max_price" placeholder="{{ __('Max Price') }}"
                        class="form-input block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                </div>
            </div>
        </div>



        {{-- Filtros por año de publicación --}}
        <div class="mb-4 border-b pb-4">
            <label for="year_publication" class="block mb-2 font-semibold text-gray-700">
                {{ __('Year of publication') }}
            </label>
            <select name="year_publication" id="year_publication"
                class="form-select block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <option value="">{{ __('Año de publicación') }}</option>
                @foreach ($items as $item)
                    <option value="{{ $item->year_publication }}">{{ $item->year_publication }}</option>
                @endforeach
            </select>
        </div>

        {{-- Filtros por mes de publicación --}}
        <div class="mb-4 border-b pb-4">
            <label for="month_publication" class="block mb-2 font-semibold text-gray-700">
                {{ __('Publication month') }}
            </label>
            <select name="month_publication" id="month_publication"
                class="form-select block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <option value="">{{ __('Seleccione un mes') }}</option>
                @foreach ($items as $item)
                    <option value="{{ $item->month_publication }}">{{ $item->month_publication }}</option>
                @endforeach
            </select>
        </div>

        {{-- Filtros por autor --}}
        <div class="mb-4 border-b pb-4">
            <label for="author" class="block mb-2 font-semibold text-gray-700">
                {{ __('Author') }}
            </label>
            <select name="author" id="author"
                class="form-select block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <option value="">{{ __('Seleccione un autor') }}</option>
                @foreach ($items as $item)
                    <option value="{{ $item->author }}">{{ $item->author }}</option>
                @endforeach
            </select>
        </div>

        <!-- Botón simplificado para prueba -->
        <button type="submit"
            class="mt-4 bg-black text-white py-2 px-4 rounded hover:bg-blue-600 focus:ring-2 focus:ring-blue-200 transition !important">
            {{ __('Aplicar filtros') }}
        </button>


    </form>
</div>
