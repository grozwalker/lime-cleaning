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
    @include('frontend.partials.index_banner')
@endsection

@section('content')
    <section class="advantages">
        <div class="advantage">
            <div class="advantage-img-wrap">
                <img class="advantage__img" src="/img/quality.png" alt="">
            </div>
            <h3 class="advantage__titile">
                Высокое качество
            </h3>
            <div class="advantage__desc">
                Убираем тщательно и аккуратно, <br>
                учитываем все пожелания клиентов.<br>
                Мы не возьмем с вас деньги, <br>
                пока вы не будете довольны<br>
                результатом уборки.
            </div>
        </div>
        <!-- /.advantage -->
        <div class="advantage">
            <div class="advantage-img-wrap advantage_guard">
                <img class="advantage__img" src="/img/guard.png" alt="">
            </div>
            <h3 class="advantage__titile">
                Надежность
            </h3>
            <div class="advantage__desc">
                У нас работают только опытные сотрудники,
                прошедшие строгий отбор. Мы ценим доверие
                клиентов и гарантируем
                сохранность вашего имущества.
            </div>
        </div>
        <!-- /.advantage -->
        <div class="advantage">
            <div class="advantage-img-wrap">
                <img class="advantage__img" src="/img/equipment.png" alt="">
            </div>
            <h3 class="advantage__titile">
                Лучшее оборудование
            </h3>
            <div class="advantage__desc">
                Мы используем <a class="advantage__link" href="/equipment">профессиональную</a><br>
                    чистящую технику и специальные моющие средства<br>
                — экологичные и гиппоалергенные.
            </div>
        </div>
        <!-- /.advantage -->
    </section>
    <!-- /.advantages -->

    <section class="trust">
        <div class="trust-wrap">
            <h3 class="trust__title title">
                Преимущества компании Lime Cleaning:
            </h3>
            <div class="l-column">
                <div class="trust-item  bg_right trust_cleaner">
                    <div class="trust-item__wrap">
                        <h3 class="trust-item__title">
                            Проверенные сотрудники
                        </h3>
                        <img class="trust-item__img" src="/img/cleaner.png" alt="">
                        <div class="trust-item__desc">
                            Кандидаты проходят анкетирование, несколько проверок и собеседований. Новые сотрудники приступают к работе только после инструктажа и обучения.
                        </div>
                    </div>
                    <!-- /.trust-item__wrap -->
                </div>
                <div class="trust-item bg_left trust_protected">
                    <div class="trust-item__wrap">
                        <h3 class="trust-item__title">
                            Оплата после уборки
                        </h3>
                        <img class="trust-item__img" src="/img/protected.png" alt="">
                        <div class="trust-item__desc">
                            Платите только за результат. Если вас не устраивает качество уборки — клинеры сразу же устранят все недоразумения, пока вы не останетесь довольны.
                        </div>
                    </div>
                    <!-- /.trust-item__wrap -->
                </div>
            </div>
            <!-- /.l-column -->
            <div class="r-column">
                <div class="trust-item bg_right trust_responsibility ">
                    <div class="trust-item__wrap">
                        <h3 class="trust-item__title">
                            Любые объекты
                        </h3>
                        <img class="trust-item__img" src="/img/responsibility.png" alt="">
                        <div class="trust-item__desc">
                            Мы работаем с физическими и юридическими лицами. Убираем в квартирах, частных домах, офисах, гостиницах, торговых помещениях.
                        </div>
                    </div>
                    <!-- /.trust-item__wrap -->
                </div>
                <div class="trust-item bg_left trust_trace">
                    <h3 class="trust-item__title">
                        Уборка в день заказа
                    </h3>
                    <img class="trust-item__img" src="/img/trace.png" alt="">
                    <div class="trust-item__desc">
                        Нужно срочно убрать квартиру? Оставьте заявку на сайте — мы быстро обработаем заказ и сразу же вышлем клинеров. Вам не придется ждать или делать заказ заранее.
                    </div>
                </div>
            </div>
            <!-- /.column -->
        </div>
        <!-- /.trust-wrap -->
    </section>
    <!-- /.trust -->

    <section class="worksteps">
        <h2 class="worksteps__title title">
            Как работает наш сервис
        </h2>
        <div class="step-wrapper">
            <div class="step">
                <div class="step__number"><span class="step__value">1</span></div>
                <div class="step__description">Сделайте заказ</div>
                <div class="step__text">Мы обработаем заявку, подсчитаем стоимость уборки и свяжемся с вами</div>
            </div>
            <!-- /.step -->
            <div class="step">
                <div class="step__number"><span class="step__value">2</span></div>
                <div class="step__description">Дождитесь клинера</div>
                <div class="step__text">Точно в указанное время наши специалисты приедут к вам и начнут уборку</div>
            </div>
            <!-- /.step -->
            <div class="step">
                <div class="step__number"><span class="step__value">3</span></div>
                <div class="step__description">Оплатите результат</div>
                <div class="step__text">Заплатите за уборку удобным вам способом — и только если вы удовлетворены результатом</div>
            </div>
            <!-- /.step -->
        </div>
        <!-- /.step-wrapper -->
    </section>
    <!-- /.work-step -->

    <section class="statistic">
        <div class="static-wrapper">
            <div class="static-item all-quant">
                <span class="statistic-item__numb spincrement">9 868</span> <br>
                Объектов мы
                сделали чище
            </div>
            <div class="static-item clean-now">
                <span class="statistic-item__numb spincrement">39</span> <br>
                Мест мы убираем
                прямо сейчас
            </div>
            <div class="static-item our-clients">
                <span class="statistic-item__numb spincrement">1 356</span> <br>
                Постоянных
                клиентов с нами
            </div>
        </div>
        <!-- /.static-wrapper -->
    </section>
    <!-- /.statistic -->

    <section class="reviews">
        <div class="reviews-wrapper">
            <h2 class="reviews__title title">
                Отзывы наших клиентов
            </h2>
            <div class="review">
                <h3 class="review__name">
                    Екатерина Дубинина
                </h3>
                <div class="review-desc">
                    <div class="review-desc__clean-type">
                        Заказывала <a class="review-desc__link" href="/cleanups_flat.html">уборку дома</a>
                    </div>
                    <span class="review-desc__date">12.09.2016</span>
                </div>
                <div class="review__text">
                    <p>
                        «Последние полгода регулярно заказываю уборку в Lime Cleaning. Приезжают вовремя, убирают чисто, а главное — я всегда знаю куда обращаться. Это гораздо удобнее и проще, чем связываться с частниками. Рекомендую пользоваться».
                    </p>
                </div>
            </div>
            <!-- /.review -->
            <div class="review">
                <h3 class="review__name">
                    Алексей Травников
                </h3>
                <div class="review-desc">
                    <div class="review-desc__clean-type">
                        Заказывал <a class="review-desc__link" href="/cleanups_flat.html">уборку квартиры</a>
                    </div>
                    <span class="review-desc__date">25.11.2016</span>
                </div>
                <!-- /.review-desc -->
                <div class="review__text">
                    <p>
                        «Спасибо, что есть такая отличная компания. Ни один раз заказывал генеральную уборку квартиры, всегда остаюсь доволен качеством, скоростью и ценой!»
                    </p>
                </div>
            </div>
            <!-- /.review -->
            <div class="review">
                <h3 class="review__name">
                    Мария Алексеева
                </h3>
                <div class="review-desc">
                    <div class="review-desc__clean-type">
                        Заказывала <a class="review-desc__link" href="/khimchistka.html">химчистку</a>
                    </div>
                    <span class="review-desc__date">16.12.2016</span>
                </div>
                <div class="review__text">
                    <p>
                        «Мои ковры теперь сверкают! Спасибо! Я думала, что после моих деток уже ничего не спасет их, но нашлись все-таки добрые люди!! Рекомендую!»
                    </p>
                </div>
            </div>
            <!-- /.review -->
        </div>
        <!-- /.reviews-wrapper -->


    </section>
    <!-- /.reviews -->
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