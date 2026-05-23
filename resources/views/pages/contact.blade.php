@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

  <section id="contacto" class="py-5 bg-gray-50 dark:bg-gray-950">

    <div class="max-w-7xl mx-auto px-6">

      <div class="grid lg:grid-cols-2 gap-12 items-center">

        <!-- Texto -->
        <div>

          <span class="text-indigo-600 font-semibold">
            Contacto
          </span>

          <h2 class="mt-3 text-4xl font-bold
                      text-gray-900 dark:text-white">

            ¿Tienes un proyecto en mente?
          </h2>

          <p class="mt-5 text-lg
                      text-gray-600 dark:text-gray-300">

            Cuéntame lo que necesitas y te responderé
            para ayudarte a crear tu sitio web o sistema.
          </p>

        </div>

        

        <!-- Formulario -->
        <div class="bg-white dark:bg-gray-900
                  rounded-3xl shadow-xl
                  border border-gray-200 dark:border-gray-800
                  p-8">

          @if(session('success'))
            <div class="mb-5 rounded-xl
                bg-green-100 text-green-700
                px-4 py-3">

                {{ session('success') }}
            </div>
        @endif

          <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">

            @csrf

            <!-- Nombre -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                Nombre
              </label>

              <input type="text" name="name" value="{{ old('name') }}" placeholder="Tu nombre" class="w-full rounded-xl border
                              border-gray-300 dark:border-gray-700
                              bg-white dark:bg-gray-800
                              text-gray-900 dark:text-white
                              px-4 py-3
                              focus:ring-2 focus:ring-indigo-500
                              outline-none">

              @error('name')
              <p class="text-red-500 text-sm mt-1">
                {{ $message }}
              </p>
              @enderror
            </div>

            <!-- Email -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                Correo
              </label>

              <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" class="w-full rounded-xl border
                              border-gray-300 dark:border-gray-700
                              bg-white dark:bg-gray-800
                              text-gray-900 dark:text-white
                              px-4 py-3
                              focus:ring-2 focus:ring-indigo-500
                              outline-none">

              @error('email')
              <p class="text-red-500 text-sm mt-1">
                {{ $message }}
              </p>
              @enderror
            </div>

            <!-- WhatsApp -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                WhatsApp
              </label>

              <input type="text" name="phone" value="{{ old('phone') }}" placeholder="993..." class="w-full rounded-xl border
                              border-gray-300 dark:border-gray-700
                              bg-white dark:bg-gray-800
                              text-gray-900 dark:text-white
                              px-4 py-3
                              focus:ring-2 focus:ring-indigo-500
                              outline-none">
            </div>

            <!-- Proyecto -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                Tipo de proyecto
              </label>

              <select name="project_type" class="w-full rounded-xl border
                              border-gray-300 dark:border-gray-700
                              bg-white dark:bg-gray-800
                              text-gray-900 dark:text-white
                              px-4 py-3
                              focus:ring-2 focus:ring-indigo-500
                              outline-none">

                <option value="">
                  Selecciona una opción
                </option>

                <option value="Sitio web">
                  Sitio web
                </option>

                <option value="Sistema administrativo">
                  Sistema administrativo
                </option>

                <option value="Landing page">
                  Landing page
                </option>

                <option value="Otro">
                  Otro
                </option>

              </select>
            </div>

            <!-- Mensaje -->
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                Mensaje
              </label>

              <textarea name="message" rows="5" placeholder="Cuéntame tu proyecto..." class="w-full rounded-xl border
                              border-gray-300 dark:border-gray-700
                              bg-white dark:bg-gray-800
                              text-gray-900 dark:text-white
                              px-4 py-3
                              focus:ring-2 focus:ring-indigo-500
                              outline-none">{{ old('message') }}</textarea>

              @error('message')
              <p class="text-red-500 text-sm mt-1">
                {{ $message }}
              </p>
              @enderror
            </div>

            <!-- Botón -->
            <button type="submit" class="w-full py-3 rounded-xl
                          bg-indigo-600 text-white
                          font-semibold
                          hover:bg-indigo-700
                          transition shadow-lg">

              Enviar mensaje
            </button>

          </form>

        </div>
      </div>
    </div>
  </section>

@endsection