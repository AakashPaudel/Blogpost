<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogPost</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-100 min-h-screen">

    @include('components.navbar.app-navbar')

    <main class="max-w-6xl mx-auto px-8 py-8">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>