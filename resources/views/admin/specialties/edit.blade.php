@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Новости')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.specialties.update', $specialty->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h3>Редактировать специальность</h3>

            <fieldset>
                <label for="code">Код специальности:</label>
                <input name="code" value="{{ old('code', $specialty->code) }}" id="code" class="form-control" placeholder="Код специальности" type="text" required autofocus>
                @error('code')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="name">Название специальности:</label>
                <input name="name" value="{{ old('name', $specialty->name) }}" id="name" class="form-control" placeholder="Название" type="text" required autofocus>
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="form_of_educate">Форма обучения:</label>
                <input name="form_of_educate" value="{{ old('form_of_educate', $specialty->form_of_educate) }}" id="form_educate" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('form_of_educate')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="srok_of_educate">Срок обучения:</label>
                <input name="srok_of_educate" value="{{ old('srok_of_educate', $specialty->srok_of_educate) }}" id="form_educate" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('srok_of_educate')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="na_baze">На базе:</label>
                <input name="na_baze" value="{{ old('na_baze', $specialty->na_baze) }}" id="baza" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('na_baze')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>


            {{-- Текущая обложка --}}
            @if ($specialty->images->isNotEmpty())
                <div class="form-group">
                    <label>Текущая обложка</label>
                    <div>
                        <img src="{{ asset('storage/' . $specialty->images->first()->path) }}" alt="Обложка" width="200">
                    </div>
                </div>
            @endif

            <label>Загрузка новой обложки:</label>
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
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Обновить специальность</button>
            </fieldset>
        </form>
    </div>
@endsection
