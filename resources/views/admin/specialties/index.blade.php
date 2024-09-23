@extends('admin.layouts.app')

@section('title', 'news')

@section('nav-title', 'Специальности')

@section('content')
    <div class="table-container">
        <h4>Специальности</h4>

        <div class="button-container">
            <a href="{{route('admin.specialties.create')}}"><button class="add-news-btn">Добавить новость</button></a>
        </div>

        <table class="news-table">
            <thead>
            <tr>
                <th>Код специальности</th>
                <th>Название</th>
                <th>Форма (очная/заочная)</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($specialties as $specialty)
                <tr>
                    <td>{{$specialty->code}}</td>
                    <td>{{$specialty->name}}</td>
                    <td>{{$specialty->form_of_educate}}</td>
                    <td>
                        <a href="{{ route('admin.specialties.edit', $specialty->id) }}"><button class="edit-btn">Редактировать</button></a>

                        <form action="{{ route('admin.specialties.destroy', $specialty->id) }}" method="POST" >
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



