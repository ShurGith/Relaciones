<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page_title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="border font-sans antialiased dark:bg-black dark:text-white/50 w-full">
    <header>
        <nav>
            <ul class="list-none flex gap-10 w-screen pl-10 pt-10 mb-10">
                <li><a class="border-secondary border rounded-md inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-secondary hover:bg-[#E8FBF6] disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5" href="{{ route('index') }}">Inicio</a></li>
                <li><a class="border-secondary border rounded-md inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-secondary hover:bg-[#E8FBF6] disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5" href="{{ route('create') }}">Nuevo Post</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <section>
            <h1>{{ $page_title }}</h1>
            @yield('content')
        </section>

    </main>
</body>
</html>
