@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">

                    <h4>Руководство ГБПОУ АГТ</h4>
                    <div class="card-body mt-4">
                        <p class="small text-secondary">
                            Информация о руководстве публикуется на сайте с целью обеспечения наиболее полного исполнения образовательным учреждением своих обязанностей, обязательств и компетенций, определенных Федеральным законом от 29.12.2012 г. № 273-ФЗ «Об образовании в Российской Федерации» и в соответствии с Федеральным законом от 27.06.2006 г. № 152-ФЗ «О персональных данных».
                        </p>
                    </div>
                    @if($employees->isEmpty())
                        <p>Сотрудников нет.</p>
                    @else
                        <table class="table table-bordered ">

                            <thead class="bg-secondary text-white">

                            <tr>
                                <th>Фамилия, имя, отчество</th>
                                <th>Должность</th>
                                <th>Место положения</th>
                                <th>Адрес электронной почты</th>
                            </tr>

                            </thead>
                            @foreach($employees as $employee)
                                <tbody>
                                <tr>
                                    <td>{{$employee->full_name}}</td>
                                    <td>{{$employee->possition}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>{{$employee->email}}</td>
                                </tr>

                                </tbody>
                            @endforeach
                        </table>
                    @endif

                    <h4>Педагогический состав:</h4>
                    <div class="card-body mt-4">
                        <p class="small text-secondary">
                            Информация о о педагогическом составе публикуется на сайте с целью обеспечения наиболее полного исполнения образовательным учреждением своих обязанностей, обязательств и компетенций, определенных Федеральным законом от 29.12.2012 г. № 273-ФЗ «Об образовании в Российской Федерации» и в соответствии с Федеральным законом от 27.06.2006 г. № 152-ФЗ «О персональных данных».
                        </p>
                    </div>

                    <!-- Проверка наличия документов -->
                    @if($pedDocuments->isEmpty())
                        <p>Документов нет.</p>
                    @else
                        <ul class="list-group list-doc">
                            @foreach($pedDocuments as $document)
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
                                            <a href="{{ asset('uploads/documents/' . $document->file_path) }}" target="_blank" class="link_doc">cкачать</a>
                                        </div>

                                    </div>


                                </li>
                            @endforeach
                        </ul>
                    @endif


                </div>
            </main>
        </div>
    </div>

@endsection

