<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body>
    <header>

        @include('partials.header')

    </header>

    <main>
        @yield('content')

    </main>



    <footer>
        @include('partials.footer')

    </footer>
</body>

</html>