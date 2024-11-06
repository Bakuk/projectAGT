

<nav class="col-md-4 col-lg-3 d-md-block sidebar">
    <a href="/lecturer/document/" class="sidebar-link {{ request()->is('lecturer/document') ? 'active' : '' }}" data-url="{{ route('user.documentLecture') }}">Документы</a>
    <a href="/student/obshhezhitiye/" class="sidebar-link {{ request()->is('student/obshhezhitiye') ? 'active' : '' }}" data-url="{{--{{ route('user.obshhezhitiye') }}--}}">Аттестация</a>
    <a href="/student/grantsStudent/"  class="sidebar-link {{ request()->is('student/grantsStudent') ? 'active' : '' }}" data-url="{{--{{ route('user.grantsStudent') }}--}}">Нормативно-правовое обеспечение</a>
    <a href="/student/section/"  class="sidebar-link {{ request()->is('student/section') ? 'active' : '' }}" data-url="{{--{{ route('user.section') }}--}}">Методическая служба образовательного учреждения</a>
    <a href="/student/sportClub/" class="sidebar-link {{ request()->is('student/sportClub') ? 'active' : '' }}" data-url="{{--{{ route('user.sportClub') }}--}}">Развитие кадрового потенциала</a>
    <a href="/student/career/" class="sidebar-link {{ request()->is('student/career') ? 'active' : '' }}" data-url="{{--{{ route('user.career') }}--}}">Изучение, обобщение, трансляция передового педагогического опыта</a>
    <a href="/student/career/" class="sidebar-link {{ request()->is('student/career') ? 'active' : '' }}" data-url="{{--{{ route('user.career') }}--}}">Реализуемые образовательные программы</a>
    <a href="/student/career/" class="sidebar-link {{ request()->is('student/career') ? 'active' : '' }}" data-url="{{--{{ route('user.career') }}--}}">ВСОКО</a>
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
