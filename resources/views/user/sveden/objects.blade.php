@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">

                    <h4>Материально-техническое обеспечение и оснащенность образовательного процесса</h4>

                    <section class="mb-5">
                        <h5>Описание зданий и сооружений</h5>
                        <div class="accordion " id="accordionBuildings">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Главный корпус №1 (ул. Юбилейная, д.1)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionBuildings">
                                    <div class="accordion-body">
                                        <p><strong>Учебный корпус:</strong> 2 этажа, 1194 м². Включает приемную директора, административные кабинеты, столовую на 150 мест, спортзал, лабораторию, 8 учебных кабинетов, из которых 2 - компьютерные с локальной сетью.</p>
                                        <p><strong>Учебные мастерские:</strong> 648 м². Здесь размещены 2 сварочных полигона, слесарная мастерская, лаборатория для поваров и т.д.</p>
                                        <p><strong>Общежитие:</strong> 3 этажа, 1428 м². Включает учебный кабинет, библиотеку, танцевальный зал и 35 жилых комнат на 75 мест.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Добавьте аналогичные карточки для других корпусов -->
                        </div>
                    </section>

                    <!-- Обеспечение учебными площадями -->
                    <section class="mb-5">
                        <h5>Обеспечение учебными площадями</h5>
                        <table class="table table-bordered">
                            <thead class="table-primary ">
                            <tr>
                                <th>Тип площади</th>
                                <th>Площадь (м²)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Аудиторный фонд</td>
                                <td>2494,7 м²</td>
                            </tr>
                            <tr>
                                <td>Учебно-вспомогательная площадь</td>
                                <td>744,1 м²</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Оснащенность техникума -->
                    <section class="mb-5">
                        <h5>Оснащенность техникума</h5>
                        <table class="table table-bordered">
                            <thead class="table-primary">
                            <tr>
                                <th>Оборудование</th>
                                <th>Количество</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Компьютерные классы</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Компьютеры в образовательном процессе</td>
                                <td>48</td>
                            </tr>
                            <tr>
                                <td>Проекторы мультимедиа</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Интернет-подключение</td>
                                <td>ATSL - 3 единицы</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Общежитие -->
                    <section class="mb-5">
                        <h5>Общежитие</h5>
                        <p>Трехэтажное здание на 80 мест, включающее душевые, комнаты гигиены, читальный зал, зал отдыха и медпункт.</p>
                    </section>

                    <!-- Оснащенность кабинетов и лабораторий -->
                    <section>
                        <h5>Оснащенность учебных кабинетов и лабораторий</h5>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Гуманитарный цикл:</strong> 70%</li>
                            <li class="list-group-item"><strong>Естественно-географический цикл:</strong> 70%</li>
                            <li class="list-group-item"><strong>Горные машины и оборудование:</strong> 40%</li>
                            <li class="list-group-item"><strong>Лаборатория обогащения:</strong> 90%</li>
                        </ul>
                    </section>

                    <h5 class="text-center mb-4 title_descr mt-4">Электронные образовательные ресурсы</h5>

                    <section class="mb-5">
                        <p><strong>Уроки, олимпиады, конкурсы:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>«Московская электронная школа» – это широкий набор электронных учебников и тестов, интерактивные сценарии уроков. Решения МЭШ доступны для всех и уже получили высокие оценки учителей, родителей и детей ряда московских школ.</td>
                                <td><a href="https://uchebnik.mos.ru/main" target="_blank" class="text-decoration-underline text-primary">uchebnik.mos.ru</a></td>
                            </tr>
                            <tr>
                                <td>Сайт издательского дома «Первое сентября» заинтересует в первую очередь учителей: они найдут там ссылки на периодические издания, образовательные проекты и методические материалы</td>
                                <td><a href="https://1sept.ru/" target="_blank" class="text-decoration-underline text-primary">1sept.ru</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </section>

                    <section class="mb-5">
                        <p><strong>Дополнительные материалы к урокам:</strong></p>

                        <p><strong>К уроку информатики:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>«Учителям информатики и математики и их любознательным ученикам». На данном сайте можно найти задания к олимпиадам по информатике и способы их решения, познакомиться с основными понятиями и терминами по информатике и программированию.</td>
                                <td><a href="http://compscience.narod.ru/" target="_blank" class="text-decoration-underline text-primary">compscience.narod.ru</a></td>
                            </tr>
                            </tbody>
                        </table>

                        <p><strong>К уроку истории:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>«История Великой Руси». «Россия под скипетром Романовых 1613-1913»</td>
                                <td><a href="http://clarino2.narod.ru/" target="_blank" class="text-decoration-underline text-primary">clarino2.narod.ru</a></td>
                            </tr>
                            <tr>
                                <td>Сайт охватывает трёхсотлетнюю историю русской монархии</td>
                                <td><a href="http://historic.ru/books/item/f00/s00/z0000010/" target="_blank" class="text-decoration-underline text-primary">historic.ru</a></td>
                            </tr>
                            <tr>
                                <td>«Лаборатория альтернативной истории». Ресурс для тех, кого интересуют необъяснимые факты истории, загадочные явления, феномены Прошлого.</td>
                                <td><a href="https://lah.ru/" target="_blank" class="text-decoration-underline text-primary">lah.ru</a></td>
                            </tr>
                            </tbody>
                        </table>

                        <p><strong>К уроку математики:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>«Сайт элементарной математики Дмитрия Гущина». Здесь вы найдете задачи математических олимпиад и методические пособия по математике.</td>
                                <td><a href="https://mathnet.spb.ru/" target="_blank" class="text-decoration-underline text-primary">mathnet.spb.ru</a></td>
                            </tr>
                            <tr>
                                <td>На сайте представлено более 10000 задач с математических олимпиад и вступительных экзаменов по математике и информатике. Ко многим задачам даются решения.</td>
                                <td><a href="https://www.problems.ru/" target="_blank" class="text-decoration-underline text-primary">problems.ru</a></td>
                            </tr>
                            </tbody>
                        </table>

                        <p><strong>К уроку физики:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>«Занимательная физика в вопросах и ответах» - сайт с ответами на вопросы относительно различных природных явлений, занимательные опыты и тесты по физике.</td>
                                <td><a href="http://www.elkin52.narod.ru/" target="_blank" class="text-decoration-underline text-primary">elkin52.narod.ru</a></td>
                            </tr>
                            <tr>
                                <td>«Интерактивный конвертер величин». На сайте представлены калькуляторы для множества систем измерений.</td>
                                <td><a href="https://www.convert-me.com/ru/" target="_blank" class="text-decoration-underline text-primary">convert-me.com</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </section>

                    <section class="mb-5">
                        <p><strong>Личностный рост:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Всероссийский образовательный проект «Урок цифры» позволяет школьникам знакомиться с основами цифровой экономики, цифровых технологий и программирования.</td>
                                <td><a href="https://xn--h1adlhdnlo2c.xn--p1ai/" target="_blank" class="text-decoration-underline text-primary">урок цифры.рф</a></td>
                            </tr>
                            <tr>
                                <td>Материалы для проведения классных часов и уроков финансовой грамотности.</td>
                                <td><a href="https://xn--80apaohbc3aw9e.xn--p1ai/" target="_blank" class="text-decoration-underline text-primary">моифинансы.рф</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </section>

                    <section>
                        <p><strong>Электронные библиотеки, словари, энциклопедии:</strong></p>
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Бесплатный доступ к электронным версиям учебно-методических комплексов, входящих в Федеральный перечень, от издательства «Просвещение».</td>
                                <td><a href="https://media.prosv.ru/" target="_blank" class="text-decoration-underline text-primary">media.prosv.ru</a></td>
                            </tr>
                            <tr>
                                <td>Журнал "Химия и жизнь"</td>
                                <td><a href="http://www.kvant.info/" target="_blank" class="text-decoration-underline text-primary">hij.ru</a></td>
                            </tr>
                            <!-- Add additional rows for other resources as needed -->
                            </tbody>
                        </table>
                    </section>
                </div>
            </main>
        </div>
    </div>

@endsection

