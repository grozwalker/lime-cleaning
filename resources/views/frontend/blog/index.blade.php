@extends('frontend.layout')

@section('title')
    Уборка квартир и офисов в Краснодаре и пригороде. Клининговая компания Lime-cleaning
@endsection

@section('description')
    У нас можно заказать уборку кваритры, дома или офиса не выходя из дома (в интернете). Приедем в удобное для вас время.
@endsection

@section('keywords')
    уборка, квартиры, дома, офисы, Краснодар, Lime-cleaning, клининговая компания, заказать, уборку, скидка, клининг, уборка, вызвать уборщика, требуется уборщица, уборка квартир Краснодар
@endsection

@section('content')
    <h1>Статьи</h1>

    @foreach($pages as $page)
        <div class="blogs blogs-page">
            <div class="blogs-wrapper">
                <h2 class="description__title">
                    <a href="{{ route('blog.show', $page->id) }}">
                        {{ $page->page_title }}
                    </a>
                </h2>
                {{ $page->content }}
            </div>
        </div>
    @endforeach

@endsection