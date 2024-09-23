@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Новости')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            <h3>Редактирование новость</h3>

            <fieldset>
                <label for="title">Заголовок:</label>
                <input name="title" value="{{ old('title', $news->title) }}" id="title" class="form-control" placeholder="Заголовок" type="text" required autofocus>
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="content">Контент:</label>
                <textarea placeholder="Описание" name="content" id="content" class="form-control" rows="5" required>{{ old('content', $news->content) }}</textarea>
                @error('content')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            {{-- Текущая обложка --}}
            @if($news->images->where('pivot.is_cover', true)->first())
                <div class="form-group">
                    <label>Текущая обложка</label>
                    <div>
                        <img src="{{ asset('storage/' . $news->images->where('pivot.is_cover', true)->first()->path) }}" alt="Cover Image" style="max-width: 200px;">
                    </div>
                </div>
            @endif

            <label>Загрузка новой обложки:</label>
            <fieldset>
                <div class="file-upload">
                    <input name="cover_image"  type="file" id="file-input" class="file-input">
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Выберите файл
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

            {{-- Дополнительные изображения --}}
            @if($news->images->where('pivot.is_cover', false)->count())
                <div class="form-group">
                    <label>Additional Images</label>
                    <div>
                        @foreach($news->images->where('pivot.is_cover', false) as $image)
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Image" style="max-width: 100px; margin-right: 10px;">
                        @endforeach
                    </div>
                </div>
            @endif

            <label>Дополнительные изображения:</label>
            <fieldset>
                <div class="file-upload">
                    <input name="additional_images[]"  type="file" id="file-input" class="file-input" multiple>
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Выберите файл
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Обновить новость</button>
            </fieldset>
        </form>
    </div>
@endsection
