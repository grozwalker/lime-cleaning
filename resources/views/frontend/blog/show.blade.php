@extends('frontend.layout')

@section('title')
    {{ $page->meta_title or 'Lime Cleaning. Уборка в г.Краснодар' }}
@endsection

@section('description')
    {{ $page->description }}
@endsection

@section('keywords')
    {{ $page->keywords }}
@endsection


@section('banner')
    @include('frontend.partials.banner')
@endsection

@section('content')

    @include('frontend.partials.advantages')

    @include('frontend.partials.trust')

    @include('frontend.partials.worksteps')

    @include('frontend.partials.statistic')

    @include('frontend.partials.reviews')

    <div class="blogs blogs-page">
        <div class="blogs-wrapper">

            <div class="blog__content">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection