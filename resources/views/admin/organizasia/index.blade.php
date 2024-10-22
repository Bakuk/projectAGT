@extends('admin.layouts.app')

@section('title', 'news')

@section('nav-title', 'Организация')

@section('content')
    <div class="container mt-5">
     <h5 class="mb-4">Информация об образовательной организации</h5>
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
        <a href="{{ route('admin.organizasia.edit', $organization->id) }}"><button class="edit-btn">Редактировать</button></a>
 </div>

@endsection



