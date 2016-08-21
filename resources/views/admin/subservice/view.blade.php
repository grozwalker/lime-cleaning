@extends('admin.layout')

@section('content')
    <h1>Создание доп услуги: {{ $service->name }}</h1>
    <div class="row">
        <div class="col-sm-8">
            {!! Form::model($subservice, [
            'route' => $subservice->id ? ['admin.subservice.update', $service->id,  $subservice->id] : ['admin.subservice.store', $service->id],
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

            <div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
                {!! Form::label('active', 'Активный', ['class' => 'col-sm-2 control-label'])  !!}
                <div class="col-sm-10">
                    {!! Form::checkbox('active', "1", $subservice->active == 1 ? true : false)  !!}
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
    </div>

    <a href="{{ route('admin.service.view', $service->id) }}" class="btn btn-info btn-large"><i class="icon-white icon-heart"></i> Назад</a>

@endsection