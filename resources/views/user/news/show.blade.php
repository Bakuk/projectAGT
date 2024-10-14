@extends('user.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    @if($news->coverImage())
                        <img src="{{ asset('storage/' . $news->coverImage()->path) }}" class="card-img-top img-fluid" alt="{{ $news->title }}" style="object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/1200x500" class="card-img-top img-fluid" alt="Placeholder image" style="object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <h1 class="card-title">{{ $news->title }}</h1>
                        <p class="card-text">
                            <small class="text-muted">Опубликовано: {{ $news->created_at->translatedFormat('d F Y') }}</small>
                        </p>

                        <p class="card-text">{!! nl2br(e($news->content)) !!}</p> <!-- Отображаем содержимое новости -->

                        <!-- Дополнительные изображения -->
                        @if($news->images->count() > 0)
                            <div class="mt-4">
                                <h5>Дополнительные изображения:</h5>
                                <div class="row">
                                    @foreach($news->images as $image)
                                        <div class="col-md-4 mb-3">
                                            <!-- Добавляем ссылку с атрибутом для Lightbox -->
                                            <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="news-images" data-title="{{ $news->title }}">
                                                <img src="{{ asset('storage/' . $image->path) }}" class="img-fluid" alt="Additional image" style="object-fit: cover; width: 100%; height: 200px;">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Кнопка назад -->
                        <a href="{{ route('user.news') }}" class="btn btn-secondary mt-3">Назад к новостям</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
