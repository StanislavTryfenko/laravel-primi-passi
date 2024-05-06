<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dark:bg-gray-900">
    <header class="text-white bg-gray-800 py-5 text-center">
        <nav class="flex justify-evenly">
            @foreach ($links as $link)
                <a href="{{$link}}">{{$link}}</a>
            @endforeach
        </nav>
    </header>
    <div class="container mx-auto text-white flex place-content-center mt-10 text-3xl">
        <h1>{{$title}}</h1>
    </div>
</body>

</html>