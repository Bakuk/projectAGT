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
                <div class="d-flex flex-column align-items-center">
                    <!-- Иконка -->
                    <div class="icon mb-2">
                        <i class="bi bi-telephone fs-3"></i>
                    </div>
                    <!-- Текст -->
                    <p class="mb-2 text-center">8 (38464) 2-12-36</p>
                    <!-- Кнопка -->
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        Обратная связь
                    </a>
                </div>
            </div>


            <!-- Модальное окно -->
            <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="feedbackModalLabel">Обратная связь</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/send-feedback" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Ваше имя</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Ваш email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Сообщение</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
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

