<nav class="col-md-4 col-lg-3 d-md-block sidebar">
    <a href="/abitur/reception/" class="sidebar-link {{ request()->is('abitur/reception') ? 'active' : '' }}" data-url="{{ route('user.reception') }}">Приемная кампания</a>
    <a href="/abitur/admision/" class="sidebar-link {{ request()->is('abitur/admision') ? 'active' : '' }}" data-url="{{ route('user.admision') }}">Правила приема</a>
    <a href="/abitur/categoty/" class="sidebar-link {{ request()->is('abitur/categoty') ? 'active' : '' }}" data-url="{{ route('user.categoty') }}">Наши специальности</a>
    <a href="/abitur/decree/" class="sidebar-link {{ request()->is('abitur/decree') ? 'active' : '' }}" data-url="{{ route('user.decree') }}">Приказ о зачислении</a>
    <a href="/abitur/history/" class="sidebar-link {{ request()->is('abitur/history') ? 'active' : '' }}" data-url="{{ route('user.history') }}">Историческая справка</a>
</nav>

<style>

    .sidebar {
        background-color: #ffffff;
        color: #3c3c3c;
        padding: 15px;
        border-radius: 8px;
    }
    .sidebar a {
        color: rgba(26, 26, 255, 0.69);
        display: block;
        margin: 10px 0;
    }
    .sidebar a:hover {
        color: #495057;

    }

    .sidebar {
        height: auto; /* По умолчанию высота авто для мобильных устройств */
    }

    @media (min-width: 768px) { /* Применяется для экранов шире 768px */
        .sidebar {
            height: 100vh; /* Высота 100% от вьюпорта на больших экранах */
        }
    }
</style>
