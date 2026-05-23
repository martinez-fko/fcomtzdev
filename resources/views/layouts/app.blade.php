<!DOCTYPE html>
<html lang="es-MX">
<head>
    @include('layouts.partials.metas')
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')

</body>
</html>