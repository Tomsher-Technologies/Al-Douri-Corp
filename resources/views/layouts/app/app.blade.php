<!DOCTYPE html>
<html class="no-js vlt-is--homepage-12 vlt-is--header-fullscreen vlt-is--footer-style-1 vlt-is--footer-fixed"
    dir="@if (app()->getLocale() == 'en') {{ 'ltr' }} @else {{ 'rlt' }} @endif"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Al Douri</title>

    <link rel="icon" type="image/svg" href="{{ asset('assets/img/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/framework/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/Skape/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/Socicons/socicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vlt-plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vlt-main.min.css') }}">

    @stack('header')

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>


<body>
    @include('frontend.parts.header')


    <main class="vlt-main {{ $main_class ?? '' }}">
        @yield('content')
    </main>

    @include('frontend.parts.footer')

    <script src="{{ asset('assets/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/vlt-plugins.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/vlt-helpers.js') }}"></script>
    <script src="{{ asset('assets/scripts/vlt-controllers.min.js') }}"></script>
</body>

</html>
