@extends('admin.layout')

@section('title', 'Виды услуг')

@section('content')

    <div class="panel-body">
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
                {!! Form::checkbox('active', null, ['class' => 'form-control'])  !!}
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

@endsection