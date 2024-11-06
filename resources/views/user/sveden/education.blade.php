@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">

                    <h4>Образование</h4>
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

                    <h5 class="mt-5">Рабочие учебные планы</h5>

                    <!-- Проверка наличия документов -->
                    @if($rabPlansDocuments->isEmpty())
                        <p>Документов нет.</p>
                    @else
                        <ul class="list-group list-doc">
                            @foreach($rabPlansDocuments as $document)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <!-- Логика отображения иконки в зависимости от типа файла -->
                                    <div class="d-flex align-items-center">
                                        @php
                                            $extension = pathinfo($document->file_path, PATHINFO_EXTENSION);
                                        @endphp

                                        @if(in_array($extension, ['pdf']))
                                            <i class="bi bi-file-earmark-pdf text-danger me-2"></i> <!-- Иконка для PDF -->
                                        @elseif(in_array($extension, ['doc', 'docx']))
                                            <i class="bi bi-file-earmark-word text-primary me-2"></i> <!-- Иконка для Word -->
                                        @elseif(in_array($extension, ['xls', 'xlsx']))
                                            <i class="bi bi-file-earmark-excel text-success me-2"></i> <!-- Иконка для Excel -->
                                        @else
                                            <i class="bi bi-file-earmark me-2"></i> <!-- Иконка для других типов файлов -->
                                        @endif

                                        <!-- Название документа с ссылкой на скачивание -->
                                        <div class="mx-1">
                                            {{ $document->title }}
                                        </div>

                                        <div >
                                            <a href="{{ asset('uploads/documents/' . $document->file_path) }}" target="_blank" class="link_doc">cкачать</a>
                                        </div>
                                    </div>


                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <h5 class="mt-5">Рабочие программы</h5>

                    <table class="table table-bordered ">

                        <thead class="bg-secondary text-white">

                        <tr>
                            <th>Наименование специальности</th>
                            <th>Форма обучения</th>
                            <th>Методические документы</th>
                        </tr>

                        </thead>
                            <tbody>
                            <tr>
                                <td>09.01.03 Оператор информационных систем и ресурсов</td>
                                <td>Очная</td>
                                <td><a href="https://disk.yandex.ru/d/GRvtsPHqzcXDTw" class="text-decoration-underline text-primary" target="_blank">Ссылка на документы</a></td>
                            </tr>

                            <tr>
                                <td>09.01.03 Мастер по обработке цифровой информации</td>
                                <td>Очная</td>
                                <td><a href="https://disk.yandex.ru/d/dyXGn_B3xy49tQ" class="text-decoration-underline text-primary" target="_blank">Ссылка на документы</a></td>
                            </tr>

                            <tr>
                                <td>21.02.18 Обогащение полезных ископаемых</td>
                                <td>Очная</td>
                                <td><a href="https://disk.yandex.ru/d/3cNcoOaRUzTH3w" class="text-decoration-underline text-primary" target="_blank">Ссылка на документы</a></td>
                            </tr>

                            <tr>
                                <td>15.01.05 Сварщик (ручной и частично механизированной сварки (наплавки)) </td>
                                <td>Очная</td>
                                <td><a href="https://disk.yandex.ru/d/-o3F2edSHxHdWg" class="text-decoration-underline text-primary" target="_blank">Ссылка на документы</a></td>
                            </tr>

                            </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

@endsection
