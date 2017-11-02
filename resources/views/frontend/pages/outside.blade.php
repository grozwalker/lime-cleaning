@extends('frontend.layout')

@section('title')
    Мойка окон, фасадов зданий и магазинных витрин в Краснодаре - LimeCleaning 
@endsection

@section('description')
    Наша компания занимается мойкой окон, фасадов многоэтажных зданий и магазинных витрин по доступным ценам в Краснодаре. 
@endsection

@section('keywords')
    Мойка окон пластиковых фасадов зданий магазинных витрин Краснодар
@endsection

@section('banner')
    <div class="banner cleanups cleanups_type_outside">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Мойка окон, фасадов <br>
                    и витрин в Краснодаре
                </h1>
                <h2 class="banner__text">
                    Отмоем до блеска окна, витрины и фасады зданий — любая площадь, любая высота.
                </h2>
                <!-- /.banner__text -->


            </div>
            <!-- /.banner-wrap -->
        </div>
        <!-- /.banner__filter filter filter_opacity -->

    </div>
    <!-- /.p-banner -->
@endsection

@section('content')
    <div class="clean description cleane_tag_outside clean_visible_true">
        <div class="description__wrapper">
            <div class="description__padding">

                <div class="description__model tabs">
                    <div class="subclean-type mobile-cleaning-type choose-input border_green">
                        <div class="subclean-inp-group">
                            <button type="button"  class="sort-button  value_prev">-</button>
                            <input class="subclean-type__input description_mobile rooms_number" name="description_mobile" type="text" id="description_mobile" value="1" readonly="readonly">
                            <span class="mob-type-desc input-desc">Промышленный альпинизм</span>
                            <button type="button" class="sort-button value_next">+</button>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="tabs__top-btn">
                        <div class="tabs__control-item control-item-1 tabs_active" data-content="alpinism">
                            <a href="#" class="tabs__link">
                                Промышленный альпинизм
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                        <div class="tabs__control-item control-item-2" data-content="fromground">
                            <a href="#" class="tabs__link">
                                С земли до 21м
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                        <div class="tabs__control-item control-item-3" data-content="window">
                            <a href="#" class="tabs__link">
                                Мойка окон
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                        <div class="tabs__control-item control-item-4" data-content="mehruka">
                            <a href="#" class="tabs__link">
                                Мех рука
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                    </div>
                    <!-- /.tabs tabs_top_btn -->
                    <div class="tabs__desc tabs_active tabs_content_alpinism">
                        <!--<div class="tabs__img">

                        </div>-->
                        <!-- /.tabs__img -->
                        <picture class="tabs__img">
                            <source srcset="/img/clean/outside/alpinism.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/outside/alpinism-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source" srcset="/img/clean/outside/alpinism-m.jpg" />
                        </picture>
                        <div class="tabs__description">
                            <p>
                                Промышленных альпинистов привлекают для мойки фасадов только в особых случаях. Например, если здание слишком высокое, или к фасаду невозможно протянуть с земли механическую руку. Иногда только промышленные альпинисты могут отмыть всю поверхность фасада и забраться в самые труднодоступные места.
                            </p>
                            <p>
                                Компания Lime Cleaning работает только с профессиональными сертифицированными альпинистами. Для каждого объекта они индивидуально подбирают снаряжение, оборудование и средства для мойки. Поэтому стоимость и сроки работы в каждом случае оговариваются отдельно.
                            </p>
                        </div>
                        <!-- /.tabs__description -->
                    </div>
                    <!-- /.tabs__desc -->
                    <div class="tabs__desc tabs_content_fromground">
                        <!--<img src="/img/tab-img-2.jpg" alt="" class="tabs__img">-->
                        <picture class="tabs__img">
                            <source srcset="/img/clean/outside/fromground.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/outside/fromground-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source"  srcset="/img/clean/outside/fromground-m.jpg" />
                        </picture>
                        <!-- /.tabs__img -->
                        <div class="tabs__description">
                            <p>
                                Технология подачи воды через телескопические штанги делает мойку фасадов еще проще и доступнее. Суть этой технологии проста: работник с земли управляет длинной (до 21 метра) телескопической карбоновой штангой, по которой подается вода под давлением. На конце штанги закреплена щетка, с помощью которой можно мыть фасад прямо с земли.
                            </p>
                            <p>
                                У этого метода мойки фасадов есть несколько преимуществ:
                            </p>
                            <ul class="lime-list">
                                <li class="lime-list__item">Не требуются леса, автовышка, подготовительные работы — только один работник. Такой метод дешевле большинства альтернатив.</li>
                                <!-- /.lime-list__item -->
                                <li class="lime-list__item">Деионизированная вода не оставляет разводов и подтеков, ей можно мыть не только стекло, но и кирпич, керамогранит, сэндвич-панели.</li>
                                <!-- /.lime-list__item -->
                                <li class="lime-list__item">Мойка фасада проходит в 5 раз быстрей, чем при использовании автовышки или промышленных альпинистов. </li>
                                <!-- /.lime-list__item -->
                            </ul>
                            <!-- /.lime-list -->
                            <p>
                                Этот метод давно используется в США и Европе, но в России он появился совсем недавно. В компании Lime Cleaning вы можете заказать мойку фасадов телескопическими штангами в Краснодаре.
                            </p>
                        </div>
                        <!-- /.tabs__description -->
                    </div>
                    <!-- /.tabs__desc -->
                    <div class="tabs__desc tabs_content_window">
                        <!--<img src="/img/tab-img-3.jpg" alt="" class="tabs__img">-->
                        <!-- /.tabs__img -->
                        <picture class="tabs__img">
                            <source srcset="/img/clean/outside/window.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/outside/window-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source" srcset="/img/clean/outside/window-m.jpg" />
                        </picture>

                        <div class="tabs__orders get-value">
                            <div class="min-order-bl min-bl_type_horizont leaf-count">
                                <input class="min-order-bl__input services__input_type_checkbox" type="checkbox" id="chair-order" name="additional-services" value="leaf-count" data-servicevalue="1">
                                <div class="min-bl__figure">
                                    <i></i>
                                </div>
                                <!-- /.min-bl__figure -->
                                <div class="subclean-type  subclean_type_leaf-count">
                                    <label class="subclean-type__label" for="leaf-count">Количество створок</label>
                                    <div class="subclean-inp-group border_green">
                                        <a href="#" class="quant-button value_minus">-</a>
                                        <input class="subclean-type__input" name="leaf-count" type="text" id="leaf-count" min="1" max="15" value="1" maxlength="2" size="2">
                                        <a href="#" class="quant-button value_plus">+</a>
                                    </div>
                                    <!-- /.subclean-inp-group -->
                                </div>
                            </div>
                            <!-- /.min-order-bl min-bl min-bl_type_horizont -->

                            <div class="min-order-bl min-bl_type_horizont balcony-count">
                                <input class="min-order-bl__input services__input_type_checkbox" type="checkbox" id="chair-order" name="additional-services" value="balcony-count" data-servicevalue="1">
                                <div class="min-bl__figure">
                                    <i></i>
                                </div>
                                <!-- /.min-bl__figure -->
                                <div class="subclean-type  subclean_type_balcony-count">
                                    <label class="subclean-type__label" for="balcony-count">Количество окон</label>
                                    <div class="subclean-inp-group border_green">
                                        <a href="#" class="quant-button value_minus">-</a>
                                        <input class="subclean-type__input" name="balcony-count" type="text" id="balcony-count" min="1" max="15" value="1" maxlength="2" size="2">
                                        <a href="#" class="quant-button value_plus">+</a>
                                    </div>
                                    <!-- /.subclean-inp-group -->
                                </div>
                            </div>
                            <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                        </div>
                        <!-- /.tabs__orders -->
                        <div class="tabs__description">
                            <p>
                                В компании Lime Cleaning вы можете заказать мойку окон и витрин внутри и снаружи зданий. Наши специалисты используют специальные моющие средства и профессиональное оборудование — это позволяет мыть окна еще быстрее и чище.
                            </p>
                        </div>
                        <!-- /.tabs__description -->
                    </div>
                    <!-- /.tabs__desc -->
                    <div class="tabs__desc tabs_content_mehruka">
                        <!--<img src="/img/tab-img-3.jpg" alt="" class="tabs__img">-->
                        <!-- /.tabs__img -->
                        <picture class="tabs__img">
                            <source srcset="/img/clean/outside/mehruka.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/outside/mehruka-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source" srcset="/img/clean/outside/mehruka-m.jpg" />
                        </picture>
                        <div class="tabs__description">
                            <p>
                                Мойка фасадов с автовышки — эффективное решение для многоэтажных домов. Такой метод быстрее и дешевле, чем услуги промышленных альпинистов. Механическая рука достаточно мобильна и позволяет охватить всю поверхность фасада. Единственное требование — наличие подъезда к фасаду для автомобиля. В нашей компании вы можете заказать автовышку для мытья фасадов любого здания в пределах Краснодара.
                            </p>
                        </div>
                        <!-- /.tabs__description -->
                    </div>
                    <!-- /.tabs__desc -->

                </div>
                <!-- /.description description_model -->
            </div>
            <!-- /.description__padding -->

            <section class="worksteps worksteps_outside_page">
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
                <div class="step__getorder">
                    <a class="order step__btn" href="#modal-outside">
                        Заказать
                    </a>
                </div>
                <!-- /.step step_getorder -->
            </section>
            <!-- /.work-step -->
        </div>
        <!-- /.description__wrapper -->
    </div>
    <!-- /.description -->
@endsection

@section('popup')
    <div class="remodal popup" data-remodal-id="modal-outside">
        <div class="popup__title title title_color_black">
            Заказать уборку
        </div>
        <!-- /.popup__title -->
        <div class="popup__body">

            {!! Form::open([
            'route' => 'frontend.pages.dry-cleaning.store',
            'method' => 'POST',
            'class' => 'order-cleaning'
            ]) !!}

            <div class="input-hidden-group">
                <input class="clean-type__input" type="radio" name="cleantype" value="5" checked="true">
                <input class="clean-type__input" type="radio" name="cleaning_sort" value="8" checked="true">
                <input class="subclean-type__input cleaning-date" name="additional_fields" type="text" data-clean-type="modal-outside">
            </div>

            <div class="subclean-type type_kind_date">
                <label class="subclean-type__label color_green" for="cleaning_date">Удобная дата</label><br>
                <input class="subclean-type__input cleaning-date" name="clean_date" type="datetime" id="cleaning_date" size="10" placeholder="14.09.16">
            </div>

            <div class="subclean-type type_kind_phone">
                <label class="subclean-type__label color_green" for="user-phone">Ваш телефон</label><br>
                <input class="subclean-type__input user-phone" name="user_phone" type="tel" id="user-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="15" required>
            </div>
            <button onclick="yaCounter45854880.reachGoal('zakaz'); return true;" class="get-clean dryclean_order">Сделать заказ</button>
            {!! Form::close() !!}
        </div>
        <!-- /.popup__body -->
    </div>
@endsection