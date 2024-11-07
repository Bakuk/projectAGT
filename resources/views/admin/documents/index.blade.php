@extends('admin.layouts.app')

@section('title', 'news')

@section('nav-title', 'Документы')

@section('content')
    <div class="table-container">
        <h4>Документы</h4>

        <!-- Filter Form -->
        <form method="GET" action="{{ route('admin.documents.index') }}" class="mb-4">
            <div class="row g-2 align-items-center">
                <div class="col-md-4">
                    <label for="category" class="form-label fw-bold">Фильтр по категории</label>
                    <select name="category" id="category" class="form-select" aria-label="Filter by category">
                        <option value="">Все категории</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Применить фильтр</button>
                    <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">Сбросить</a>
                </div>
            </div>

        <div class="button-container">
            <a href="{{ route('admin.documents.create') }}">
                <button class="add-news-btn">Добавить документы</button>
            </a>
        </div>

        <table class="news-table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Категория</th>
                <th>Файл</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->category->name }}</td>
                    <td>
                        <a href="{{ asset('uploads/documents/' . $document->file_path) }}" target="_blank">Открыть файл</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.documents.edit', $document->id) }}">
                            <button class="edit-btn">Редактировать</button>
                        </a>
                        <form action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $documents->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
