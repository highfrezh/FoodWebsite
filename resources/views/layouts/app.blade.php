<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    {{-- <title>{{ config('app.name', 'restaurant') }}</title> --}}
    <title>resto!</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- swiper  -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
</head>

<body>
    <div id="app">
        <preload></preload>
        @yield('content')
        <heading></heading>

        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>

        <foot></foot>
    </div>

    <!-- swiper -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    {{-- asset js --}}
    <script src="{{ asset('/js/app.js') }}"></script>
    <script type="text/javascript">
    </script>


</body>

</html>