@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">
                    <h4>Документы</h4>
                    <h6>Основные документы</h6>

                    <!-- Проверка наличия документов -->
                    @if($mainDocuments->isEmpty())
                        <p>Документов нет.</p>
                    @else
                        <ul class="list-group list-doc">
                            @foreach($mainDocuments as $document)
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

                    <h6 class="mt-3" >Локальные акты</h6>

                    <!-- Проверка наличия документов -->
                    @if($localDocuments->isEmpty())
                        <p>Документов нет.</p>
                    @else
                        <ul class="list-group list-doc">
                            @foreach($localDocuments as $document)
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
                </div>
            </main>
        </div>
    </div>

@endsection

