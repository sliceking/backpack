<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    @yield('title')
  </title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Backpack Frontend</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item  {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
          <a class="nav-link" href="/about-us">About us</a>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main" class="container">

    <div class="starter-template">
      <h1>@yield('title')</h1>
      <p class="lead">@yield('content')</p>
    </div>

  </main><!-- /.container -->
</body>

</html>
