@extends('admin.layouts.app')

@section('title', 'employees')

@section('nav-title', 'Сотрудники')

@section('content')
    <div class="table-container">
        <h4>Сотрудники</h4>

        <div class="button-container">
            <a href="{{route('admin.employees.create')}}"><button class="add-news-btn">Добавить сотрудника</button></a>
        </div>

        <table class="news-table">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Должность</th>
                <th>Место нахождения</th>
                <th>Электронная почта</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->full_name}}</td>
                    <td>{{$employee->possition }}</td>
                    <td>{{$employee->address }}</td>
                    <td>{{$employee->email }}</td>
                    <td>
                        <a href="{{ route('admin.employees.edit', $employee->id) }}"><button class="edit-btn">Редактировать</button></a>

                        <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST" >
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
