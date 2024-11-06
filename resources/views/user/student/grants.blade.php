@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.student.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="sveden_title mb-4">Стипендии и другие виды материальной поддержки</h3>
                            <p class="mb-3">Назначение и выплата государственных академических и социальных стипендий, материальной помощи и других выплат социального характера производится в пределах и по мере поступления средств из бюджета.</p>
                            <p class="mb-3">Стипендиальное обеспечение студентов.</p>
                            <p class="mb-3">Стипендия являются денежной выплатой, назначаемая и выплачиваемая студентам, обучающимся в техникуме по очной форме обучения.</p>
                            <p class="mb-3">Стипендии подразделяются на:</p>
                            <ul class="mb-3">
                                <li>академические стипендии;</li>
                                <li>социальные стипендии;</li>
                                <li>стипендии для детей сирот и детей оставшихся без попечения родителей;</li>
                            </ul>
                            <p class="mb-3">Государственная академическая стипендия назначается студентам в зависимости от успехов в учебе.</p>
                            <p class="mb-3">Государственные социальные стипендии назначаются студентам, нуждающимся в социальной помощи.</p>
                            <p class="mb-3">Стипендии назначаются приказом директора техникума по представлению стипендиальной комиссии.</p>
                            <p class="mb-3">Студентам, обучающимся на «отлично» и "хорошо" или на все оценки "хорошо" осуществляется надбавка к стипендии в размере 25% от размера стипендии.</p>
                            <p class="mb-3">В случае, если обучающийся имеет все оценки «отлично», надбавка к стипендии составляет 50% от размера стипендии при наличии средств в стипендиальном фонде.</p>
                            <p class="mb-3">Выплата академической стипендии студенту прекращается с месяца, следующего за месяцем издания приказа о его отчислении.</p>
                            <p class="mb-3">В период прохождения студентами производственной практики сохраняется назначенная ему государственная академическая стипендия.</p>
                            <p class="mb-3">Студентам, находящимся в академическом отпуске, государственная академическая стипендия не выплачивается.</p>
                            <p class="mb-3">Студентам, принятым в порядке перевода из другого учебного заведения среднего профессионального образования государственная академическая стипендия назначается по результатам семестра по прежнему месту учебы.</p>

                            <h5 class="title_doc mt-4">Более подробную информацию о стипендиях и иных видах материальной поддержки вы можете узнать:</h5>

                            <!-- Проверка наличия документов -->
                            @if($grantDocuments->isEmpty())
                                <p>Документов нет.</p>
                            @else
                                <ul class="list-group list-doc">
                                    @foreach($grantDocuments as $document)
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

                            {{--<h5 class="title_doc mt-4">Трудоустройство выпускников 2022 года</h5>
                            <ol class="list_doc">
                                <li class="doc_item"><a href="file/трудоустройство 2021.pdf" target="_blank">Трудоустройство выпускников 2021 год.pdf</a></li>
                                <li class="doc_item"><a href="file/Трудоустройство 22 год.PDF" target="_blank">Трудоустройство выпускников 2022 года.pdf</a></li>
                            </ol>--}}
                        </div>
                </div>
            </main>
        </div>
    </div>

@endsection
