@extends('frontend.layout')

@section('banner')
    <div class="banner">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Уборка — это удовольствие!
                </h1>
                <h2 class="top-subtitle">
                    Когда мы убираем за вас
                </h2>
                <!-- /.top-subtitle -->
                <!--onsubmit="order()" -->
                <!-- javascript:void(null); -->
                {!! Form::open([
                    'route' => 'frontend.order.store',
                    'method' => 'POST',
                    'class' => 'order-cleaning desctop-form'
                ]) !!}

                    <div class="input-hidden-group">
                        <input class="extra-fields" type="checkbox" value="1" name="extra-fields">
                        <input class="additional-fields" type="text"  name="additional_fields">
                        <input class="hidden-phone" type="text"  name="user_phone">
                        <input class="hidden-date" type="text"  name="clean_date">
                    </div>
                    <!-- /.input-hidden-group -->

                    <div class="clean-group__text">
                        У вас:
                    </div>

                    <div class="clean-group typy_clean">
                        <div class="clean-type type_flat">
                            <input class="clean-type__input" type="radio" id="flat" name="cleantype" value="1" checked="true">
                            <label for="flat">Квартира</label>
                        </div>

                        <div class="clean-type type_house">
                            <input class="clean-type__input" type="radio" id="house" name="cleantype" value="2">
                            <label for="house">Дом</label>
                        </div>

                        <div class="clean-type type_office">
                            <input class="clean-type__input" type="radio" id="office" name="cleantype" value="3">
                            <label for="office">Офис</label>
                        </div>

                        <div class="clean-type type_stock">
                            <input class="clean-type__input" type="radio" id="stock" name="cleantype" value="4">
                            <label for="stock">Склад</label>
                        </div>

                        <div class="clean-type type_other">
                            <input class="clean-type__input" type="radio" id="other" name="cleantype" value="5">
                            <label for="other">Другое</label>
                        </div>
                    </div>

                    <div class="type-subclean minimize-subclean" >

                        <div class="subclean-type type_kind_object2">
                            <label class="subclean-type__label" for="cleaning-sort">Вид уборки</label><br>
                            <select class="subclean-type__select cleaning-sort" name="cleaning_sort" id="cleaning-sort">
                                <option value="1" selected>Генеральная уборка</option>
                                <option value="2">Стандартная уборка (каждодневная)</option>
                                <option value="3">Уборка после ремонта</option>
                            </select>
                        </div>

                        <div class="subclean-type type_kind_rooms">
                            <label class="subclean-type__label" for="rooms-number">Комнаты</label>
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input rooms_number" name="rooms_number" type="text" id="rooms-number" min="1" max="50" value="1" maxlength="2" size="3">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <!-- /.subclean-inp-group -->
                        </div>

                        <div class="subclean-type type_kind_bathroom">
                            <label class="subclean-type__label" for="bathroom-number">Санузлы</label><br>
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input bathroom-number" name="bathroom_number" type="text" id="bathroom-number" min="1" max="50" value="1" maxlength="2" size="3">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <!-- /.subclean-inp-group -->
                        </div>

                        <div class="subclean-type type_kind_area">
                            <label class="subclean-type__label b_have_sup" for="area">Площадь -м<sup>2</sup></label><br>
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input area" name="area" type="text" id="area" min="1" value="1" maxlength="4" size="4">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <!-- /.subclean-inp-group -->
                        </div>

                    </div>

                    <a href="#" class="show-link show_more">Выбор дополнительных услуг</a>
                    <!-- /.cleaning-more -->

                    <div class="return_place_get-clean">

                    </div>


                <!--<button class="get-clean main-form-order" type="submit">Заказать</button>-->

                <a href="#mainform" class="get-clean main-form-order">Заказать</a>
                <!-- /.get-clean -->
                {!! Form::close() !!}

                {!! Form::open([
                    'route' => 'frontend.order.store',
                    'method' => 'POST',
                    'class' => 'order-cleaning mobile-form'
                ]) !!}

                    <div class="subclean-type mobile-cleaning-type choose-input">
                        <label class="subclean-type__label" for="rooms-number_mobile">У вас</label>
                        <div class="subclean-inp-group">
                            <button type="button"  class="type-button  value_prev">-</button>
                            <input class="subclean-type__input mobile_clean_type" name="cleantype" type="text" id="rooms-number_mobile" value="1" readonly="readonly">
                            <span class="mob-type-desc input-desc">Квартира</span>
                            <button type="button" class="type-button value_next">+</button>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="subclean-type mobile-cleaning-type choose-input type_clean-choose">
                        <label class="subclean-type__label" for="cleaning-sort_mobile">Вид уборки</label>
                        <div class="subclean-inp-group">
                            <button type="button"  class="sort-button  value_prev">-</button>
                            <input class="subclean-type__input rooms_number" name="cleaning_sort" type="text" id="cleaning-sort_mobile" value="1" readonly="readonly">
                            <span class="mob-sort-desc input-desc">Генеральная</span>
                            <button type="button" class="sort-button value_next">+</button>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="subclean-type mobile-cleaning-type choose-input type_stockclean-choose">
                        <label class="subclean-type__label" for="cleaning-sort_mobile">Вид уборки</label>
                        <div class="subclean-inp-group">
                            <button type="button"  class="sort-button  value_prev">-</button>
                            <input class="subclean-type__input stockclean_number" name="cleaning_sort_stock" type="text"  value="4" readonly="readonly">
                            <span class="mob-sort-desc input-desc">Стандартная</span>
                            <button type="button" class="sort-button value_next">+</button>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="subclean-type mobile-cleaning-type choose-input type_otherclean-choose">
                        <label class="subclean-type__label" for="cleaning-sort_mobile">Вид уборки</label>
                        <div class="subclean-inp-group">
                            <button type="button"  class="sort-button  value_prev">-</button>
                            <input class="subclean-type__input other-clean-number" name="cleaning_sort_other" type="text" value="6" readonly="readonly">
                            <span class="mob-sort-desc input-desc">Химчистка</span>
                            <button type="button" class="sort-button value_next">+</button>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>


                    <div class="subclean-type mobile-cleaning-type mobile_width_half type_kind_rooms">
                        <label class="subclean-type__label" for="mobile-rooms-number">Комнаты</label>
                        <div class="subclean-inp-group">
                            <a href="#" class="quant-button value_minus">-</a>
                            <input class="subclean-type__input rooms_number" name="rooms_number" type="text" id="mobile-rooms-number" min="1" max="15" value="1" maxlength="2" size="2">
                            <a href="#" class="quant-button value_plus">+</a>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="subclean-type mobile-cleaning-type mobile_width_half type_kind_bathroom">
                        <label class="subclean-type__label" for="mobile-bathroom-number">Санузлы</label><br>
                        <div class="subclean-inp-group">
                            <a href="#" class="quant-button value_minus">-</a>
                            <input class="subclean-type__input bathroom-number" name="bathroom_number" type="text" id="mobile-bathroom-number" min="1" max="10" value="1" maxlength="2" size="2">
                            <a href="#" class="quant-button value_plus">+</a>
                        </div>
                        <!-- /.subclean-inp-group -->

                    </div>

                    <div class="subclean-type mobile-cleaning-type mobile_width_half type_kind_area">
                        <label class="subclean-type__label b_have_sup" for="mobile-rooms-number">Площадь -м<sup>2</sup></label>
                        <div class="subclean-inp-group">
                            <a href="#" class="quant-button value_minus">-</a>
                            <input class="subclean-type__input rooms_number" name="area" type="text" min="1" value="1" maxlength="4" size="2">
                            <a href="#" class="quant-button value_plus">+</a>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="input-hidden-group">
                        <input class="extra-fields" type="checkbox" value="1" name="extra-fields">
                        <input class="additional-fields" type="text"  name="additional_fields">
                        <input class="hidden-phone" type="text"  name="user_phone">
                        <input class="hidden-date" type="text"  name="clean_date">
                    </div>
                    <!-- /.input-hidden-group -->


                    <div class="show-link-wrap top-title_visible_mobile">
                        <a href="#" class="show-link show_more">Выбор дополнительных услуг</a><a class="product-more_down-arrow" href="#"></a>
                        <!-- /.cleaning-more -->
                    </div>
                    <!-- /.show-link-wrap -->

                    <div class="return_place_get-clean">

                    </div>

                    <a href="#mainform" class="get-clean main-form-order">Заказать</a>
                    <!-- /.get-clean -->

                {!! Form::close() !!}
            </div>
            <!-- /.banner-wrap -->
        </div>
        <!-- /.banner__filter filter filter_opacity -->
    </div>

    <section class="additional-services">
        <div class="additional-services__wrap">
            <div class="additional-services__title">
                Выберите дополнительные услуги
            </div>
            <!-- /.additional-services__title -->
            <div class="additional-services__icons icons-lists">
                <div class="icons-lists__item service_view_fridge">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="fridge" name="additional-services" value="fridge" data-servicevalue="1">
                    <label class="additional-services__label" for="fridge">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Помыть холодильник</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_oven">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="oven" name="additional-services" value="oven" data-servicevalue="1">
                    <label class="additional-services__label" for="oven">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Помыть духовку</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_svch">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="svch" name="additional-services" value="svch" data-servicevalue="1">
                    <label class="additional-services__label" for="svch">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Почистить СВЧ</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_cupboard">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="cupboard" name="additional-services" value="cupboard" data-servicevalue="1">
                    <label class="additional-services__label" for="cupboard">
                        <i></i>
                    </label>
                    <span class="icons-lists__title title_long">Убрать в кухонных шкафах</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_dishes">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="dishes" name="additional-services" value="dishes" data-servicevalue="1">
                    <label class="additional-services__label" for="dishes">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Помыть посуду</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_chandelier">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="chandelier" name="additional-services" value="chandelier" data-servicevalue="1">
                    <label class="additional-services__label" for="chandelier">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Мойка люстры</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_ironing">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="ironing" name="additional-services" value="ironing" data-servicevalue="1">
                    <label class="additional-services__label" for="ironing">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Погладить белье</span>
                    <!-- /.subclean-inp-group -->



                    <div class="subclean-type subclean-type__elaboration elaboration ironing-time">
                        <div class="elaboration__wrap">
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input ironing-time" name="ironing-time" type="text" id="ironing-time" min="1" max="10" value="1" maxlength="2" size="2">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <label class="subclean-type__label" for="ironing-time">Количество часов</label>
                            <!-- /.subclean-inp-group -->

                        </div>
                    </div>
                    <!-- /.elaboration -->
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_window">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="window" name="additional-services" value="window" data-servicevalue="1">
                    <label class="additional-services__label" for="window">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Помыть окна</span>
                    <div class="subclean-type subclean-type__elaboration elaboration windows-quant">
                        <div class="elaboration__wrap">
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input windows-quant" name="windows-quant" type="text" id="windows-quant" min="1" max="10" value="1" maxlength="2" size="2">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <label class="subclean-type__label" for="windows-quant">Количество окон</label>
                            <!-- /.subclean-inp-group -->

                        </div>
                    </div>
                    <!-- /.elaboration -->
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_key">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="key" name="additional-services" value="key" data-servicevalue="">
                    <label class="additional-services__label" for="key">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Доставка ключей</span>
                    <div class="delivery-key">
                        <div class="delivery-key__title">
                            Доставка ключей
                        </div>
                        <!-- /.delivery-key__title -->
                        <label for="user-desc" class="delivery-key__desc">
                            Напишите, куда привезти ключи, и наш клинер
                            доставит их сразу после уборки.
                        </label>
                        <!-- /.delivery-key__text -->
                        <textarea class="delivery-key__text" name="user-desc" id="user-desc" ></textarea>
                        <a class="delivery-key__btn btn" href="#">Сохранить</a>


                    </div>
                    <!-- /.delivery-key -->
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_balcony">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="balcony" name="additional-services" value="balcony" data-servicevalue="1">
                    <label class="additional-services__label" for="balcony">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Убраться на балконе</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_extract">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="extract" name="additional-services" value="extract" data-servicevalue="1">
                    <label class="additional-services__label" for="extract">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Мойка вытяжки</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_blinds">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="blinds" name="additional-services" value="blinds" data-servicevalue="1">
                    <label class="additional-services__label" for="blinds">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Стирка штор</span>
                </div>
                <!-- /.icons-lists__item -->

                <div class="icons-lists__item service_view_wardrobe">
                    <input class="additional-services__input services__input_type_checkbox" type="checkbox" id="wardrobe" name="additional-services" value="wardrobe" data-servicevalue="1">
                    <label class="additional-services__label" for="wardrobe">
                        <i></i>
                    </label>
                    <span class="icons-lists__title">Убраться в гардеробе</span>
                </div>
                <!-- /.icons-lists__item -->

            </div>
            <!-- /.additional-services__icons icons-lists -->

            <div class="show-link-wrap top-title_visible_desctop">
                <a href="#" class="show-link show_less">Скрыть дополнительные услуги</a><a class="product-more_up-arrow" href="#"></a>
                <!-- /.cleaning-more -->
            </div>
            <!-- /.show-link-wrap -->

            <div class="show-link-wrap top-title_visible_mobile">
                <a href="#" class="show-link show_less">Скрыть дополнительные услуги</a><a class="product-more_up-arrow" href="#"></a>
                <!-- /.cleaning-more -->
            </div>
            <!-- /.show-link-wrap -->

            <div class="place_submit">
            </div>



        </div>
        <!-- /.additional-services__wrap -->

    </section>
    <!-- /.additional-services -->
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
                Надеждность
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
                            Кандидаты на работу проходят анкетирование, несколько проверок и собеседований. Новые сотрудники выезжают на объекты только после инструктажа и обучения.
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
                            Платите только за результат. Не устраивает качество уборки — клинеры сразу же устранят все недоразумения, пока вы не останетесь довольны.
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