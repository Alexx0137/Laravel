<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Aprendible')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between">
    <header>
        @include('partials.nav')
        @include('partials.session-status')
    </header>

    <main class="py-3">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{ config('app.name') }} |  Copyright @ {{ date('Y') }}
    </footer>
</div>
</body>
</html>
