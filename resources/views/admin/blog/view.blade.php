@extends('admin.layout')

@section('content')

<div class="row">

    <h1>{{ $page->page_title or 'Создание статьи' }}</h1>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        {!! Form::model($page, [
            'route' => $page->id ? ['admin.blogs.update', $page] : ['admin.blogs.store'],
            'method' => $page->id ? 'PUT' : 'POST',
            'class' => 'form-horizontal']) !!}

        <div class="form-group {{ $errors->has('page_title') ? 'has-error' : '' }}">
            {!! Form::label('page_title', 'Название статьи', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('page_title', $page->page_title, ['class' => 'form-control'])  !!}
                {!! $errors->first('page_title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
            {!! Form::label('slug', 'Адрес', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('slug', $page->slug, ['class' => 'form-control'])  !!}
                {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
            {!! Form::label('meta_title', 'Заголовок', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('meta_title', $page->meta_title, ['class' => 'form-control'])  !!}
                {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::label('description', 'Description', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('description', $page->description, ['class' => 'form-control'])  !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('keyword') ? 'has-error' : '' }}">
            {!! Form::label('keyword', 'Keywords', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::text('keyword', $page->keyword, ['class' => 'form-control'])  !!}
                {!! $errors->first('keyword', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
            {!! Form::label('content', 'Контент', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::textarea('content', $page->content, ['class' => 'form-control', 'id' => 'editor'])  !!}
                {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
            {!! Form::label('is_published', 'Опубликовано', ['class' => 'col-sm-2 control-label'])  !!}
            <div class="col-sm-10">
                {!! Form::checkbox('is_published', 1, $page->is_published == 1 ? true : false)  !!}
                {!! $errors->first('is_published', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-default btn-danger" href="{{ route('admin.blogs.index') }}">Отмена</a>
                <button type="submit" class="btn btn-default btn-success">Сохранить</button>
            </div>
        </div>

        {!! Form::close() !!}
	</div>
</div>

@endsection

@section('scripts')
<script>
        var editor = CKEDITOR.replace( 'editor', {
            filebrowserBrowseUrl : '/elfinder/ckeditor'
        } );
</script>
@endsection