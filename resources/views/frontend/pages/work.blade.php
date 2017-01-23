@extends('frontend.layout')

@section('banner')
    <div class="banner banner_page_work">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Работа в <br> Lime Cleaning
                </h1>

                {!! Form::open([
        'route' => 'frontend.pages.work.store',
        'method' => 'POST',
        'class' => 'work-form simple-form'
    ]) !!}

                    <div class="form-block__wrap">
                        <div class="form-block form-block_position_left">


                            <div class="subclean-type form_full_width">
                                <label class="subclean-type__label" for="user_name">Фамилия Имя Отчество</label><br>
                                <input class="subclean-type__input user-email" name="user_name" type="text" id="user_name"  placeholder="Введите ФИО" maxlength="100" size="100" required>
                            </div>

                            <div class="subclean-type form_full_width form_margin_top">
                                <label class="subclean-type__label" for="citizen">Гражданство</label><br>
                                <select class="subclean-type__select cleaning-time" name="citizen" id="citizen">
                                    <option value="Не выбрано" selected>Выберите страну</option>
                                    <option value="Россия">Россия</option>
                                    <option value="Украина">Украина</option>
                                    <option value="Белоруссия">Белоруссия</option>
                                    <option value="Казахстан">Казахстан</option>
                                    <option value="Другая">Другая</option>
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
                                <select class="subclean-type__select year-birth" name="age" id="year-birth" required>
                                    <option value="0" selected>Выберите год</option>
                                    @foreach ($yearList as $year)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
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

                {!! Form::close() !!}


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
    <div class="remodal modal_type_work" data-remodal-id="work-alert">
        <div class="popup__title title title_color_black">
           Спасибо за заявку
        </div>
        <!-- /.popup__title -->
        <div class="popup__body">
            <img class="load-img" src="/img/load.gif" alt="Загрузка">
        </div>
        <!-- /.popup__body -->
    </div>
@endsection