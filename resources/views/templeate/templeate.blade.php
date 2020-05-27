<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIDETH</title>
    <link href=".{{asset('bootstrap/img/logo.png')}}"  rel="Shortcut Icon" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/styles.css')}}">
  </head>
  <body>

    @yield('contenido')

    <script src="{{asset('bootstrap/js/jquery.slim.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/scripts.js')}}"></script>
  </body>
</html>