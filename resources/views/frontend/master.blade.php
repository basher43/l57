<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('APP_NAME')}}</title>

    <!-- Fonts -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link href="{{mix('css/custom.css')}}" rel="stylesheet">
</head>
<body>

@include('frontend.partials._header')

<main role="main">
    @yield('main')
</main>

@include('frontend.partials._footer')

<script src="{{mix('js/all.js')}}"></script>
</body>
</html>
