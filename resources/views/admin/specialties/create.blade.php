@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Новости')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.specialties.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Добавить специальность</h3>

            <fieldset>
                <label for="code">Код специальности:</label>
                <input name="code" value="{{ old('code') }}" id="code" class="form-control" placeholder="Код специальности" type="text" required autofocus>
                @error('code')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="name">Название специальности:</label>
                <input name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Название" type="text" required autofocus>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="form_of_educate">Форма обучения:</label>
                <input name="form_of_educate" value="{{ old('form_of_educate') }}" id="form_educate" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('form_of_educate')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="srok_of_educate">Срок обучения:</label>
                <input name="srok_of_educate" value="{{ old('srok_of_educate') }}" id="form_educate" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('srok_of_educate')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="na_baze">На базе:</label>
                <input name="na_baze" value="{{ old('na_baze') }}" id="baza" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('na_baze')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>


            <label>Обложка специальности:</label>
            <fieldset>
                <div class="file-upload">
                    <input name="image"  type="file" id="file-input" class="file-input">
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Выберите файл
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Добавить специальности</button>
            </fieldset>
        </form>


    </div>
@endsection


