<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BBanking - Internet banking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('assets/font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/font/simple-line-icons/css/simple-line-icons.css')}}" />

    @yield('css')

    <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/css/vendor/component-custom-switch.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/css/main.css')}}" />


</head>

<body id="app-container" class="menu-sub-hidden show-spinner">

@include('layouts.back-end.nav')

@include('layouts.back-end.menu')

@yield('content')

<script src="{{ url('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{ url('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{ url('assets/js/vendor/mousetrap.min.js')}}"></script>

@yield('scripts')

<script src="{{ url('assets/js/dore.script.js')}}"></script>
<script src="{{ url('assets/js/scripts.js')}}"></script>



</body>

</html>
