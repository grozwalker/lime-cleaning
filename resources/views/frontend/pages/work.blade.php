@extends('frontend.layout')

@section('banner')
    <div class="banner banner_page_work">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Работа в <br> Lime Cleaning
                </h1>

                <form action="javascript:void(null);" method="post" class="work-form simple-form" onsubmit="order()" >

                    <div class="form-block__wrap">
                        <div class="form-block form-block_position_left">


                            <div class="subclean-type form_full_width">
                                <label class="subclean-type__label" for="user_namw">Фамилия Имя Отчество</label><br>
                                <input class="subclean-type__input user-email" name="user_namw" type="text" id="user_namw"  placeholder="Введите ФИО" maxlength="100" size="100">
                            </div>

                            <div class="subclean-type form_full_width form_margin_top">
                                <label class="subclean-type__label" for="cleaning-time">Гражданство</label><br>
                                <select class="subclean-type__select cleaning-time" name="cleaning_time" id="cleaning-time" >
                                    <option value="9:00" selected>Выберите страну</option>
                                    <option value="10:00">Россия</option>
                                    <option value="11:00">Украина</option>
                                    <option value="12:00">Белоруссия</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.form-block -->

                        <div class="form-block form-block_position_right">
                            <div class="subclean-type type_kind_phone">
                                <label class="subclean-type__label" for="user-phone">Ваш телефон</label><br>
                                <input class="subclean-type__input user-phone" name="user_phone" type="tel" id="user-phone" pattern="(\+?\d[- .]*){7,13}" placeholder="+7 __ __ ___ __" maxlength="15" size="20" required>
                            </div>


                            <div class="subclean-type form_full_width form_margin_top">
                                <label class="subclean-type__label" for="year-birth">Год рождения</label><br>
                                <select class="subclean-type__select year-birth" name="year-birth" id="year-birth" >
                                    <option value="9:00" selected>Выберите год</option>
                                    <option value="10:00">1960</option>
                                    <option value="11:00">1961</option>
                                    <option value="12:00">1962</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.form-block -->



                    </div>
                    <!-- /.form-block__wrap -->

                    <button class="get-clean get-work" type="submit">
                        Отправить заявку
                    </button>
                    <!-- /.get-clean -->

                </form>


            </div>
            <!-- /.banner-wrap -->
        </div>
        <!-- /.banner__filter filter filter_opacity -->

    </div>
    <!-- /.p-banner -->
@endsection


@section('content')
    <div class="work__content content">
        <div class="content__block">
            <div class="content__miniblock miniblock">
                <div class="miniblock__single">
                    <div class="miniblock__wrap">
                        <!-- /.miniblock__wrap -->
                        <div class="miniblock__img miniblock_type_grafic">
                            <i></i>
                        </div>
                        <!-- /.miniblock__img -->
                        <div class="miniblock__title">
                            Гибкий график
                        </div>
                        <!-- /.miniblock__title -->
                        <div class="miniblock__text">
                            Мы ответственно подходим
                            к своей работе, и гарантируем
                            результат, которым
                            вы останетесь довольны
                        </div>
                        <!-- /.miniblock__text -->
                    </div>
                </div>
                <!-- /.miniblock__single -->
                <div class="miniblock__single">
                    <div class="miniblock__wrap">
                        <!-- /.miniblock__wrap -->
                        <div class="miniblock__img miniblock_type_peymant">
                            <i></i>
                        </div>
                        <!-- /.miniblock__img -->
                        <div class="miniblock__title">
                            Регулярные выплаты
                        </div>
                        <!-- /.miniblock__title -->
                        <div class="miniblock__text">
                            Мы ответственно подходим
                            к своей работе, и гарантируем
                            результат, ктотрым
                            вы останетесь довольны
                        </div>
                        <!-- /.miniblock__text -->
                    </div>
                </div>
                <!-- /.miniblock__single -->
                <div class="miniblock__single">
                    <div class="miniblock__wrap">
                        <!-- /.miniblock__wrap -->
                        <div class="miniblock__img miniblock_type_exit-work">
                            <i></i>
                        </div>
                        <!-- /.miniblock__img -->
                        <div class="miniblock__title">
                            Выездная работа
                        </div>
                        <!-- /.miniblock__title -->
                        <div class="miniblock__text">
                            Мы ответственно подходим
                            к своей работе, и гарантируем
                            результат, которым
                            вы останетесь довольны
                        </div>
                        <!-- /.miniblock__text -->
                    </div>
                </div>
                <!-- /.miniblock__single -->
                <div class="miniblock__single">
                    <div class="miniblock__wrap">
                        <!-- /.miniblock__wrap -->
                        <div class="miniblock__img miniblock_type_education">
                            <i></i>
                        </div>
                        <!-- /.miniblock__img -->
                        <div class="miniblock__title">
                            Обучение
                        </div>
                        <!-- /.miniblock__title -->
                        <div class="miniblock__text">
                            Мы ответственно подходим
                            к своей работе, и гарантируем
                            результат, которым
                            вы останетесь довольны
                        </div>
                        <!-- /.miniblock__text -->
                    </div>
                </div>
                <!-- /.miniblock__single -->
                <div class="miniblock__single">
                    <div class="miniblock__wrap">
                        <!-- /.miniblock__wrap -->
                        <div class="miniblock__img miniblock_type_insurance">
                            <i></i>
                        </div>
                        <!-- /.miniblock__img -->
                        <div class="miniblock__title">
                            Страховой фонд
                        </div>
                        <!-- /.miniblock__title -->
                        <div class="miniblock__text">
                            Мы ответственно подходим
                            к своей работе, и гарантируем
                            результат, которым
                            вы останетесь довольны
                        </div>
                        <!-- /.miniblock__text -->
                    </div>
                </div>
                <!-- /.miniblock__single -->
                <div class="miniblock__single">
                    <div class="miniblock__wrap">
                        <!-- /.miniblock__wrap -->
                        <div class="miniblock__img miniblock_type_inventory">
                            <i></i>
                        </div>
                        <!-- /.miniblock__img -->
                        <div class="miniblock__title">
                            Бесплатный инвентарь
                        </div>
                        <!-- /.miniblock__title -->
                        <div class="miniblock__text">
                            Мы ответственно подходим
                            к своей работе, и гарантируем
                            результат, которым
                            вы останетесь довольны
                        </div>
                        <!-- /.miniblock__text -->
                    </div>
                </div>
                <!-- /.miniblock__single -->
            </div>
            <!-- /.content__miniblock miniblock -->
        </div>
        <!-- /.content__block -->
    </div>
    <!-- /.work__content page-content -->
@endsection

@section('popup')
    popup
@endsection