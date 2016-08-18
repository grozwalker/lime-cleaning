@extends('admin.layout')

@section('title', 'Пункты меню')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Порядок</th>
                <th>Активный</th>
                <th>Редактировать</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection