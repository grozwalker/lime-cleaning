@extends('admin.layout')

@section('title', 'Виды услуг')

@section('content')

<div class="table-responsive">
    <table class="table table-responsive table-hover">
        <thead>
        <tr>
            <th></th>
            <th>№</th>
            <th>Название</th>
            <th>Активный</th>
            <th>Редактировать</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>
                    <i class="glyphicon glyphicon-plus"data-toggle="collapse" data-target=".row{{ $service->id }}" aria-expanded="false" aria-controls="row{{ $service->id }}"></i>
                </td>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->active }}</td>
                <td><a href="{{ route('admin.service.view', $service->id) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            </tr>
            @if($service->has('children'))
                @foreach($service->children as $subservice)
                    <tr class="collapse row{{ $service->id }}">
                        <td></td>
                        <td>-</td>
                        <td>{{ $subservice->name }}</td>
                        <td>{{ $subservice->active }}</td>
                        <td><a href="{{ route('admin.service.view', $subservice->id) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    </tr>
                @endforeach
            @endif
        @endforeach
        </tbody>
    </table>
</div>

<a href="/admin/service"><span class="glyphicon glyphicon-plus"></span> Добавить услугу</a>
@endsection