@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Новости')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Добавить новость</h3>

            <fieldset>
                <label for="title">Заголовок:</label>
                <input name="title" value="{{ old('title') }}" id="title" class="form-control" placeholder="Заголовок" type="text" required autofocus>
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="content">Контент:</label>
                <textarea placeholder="Описание" name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
                @error('content')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <label>Обложка:</label>
            <fieldset>
                <div class="file-upload">
                    <input name="cover_image"  type="file" id="file-input" class="file-input">
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Выберите файл
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

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
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Добавить новость</button>
            </fieldset>
        </form>
    </div>
@endsection





