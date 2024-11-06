<nav class="col-md-4 col-lg-3 d-md-block sidebar">
    <a href="/sveden/basics/" class="sidebar-link {{ request()->is('sveden/basics') ? 'active' : '' }}" data-url="{{ route('user.basics') }}">Основные сведения</a>
    <a href="/sveden/struct/" class="sidebar-link {{ request()->is('sveden/struct') ? 'active' : '' }}" data-url="{{ route('user.struct') }}">Структуры и органы управления образовательной организации</a>
    <a href="/sveden/documents/"  class="sidebar-link {{ request()->is('sveden/documents') ? 'active' : '' }}" data-url="{{ route('user.documents') }}">Документы</a>
    <a href="/sveden/education/"  class="sidebar-link {{ request()->is('sveden/education') ? 'active' : '' }}" data-url="{{ route('user.education') }}">Образование</a>
    <a href="/sveden/eduStandart/" class="sidebar-link {{ request()->is('sveden/eduStandart') ? 'active' : '' }}" data-url="{{ route('user.eduStandart') }}">Образовательные стандарты и требования</a>
    <a href="/sveden/employees/" class="sidebar-link {{ request()->is('sveden/employees') ? 'active' : '' }}" data-url="{{ route('user.employees') }}">Руководство. Педагогический состав</a>
    <a href="/sveden/objects/" class="sidebar-link {{ request()->is('sveden/objects') ? 'active' : '' }}" data-url="{{ route('user.objects') }}">Материально-техническое обеспечение и оснащенность
        образовательного процесса</a>
    <a href="/sveden/grants/" class="sidebar-link {{ request()->is('sveden/grants') ? 'active' : '' }}" data-url="{{ route('user.grants') }}">Стипендии и меры поддержки обучающихся</a>
    <a href="/sveden/paid_edu/" class="sidebar-link {{ request()->is('sveden/paid_edu') ? 'active' : '' }}" data-url="{{ route('user.paidEdu') }}">Платные образовательные услуги</a>
    <a href="/sveden/accesible/" class="sidebar-link {{ request()->is('sveden/accesible') ? 'active' : '' }}" data-url="{{ route('user.accesible') }}">Доступная среда</a>
    <a href="/sveden/international/" class="sidebar-link {{ request()->is('sveden/international') ? 'active' : '' }}" data-url="{{ route('user.international') }}">Международное сотрудничество</a>
    <a href="/sveden/food_edu/" class="sidebar-link {{ request()->is('sveden/food_edu') ? 'active' : '' }}" data-url="{{ route('user.foodEdu') }}">Организация питания в образовательной организации</a>
    <a href="/sveden/transfer_edu/" class="sidebar-link {{ request()->is('sveden/transfer_edu') ? 'active' : '' }}" data-url="{{ route('user.transferEdu') }}">Вакантные места для приема (перевода) обучающихся</a>
    <a href="/sveden/budget/" class="sidebar-link {{ request()->is('sveden/budget') ? 'active' : '' }}" data-url="{{ route('user.budget') }}">Финансово-хозяйственная деятельность</a>





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
</style>
