@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.abitur.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4 ">
                <div id="content-area ">

                    <h4>Перечень специальностей</h4>
                    @if($specialties->isEmpty())
                        <p>Пусто.</p>
                    @else
                        <table class="table table-bordered ">

                            <thead class="bg-secondary text-white">

                            <tr>
                                <th>Наименование специальности и профессии (квалификация)</th>
                                <th>Форма обучения</th>
                                <th>Срок обучения</th>
                            </tr>

                            </thead>
                            @foreach($specialties as $specialty)
                                <tbody>
                                <tr>
                                    <td>{{$specialty->name}}</td>
                                    <td>{{$specialty->form_of_educate}}</td>
                                    <td>{{$specialty->srok_of_educate}}</td>
                                </tr>

                                </tbody>
                            @endforeach
                        </table>
                    @endif
                    <div class="row">
                        <!-- Section for Обогащение полезных ископаемых -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-primary">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Обогащение полезных ископаемых</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-subtitle mb-3 text-muted">Присваиваемая квалификация: Техник</h5>
                                    <p><strong>Область профессиональной деятельности:</strong> организация и контроль технологических процессов обогащения полезных ископаемых производственного подразделения.</p>
                                    <p><strong>Объекты профессиональной деятельности:</strong> полезные ископаемые, продукты обогащения, технологическое оборудование, расходные материалы, техническая документация, управление персоналом.</p>
                                    <p><strong>Виды деятельности:</strong></p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Ведение технологических процессов обогащения полезных ископаемых согласно заданным параметрам</li>
                                        <li class="list-group-item">Организация безопасных условий труда</li>
                                        <li class="list-group-item">Организация производственной деятельности технического персонала</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Section for Открытые горные работы -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-success">
                                <div class="card-header bg-success text-white">
                                    <h5 class="card-title mb-0">Открытые горные работы</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-subtitle mb-3 text-muted">Присваиваемая квалификация: Горный техник-технолог</h5>
                                    <p><strong>Область профессиональной деятельности:</strong> ведение технологических процессов при добыче полезных ископаемых открытым способом на производственном участке.</p>
                                    <p><strong>Объекты профессиональной деятельности:</strong> горные породы, технологический процесс, горнотранспортное оборудование, техническая документация, персонал производственного подразделения.</p>
                                    <p><strong>Виды деятельности:</strong></p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Ведение технологических процессов горных и взрывных работ</li>
                                        <li class="list-group-item">Контроль безопасности ведения горных и взрывных работ</li>
                                        <li class="list-group-item">Организация деятельности персонала производственного подразделения</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section for Основные социальные партнеры -->
                    <div class="card mt-4 border-info">
                        <div class="card-header bg-info text-white">
                            <h5 class="card-title mb-0">Основные социальные партнеры по трудоустройству</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ООО «Лунсин» (Тоджа)</li>
                                <li class="list-group-item">ООО «Голевская горнорудная компания» (Тоджа)</li>
                                <li class="list-group-item">ООО «Туваасбест»</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection

