@extends('admin.layouts.app')

@section('title', 'news')

@section('nav-title', 'Документы')

@section('content')
    <div class="table-container">
        <h4>Документы</h4>

        <div class="button-container">
            <a href="{{route('admin.documents.create')}}"><button class="add-news-btn">Добавить документы</button></a>
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
                    <td>{{$document->title}}</td>
                    <td>{{$document->category->name }}</td>
                    <td><a href="{{ asset('uploads/documents/' . $document->file_path) }}" target="_blank">Открыть файл</a></td>
                    <td>
                        <a href="{{ route('admin.documents.edit', $document->id) }}"><button class="edit-btn">Редактировать</button></a>

                        <form action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Удалить</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            <!-- Дополнительные строки -->
            </tbody>
        </table>
    </div>
@endsection
