<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Tutorial</title>

  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>Laravel Tutorial</h1>
      <a href="/professionals">
        All Professionals
      </a>
      <a href="/professionals/add">
        Add new Professional
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>
