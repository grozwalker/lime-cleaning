@extends('frontend.layout')

@section('title')
    Клининговая компания по уборке квартир LimeCleaning (ЛаймКлининг) в Краснодаре. 
@endsection

@section('description')
    Сайт клининговой компании LimeCleaning (ЛаймКлининг). Занимаемся уборкой квартир, офисов и других помещений в Краснодаре. На сайте есть цены на услуги нашей клининговой компании. 
@endsection

@section('keywords')
    Клининговая компания сайт фирма агенство по уборке квартир и помещений в Краснодаре цены услуги LimeCleaning ЛаймКлининг
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


@endsection


@section('popup')
    <div class="remodal" data-remodal-id="mainform">
        <div class="popup__title title title_color_black">
            Сделать заказ
        </div>
        <!-- /.popup__title -->
        <div class="popup__body">
            <form action="javascript:void(null);" method="post" class="popup-order">

                <div class="subclean-type type_kind_date">
                    <label class="subclean-type__label color_green" for="cleaning_date">Удобная дата</label><br>
                    <input class="subclean-type__input cleaning-date" type="datetime" id="cleaning_date" name="popup-date" size="10" placeholder="{{ $currentDate }}" required>
                </div>

                <div class="subclean-type type_kind_phone">
                    <label class="subclean-type__label color_green" for="user-phone">Ваш телефон</label><br>
                    <input class="subclean-type__input user-phone" type="tel" id="user-phone" name="popup-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="15" required>
                </div>
                <button class="get-clean">Сделать заказ</button>
            </form>
        </div>
        <!-- /.popup__body -->
    </div>
@endsection

@section('page_scripts')

    <script>

        $(document).ready(function(){
            var show = true;
            var countbox = ".statistic";
            $(window).on("scroll load resize", function(){

                if(!show) return false;                   // Отменяем показ анимации, если она уже была выполнена

                var w_top = $(window).scrollTop();        // Количество пикселей на которое была прокручена страница
                var e_top = $(countbox).offset().top;     // Расстояние от блока со счетчиками до верха всего документа

                var w_height = $(window).height();        // Высота окна браузера
                var d_height = $(document).height();      // Высота всего документа

                var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками

                if(w_top + 200 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){
                    $(".spincrement").spincrement({
                        thousandSeparator: " ",
                        duration: 1500
                    });

                    show = false;
                }
            });
        });
    </script>

@endsection