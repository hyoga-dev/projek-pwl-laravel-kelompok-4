<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Yoga Print' }}</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="flex-1 max-w-6xl mx-auto w-full px-4  mt-5 md:mt-20 ">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>