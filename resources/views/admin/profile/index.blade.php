@extends('admin.layout')


@section('content')
    @if(Session::has('flash_profile_update_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_profile_update_message') }}
        </div>
    @endif

    @if(Session::has('flash_profile_delete_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_profile_delete_message') }}
        </div>
    @endif

    @if(Session::has('flash_profile_store_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_profile_store_message') }}
        </div>
    @endif

    <h1 class="page-header">Профили клиентов</h1>

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>ФИО</th>
                <th>Телефон</th>
                <th style="width: 1%;">Редактировать</th>
                <th style="width: 1%;">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profiles as $index => $profile)
                <?php $index++; ?>
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->phone }}</td>
                    <td><a href="{{ route('admin.profiles.view', $profile) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td style="width:1%"><a href="{{ route('admin.profiles.destroy', $profile) }} "><i class="glyphicon glyphicon-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.profiles.create') }}"><span class="glyphicon glyphicon-plus"></span> Добавить клиента</a>

@endsection