@extends('frontend.layout')

@section('content')


    @if(Session::has('flash_order_create_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_order_create_message') }}
        </div>
    @endif

    {!! Form::open([
        'route' => 'frontend.order.store',
        'method' => 'POST'
    ]) !!}

        <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Имя', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::text('name', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
            {!! Form::label('phone', 'Телефон', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::text('phone', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('service') ? 'has-error' : '' }}">
            {!! Form::label('service', 'Выбирете услугу', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::select('service', $services, null, ['class' => 'form-control'])  !!}
                {!! $errors->first('service', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('city') ? 'has-error' : '' }}">
            {!! Form::label('city', 'Город', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::text('city', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('street') ? 'has-error' : '' }}">
            {!! Form::label('street', 'Улица', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::text('street', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('building') ? 'has-error' : '' }}">
            {!! Form::label('building', 'Дом', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::text('building', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('building', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
            {!! Form::label('date', 'Дата', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                <div class="input-group date">
                    <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>

        <div class="form-group row {{ $errors->has('time') ? 'has-error' : '' }}">
            {!! Form::label('time', 'Время', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::select('time', $time, null, ['class' => 'form-control'])  !!}
                {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('time') ? 'has-error' : '' }}">
            <label for="sale" class="col-sm-2 control-label">Как часто убираться</label>
            <div class="col-sm-4">
                <p><input name="sale" type="radio" value="20" > Раз в неделю (20%)</p>
                <p><input name="sale" type="radio" value="10" > Раз в месяц (10%)</p>
                <p><input name="sale" type="radio" value="5" > Понедельник\среда (5%)</p>
                {!! $errors->first('sale', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('user_comment') ? 'has-error' : '' }}">
            {!! Form::label('user_comment', 'Ваш комментарий', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-4">
                {!! Form::textarea('user_comment', null, ['class' => 'form-control'])  !!}
                {!! $errors->first('user_comment', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-default btn-danger" href="http://lime-cleaning.local/admin/profiles">Отмена</a>
                <button type="submit" class="btn btn-default btn-success">Оформить заказ</button>
            </div>
        </div>

        <script>
            var allRadios = document.getElementsByName('sale');
            var booRadio;
            var x = 0;
            for(x = 0; x < allRadios.length; x++){

                allRadios[x].onclick = function(){

                    if(booRadio == this){
                        this.checked = false;
                        booRadio = null;
                    }else{
                        booRadio = this;
                    }
                };

            }
        </script>




    {!! Form::close() !!}
@endsection