@extends('user.layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>Новости техникума</h3>
        <div class="row">
            @foreach($news as $item)
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                    <div class="card">
                        <div class="card-body d-flex flex-column flex-md-row">
                            <!-- Изображение слева -->
                            @if($item->coverImage())
                                <img src="{{ asset('storage/' . $item->coverImage()->path) }}" class="img-fluid me-md-3 mb-3 mb-md-0" alt="{{ $item->title }}" style="width: 100%; max-width: 200px; height: auto; object-fit: cover;">
                            @else
                                <!-- Плейсхолдер если изображение отсутствует -->
                                <img src="https://via.placeholder.com/200x150" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Placeholder image" style="width: 100%; max-width: 200px; height: auto; object-fit: cover;">
                            @endif

                            <!-- Описание справа -->
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ Str::limit($item->content, 150) }}</p>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
                                    <small class="text-muted">{{ $item->created_at->translatedFormat('d F Y') }}</small>
                                    <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary ms-md-3 mt-2 mt-md-0">Подробнее...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Пагинация с Bootstrap 5 -->
        <div class="d-flex justify-content-start mt-4">
            {{ $news->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection
