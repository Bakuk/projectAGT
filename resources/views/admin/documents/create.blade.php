@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Документы')

@section('content')
    <div class="container">
        <h1>Загрузить новый документ</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="contact" action="{{ route('admin.documents.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Добавить категорию</h3>

            <fieldset>
                <label for="title">Название документа:</label>
                <input name="title" value="{{ old('title') }}" id="title" class="form-control" placeholder="Название" type="text" required autofocus>
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="category_id">Категория документа</label>

                <select name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                        <i class="fas fa-upload"></i> Загрузить документ (PDF, Word, Excel):
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Добавить документ</button>
            </fieldset>
        </form>

    </div>
@endsection


