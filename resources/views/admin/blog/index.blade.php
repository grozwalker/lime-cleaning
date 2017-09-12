@extends('admin.layout')


@section('content')
    @if(Session::has('flash_blog_update_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_blog_update_message') }}
        </div>
    @endif

    @if(Session::has('flash_blog_delete_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_blog_delete_message') }}
        </div>
    @endif

    @if(Session::has('flash_blog_store_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_blog_store_message') }}
        </div>
    @endif

    <h1 class="page-header">Страницы блога</h1>

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Название</th>
                <th>Опубликовано</th>
                <th style="width: 1%;">Редактировать</th>
                <th style="width: 1%;">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $index => $page)
                <?php $index++; ?>
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $page->page_title }}</td>
                    <td>{{ $page->is_published }}</td>
                    <td><a href="{{ route('admin.blogs.edit', $page) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td style="width:1%">
                        {{ Form::open([
                            'route' => ['admin.blogs.destroy', $page->id],
                            'method' => 'POST'
                        ]) }}

                        {{ method_field('delete') }}

                        <button type="submit" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>

                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.blogs.create') }}"><span class="glyphicon glyphicon-plus"></span> Добавить страницу</a>

@endsection