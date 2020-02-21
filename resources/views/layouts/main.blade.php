<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/png">
    <title>@yield('title')</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div id="app">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</div>
<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>

