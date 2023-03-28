<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME')}} - @yield('page_name')</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
  @include('_partials._header')
  @include('_partials._navbar')
  @include('_partials._jumbotron')
  <p>
    @yield('main_content')
  </p>
  @include('_partials._footer')
</body>
</html>