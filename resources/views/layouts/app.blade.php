<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js')}}" defer></script>

    <script src="https://kit.fontawesome.com/d90f7daef4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="icon" href="{!! asset('luiz/favicon.ico') !!}"/>

    @yield('header')
</head>
<body id="page-top">
    @yield('content')
</body>
</html>
