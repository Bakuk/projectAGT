<div class="container">
    <div id="specialtyCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            @foreach($specialties as $index => $specialty)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                    @if($specialty->images->count())
                            @foreach($specialty->images as $image)
                                    <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100"
                                         alt="{{ $specialty->name }}">
                            @endforeach
                                <div class="transparent-box">
                                    <h6 class="fs-lg-5">{{$specialty->name}}</h6>
                                    <p class="fs-lg-6">На базе {{$specialty->na_baze}}</p>
                                    <p class="fs-lg-6">Срок обучения {{$specialty->srok_of_educate}}</p>
                                </div>
                    @else
                        <p>Нет изображений для этой специальности</p>
                    @endif

                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#specialtyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#specialtyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<style>

    .carousel-item{
        margin-top: 10px;
    }
    .carousel-item img {
        width: 100%; /* Растянуть изображение по ширине */
        height: 100%; /* Растянуть изображение по высоте */
        object-fit: cover; /* Обрезать изображение, чтобы заполнить контейнер */
        position: relative;
    }

    /* Задайте высоту для контейнера карусели */
    .carousel {
        height: 30%; /* Или любая другая высота */
    }

    .transparent-box { /* Для всех экранов по умолчанию */
        width: 90%;
        height: 80%;
        background-color: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный цвет */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); /* Центрирование блока */
        color: white; /* Цвет текста */
        padding: 20px;
    }

    @media (min-width: 576px) {
        .transparent-box {
            height: 300px; /* На экранах планшетов */
        }
    }

    @media (min-width: 768px) {
        .transparent-box {
            width: 30%;
            height: 50%; /* На экранах ноутбуков */
            top: 50%;
            left: 25%;
        }
    }

    @media (min-width: 992px) {
        .transparent-box {
            width: 30%;
            height: 50%; /* На экранах компьютеров */
            top: 50%;
            left: 25%;
        }
    }

</style>
