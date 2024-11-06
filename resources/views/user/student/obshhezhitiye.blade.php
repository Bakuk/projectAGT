@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row ">
            <!-- Sidebar -->
            @include('user.student.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4 " >
                <div id="content-area">
                    <h4>Общежитие</h4>

                    <!-- Проверка наличия документов -->
                    @if( $obshhezhitiyeDocuments->isEmpty())
                        <p>Документов нет.</p>
                    @else
                        <ul class="list-group list-doc">
                            @foreach($obshhezhitiyeDocuments as $document)
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
                    <!-- Описание общежития -->
                    <section class="mb-5">
                        <h6>Общая информация</h6>
                        <p>Техникум постоянно заботится об улучшении социально-бытовых условий для студентов, слушателей курсов повышения квалификации. Студенческое общежитие находится по адресу: г. Ак-Довурак ул. Юбилейная д.1, тел. 8(39433) 2-13-85.</p>
                        <p>Общежитие введено в эксплуатацию в 1966 году. Трехэтажное здание. Общая площадь 1428,9 кв.м. Территориально расположено в деловой и культурной части города.</p>
                    </section>

                    <!-- Правила заселения -->
                    <section class="mb-5">
                        <h6>Правила заселения в общежитии</h6>
                        <p>Заселение в общежитие студентов дневного отделения производится на основании приказа директора техникума на заселение, их личных заявлений и договора найма жилого помещения в студенческом общежитии. Для получения места в общежитии нужно заполнить специальную графу в заявлении о поступлении в техникум.</p>
                        <ul>
                            <li>Направление на заселение от дневного отделения с подписью заведующего общежитием</li>
                            <li>Копия паспорта</li>
                            <li>2 фотографии 3х4</li>
                            <li>Справка о прохождении медосмотра</li>
                        </ul>
                        <p>Студенты до 18 лет оформляют документы на заселение в общежитие с родителями или с законными представителями.</p>
                    </section>

                    <!-- Условия проживания -->
                    <section class="mb-5">
                        <h6>Условия проживания</h6>
                        <p>Общежитие техникума коридорного типа. Количество жилых помещений (комнат для проживания) - 66 шт. Комнаты рассчитаны на 2-4 человека. В каждой комнате есть кровати, тумбочки, шкаф для одежды, стулья, стол для занятий.</p>
                        <p>Живущие в общежитии студенты обеспечиваются трехразовым горячим питанием бесплатно в столовой техникума. Постельное белье меняется у кастелянши 1 раз в 7 дней бесплатно.</p>
                    </section>

                    <!-- Стоимость проживания и оплата -->
                    <section class="mb-5">
                        <h6>Стоимость проживания и оплата</h6>
                        <p>Стоимость проживания в общежитии для студентов очного и заочного отделений составляет 1000 руб. 00 коп.</p>
                        <p>Дети-сироты, дети, оставшиеся без попечения родителей, инвалиды I и II групп, абитуриенты (на период сдачи вступительных экзаменов) проживают в общежитии бесплатно.</p>
                    </section>

                    <!-- Пропускная система -->
                    <section class="mb-5">
                        <h6>Пропускная система и видеонаблюдение</h6>
                        <p>Организация пропускной системы осуществляется вахтерами и охранником. В общежитии установлена система видеонаблюдения за передвижением проживающих и персонала по этажам, что позволяет обеспечивать порядок и дисциплину среди проживающих.</p>
                    </section>

                    <!-- Пожарная безопасность -->
                    <section class="mb-5">
                        <h6>Система пожарной безопасности</h6>
                        <p>В общежитии создана система пожарной безопасности, направленная на предотвращение воздействия на проживающих опасных факторов пожара. Помещения оборудованы пожарной сигнализацией и системой оповещения проживающих о пожаре.</p>
                    </section>

                    <!-- Общественные органы управления -->
                    <section>
                        <h6>Общественные органы управления</h6>
                        <p>Студентами избирается орган самоуправления – студенческий совет (студсовет) общежития, представляющий их интересы. Студсовет координирует деятельность старост комнат, организует работу по самообслуживанию общежития.</p>
                    </section>



                    <div class="image_slid">
                        <div class="col-md-4 mb-3">
                            <!-- Добавляем ссылку с атрибутом для Lightbox -->
                            <a href="{{ asset('images/обща.jpg') }}" data-lightbox="news-images" data-title="">
                                <img src="{{ asset('images/обща.jpg') }}" class="img-fluid" alt="Additional image" style="object-fit: cover; width: 100%; height: 200px;">
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <!-- Добавляем ссылку с атрибутом для Lightbox -->
                            <a href="{{ asset('images/обща2.jpg') }}" data-lightbox="news-images" data-title="">
                                <img src="{{ asset('images/обща2.jpg') }}" class="img-fluid" alt="Additional image" style="object-fit: cover; width: 100%; height: 200px;">
                            </a>
                        </div>

                        <div class="col-md-4 mb-3">
                            <!-- Добавляем ссылку с атрибутом для Lightbox -->
                            <a href="{{ asset('images/обща3.jpg') }}" data-lightbox="news-images" data-title="">
                                <img src="{{ asset('images/обща3.jpg') }}" class="img-fluid" alt="Additional image" style="object-fit: cover; width: 100%; height: 200px;">
                            </a>
                        </div>
                    </div>
            </main>
        </div>
    </div>

@endsection

