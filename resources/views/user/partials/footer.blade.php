<footer class="bg-dark text-light py-4"> <!-- Футер, который будет прикреплен к низу -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>О нас</h5>
                <p>Государственное бюджетное профессиональное образовательное учреждение
                    “Ак-Довуракский горный техникум”. </p>
                <p>668051, Республика Тыва, г. Ак-Довурак, ул. Юбилейная, 1.</p>
            </div>
            <div class="col-md-3">
                <h5>Навигация</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-light">Главная</a></li>
                    <li><a href="{{ route('user.news') }}" class="text-light">Новости</a></li>
                    <li><a href="#" class="text-light">Контакты</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Контакты</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill"></i> Адрес: ул. Юбилейная, 1 </li>
                    <li><i class="bi bi-envelope-fill"></i> Email: info@company.com</li>
                    <li><i class="bi bi-telephone-fill"></i> Телефон: +7 123 456 7890</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; {{ date('Y') }} Ак-Довуракский горный техникум. Все права защищены.</p>
        </div>
    </div>
</footer>
