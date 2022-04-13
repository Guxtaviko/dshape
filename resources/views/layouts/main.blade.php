<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}">

    <title>DShape - Site para avaliações físicas</title>
  </head>
  <body>
    @yield('container')

    <!-- Separate Popper and Bootstrap JS -->
    <script src="{{ asset('/js/popper.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>