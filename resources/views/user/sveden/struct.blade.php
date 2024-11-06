@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">

                    <h4>Руководители структурных подразделений</h4>
                    @if($employees->isEmpty())
                        <p>Сотрудников нет.</p>
                    @else
                        <table class="table table-bordered ">

                            <thead class="bg-secondary text-white">

                            <tr>
                                <th>Фамилия, имя, отчество</th>
                                <th>Должность</th>
                                <th>Место положения</th>
                                <th>Адрес электронной почты</th>
                            </tr>

                            </thead>
                            @foreach($employees as $employee)
                                <tbody>
                                <tr>
                                    <td>{{$employee->full_name}}</td>
                                    <td>{{$employee->possition}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>{{$employee->email}}</td>
                                </tr>

                                </tbody>
                            @endforeach
                        </table>
                    @endif
                </div>
            </main>
        </div>
    </div>

@endsection
