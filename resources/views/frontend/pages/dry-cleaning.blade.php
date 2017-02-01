@extends('frontend.layout')

@section('banner')
    <div class="banner dry-clean dry-clean__banner">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Химчистка
                </h1>
                <h2 class="banner__text">
                    Генеральная уборка еще никогда <br>
                    не приносила вам столько удовольствия. <br>
                    Ведь когда работают наши специалисты — вы отдыхаете.
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
    <div class="dry-clean dry-clean_type_carpet">
        <div class="dry-clean__wrapper">
            <div class="dry-clean__block">
                <div class="dry-clean__titile title">
                    Ковры
                </div>
                <!-- /.dry-clean__titile title -->
                <div class="dry-clean__block steps steps_type_carpet">
                    <img src="img/clean/khimchistka/carpet-small.jpg" alt="" class="steps__img">
                    <!-- /.steps__img -->
                    <div class="steps__wrapper">
                        <div class="steps__titile">
                            Этапы
                        </div>
                        <!-- /.steps__titile -->
                        <div class="clean-block__list">
                            <ul class="lime-list">
                                <li class="lime-list__item">
                            <span>Протираем все доступные поверхности, <br>
выключатели и дверные ручки</span>
                                </li>
                                <!-- /.lime-list__item -->
                                <li class="lime-list__item">
                            <span>Чистим зеркала и стеклянные<br>
поверхности</span>
                                </li>
                                <!-- /.lime-list__item -->
                                <li class="lime-list__item">
                            <span>Складываем одежду и расставляем<br>
вещи</span>
                                </li>
                                <!-- /.lime-list__item -->
                                <li class="lime-list__item">
                                    <span>Застилаем кровать</span>
                                </li>
                                <!-- /.lime-list__item -->
                            </ul>
                            <!-- /.lime-list -->
                        </div>
                        <!-- /.clean-block__list -->
                        <div class="min-order-bl min-bl_type_horizont carpet-square">
                            <div class="min-bl__figure">
                                <i></i>
                            </div>
                            <!-- /.min-bl__figure -->
                            <div class="subclean-type  subclean_type_dry-clean">
                                <label class="subclean-type__label" for="carpet-square">Площадь ковра, м<sup>2</sup></label>
                                <div class="subclean-inp-group">
                                    <a href="#" class="quant-button value_minus">-</a>
                                    <input class="subclean-type__input values-donor" name="carpet-square" type="text" id="carpet-square" min="1"  value="1" maxlength="4" size="5" data-servicevalue="carpet-square">
                                    <a href="#" class="quant-button value_plus">+</a>
                                </div>
                                <!-- /.subclean-inp-group -->
                            </div>
                        </div>
                        <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                    </div>
                    <!-- /.steps__wrapper -->
                </div>
                <!-- /.dry-clean__block clean-block -->
                <div class="clean-block__order dry-clean__order">
                    <a class="order" href="#modal-carpet">
                        Заказать
                    </a>
                </div>
                <!-- /.clean-block__order -->
            </div>
            <!-- /.dry-clean__block -->

            <div class="dry-clean__block">
                <div class="dry-clean__titile title">
                    Мягкая мебель
                </div>
                <!-- /.dry-clean__titile title -->
                <div class="dry-clean__block steps steps_type_furnitura">
                    <img src="img/clean/khimchistka/furnitura-small.jpg" alt="" class="steps__img">
                    <!-- /.steps__img -->
                    <div class="clean-block clean-block_position_right">
                        <div class="steps__wrapper">
                            <div class="steps__titile">
                                Этапы
                            </div>
                            <!-- /.steps__titile -->
                            <div class="clean-block__list">
                                <ul class="lime-list">
                                    <li class="lime-list__item">
                            <span>Протираем все доступные пове
выключатели и дверные ручки</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                            <span>Чистим зеркала и стеклянные
поверхности</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                                        <span>Складываем одежду и расставляем вещи</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                                        <span>Застилаем кровать</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                </ul>
                                <!-- /.lime-list -->
                            </div>
                            <!-- /.clean-block__list -->
                        </div>
                        <!-- /.steps__wrapper -->
                    </div>
                    <!-- /.clean-block clean-block_position_right -->

                </div>
                <!-- /.dry-clean__block clean-block -->

                <div class="min-order-bl__btn-group">

                    <input class="subclean-type__input values-donor" name="furnitura-count" type="text"   value="" maxlength="20">
                    <div class="min-order-bl min-bl min-bl_type_border furniture">

                        <input class="min-order-bl__input services__input_type_checkbox" type="checkbox" id="furniture-order" name="additional-services" value="sofa" data-servicevalue="1">
                        <label class="min-order-bl__label min-bl__figure" for="furniture-order">
                            <i></i>
                            <span>Диван</span>
                        </label>
                        <!-- /.min-bl__figure -->
                        <div class="subclean-type  subclean_type_dry-clean">
                            <label class="subclean-type__label" for="furniture">Посадочных мест</label>
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input" name="furniture-sofa" type="text" id="furniture" min="1" max="15" value="1" maxlength="2" size="2">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <!-- /.subclean-inp-group -->
                        </div>
                    </div>
                    <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                    <div class="min-order-bl min-bl min-bl_type_border chair">

                        <input class="min-order-bl__input services__input_type_checkbox" type="checkbox" id="chair-order" name="additional-services" value="chair" data-servicevalue="1">

                        <label class="min-order-bl__label min-bl__figure" for="chair-order">
                            <i></i>
                            <span>Кресло</span>
                        </label>

                        <div class="subclean-type subclean_type_dry-clean">
                            <label class="subclean-type__label" for="chair">Количество</label>
                            <div class="subclean-inp-group">
                                <a href="#" class="quant-button value_minus">-</a>
                                <input class="subclean-type__input" name="chair" type="text" id="chair" min="1" max="15" value="1" maxlength="2" size="2">
                                <a href="#" class="quant-button value_plus">+</a>
                            </div>
                            <!-- /.subclean-inp-group -->
                        </div>
                    </div>
                    <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                </div>
                <!-- /.min-order-bl__btn-group -->

                <div class="clean-block__order dry-clean__order">
                    <a class="order" href="#modal-furnitura">
                        Заказать
                    </a>
                </div>
                <!-- /.clean-block__order -->
            </div>
            <!-- /.dry-clean__block -->

            <div class="dry-clean__block">
                <div class="dry-clean__titile title">
                    Матрасы
                </div>
                <!-- /.dry-clean__titile title -->
                <div class="dry-clean__block steps steps_type_matrasses">
                    <img src="img/clean/khimchistka/matrasses-small.jpg" alt="" class="steps__img">
                    <!-- /.steps__img -->
                    <div class="clean-block clean-block_position_left">
                        <div class="steps__wrapper">
                            <div class="steps__titile">
                                Этапы
                            </div>
                            <!-- /.steps__titile -->
                            <div class="clean-block__list">
                                <ul class="lime-list">
                                    <li class="lime-list__item">
                            <span>Протираем все доступные пове
выключатели и дверные ручки</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                            <span>Чистим зеркала и стеклянные
поверхности</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                                        <span>Складываем одежду и расставляем вещи</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                                        <span>Застилаем кровать</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                </ul>
                                <!-- /.lime-list -->
                            </div>
                            <!-- /.clean-block__list -->
                            <div class="min-order-bl min-bl_type_horizont matrassess">
                                <div class="min-bl__figure">
                                    <i></i>
                                </div>
                                <!-- /.min-bl__figure -->
                                <div class="subclean-type subclean_type_dry-clean">
                                    <label class="subclean-type__label" for="matrassess">Количество матрасов</label>
                                    <div class="subclean-inp-group">
                                        <a href="#" class="quant-button value_minus">-</a>
                                        <input class="subclean-type__input values-donor" name="matrassess" type="text" id="matrassess" min="1" value="1" maxlength="3" size="4" data-servicevalue="matrasses">
                                        <a href="#" class="quant-button value_plus">+</a>
                                    </div>
                                    <!-- /.subclean-inp-group -->
                                </div>
                            </div>
                            <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                        </div>
                        <!-- /.steps__wrapper -->
                    </div>
                    <!-- /.clean-block clean-block_position_right -->

                </div>
                <!-- /.dry-clean__block clean-block -->



                <div class="clean-block__order dry-clean__order">
                    <a class="order" href="#modal-matrasses">
                        Заказать
                    </a>
                </div>
                <!-- /.clean-block__order -->
            </div>
            <!-- /.dry-clean__block -->

            <div class="dry-clean__block">
                <div class="dry-clean__titile title">
                    Машины
                </div>
                <!-- /.dry-clean__titile title -->
                <div class="dry-clean__block steps steps_type_car">
                    <img src="img/clean/khimchistka/car-small.jpg" alt="" class="steps__img">
                    <!-- /.steps__img -->
                    <div class="clean-block clean-block_position_right">
                        <div class="steps__wrapper">
                            <div class="steps__titile">
                                Этапы
                            </div>
                            <!-- /.steps__titile -->
                            <div class="clean-block__list">
                                <ul class="lime-list">
                                    <li class="lime-list__item">
                            <span>Протираем все доступные пове
выключатели и дверные ручки</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                            <span>Чистим зеркала и стеклянные
поверхности</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                                        <span>Складываем одежду и расставляем вещи</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                    <li class="lime-list__item">
                                        <span>Застилаем кровать</span>
                                    </li>
                                    <!-- /.lime-list__item -->
                                </ul>
                                <!-- /.lime-list -->
                            </div>
                            <!-- /.clean-block__list -->
                        </div>
                        <!-- /.steps__wrapper -->
                    </div>
                    <!-- /.clean-block clean-block_position_right -->

                </div>
                <!-- /.dry-clean__block clean-block -->

                <div class="min-order-bl__btn-group">
                    <div class="min-order-bl min-bl min-bl_type_border passenger">

                        <input class="min-order-bl__input services__input_type_checkbox" type="checkbox" id="passenger-order" name="additional-services" value="passenger">
                        <label class="min-order-bl__label min-bl__figure" for="passenger-order">
                            <i></i>
                            <span>Легковая</span>
                        </label>
                        <!-- /.min-bl__figure -->
                    </div>
                    <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                    <div class="min-order-bl min-bl min-bl_type_border suv">

                        <input class="min-order-bl__input services__input_type_checkbox values-donor" type="checkbox" id="suv-order" name="additional-services" value="suv">
                        <label class="min-order-bl__label min-bl__figure" for="suv-order">
                            <i></i>
                            <span>Внедорожник</span>
                        </label>
                    </div>
                    <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                    <div class="min-order-bl min-bl min-bl_type_border minibus">

                        <input class="min-order-bl__input services__input_type_checkbox values-donor" type="checkbox" id="minibus-order" name="additional-services" value="minibus">
                        <label class="min-order-bl__label min-bl__figure" for="minibus-order">
                            <i></i>
                            <span>Микроавтобус</span>
                        </label>
                    </div>
                    <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                </div>
                <!-- /.min-order-bl__btn-group -->

                <div class="clean-block__order dry-clean__order">
                    <a class="order" href="#modal-car">
                        Заказать
                    </a>
                </div>
                <!-- /.clean-block__order -->
            </div>
            <!-- /.dry-clean__block -->

        </div>
        <!-- /.dry-clean__wrapper -->
    </div>
    <!-- /.dry-clean dry-clean_type_carpet -->
@endsection

@section('popup')
    <div class="remodal popup" data-remodal-id="modal-carpet">
        <div class="popup__title title title_color_black">
            Химчистка ковров
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
                    <input class="clean-type__input" type="radio" name="cleaning_sort" value="11" checked="true">
                    <input class="subclean-type__input cleaning-date" name="additional_fields" type="text" data-clean-type="modal-carpet">
                </div>

                <div class="subclean-type type_kind_date">
                    <label class="subclean-type__label color_green" for="cleaning_date">Удобная дата</label><br>
                    <input class="subclean-type__input cleaning-date" name="clean_date" type="datetime" id="cleaning_date" size="10" placeholder="14.09.16">
                </div>

                <div class="subclean-type type_kind_phone">
                    <label class="subclean-type__label color_green" for="user-phone">Ваш телефон</label><br>
                    <input class="subclean-type__input user-phone" name="user_phone" type="tel" id="user-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="15" required>
                </div>
                <button class="get-clean dryclean_order">Сделать заказ</button>
            {!! Form::close() !!}
        </div>
        <!-- /.popup__body -->
    </div>

    <div class="remodal popup" data-remodal-id="modal-furnitura">
        <div class="popup__title title title_color_black">
            Химчистка мягкой мебели
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
                    <input class="clean-type__input" type="radio" name="cleaning_sort" value="12" checked="true">
                    <input class="subclean-type__input cleaning-date" name="additional_fields" type="text" data-clean-type="modal-furnitura">
                </div>

                <div class="subclean-type type_kind_date">
                    <label class="subclean-type__label color_green" for="cleaning_date">Удобная дата</label><br>
                    <input class="subclean-type__input cleaning-date" name="clean_date" type="datetime" id="cleaning_date" size="10" placeholder="14.09.16">
                </div>

                <div class="subclean-type type_kind_phone">
                    <label class="subclean-type__label color_green" for="user-phone">Ваш телефон</label><br>
                    <input class="subclean-type__input user-phone" name="user_phone" type="tel" id="user-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="15" required>
                </div>
                <button class="get-clean dryclean_order">Сделать заказ</button>

            {!! Form::close() !!}
        </div>
        <!-- /.popup__body -->
    </div>

    <div class="remodal popup" data-remodal-id="modal-matrasses">
        <div class="popup__title title title_color_black">
            Химчистка матрасов
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
                    <input class="clean-type__input" type="radio" name="cleaning_sort" value="13" checked="true">
                    <input class="subclean-type__input cleaning-date" name="additional_fields" type="text" data-clean-type="modal-matrasses">
                </div>

                <div class="subclean-type type_kind_date">
                    <label class="subclean-type__label color_green" for="cleaning_date">Удобная дата</label><br>
                    <input class="subclean-type__input cleaning-date" name="clean_date" type="datetime" id="cleaning_date" size="10" placeholder="14.09.16">
                </div>

                <div class="subclean-type type_kind_phone">
                    <label class="subclean-type__label color_green" for="user-phone">Ваш телефон</label><br>
                    <input class="subclean-type__input user-phone" name="user_phone" type="tel" id="user-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="15" required>
                </div>
                <button class="get-clean dryclean_order">Сделать заказ</button>

            {!! Form::close() !!}
        </div>
        <!-- /.popup__body -->
    </div>

    <div class="remodal popup" data-remodal-id="modal-car">
        <div class="popup__title title title_color_black">
            Химчистка машин
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
                    <input class="clean-type__input" type="radio" name="cleaning_sort" value="14" checked="true">
                    <input class="subclean-type__input cleaning-date" name="additional_fields" type="text" data-clean-type="modal-car">
                </div>

                <div class="subclean-type type_kind_date">
                    <label class="subclean-type__label color_green" for="cleaning_date">Удобная дата</label><br>
                    <input class="subclean-type__input cleaning-date" name="clean_date" type="datetime" id="cleaning_date" size="10" placeholder="14.09.16">
                </div>


                <div class="subclean-type type_kind_phone">
                    <label class="subclean-type__label color_green" for="user-phone">Ваш телефон</label><br>
                    <input class="subclean-type__input user-phone" name="user_phone" type="tel" id="user-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="15" required>
                </div>
                <button class="get-clean dryclean_order">Сделать заказ</button>

            {!! Form::close() !!}
        </div>
        <!-- /.popup__body -->
    </div>
@endsection