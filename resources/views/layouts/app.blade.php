<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- FONTS --}}
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <title>@yield('page-title')</title>

  @vite('resources/js/app.js')
</head>

<body>
  <header>
    @include('partials._navbar')
    @yield('header-content')
  </header>
  <main>@yield('main-content')</main>
  <footer>
    @yield('footer-content')
  </footer>
</body>

</html>