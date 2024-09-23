<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'My Application')</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style type="text/css">
        header,
        main,
        footer {
            padding-left: 240px;
        }

        body {
            background: white;
        }


        @media only screen and (max-width: 992px) {
            header,
            main,
            footer {
                padding-left: 0;
            }
        }

        #credits li,
        #credits li a {
            color: white;
        }

        #credits li a {
            font-weight: bold;
        }

        .footer-copyright .container,
        .footer-copyright .container a {
            color: #BCC2E2;
        }

        .fab-tip {
            position: fixed;
            right: 85px;
            padding: 0px 0.5rem;
            text-align: right;
            background-color: #323232;
            border-radius: 2px;
            color: #FFF;
            width: auto;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

    </style>
</head>

<body>

<ul id="slide-out" class="side-nav fixed z-depth-2">
    <!-- Здесь может быть общий sidebar  для всех страниц -->
    @include('admin.partials.sidebar')
</ul>

<header>
    <!-- Здесь может быть общий header для всех страниц -->
    @include('admin.partials.header')
</header>

<main>
    @yield('content')
</main>

<footer class="indigo page-footer">
    <!-- Здесь может быть общий footer для всех страниц -->
    @include('admin.partials.footer')
</footer>

<!-- Подключаем скрипты -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.button-collapse').sideNav();
        $('.collapsible').collapsible();
        $('select').material_select();
    });

    document.getElementById('file-input').addEventListener('change', function() {
        var fileName = this.files[0].name;
        document.getElementById('file-name').textContent = fileName;
    });
</script>

</body>
</html>


