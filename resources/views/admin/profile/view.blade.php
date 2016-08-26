@extends('admin.layout')

@section('content')

<div class="row">

    <h1>Редактирование клиента</h1>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        {!! Form::model($profile, [
            'route' => $profile->id ? ['admin.profiles.update', $profile] : ['admin.profiles.store'],
            'class' => 'form-horizontal']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'ФИО', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('name', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
            {!! Form::label('phone', 'Телефон', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('phone', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-default btn-danger" href="{{ route('admin.profiles.index') }}">Отмена</a>
                <button type="submit" class="btn btn-default btn-success">Сохранить</button>
            </div>
        </div>

        {!! Form::close() !!}
	</div>
</div>

@endsection