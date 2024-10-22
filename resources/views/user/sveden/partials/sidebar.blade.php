<nav class="col-md-4 col-lg-3 d-md-block sidebar">
    <a href="/sveden/basics/" class="sidebar-link {{ request()->is('sveden/basics') ? 'active' : '' }}" data-url="{{ route('user.basics') }}">Основные сведения</a>
    <a href="/sveden/struct/" class="sidebar-link {{ request()->is('sveden/struct') ? 'active' : '' }}" data-url="{{ route('user.struct') }}">Структуры и органы управления образовательной организации</a>
    <a href="/sveden/documents/"  class="sidebar-link {{ request()->is('sveden/documents') ? 'active' : '' }}" data-url="{{ route('user.documents') }}">Документы</a>
    <a href="#contact" class="sidebar-link">Образовательные стандарты и требования</a>
    <a href="#contact" class="sidebar-link">Руководство</a>
    <a href="#contact" class="sidebar-link">Педагогический состав</a>
    <a href="#contact" class="sidebar-link">Материально-техническое обеспечение и оснащенность
        образовательного процесса. Доступная среда</a>
    <a href="#contact" class="sidebar-link">Платные образовательные услуги</a>
    <a href="#contact" class="sidebar-link">Финансово-хозяйственная деятельность</a>
    <a href="#contact" class="sidebar-link">Вакантные места для приема (перевода) обучающихся</a>
    <a href="#contact" class="sidebar-link">Стипендии и меры поддержки обучающихся</a>
    <a href="#contact" class="sidebar-link">Международное сотрудничество</a>
    <a href="#contact" class="sidebar-link">Организация питания в образовательной организации</a>

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
