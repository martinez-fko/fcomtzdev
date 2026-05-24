<section id="inicio"
    class="relative overflow-hidden bg-white dark:bg-gray-900">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <!-- Texto -->
            <div>

                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 rounded-full
                    bg-indigo-100 dark:bg-indigo-900/30
                    text-indigo-700 dark:text-indigo-300
                    text-sm font-medium mb-6">

                    Freelancer · Laravel · React · Filament
                </div>

                <!-- Titulo -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl
                    font-bold leading-tight
                    text-gray-900 dark:text-white">

                    Desarrollo
                    <span class="text-indigo-600">
                        sitios web y sistemas
                    </span>
                    modernos para tu negocio
                </h1>

                <!-- Texto -->
                <p class="mt-6 text-lg leading-8
                    text-gray-600 dark:text-gray-300">

                    Creo páginas web, landing pages y paneles administrativos
                    usando Laravel, Filament y React para ayudar a negocios
                    y emprendedores a crecer en internet.
                </p>

                <!-- Botones -->
                <div class="mt-8 flex flex-wrap gap-4">

                    <a href="{{route('contact')}}"
                        class="px-6 py-3 rounded-xl
                        bg-indigo-600 text-white
                        font-medium shadow-lg
                        hover:bg-indigo-700 transition">

                        Contactarme
                    </a>

                    <a href="{{route('portafolio')}}"
                        class="px-6 py-3 rounded-xl
                        border border-gray-300 dark:border-gray-700
                        text-gray-700 dark:text-gray-200
                        hover:bg-gray-100 dark:hover:bg-gray-800
                        transition">

                        Ver portafolio
                    </a>
                </div>

                <!-- Tech -->
                <div class="mt-10 flex flex-wrap gap-3">

                    <span class="px-3 py-1 rounded-full
                        bg-gray-100 dark:bg-gray-800
                        text-sm text-gray-700 dark:text-gray-300">
                        Laravel
                    </span>

                    <span class="px-3 py-1 rounded-full
                        bg-gray-100 dark:bg-gray-800
                        text-sm text-gray-700 dark:text-gray-300">
                        Filament
                    </span>

                    <span class="px-3 py-1 rounded-full
                        bg-gray-100 dark:bg-gray-800
                        text-sm text-gray-700 dark:text-gray-300">
                        React
                    </span>

                    <span class="px-3 py-1 rounded-full
                        bg-gray-100 dark:bg-gray-800
                        text-sm text-gray-700 dark:text-gray-300">
                        PHP
                    </span>
                </div>

            </div>

            <!-- Imagen / visual -->
            <div class="relative">

                <div class="absolute inset-0 blur-3xl
                    bg-indigo-500/20 rounded-full">
                </div>

                <div class="relative rounded-3xl
                    bg-gradient-to-br
                    from-indigo-500
                    to-purple-600
                    p-1 shadow-2xl">

                    <div class="rounded-3xl
                        bg-gray-900 p-8">

                        <img
                            src="{{ asset('images/Hero.png') }}"
                            alt="Developer"
                            class="rounded-2xl w-full">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>