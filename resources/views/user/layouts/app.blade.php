<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <header>
        @include('user.partials.header')
    </header>

    <nav>
        @include('user.partials.nav')
    </nav>

    <div class="slider">
        @include('user.partials.slider')
    </div>
    <!-- Основной контент -->
    <main class="py-4">
        @yield('content')
    </main>
</div>
<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialization for ES Users
    import { Carousel, initMDB } from "mdb-ui-kit";

    initMDB({ Carousel });
</script>
</body>
</html>

<style>
    a{
        color: black;
        text-decoration: none;
    }
    header, nav {
        background: #f2f2f2;
    }
    main, .slider{
        background: #ededed;
    }
</style>

