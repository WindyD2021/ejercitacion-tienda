<nav x-data="{ darkMode: localStorage.getItem('theme') === 'dark', open: false }" :class="{ 'dark': darkMode }" class="bg-white dark:bg-black border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo y enlaces de navegación -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" title="Ir a la página de inicio">
                        <x-application-logo src="images/logo.svg" class="h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('manga.index')" :active="request()->routeIs('manga.index')">
                        {{ __('Panini Manga') }}
                    </x-nav-link>
                    <x-nav-link :href="route('comic.index')" :active="request()->routeIs('comic.index')">
                        {{ __('Panini Comics') }}
                    </x-nav-link>
                    <x-nav-link :href="route('book.index')" :active="request()->routeIs('book.index')">
                        {{ __('Panini Books') }}
                    </x-nav-link>
                    <x-nav-link :href="route('zonakid.index')" :active="request()->routeIs('zonakid.index')">
                        {{ __('Figuritas y Cartas') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- (Alineado a la derecha) -->
            <div class="flex items-center ml-auto space-x-2"> <!-- Espaciado reducido aquí -->
                {{-- Acceso a la cuenta --}}
                @auth
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ms-4"> <!-- Espaciado reducido -->
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" aria-label="{{ __('Access your account') }}">
                        {{ __('Access') }}
                    </x-nav-link>
                @endauth

                <!-- Enlace de Carrito -->
                <x-nav-link :href="route('cart.index')" :active="request()->routeIs('cart.index')" aria-label="{{ __('Access your cart') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </x-nav-link>

                <!-- Botón de Modo Oscuro -->
                <button @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light');"
                    class="text-gray-500 dark:text-gray-300">
                    <template x-if="darkMode">
                        <!-- Ícono de sol para el modo claro -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2a1 1 0 011 1v2a1 1 0 11-2 0V3a1 1 0 011-1zM12 17a5 5 0 100-10 5 5 0 000 10zm0 0v2a1 1 0 102 0v-2a1 1 0 10-2 0zm10 2a1 1 0 011 1v2a1 1 0 11-2 0v-2a1 1 0 011-1zM4 12a1 1 0 01-1-1V9a1 1 0 112 0v2a1 1 0 01-1 1z" />
                        </svg>
                    </template>
                    <template x-if="!darkMode">
                        <!-- Ícono de luna para el modo oscuro -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 12.41a7.38 7.38 0 01-8.12 7.94A7.38 7.38 0 015 13.12a7.38 7.38 0 017.95-8.11 1.5 1.5 0 010 3A4.38 4.38 0 008 13a4.38 4.38 0 007 3.7 4.38 4.38 0 005-3.79 1.5 1.5 0 011.5-1.5 1.5 1.5 0 010 3.09z" />
                        </svg>
                    </template>
                </button>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

</nav>
