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
                <th style="width: 1%;">Редактировать</th>
                <th style="width: 1%;">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $index => $page)
                <?php $index++; ?>
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $page->name }}</td>
                    <td><a href="{{ route('admin.blogs.edit', $page) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td style="width:1%"><a href="/admin/blogs/{{ $page->id }}/destroy"><i class="glyphicon glyphicon-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.blogs.create') }}"><span class="glyphicon glyphicon-plus"></span> Добавить страницу</a>

@endsection