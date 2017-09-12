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

@section('banner')
    @include('frontend.partials.banner')
@endsection

@section('content')

    <div class="blogs blogs-page">
        <div class="blogs-wrapper">
            <div class="blog__title title">
                <h1>Статьи</h1>
            </div>

            @foreach($pages as $page)
                <div class="blog__item ">
                    <div class="blog__header title">
                        <h2 class="description__title">
                            <a href="{{ route('blog.show', $page->slug) }}" class="blog_link">
                                {{ $page->page_title }}
                            </a>
                        </h2>
                    </div>
                    <div class="blog__content">
                        {{ $page->excerpt }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection