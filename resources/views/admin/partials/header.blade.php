<ul class="dropdown-content" id="user_dropdown">
    <li><a class="indigo-text" href="#!">Профиль</a></li>
    <li><a class="indigo-text" href="#!">Выход</a></li>
</ul>

<nav class="indigo" role="navigation">
    <div class="nav-wrapper">
        <a data-activates="slide-out" class="button-collapse show-on-large" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>

        <ul class="right hide-on-med-and-down">
            <li>
                <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
            </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>

<nav>
    <div class="nav-wrapper indigo darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="#!">Админ</a>
        <a class="breadcrumb" href="/admin/dashboard">Панель</a>
        <a class="breadcrumb" href="#!">@yield('nav-title', '')</a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
    </div>
</nav>
