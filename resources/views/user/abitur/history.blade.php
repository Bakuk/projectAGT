@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.abitur.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4 " >
                <div id="content-area">
                    <div class="container mt-5">
                        <!-- Title -->
                        <div class="row">
                            <div class="col">
                                <h4 class="text-center">История техникума</h4>
                            </div>
                        </div>

                        <iframe class="history_agtVideo" width="560" height="315" src="https://www.youtube.com/embed/oRT61rSmX54?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <!-- History Section -->
                        <div class="card mt-4 border-primary">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title mb-0">История техникума</h4>
                            </div>
                            <div class="card-body">
                                <p>История техникума началась с 1966 года со строительства г. Ак-Довурак и ГОК "Тываасбест". Приказом Красноярского Краевого Управления профтехобразования №165 от 08 июня 1966 года «Об организации городского профтехучилища на базе комбината «Туваасбест» создано Городское профтехучилище №41 на 200 учащихся. С первого сентября 1966 года в училище началось обучение специалистов для строительных предприятий города и комбината «Туваасбест имени В. И. Ленина».</p>
                                <p><strong>Первый директор:</strong> Кольцов Александр Максимович, <strong>заместитель</strong> – Тихонов Эдуард Викторович.</p>
                                <p>Первый выпуск состоялся уже через год. Около ста человек плотников и штукатуров-маляров пришли в 1967 году на строительные объекты города. Училище продолжало выпускать специалистов различных профессий, востребованных комбинатом и строительными организациями города.</p>
                            </div>
                        </div>

                        <!-- Key Milestones -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-info">
                                    <div class="card-header bg-info text-white">
                                        <h5 class="card-title mb-0">Этапы реорганизации "Ак-Довуракского горного техникума"</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">1966 – 1975 г.г. – ГПТУ-41</li>
                                            <li class="list-group-item">1975 – 1984 г.г. - СГПТУ-3</li>
                                            <li class="list-group-item">1984 – 1989 г.г. - СПТУ -3</li>
                                            <li class="list-group-item">1989 - 1997 г.г. - ПТУ-3</li>
                                            <li class="list-group-item">1998 - 2004 г.г. - ПУ-3</li>
                                            <li class="list-group-item">С марта 2004 г. – ГОУ НПО ПУ-3</li>
                                            <li class="list-group-item">С января 2012 г. – ГБОУ СПО РТ «Ак-Довуракский горный техникум»</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Notable Directors Section -->
                            <div class="col-md-6">
                                <div class="card h-100 border-secondary">
                                    <div class="card-header bg-secondary text-white">
                                        <h5 class="card-title mb-0">Важные вехи и люди</h5>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Иван Константинович Кустов</strong> был директором, который вкладывал всю душу в развитие училища. Он создал богатую учебно-материальную базу, включая мастерские, спецкабинеты, спортивное оборудование и технику для кружков.</p>
                                        <p><strong>Юрий Гаврилов и Александр Спицин</strong> были у истоков мотоспорта в техникуме.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information Section -->
                        <div class="card mt-4 border-success">
                            <div class="card-header bg-success text-white">
                                <h5 class="card-title mb-0">Учебная материальная база и достижения</h5>
                            </div>
                            <div class="card-body">
                                <p>За годы существования училища была создана обширная учебно-материальная база: сварочный цех, мастерские для практических занятий, кабинет спецтехнологии, кабинет обогащения полезных ископаемых, а также слесарная мастерская.</p>
                                <p>Выпускникам училища была гарантирована работа на комбинате. В 1978 году была организована школа для повышения квалификации выпускников, курируемая директором комбината Виктором Алексеевичем Уховым.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </main>
        </div>
    </div>

@endsection


