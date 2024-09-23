@extends('admin.layouts.app')

@section('title', 'news')

@section('nav-title', 'Новости')

@section('content')
    <div class="table-container">
        <h4>Новости</h4>

        <div class="button-container">
            <a href="{{route('admin.news.create')}}"><button class="add-news-btn">Добавить новость</button></a>
        </div>

        <table class="news-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Автор</th>
                <th>Дата публикации</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$new->title}}</td>
                    <td>Иван Иванов</td>
                    <td>{{$new->created_at}}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $new->id) }}"><button class="edit-btn">Редактировать</button></a>

                        <form action="{{ route('admin.news.destroy', $new->id) }}" method="POST" >
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
        <div class="pagination">
            {{ $news->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection








