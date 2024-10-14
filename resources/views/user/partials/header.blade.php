<div class="navbar navbar-light bg-body-tertiary">
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img
                        src="{{ asset('logo/logo.png') }}"
                        class="img-fluid logo"
                        height="120"
                        alt="logo"
                        loading="lazy"
                    />
                </a>
            </div>
            <div class="col-md-2 offset-md-2">
                <div class = "icon">
                    <i class="bi bi-clock"></i>
                </div>

                <p class="text-center">г. Ак-Довурак, ул. Юбилейная д. 1
                    <br>с 8:30 до 17:00, Пн-Пт</p>
            </div>
            <div class="col">
                <div class = "icon">
                    <i class="bi bi-telephone"></i>
                </div>
                <p class="text-center">8 (38464) 2-12-36</p>
            </div>

            <div class="col">
                <a href="">
                    <div class = "icon">
                        <i class="bi bi-eye"></i>
                    </div>
                    <p class="text-center">Версия для слабовидящих</p>
                </a>
            </div>
        </div>
    </div>

</div>


<style>
    .logo {
        width: 600px;
    }

    .icon {
        text-align: center /* максимальная ширина, можно настроить */
    }

</style>

