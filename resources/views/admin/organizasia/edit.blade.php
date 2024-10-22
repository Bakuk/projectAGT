@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Организация')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.organizasia.update', $organization->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h3>Редактировать организацию</h3>

            <fieldset>
                <label for="full_name">Название организации:</label>
                <input name="full_name" value="{{ old('full_name', $organization->full_name) }}" id="full_name" class="form-control" placeholder="Название" type="text" required autofocus>
                @error('full_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="abbreviated">Сокращенное название организации</label>
                <input name="abbreviated" value="{{ old('abbreviated', $organization->abbreviated) }}" id="abbreviated" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('abbreviated')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="date_create">Дата создания образовательной организации</label>
                <input name="date_create" value="{{ old('date_create', $organization->date_create) }}" id="date_create" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('date_create')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="address">Адрес местонахождения образовательной организации</label>
                <input name="address" value="{{ old('address', $organization->address) }}" id="address" class="form-control" placeholder="Форма обучения (очная/заочная)" type="text" required autofocus>
                @error('address')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="filialy">Филиалы образовательной организации</label>
                <input name="filialy" value="{{ old('filialy', $organization->filialy) }}" id="filialy" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('filialy')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="representation">Представительство образовательной организации</label>
                <input name="representation" value="{{ old('representation', $organization->representation) }}" id="filialy" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('representation')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="work_schedule">Режим, график работы</label>
                <input name="work_schedule" value="{{ old('work_schedule', $organization->work_schedule) }}" id="work_schedule" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('work_schedule')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="phone">Контактные телефоны</label>
                <input name="phone" value="{{ old('phone', $organization->phone) }}" id="phone" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="fax">Факсы</label>
                <input name="fax" value="{{ old('fax', $organization->fax) }}" id="fax" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('fax')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="email">Адреса электронной почты</label>
                <input name="email" value="{{ old('email', $organization->email) }}" id="email" class="form-control" placeholder="На базе" type="text" required autofocus>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>


            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Обновить данные организации</button>
            </fieldset>
        </form>
    </div>
@endsection

