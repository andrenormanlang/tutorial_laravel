<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Tutorial</title>

  @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{ session('success') }}
    </div>
    @endif

  <header>
    <nav>
      <h1>Laravel Tutorial</h1>
      <a href="{{route('professionals.index')}}">
        All Professionals
      </a>
      <a href="{{route('professionals.create')}}">
        Add new Professional
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>
