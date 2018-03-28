<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ilmenau Forum')</title>

    <link href="{{ asset('sass/app.scss')}}"
  </head>
  <body>
    <div id="app" class="{{ route_class() }}-page">
      @include('layouts._header')

      <div class="container">

      </div>
    </div>
  </body>
</html>
