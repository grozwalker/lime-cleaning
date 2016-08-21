@extends('admin.layout')

@section('title', 'Виды услуг')

@section('content')

<div class="row">
    <div class="col-sm-8">
        <h1>@yield('title')</h1>
        <!-- Display Validation Errors -->
    @include('common.errors')

        {!! Form::model($service, [
            'route' => $service->id ? ['admin.service.update', $service->id] : ['admin.service.store'],
            'class' => 'form-horizontal',
            'files' => true,
            'enctype' => 'multipart/form-data'
        ]) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Наименование', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('name', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            {!! Form::label('parent_id', 'Родительская услуга', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::select('parent_id', $services, null, ['class' => 'form-control'])  !!}
                {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
            {!! Form::label('active', 'Активный', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::checkbox('active', 1, $service->active == 1 ? true : false)  !!}
                {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Сохранить</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

    <div class="col-sm-4">
        <h2>Доп услуги</h2>
        <table class="table table-responsive table-hover">
            <tbody>
            @foreach($subServices as $key => $subservice)
                <?php $key++; ?>
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $subservice->name }}</td>
                    <td style="width:1%"><a href="{{ route('admin.subservice.update', [$service->id, $subservice->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td style="width:1%"><a href="{{ route('admin.subservice.destroy', [$service->id, $subservice->id]) }}"><i class="glyphicon glyphicon-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.subservice.create', $service->id) }}"><span class="glyphicon glyphicon-plus"></span> Создать доп услугу</a>
    </div>
</div>
@endsection