@extends('frontend.layout')

@section('banner')
    <div class="banner cleanups cleanups_type_flat">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Уборка квартир, домов,<br> коттеджей
                </h1>
                <h2 class="banner__text">
                    Генеральная и повседневная уборка квартир, домов и офисов. <br>
                    В любой точке Краснодара.
                </h2>
                <!-- /.banner__text -->

                <div class="cleanups-choose button-group button_type_line ">
                    <a href="#" class="button-group__link link_active" data-clean="general">Генеральная уборка</a>
                    <!-- /.button-group__linl -->
                    <a href="#" class="button-group__link" data-clean="standart">Стандартная (ежедневная)</a>
                    <!-- /.button-group__linl -->
                    <a href="#" class="button-group__link" data-clean="repairs">После ремонта</a>
                    <!-- /.button-group__linl -->

                </div>
                <!-- /.cleanups cleanups_choose -->


            </div>
            <!-- /.banner-wrap -->
        </div>
        <!-- /.banner__filter filter filter_opacity -->

    </div>
    <!-- /.p-banner -->
@endsection


@section('content')
    <div class="clean description cleane_tag_general clean_visible_true">
        <div class="description__wrapper">
            <div class="description__padding">

                <div class="description__title title">
                    Генеральная уборка
                </div>
                <!-- /.description__title -->

                <div class="description__model tabs">
                    <div class="subclean-type mobile-cleaning-type choose-input border_green">
                        <div class="subclean-inp-group">
                            <button type="button"  class="sort-button  value_prev">-</button>
                            <input class="subclean-type__input description_mobile rooms_number" name="description_mobile" type="text" id="description_mobile" value="1" readonly="readonly">
                            <span class="mob-type-desc input-desc">Жилые комнаты</span>
                            <button type="button" class="sort-button value_next">+</button>
                        </div>
                        <!-- /.subclean-inp-group -->
                    </div>

                    <div class="tabs__top-btn">
                        <div class="tabs__control-item control-item-1 tabs_active" data-content="room">
                            <a href="#" class="tabs__link">
                                В жилых комнатах
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                        <div class="tabs__control-item control-item-2" data-content="kitchen">
                            <a href="#" class="tabs__link">
                                На кухне
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                        <div class="tabs__control-item control-item-3" data-content="bathroom">
                            <a href="#" class="tabs__link">
                                В ванной и туалете
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                        <div class="tabs__control-item control-item-4" data-content="corridor">
                            <a href="#" class="tabs__link">
                                В коридоре
                            </a>
                            <!-- /.tabs__link -->
                        </div>
                        <!-- /.tabs__control-item -->
                    </div>
                    <!-- /.tabs tabs_top_btn -->
                    <div class="tabs__desc tabs_active tabs_content_room">
                        <!--<div class="tabs__img">

                        </div>-->
                        <!-- /.tabs__img -->
                        <picture class="tabs__img">
                            <source srcset="/img/clean/general/rooms.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/general/rooms-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source" srcset="/img/clean/general/rooms-m.jpg" />
                        </picture>
                        <!--<img src="/img/tab-img-1.jpg" alt="" class="tabs__img">-->
                        <!-- /.tabs__img -->
                        <div class="tabs__item decription decription_nmb_1">
                            <div class="descriptrion__img img_position_right img_position_top img_mobile_position_right">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Протираем все доступные<br>
                                поверхности<span class="mobile_visible_none">, выключатели<br>
                            и дверные ручки</span>
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_2">
                            <div class="descriptrion__img img_position_left img_position_top img_mobile_position_left">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Чистим зеркала и стеклянные<br>
                                поверхности
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_3">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Убираем мусор
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_4">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем пол, протираем<br>
                                плинтусы и пылесосим<br>
                                ковер
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <div class="tabs__item decription decription_nmb_5">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Обеспыливаем потолок и стены
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                    </div>
                    <!-- /.tabs__desc -->
                    <div class="tabs__desc tabs_content_kitchen">
                        <picture class="tabs__img">
                            <source srcset="/img/clean/general/kitchen.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/general/kitchen-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source"  srcset="/img/clean/general/kitchen-m.jpg" />
                        </picture>
                        <!-- /.tabs__img -->
                        <div class="tabs__item decription decription_nmb_1">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем снаружи кухонный<br>
                                гарнитур, фартук
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_2">
                            <div class="descriptrion__img img_position_left img_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Чистим раковину<br>
                                и натираем кран
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_3">
                            <div class="descriptrion__img img_position_right img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Протираем все доступные<br>
                                поверхности, стол, стулья
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_4">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Убираем мусор
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_5">
                            <div class="descriptrion__img img_position_left img_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем пол, протираем<br>
                                плинтусы и пылесосим<br>
                                ковер
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_6">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Обеспыливаем потолок<br> и стены
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                    </div>
                    <!-- /.tabs__desc -->
                    <div class="tabs__desc tabs_content_bathroom">
                        <!-- /.tabs__img -->
                        <picture class="tabs__img">
                            <source srcset="/img/clean/general/bathroom.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/general/bathroom-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source" srcset="/img/clean/general/bathroom-m.jpg" />
                        </picture>
                        <div class="tabs__item decription decription_nmb_1">
                            <div class="descriptrion__img img_position_right img_position_top img_mobile_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем душевую кабинку<br>
                                и ванну
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_2">
                            <div class="descriptrion__img img_position_right img_position_top img_mobile_position_left img_mobile_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Чистим зеркала<br>
                                и стеклянные<br>
                                поверхности
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_3">
                            <div class="descriptrion__img img_position_right img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Протираем шкафы<br>
                                с внешней стороны
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_4">
                            <div class="descriptrion__img img_position_left img_position_top img_mobile_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Чистим и натираем<br>
                                сантехнику
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_5">
                            <div class="descriptrion__img img_position_right img_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем и дизенфицируем<br>
                                унитаз
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_6">
                            <div class="descriptrion__img img_position_right img_position_bottom img_mobile_position_left">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Протираем все доступные<br>
                                поверхности
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_7">
                            <div class="descriptrion__img img_position_left img_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем пол, протираем<br>
                                плинтусы и пылесосим<br>
                                коврики
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_8">
                            <div class="descriptrion__img img_position_right img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем кафель
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                    </div>
                    <!-- /.tabs__desc -->
                    <div class="tabs__desc tabs_content_corridor">
                        <picture class="tabs__img">
                            <source srcset="/img/clean/general/corridor.jpg" media="(min-width: 981px)" />
                            <source srcset="/img/clean/general/corridor-t.jpg" media="(min-width: 500px)" />
                            <img class="tabs__source"  srcset="/img/clean/general/corridor-m.jpg" />
                        </picture>
                        <div class="tabs__item decription decription_nmb_1">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Протираем все доступные<br>
                                поверхности
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_2">
                            <div class="descriptrion__img img_position_right img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Чистим зеркала<br>
                                и стеклянные<br>
                                поверхности
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_3">
                            <div class="descriptrion__img img_position_right img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Протираем входную<br>
                                дверь
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_4">
                            <div class="descriptrion__img img_position_left img_position_bottom">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Моем пол, протираем<br>
                                плинтусы и пылесосим<br>
                                коврики
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_5">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Расставляем обувь
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                        <div class="tabs__item decription decription_nmb_6">
                            <div class="descriptrion__img img_position_left img_position_top">
                                <img src="img/lime-mini.png" alt="">
                            </div>
                            <!-- /.descriptrion__img -->
                            <div class="descriptrion__text">
                                Обеспыливаем потолок<br> и стены
                            </div>
                            <!-- /.descriptrion__text -->
                        </div>
                        <!-- /.tabs__item -->
                    </div>
                    <!-- /.tabs__desc -->

                </div>
                <!-- /.description description_model -->
            </div>
            <!-- /.description__padding -->

            <div class="why-us">
                <div class="why-us__bg">

                </div>
                <!-- /.why-us__bg -->
                <div class="why-us__desc">
                    <div class="why-us__title title title_type_sub title_color_black">
                        Почему стоит заказать именно у нас?
                    </div>
                    <!-- /.why-us__title -->
                    <div class="why-us__block mini-block">
                        <div class="mini-block__item">
                            <div class="mini-block__img-wrap">
                                <img src="img/icons/why-us/experienced-staff.png" alt="Опытный
персонал" class="mini-block__img">
                                <!-- /.mini-block__img -->
                            </div>
                            <!-- /.mini-block__img -->
                            <div class="mini-block__text">
                                Опытный<br>
                                персонал
                            </div>
                            <!-- /.mini-block__text -->
                        </div>
                        <!-- /.why-us__block -->
                        <div class="mini-block__item">
                            <div class="mini-block__img-wrap">
                                <img src="img/icons/why-us/equipment.png" alt="Опытный
персонал" class="mini-block__img">
                                <!-- /.mini-block__img -->
                            </div>
                            <!-- /.mini-block__img -->
                            <div class="mini-block__text">
                                Профессиональное<br>оборудование
                            </div>
                            <!-- /.mini-block__text -->
                        </div>
                        <!-- /.why-us__block -->
                        <div class="mini-block__item">
                            <div class="mini-block__img-wrap">
                                <img src="img/icons/why-us/comfortable-time.png" alt="Опытный
персонал" class="mini-block__img">
                                <!-- /.mini-block__img -->
                            </div>
                            <!-- /.mini-block__img -->
                            <div class="mini-block__text">
                                Уборка в любое<br>
                                удобное время
                            </div>
                            <!-- /.mini-block__text -->
                        </div>
                        <!-- /.why-us__block -->
                        <div class="mini-block__item">
                            <div class="mini-block__img-wrap">
                                <img src="img/icons/why-us/thumbs-up.png" alt="Опытный
персонал" class="mini-block__img">
                                <!-- /.mini-block__img -->
                            </div>
                            <!-- /.mini-block__img -->
                            <div class="mini-block__text">
                                Если что-то<br>
                                не устроит — исправим!
                            </div>
                            <!-- /.mini-block__text -->
                        </div>
                        <!-- /.why-us__block -->
                    </div>
                    <!-- /.why-us__block-wrap -->

                    <div class="why-us__text">
                        <p>Нас с детства учили, что чистота — залог здоровья. Поэтому уборка в квартире нужна не только для порядка, но и чтобы не допустить распространения микробов и бактерий. И если прибираться «по верхам» у большинства людей получается регулярно, то на генеральную уборку у многих уже не хватает ни времени, ни сил. Как решить эту проблему? Доверьте уборку профессионалам — обратитесь в клининговую компанию Lime Cleaning.</p>
                        <p>Мы предлагаем вам комплексную уборку: она включает в себя мытье полов и окон, чистку ковров, протирку всех поверхностей от пыли, мойку сантехники. Вы сами можете выбрать на сайте дополнительные услуги: от мытья бытовой техники до глажки белья. Мы беремся за уборку любых объектов — от однокомнатных квартир до коттеджей. А демократичные цены делают наши услуги доступными для самого широкого круга клиентов. </p>
                    </div>

                    <div class="why-us__order mobile_visible_none">
                        <p class="regular-highlighted">Компания <span class="color_green">Lime Cleaning</span> — это оптимальный выбор
                            и лучшее решение!</p>
                        <!-- /.why-us__text -->
                        <a class="order why-us__btn" href="#modal-general">
                            Заказать
                        </a>
                    </div>
                    <!-- /.why-us__order -->
                </div>
                <!-- /.why-us__desc -->
            </div>
            <!-- /.why-us -->
            <div class="why-us__order desctop_visible_none">
                <p class="regular-highlighted">Компания <span class="color_green">Lime Cleaning</span> — это оптимальный выбор
                    и лучшее решение!</p>
                <!-- /.why-us__text -->
                <a class="order why-us__btn" href="#">
                    Заказать
                </a>
            </div>
            <!-- /.why-us__order -->
        </div>
        <!-- /.description__wrapper -->
    </div>
    <!-- /.description -->

    <div class="clean cleane_tag_standart">
        <div class="clean__title title">
            Стандартная (ежедневная) уборка
        </div>
        <!-- /.clean__title -->
        <div class="clean-block__wrap">
            <div class="clean-block">
                <div class="clean-block__l-b">
                    <img src="img/clean/standart/flat.png" alt="" class="clean-block__img">
                    <!-- /.clean-block__img -->
                </div>
                <!-- /.clean-block__l-b -->
                <div class="clean-block__r-b">
                    <div class="clean-block__title">
                        В жилых комнатах
                    </div>
                    <!-- /.clean-block__title -->
                    <div class="clean-block__list">
                        <ul class="lime-list">
                            <li class="lime-list__item">
                                <span>Моем пол, пылесосим ковер</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                            <span>Моем все доступные поверхности, выключатели, двери <br>
и дверные ручки</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                                <span>Выносим мусор</span>
                            </li>
                            <!-- /.lime-list__item -->
                        </ul>
                        <!-- /.lime-list -->
                    </div>
                    <!-- /.clean-block__list -->
                </div>
                <!-- /.clean-block__r-b -->
            </div>
            <!-- /.clean-block -->
            <div class="clean-block clean-block_reverse">
                <div class="clean-block__l-b">
                    <img src="img/clean/standart/kitchen.png" alt="" class="clean-block__img">
                    <!-- /.clean-block__img -->
                </div>
                <!-- /.clean-block__l-b -->
                <div class="clean-block__r-b">
                    <div class="clean-block__title">
                        На кухне
                    </div>
                    <!-- /.clean-block__title -->
                    <div class="clean-block__list">
                        <ul class="lime-list">
                            <li class="lime-list__item">
                                <span>Чистим раковину и натираем кран</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                                <span>Протираем все доступные поверхности, стол, стулья</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                                <span>Моем пол</span>
                            </li>
                            <!-- /.lime-list__item -->
                        </ul>
                        <!-- /.lime-list -->
                    </div>
                    <!-- /.clean-block__list -->
                </div>
                <!-- /.clean-block__r-b -->
            </div>
            <!-- /.clean-block -->
            <div class="clean-block">
                <div class="clean-block__l-b">
                    <img src="img/clean/standart/bathroom.png" alt="" class="clean-block__img">
                    <!-- /.clean-block__img -->
                </div>
                <!-- /.clean-block__l-b -->
                <div class="clean-block__r-b">
                    <div class="clean-block__title">
                        В ванной и туалете
                    </div>
                    <!-- /.clean-block__title -->
                    <div class="clean-block__list">
                        <ul class="lime-list">
                            <li class="lime-list__item">
                                <span>Моем душевую кабинку и ванну</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                                <span>Моем и дизенфицируем унитаз</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                                <span>Моем пол</span>
                            </li>
                            <!-- /.lime-list__item -->
                        </ul>
                        <!-- /.lime-list -->
                    </div>
                    <!-- /.clean-block__list -->
                </div>
                <!-- /.clean-block__r-b -->
            </div>
            <!-- /.clean-block -->
            <div class="clean-block clean-block_reverse">
                <div class="clean-block__l-b">
                    <img src="img/clean/standart/hallway.png" alt="" class="clean-block__img">
                    <!-- /.clean-block__img -->
                </div>
                <!-- /.clean-block__l-b -->
                <div class="clean-block__r-b">
                    <div class="clean-block__title">
                        В коридоре
                    </div>
                    <!-- /.clean-block__title -->
                    <div class="clean-block__list">
                        <ul class="lime-list">
                            <li class="lime-list__item">
                                <span>Чистим зеркала и стеклянные поверхности</span>
                            </li>
                            <!-- /.lime-list__item -->
                            <li class="lime-list__item">
                                <span>Моем пол и пылесосим коврики</span>
                            </li>
                            <!-- /.lime-list__item -->
                        </ul>
                        <!-- /.lime-list -->
                    </div>
                    <!-- /.clean-block__list -->
                </div>
                <!-- /.clean-block__r-b -->
            </div>
            <!-- /.clean-block -->
        </div>
        <!-- /.clean-block__wrap -->
        <div class="clean-block__order">
            <a class="order" href="#modal-standart">
                Заказать
            </a>
        </div>
        <!-- /.clean-block__order -->
    </div>
    <!-- /.general general_clean -->


    <div class="clean cleane_tag_repairs">
        <div class="clean__title title">
            Уборка после ремонта
        </div>
        <!-- /.clean__title -->

        <div class="dry-clean__block steps steps_type_repairs">
            <img src="img/after-repair.jpg" alt="" class="steps__img">
            <!-- /.steps__img -->
            <div class="steps__wrapper">
                <div class="steps__titile">
                    Этапы
                </div>
                <!-- /.steps__titile -->
                <div class="clean-block__list">
                    <ul class="lime-list">
                        <li class="lime-list__item">
                            <span>Собираем и выносим строительный мусор;</span>
                        </li>
                        <!-- /.lime-list__item -->
                        <li class="lime-list__item">
                            <span>Очищаем помещения от строительной пыли с помощью профессиональных пылесосов;</span>
                        </li>
                        <!-- /.lime-list__item -->
                        <li class="lime-list__item">
                            <span>Отмываем пол, стены, плинтуса, подоконники от пятен и подтеков строительной смеси. </span>
                        </li>
                        <!-- /.lime-list__item -->
                        <li class="lime-list__item">
                            <span>Моем начисто пол и окна;</span>
                        </li>
                        <!-- /.lime-list__item -->
                    </ul>
                    <!-- /.lime-list -->
                </div>
                <!-- /.clean-block__list -->
                <div class="min-order-bl min-bl_type_horizont repair-square">
                    <div class="tabs__orders">
                        <div class="min-order-bl min-bl_type_horizont repair-square">
                            <input class="min-order-bl__input services__input_type_checkbox" type="checkbox"  name="additional-services" value="repair-square" data-servicevalue="1">
                            <div class="min-bl__figure">
                                <i></i>
                            </div>
                            <!-- /.min-bl__figure -->
                            <div class="subclean-type  subclean_type_repair-square">
                                <label class="subclean-type__label" for="repair-square">Площадь помещения, м<sup>2</sup></label>
                                <div class="subclean-inp-group">
                                    <a href="#" class="quant-button value_minus">-</a>
                                    <input class="subclean-type__input" name="repair-square" type="text" id="repair-square" min="1"  value="1" maxlength="4" size="8">
                                    <a href="#" class="quant-button value_plus">+</a>
                                </div>
                                <!-- /.subclean-inp-group -->
                            </div>
                        </div>
                        <!-- /.min-order-bl min-bl min-bl_type_horizont -->
                    </div>
                    <!-- /.tabs__orders -->
                </div>
                <!-- /.min-order-bl min-bl min-bl_type_horizont -->
            </div>
            <!-- /.steps__wrapper -->
        </div>
        <!-- /.dry-clean__block clean-block -->

        <div class="why-us why-us_repairs">
            <div class="why-us__bg">

            </div>
            <!-- /.why-us__bg -->
            <div class="why-us__desc">
                <div class="why-us__title title title_type_sub title_color_black">
                    Почему стоит заказать именно у нас?
                </div>
                <!-- /.why-us__title -->
                <div class="why-us__block mini-block">
                    <div class="mini-block__item">
                        <div class="mini-block__img-wrap">
                            <img src="img/icons/why-us/experienced-staff.png" alt="Опытный
персонал" class="mini-block__img">
                            <!-- /.mini-block__img -->
                        </div>
                        <!-- /.mini-block__img -->
                        <div class="mini-block__text">
                            Опытный<br>
                            персонал
                        </div>
                        <!-- /.mini-block__text -->
                    </div>
                    <!-- /.why-us__block -->
                    <div class="mini-block__item">
                        <div class="mini-block__img-wrap">
                            <img src="img/icons/why-us/equipment.png" alt="Опытный
персонал" class="mini-block__img">
                            <!-- /.mini-block__img -->
                        </div>
                        <!-- /.mini-block__img -->
                        <div class="mini-block__text">
                            Профессиональное<br>оборудование
                        </div>
                        <!-- /.mini-block__text -->
                    </div>
                    <!-- /.why-us__block -->
                    <div class="mini-block__item">
                        <div class="mini-block__img-wrap">
                            <img src="img/icons/why-us/comfortable-time.png" alt="Опытный
персонал" class="mini-block__img">
                            <!-- /.mini-block__img -->
                        </div>
                        <!-- /.mini-block__img -->
                        <div class="mini-block__text">
                            Уборка в любое<br>
                            удобное для вас время
                        </div>
                        <!-- /.mini-block__text -->
                    </div>
                    <!-- /.why-us__block -->
                    <div class="mini-block__item">
                        <div class="mini-block__img-wrap">
                            <img src="img/icons/why-us/thumbs-up.png" alt="Опытный
персонал" class="mini-block__img">
                            <!-- /.mini-block__img -->
                        </div>
                        <!-- /.mini-block__img -->
                        <div class="mini-block__text">
                            Если что-то<br>
                            не устроит — исправим!
                        </div>
                        <!-- /.mini-block__text -->
                    </div>
                    <!-- /.why-us__block -->
                </div>
                <!-- /.why-us__block-wrap -->

                <div class="why-us__text">
                    <p>Ремонт — это всегда изматывающий процесс, к концу которого у вас просто не остается сил. Мы поможем вам быстро преодолеть последний, и самый неприятный этап ремонта — уборку квартиры от пыли и строительного мусора. Поручив эту работу профессионалам, вы не только экономите время и силы, но делаете выбор в пользу качества.</p>
                    <p>Ведь самые неприятные последствия ремонта — это строительная пыль и пятна от клея, шпаклевки и строительных смесей. Зачастую избавиться от них можно только при помощи профессиональной техники и специальных моющих средств. С нашей помощью вы сможете быстро и эффективно устранить последствия ремонта и начать наслаждаться новыми интерьерами.</p>
                </div>

                <div class="why-us__order mobile_visible_none">
                    <p class="regular-highlighted">Компания <span class="color_green">Lime Cleaning</span> — это оптимальный выбор
                        и лучшее решение!</p>
                    <!-- /.why-us__text -->
                    <a class="order why-us__btn" href="#modal-repairs">
                        Заказать
                    </a>
                </div>
                <!-- /.why-us__order -->
            </div>
            <!-- /.why-us__desc -->
        </div>
        <!-- /.why-us -->
        <div class="why-us__order desctop_visible_none">
            <p class="regular-highlighted">Компания <span class="color_green">Lime Cleaning</span> — это оптимальный выбор
                и лучшее решение!</p>
            <!-- /.why-us__text -->
            <a class="order why-us__btn" href="#modal-repairs">
                Заказать
            </a>
        </div>
        <!-- /.why-us__order -->

    </div>
    <!-- /.clean cleane cleane_tag_repaires -->
@endsection

@section('popup')
    <div class="remodal popup" data-remodal-id="modal-general">
        <div class="popup__title title title_color_black">
            Заказать генеральную уборку!
        </div>
        <!-- /.popup__title -->
        <div class="popup__body">

            {!! Form::open([
            'route' => 'frontend.pages.dry-cleaning.store',
            'method' => 'POST',
            'class' => 'order-cleaning'
            ]) !!}

            <div class="input-hidden-group">
                <input class="clean-type__input" type="radio" name="cleantype" value="1" checked="true">
                <input class="clean-type__input" type="radio" name="cleaning_sort" value="1" checked="true">
                <input class="subclean-type__input cleaning-date" name="modal-general" type="text" data-clean-type="modal-carpet">
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

    <div class="remodal popup" data-remodal-id="modal-standart">
        <div class="popup__title title title_color_black">
            Заказать стандартную уборку!
        </div>
        <!-- /.popup__title -->
        <div class="popup__body">

            {!! Form::open([
            'route' => 'frontend.pages.dry-cleaning.store',
            'method' => 'POST',
            'class' => 'order-cleaning'
            ]) !!}

            <div class="input-hidden-group">
                <input class="clean-type__input" type="radio" name="cleantype" value="1" checked="true">
                <input class="clean-type__input" type="radio" name="cleaning_sort" value="2" checked="true">
                <input class="subclean-type__input cleaning-date" name="modal-standart" type="text" data-clean-type="modal-carpet">
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

    <div class="remodal popup" data-remodal-id="modal-repairs">
        <div class="popup__title title title_color_black">
            Заказать уборку после ремонта!
        </div>
        <!-- /.popup__title -->
        <div class="popup__body">

            {!! Form::open([
            'route' => 'frontend.pages.dry-cleaning.store',
            'method' => 'POST',
            'class' => 'order-cleaning'
            ]) !!}

            <div class="input-hidden-group">
                <input class="clean-type__input" type="radio" name="cleantype" value="1" checked="true">
                <input class="clean-type__input" type="radio" name="cleaning_sort" value="3" checked="true">
                <input class="subclean-type__input cleaning-date" name="additional_fields" type="text" data-clean-type="modal-repairs">
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