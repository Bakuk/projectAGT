@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Категории')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Добавить категорию</h3>

            <fieldset>
                <label for="name">Название категории:</label>
                <input name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Название" type="text" required autofocus>
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>


            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Добавить категорию</button>
            </fieldset>
        </form>


    </div>
@endsection


