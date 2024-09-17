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
                        <button class="edit-btn">Редактировать</button>
                        <form action="" method="POST" >
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

<style>
    .table-container {
        width: 90%;
        max-width: 1200px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .news-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .news-table th, .news-table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    .news-table th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    .news-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .news-table tr:hover {
        background-color: #f1f1f1;
    }

    .edit-btn, .delete-btn {
        padding: 8px 12px;
        margin-right: 5px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 5px;
    }

    .edit-btn {
        background-color: #303f9f;
        color: white;
    }

    .delete-btn {
        background-color: #ff1301;
        color: white;
    }

    .button-container {
        text-align: right;
        margin: 20px;
    }

    .add-news-btn {
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        background-color: #3f51b5;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0, 123, 255, 0.2);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .add-news-btn:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
    }

    .pagination {
        background-color: #3f51b5;
    }
</style>








