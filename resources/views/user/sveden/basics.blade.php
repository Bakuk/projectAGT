@extends('user.layouts.app')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">
                    <div class="container mt-5">
                        <h3 class="mb-4">Информация об образовательной организации</h3>
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th scope="row">Полное название организации</th>
                                <td>{{$organization->full_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Сокращенное название организации</th>
                                <td>{{$organization->abbreviated}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Дата создания образовательной организации</th>
                                <td>{{ \Carbon\Carbon::parse($organization->date_create)->format('Y') }} г.</td>
                            </tr>
                            <tr>
                                <th scope="row">Адрес местонахождения образовательной организации</th>
                                <td>{{$organization->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Филиалы образовательной организации</th>
                                <td>{{$organization->filialy}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Представительство образовательной организации</th>
                                <td>{{$organization->representation}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Режим, график работы</th>
                                <td>{{$organization->work_schedule}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Контактные телефоны</th>
                                <td>{{$organization->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Факсы</th>
                                <td>{{$organization->fax}}19</td>
                            </tr>
                            <tr>
                                <th scope="row">Адреса электронной почты</th>
                                <td>{{$organization->email}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection


