
<div class="banner">
    <div class="banner__filter filter filter_opacity">
        <div class="banner-wrap">
            <h1 class="top-title">
                Клининговая компания LimeCleaning в Краснодаре.
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

            <a href="#mainform" onclick="yaCounter45854880.reachGoal('zakaz'); return true;" class="get-clean main-form-order">Заказать</a>
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

            <a href="#mainform" onclick="yaCounter45854880.reachGoal('zakaz'); return true;" class="get-clean main-form-order">Заказать</a>
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