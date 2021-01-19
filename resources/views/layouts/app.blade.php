<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Js basico -->
    <script src="{{ asset('js/app.js')}}" defer></script>
    <!-- FontsAwesome  import -->
    <script src="https://kit.fontawesome.com/d90f7daef4.js" crossorigin="anonymous"></script>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="icon" href="{!! asset('luiz/favicon.ico') !!}"/>
    @livewireStyles
    @yield('header')
</head>
<body id="page-top">
    @yield('content')


    <!-- LivewireScripts -->
    @livewireScripts


    <!-- jquery & mask -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.setup.js')}}"></script>
</body>
</html>
