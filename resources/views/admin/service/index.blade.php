@extends('admin.layout')

@section('title', 'Виды услуг')

@section('content')
    @if(Session::has('flash_service_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_service_message') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;"></th>
                <th style="width: 2%;">№</th>
                <th>Название</th>
                <th>Активный</th>
                <th style="width: 1%;">Редактировать</th>
                <th style="width: 1%;">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $index => $service)
                <?php $index++; ?>
                <tr>
                    <td>
                        @if($service->children->count() > 0)
                            <i class="glyphicon glyphicon-chevron-down"data-toggle="collapse" data-target=".row{{ $index }}" aria-expanded="false" aria-controls="row{{ $index }}"></i>
                        @endif
                    </td>
                    <td>{{ $index }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->active }}</td>
                    <td><a href="{{ route('admin.service.view', [$service->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td style="width:1%"><a href="{{ route('admin.service.destroy', [$service->id]) }}"><i class="glyphicon glyphicon-trash"></i></a></td>
                </tr>
                @if($service->has('children'))
                    @foreach($service->children as $subservice)
                        <tr class="collapse row{{ $index }}">
                            <td></td>
                            <td>-</td>
                            <td>{{ $subservice->name }}</td>
                            <td>{{ $subservice->active }}</td>
                            <td><a href="{{ route('admin.service.view', [$subservice->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td style="width:1%"><a href="{{ route('admin.service.destroy', [$subservice->id]) }}"><i class="glyphicon glyphicon-trash"></i></a></td>
                        </tr>
                    @endforeach
                @endif
            @endforeach
            </tbody>
        </table>
    </div>



<a href="/admin/service"><span class="glyphicon glyphicon-plus"></span> Добавить услугу</a>
@endsection