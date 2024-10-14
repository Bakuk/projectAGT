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
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
</head>
<body>
<div id="app">
    <header>
        @include('user.partials.header')
    </header>

    <nav>
        @include('user.partials.nav')
    </nav>

    @if (Route::is('home'))
        <div class="slider">
            @include('user.partials.slider')
        </div>
    @endif

    <!-- Основной контент -->
    <main class="py-4">
        @yield('content')
    </main>


    @include('user.partials.footer')

</div>
<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>

        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('.sidebar-link');

            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    console.log('true');
                    // Удаляем активный класс со всех ссылок
                    links.forEach(l => l.classList.remove('active'));

                    // Добавляем активный класс к текущей ссылке
                    this.classList.add('active');

                    const url = this.dataset.url;

                    // Изменение URL без перезагрузки страницы
                    window.history.pushState({ path: url }, '', url);

                    // Отправляем AJAX запрос
                    fetch(url)
                        .then(response => response.text())
                        .then(html => {
                            // Создаем временный элемент для разбора HTML
                            const tempContainer = document.createElement('div');
                            tempContainer.innerHTML = html; // Заполняем временный элемент полученным HTML

                            // Получаем нужный элемент по ID из временного контейнера
                            const newContent = tempContainer.querySelector('#content-area');
                            // Вставляем новый контент
                            document.querySelector('#content-area').innerHTML = newContent.innerHTML;
                            console.log(html);
                        })
                        .catch(error => console.error('Ошибка загрузки данных:', error));
                });
            });

            // Обработка изменений истории (назад/вперед)
            window.addEventListener('popstate', function (e) {
                if (e.state && e.state.path) {
                    const url = e.state.path;

                    // Подгружаем контент при возврате назад/вперед
                    fetch(url)
                        .then(response => response.text())
                        .then(html => {
                            document.querySelector('#content-area').innerHTML = html;
                        })
                        .catch(error => console.error('Ошибка загрузки данных:', error));
                }
            });
        });
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

    .sidebar-link.active {
        background-color: rgba(0, 87, 179, 0.63);
        color: white;
    }

    #content-area{
        background-color: #ffffff;
        padding: 15px;
        border-radius: 8px;
    }

    .list-group-item {
        border: none; /* Убираем рамки */
        padding: 10px 0; /* Настраиваем отступы для лучшего вида */
    }

    .link_doc {
        font-size: 0.875rem; /* Уменьшаем размер текста */
        text-decoration: underline; /* Добавляем подчеркивание */
        color: #007bff; /* Цвет ссылки */
        padding: 0 5px; /* Отступы для ссылки */
    }

    .link_doc:hover {
        text-decoration: none; /* Убираем подчеркивание при наведении, если нужно */
        color: #0056b3; /* Изменяем цвет при наведении */
    }
</style>

