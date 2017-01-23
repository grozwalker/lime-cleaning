@extends('admin.layout')

@section('content')
    <h1 class="page-header">Заказ № {{ $order->id }}</h1>
    <h3>Клиент: <u>{{ $order->profile->phone }}</u> </h3>

    <h2>Детали заказа</h2>
    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th>№</th>
                <th>Дата уборки</th>
                <th>Тип уборки</th>
                <th>Вид уборки</th>
                <th>Телефон</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->cleaning_time }}</td>
                    <td>{{ $order->service->name }}</td>
                    <td>{{ $order->subservice->name }}</td>
                    <td>{{ $order->profile->phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2>Комментарии менеджера</h2>
    {!! Form::model([$order,
    'route' => ['admin.orders.update', $order],
    'class' => 'form-horizontal']) !!}

        <div class="form-group {{ $errors->has('manager_comment') ? 'has-error' : '' }}">
            {!! Form::label('manager_comment', 'Комментарий менеджера', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::textarea('manager_comment', $order->manager_comment, ['class' => 'form-control'])  !!}
                {!! $errors->first('manager_comment', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('approved') ? 'has-error' : '' }}">
            {!! Form::label('approved', 'Завершен', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::checkbox('approved', 1, $order->approved == 1 ? true : false)  !!}
                {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-default btn-danger" href="{{ route('admin.orders.index') }}">Отмена</a>
                <button type="submit" class="btn btn-default">Сохранить</button>
            </div>
        </div>

    {!! Form::close() !!}
@endsection