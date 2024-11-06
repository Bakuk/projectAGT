@extends('user.layouts.app')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            @include('user.abitur.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">
                    <div class="container reception mt-4">
                        <h3 class="text-center abitur_title">Приемная комиссия</h3>

                        <div class="reception_block my-4">
                            <p class="reception_title">График работы Приемной комиссии:</p>

                            <table class="table table-bordered rounded abitur_table">
                                <tbody>
                                <tr>
                                    <td class="week">Понедельник</td>
                                    <td class="hours">с 8:00 до 16:30</td>
                                </tr>
                                <tr>
                                    <td class="week">Вторник</td>
                                    <td class="hours">с 8:00 до 16:30</td>
                                </tr>
                                <tr>
                                    <td class="week">Среда</td>
                                    <td class="hours">с 8:00 до 16:30</td>
                                </tr>
                                <tr>
                                    <td class="week">Четверг</td>
                                    <td class="hours">с 8:00 до 16:30</td>
                                </tr>
                                <tr>
                                    <td class="week">Пятница</td>
                                    <td class="hours">с 8:00 до 16:30</td>
                                </tr>
                                <tr class="table-warning">
                                    <td class="week break">Перерыв на обед</td>
                                    <td class="hours break">с 12:00 до 13:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="reception_title">Сроки подачи заявлений для поступления:</p>
                        <ol class="list-group list-group-numbered mb-4">
                            <li class="list-group-item">Очная форма обучения - с 01 июня по 25 августа.</li>
                            <li class="list-group-item">Заочная форма обучения - с 15 июня по 20 сентября</li>
                        </ol>

                        <p class="reception_title">Необходимо сдать следующие документы:</p>
                        <ol class="list-group list-group-numbered doc_list mb-4">
                            <li class="list-group-item">Заявление на поступление</li>
                            <li class="list-group-item">Анкета абитуриента</li>
                            <li class="list-group-item">Паспорт, свидетельство о рождении (оригинал и ксерокопию)</li>
                            <li class="list-group-item">Аттестат об образовании (оригинал или заверенную ксерокопию)</li>
                            <li class="list-group-item">Медицинская справка (форма 086у)</li>
                            <li class="list-group-item">Справка о составе семьи и места жительства (если имеется)</li>
                            <li class="list-group-item">Фото 4 штуки (3х4)</li>
                            <li class="list-group-item">Сертификат о профилактических прививках (ксерокопия)</li>
                            <li class="list-group-item">Страховой медицинский полис (ксерокопия)</li>
                            <li class="list-group-item">СНИЛС (Страховой номер индивидуального лицевого счёта) (ксерокопия)</li>
                            <li class="list-group-item">ИНН (Идентификационный номер налогоплательщика) (ксерокопия)</li>
                            <li class="list-group-item">Военный билет или приписное свидетельство (юношам, ксерокопия)</li>
                            <li class="list-group-item">Банковские реквизиты (если имеется)</li>
                        </ol>

                        <p class="reception_title"><span>Дети-сироты и дети, оставшиеся без попечения родителей</span> должны оформить требование по Форме № 1 (Свидетельство о смерти обоих родителей).</p>
                        <p class="reception_title">Дети-сироты и дети, оставшиеся без попечения родителей, по социальному положению, должны оформить требование по Форме № 2 (Справка формы № 25 — мать одиночка; решение суда о лишении родительских прав; справка с указанием срока нахождения в местах заключения; инвалиды 1, 2-ой группы с указанием о нетрудоспособности и то, что нужен уход за ними).</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection


