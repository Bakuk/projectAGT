@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">

                    <p>Структуры</p>

                </div>
            </main>
        </div>
    </div>

@endsection
