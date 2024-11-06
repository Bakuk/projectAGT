

<nav class="col-md-4 col-lg-3 d-md-block sidebar">
    <a href="/student/schedule/" class="sidebar-link {{ request()->is('student/schedule') ? 'active' : '' }}" data-url="{{ route('user.schedule') }}">Расписание занятий</a>
    <a href="/student/obshhezhitiye/" class="sidebar-link {{ request()->is('student/obshhezhitiye') ? 'active' : '' }}" data-url="{{ route('user.obshhezhitiye') }}">Общежитие</a>
    <a href="/student/grantsStudent/"  class="sidebar-link {{ request()->is('student/grantsStudent') ? 'active' : '' }}" data-url="{{ route('user.grantsStudent') }}">Стипенди и меры поддержки обучающихся</a>
    <a href="/student/section/"  class="sidebar-link {{ request()->is('student/section') ? 'active' : '' }}" data-url="{{ route('user.section') }}">Кружки и секции</a>
    <a href="/student/sportClub/" class="sidebar-link {{ request()->is('student/sportClub') ? 'active' : '' }}" data-url="{{ route('user.sportClub') }}">Спортивный клуб "Эверест"</a>
    <a href="/student/career/" class="sidebar-link {{ request()->is('student/career') ? 'active' : '' }}" data-url="{{ route('user.career') }}">Центр содействия трудоустройства выпускников</a>

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
