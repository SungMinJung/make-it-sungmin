<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Makeit') }}</title>

    {{-- <script src="{{ asset('js/gentelella.js') }}" defer></script> --}}
    <script src="/js/gentelella.js" defer></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    {{-- <link href="{{ asset('css/gentelella.css') }}" rel="stylesheet"> --}}
    <link href="/css/gentelella.css" rel="stylesheet">




  </head>
  <body class="@yield('bodyclass')">
        @yield('body')
  </body>
</html>
