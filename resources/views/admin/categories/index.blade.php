@extends('admin.layouts.app')

@section('title', 'news')

@section('nav-title', 'Категории')

@section('content')
    <div class="table-container">
        <h4>Категории</h4>

        <div class="button-container">
            <a href="{{route('admin.categories.create')}}"><button class="add-news-btn">Добавить категорию</button></a>
        </div>

        <table class="news-table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category->id) }}"><button class="edit-btn">Редактировать</button></a>

                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" >
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

