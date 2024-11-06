@extends('admin.layouts.app')

@section('title', 'add-employees')

@section('nav-title', 'Сотрудники')

@section('content')
    <div class="container">
        <h1>Загрузить сотрудника</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="contact" action="{{ route('admin.employees.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h3>Изменить сотрудника</h3>

            <fieldset>
                <label for="full_name">ФИО сотрудника:</label>
                <input name="full_name" value="{{ old('full_name') }}" id="full_name" class="form-control" placeholder="ФИО" type="text" required autofocus>
                @error('full_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="possition">Должность:</label>
                <input name="possition" value="{{ old('possition') }}" id="possition" class="form-control" placeholder="Должность" type="text" required autofocus>
                @error('possition')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="address">Место нахождения:</label>
                <input name="address" value="{{ old('address') }}" id="address" class="form-control" placeholder="Место нахождения" type="text" required autofocus>
                @error('address')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="email">Место нахождения:</label>
                <input name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="email" type="text" required autofocus>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Добавить сотрудника</button>
            </fieldset>
        </form>

    </div>
@endsection
