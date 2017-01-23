@extends('admin.layout')

@section('content')
    <h1 class="page-header">Заказы</h1>

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Дата</th>
                <th>Тип уборки</th>
                <th>Вид уборки</th>
                <th>Телефон</th>
                <th style="width: 1%;">Отработан</th>
                <th style="width: 1%;">Просмотреть</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->cleaning_time }}</td>
                    <td>{{ $order->service->name }}</td>
                    <td>{{ $order->subservice->name }}</td>
                    <td>{{ $order->profile->phone }}</td>
                    <td>{{ $order->approved }}</td>
                    <td><a href="{{ route('admin.orders.view', $order) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection