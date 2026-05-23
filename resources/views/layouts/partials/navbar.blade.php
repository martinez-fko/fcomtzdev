<nav class="bg-white dark:bg-gray-900 shadow-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-2">
                <span class="font-bold text-lg text-gray-800 dark:text-white">
                    FCOMTZ
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">

                <a href="{{route('home')}}"
                    class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    Inicio
                </a>

                {{-- <a href="#servicios"
                    class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    Servicios
                </a> --}}

                <a href="{{route('portafolio')}}"
                    class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    Portafolio
                </a>

                <a href="{{route('contact')}}"
                    class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    Contacto
                </a>

                <!-- Dark Mode Button -->
                <button id="theme-toggle"
                    class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition">

                    <!-- Sol -->
                    <svg id="theme-light-icon"
                        class="w-5 h-5 text-yellow-500 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 3a1 1 0 011 1v1a1 1 0 11-2 0V4a1 1 0 011-1zm4 7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-4 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM4 9a1 1 0 100 2H3a1 1 0 100-2h1zm10.95-4.536a1 1 0 00-1.414-1.414l-.707.707a1 1 0 101.414 1.414l.707-.707zM6.17 13.83a1 1 0 00-1.414 0l-.707.707a1 1 0 101.414 1.414l.707-.707a1 1 0 000-1.414zM15.657 14.536a1 1 0 10-1.414 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707zM6.17 6.17a1 1 0 000-1.414L5.464 4.05A1 1 0 104.05 5.464l.707.707a1 1 0 001.414 0z"/>
                    </svg>

                    <!-- Luna -->
                    <svg id="theme-dark-icon"
                        class="w-5 h-5 text-gray-700 dark:text-gray-200"
                        fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707 8.001 8.001 0 1017.293 13.293z"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Button -->
            <button id="menu-btn"
                class="md:hidden text-gray-700 dark:text-white">
                ☰
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden py-4 space-y-4">

            <a href="{{route('home')}}" class="block text-gray-700 dark:text-gray-200">
                Inicio
            </a>

            {{-- <a href="#servicios" class="block text-gray-700 dark:text-gray-200">
                Servicios
            </a> --}}

            <a href="{{route('portafolio')}}" class="block text-gray-700 dark:text-gray-200">
                Portafolio
            </a>

            <a href="{{route('contact')}}" class="block text-gray-700 dark:text-gray-200">
                Contacto
            </a>

            <button id="theme-toggle-mobile"
                class="px-3 py-2 rounded bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-white">
                Modo oscuro
            </button>
        </div>
    </div>
</nav>

