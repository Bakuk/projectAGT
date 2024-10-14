@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Документы')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.documents.update', $document->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h3>Добавить категорию</h3>

            <fieldset>
                <label for="title">Название документа:</label>
                <input name="title" value="{{ old('title', $document->title) }}" id="title" class="form-control" placeholder="Название" type="text" required autofocus>
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="category_id">Категория документа</label>

                <select name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $document->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <div class="file-upload">
                    <input name="document" accept=".pdf, .doc, .docx, .xls, .xlsx" type="file" id="file-input" class="file-input">
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Заменить файл документа (необязательно)
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>

                </div>
            </fieldset>

            <fieldset>
                @if ($document->file_path)
                    <label for="file-name">Текущий файл:</label>
                    <a href="{{ asset('uploads/documents/' . $document->file_path) }}" target="_blank">{{$document->file_path}}</a>
                @endif
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Обновить документ</button>
            </fieldset>
        </form>


    </div>
@endsection



