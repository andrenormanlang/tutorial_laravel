<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tutorial</title>

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1 class="text-4xl font-bold">Welcome to Laravel Tutorial</h1>
    <p class="mt-4 mb-4">Please click below to see a list of professionals</p>

    <a href="/professionals" class="btn mt-4 inline-block">Professionals
    </a>
</body>
</html>
