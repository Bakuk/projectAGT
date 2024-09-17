@extends('admin.layouts.app')

@section('title', 'add-news')

@section('nav-title', 'Новости')

@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form id="contact" action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Добавить новость</h3>

            <fieldset>
                <label for="title">Заголовок:</label>
                <input name="title" value="{{ old('title') }}" id="title" class="form-control" placeholder="Заголовок" type="text" required autofocus>
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <fieldset>
                <label for="content">Контент:</label>
                <textarea placeholder="Описание" name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
                @error('content')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </fieldset>

            <label>Обложка:</label>
            <fieldset>
                <div class="file-upload">
                    <input name="cover_image"  type="file" id="file-input" class="file-input">
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Выберите файл
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

            <label>Дополнительные изображения:</label>
            <fieldset>
                <div class="file-upload">
                    <input name="additional_images[]"  type="file" id="file-input" class="file-input" multiple>
                    <label for="file-input" class="file-label">
                        <i class="fas fa-upload"></i> Выберите файл
                    </label>
                    <span id="file-name" class="file-name">Файл не выбран</span>
                </div>
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Добавить новость</button>
            </fieldset>
        </form>


    </div>
@endsection

<style>


    #contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] {
        font:400 16px "Open Sans", Helvetica, Arial, sans-serif; }

    #contact {
        border: 1px solid #0056b3;
        background:#F9F9F9;
        padding:25px;
        margin:50px 0;
    }

    #contact h3 {
        color: #0056b3;
        display: block;
        font-size: 30px;
        font-weight: 400;
    }

    #contact h4 {
        margin:5px 0 15px;
        display:block;
        font-size:13px;
    }

    fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
        width:100%;
        border:1px solid #6e6d6d;
        background:#FFF;
        margin:0 0 5px;
        padding:10px;
    }

    #contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
        -webkit-transition:border-color 0.3s ease-in-out;
        -moz-transition:border-color 0.3s ease-in-out;
        transition:border-color 0.3s ease-in-out;
        border:1px solid #6e6d6d;;
    }

    #contact textarea {
        height:100px;
        max-width:100%;
        resize:none;
    }

    #contact button[type="submit"] {
        cursor:pointer;
        width:100%;
        border:none;
        background:#0056b3;
        color:#FFF;
        margin:0 0 5px;
        padding:10px;
        font-size:15px;
    }

    #contact button[type="submit"]:hover {
        background:#09C;
        -webkit-transition:background 0.3s ease-in-out;
        -moz-transition:background 0.3s ease-in-out;
        transition:background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

    #contact input:focus, #contact textarea:focus {
        outline:0;
        border:1px solid #0056b3;
    }
    ::-webkit-input-placeholder {
        color: #3c3c3c;;
    }
    :-moz-placeholder {
        color:#6e6d6d;;
    }
    ::-moz-placeholder {
        color:#6e6d6d;;
    }
    :-ms-input-placeholder {
        color:#6e6d6d;;
    }

    .fileinput-button {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }
    .fileinput-button input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        opacity: 0;
        -ms-filter: 'alpha(opacity=0)';
        font-size: 200px !important;
        direction: ltr;
        cursor: pointer;
    }

    .file-upload {
        position: relative;
        display: inline-block;
        width: 100%;
        max-width: 400px;
    }

    .file-input {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
        z-index: 2;
    }

    .file-label {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #007bff;
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .file-label i {
        margin-right: 8px;
    }

    .file-label:hover {
        background-color: #0056b3;
    }

    .file-name {
        display: block;
        margin-top: 10px;
        font-size: 14px;
        color: #666;
        text-align: center;
    }

    /* Fixes for IE < 8 */
    @media screen\9 {
        .fileinput-button input {
            filter: alpha(opacity=0);
            font-size: 100%;
            height: 100%;
        }
    }



</style>




