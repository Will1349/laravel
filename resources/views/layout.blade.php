<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Isengard')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials/nav')
            @include('partials/session-status')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class=" bg-white text-primary py-3 shadow text-center ">
            {{ config('app.name') }} | <a class="text-secondary"
                href="https://www.youtube.com/watch?v=8k5WQnfCjmk">Industry
                city
                by Konan</a> {{
            date('Y')
            }} </footer>

    </div>

</body>

</html>
