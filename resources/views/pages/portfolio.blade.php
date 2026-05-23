@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

  <section id="portafolio"
    class="py-5 bg-white dark:bg-gray-900">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-14">

            <span class="text-indigo-600 font-semibold">
                Portafolio
            </span>

            <h2 class="mt-3 text-4xl font-bold
                text-gray-900 dark:text-white">

                Algunos proyectos
            </h2>

            <p class="mt-4 text-lg
                text-gray-600 dark:text-gray-300">

                Ejemplos de sitios y sistemas desarrollados.
            </p>
        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-800
                rounded-3xl overflow-hidden
                shadow-xl border
                border-gray-200 dark:border-gray-700
                hover:-translate-y-2
                transition duration-300">

                <img
                    src="{{ asset('images/beutysalon.png')}}"
                    class="w-full h-52 object-cover"
                    alt="Proyecto">

                <div class="p-6">

                    <h3 class="text-xl font-bold
                        text-gray-900 dark:text-white">

                        Landing Page
                    </h3>

                    <p class="mt-3 text-gray-600 dark:text-gray-300">
                        Landing Pagge, para promocionar y dar a conocoer el sitio.
                        Panel administrativo desarrollado con Laravel y Filament
                        para gestión de promociones.
                    </p>

                    <div class="mt-4 flex gap-2 flex-wrap">
                        <span class="px-3 py-1 rounded-full text-sm
                            bg-indigo-100 dark:bg-indigo-900/30
                            text-indigo-600">
                            Laravel
                        </span>

                        <span class="px-3 py-1 rounded-full text-sm
                            bg-indigo-100 dark:bg-indigo-900/30
                            text-indigo-600">
                            Filament
                        </span>
                    </div>

                    <a href="https://fcomtzdev.com.mx/"
                        class="mt-6 inline-block
                        px-5 py-3 rounded-xl
                        bg-indigo-600 text-white
                        hover:bg-indigo-700
                        transition">

                        Ver demo
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-800
                rounded-3xl overflow-hidden
                shadow-xl border
                border-gray-200 dark:border-gray-700
                hover:-translate-y-2
                transition duration-300">

                <img
                    src="{{asset('images/Proximamente.png')}}"
                    class="w-full h-52 object-cover"
                    alt="Proyecto">

                <div class="p-6">

                    <h3 class="text-xl font-bold
                        text-gray-900 dark:text-white">

                        Sistema Adminstrativo
                    </h3>

                    <p class="mt-3 text-gray-600 dark:text-gray-300">
                        Panel administrativo desarrollado con Laravel y Filament
                        para gestión de clientes y reportes.
                    </p>

                    <div class="mt-4 flex gap-2 flex-wrap">
                        <span class="px-3 py-1 rounded-full text-sm
                            bg-indigo-100 dark:bg-indigo-900/30
                            text-indigo-600">
                            Tailwind
                        </span>

                        <span class="px-3 py-1 rounded-full text-sm
                            bg-indigo-100 dark:bg-indigo-900/30
                            text-indigo-600">
                            Laravel
                        </span>
                    </div>

                    {{-- <a href="#"
                        class="mt-6 inline-block
                        px-5 py-3 rounded-xl
                        bg-indigo-600 text-white
                        hover:bg-indigo-700
                        transition">

                        Ver demo
                    </a> --}}
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-800
                rounded-3xl overflow-hidden
                shadow-xl border
                border-gray-200 dark:border-gray-700
                hover:-translate-y-2
                transition duration-300">

                <img
                    src="{{asset('images/Proximamente.png')}}"
                    class="w-full h-52 object-cover"
                    alt="Proyecto">

                <div class="p-6">

                    <h3 class="text-xl font-bold
                        text-gray-900 dark:text-white">

                        CRM
                    </h3>

                    <p class="mt-3 text-gray-600 dark:text-gray-300">
                        Sistema empresarial, para agilizar la captura de datos de los cliente.
                    </p>

                    <div class="mt-4 flex gap-2 flex-wrap">
                        <span class="px-3 py-1 rounded-full text-sm
                            bg-indigo-100 dark:bg-indigo-900/30
                            text-indigo-600">
                            React
                        </span>

                        <span class="px-3 py-1 rounded-full text-sm
                            bg-indigo-100 dark:bg-indigo-900/30
                            text-indigo-600">
                            API
                        </span>
                    </div>

                    {{-- <a href="#"
                        class="mt-6 inline-block
                        px-5 py-3 rounded-xl
                        bg-indigo-600 text-white
                        hover:bg-indigo-700
                        transition">

                        Ver demo
                    </a> --}}
                </div>
            </div>

        </div>
    </div>
  </section>

@endsection