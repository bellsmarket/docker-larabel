<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@yield('head')
</head>
<body class="@yield('page')">
  @yield('header')
<main class="l-main" id="">
  <div class="container">
    @yield('content')
  </div>
</main>
@yield('footer')
</body>
</html>
