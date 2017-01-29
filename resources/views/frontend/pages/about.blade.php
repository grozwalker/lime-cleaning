@extends('frontend.layout')

@section('banner')
    <div class="banner about_banner">
        <div class="banner__filter filter filter_opacity">
            <div class="banner-wrap">
                <h1 class="top-title">
                    Коротко <br>
                    о нас
                </h1>
                <h2 class="banner__text">
                    Вы убедитесь что уборка — это просто! <br>
                    Мы поможем сэкономить ваше свободное время
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
    <div class="about about-page">
        <div class="about__wrapper">
            <div class="about__clmn">
                <div class="about__bg">

                </div>
                <!-- /.why-us__bg -->
                <div class="about__desc">
                    <div class="about__title title title_type_sub">
                        Ваш комфорт и чистота — главное для нас!
                    </div>
                    <!-- /.why-us__title -->

                    <div class="about__text">
                        <p>Мы в Qlean стремимся сделать услуги профессиональной уборки
                            доступными для широкой аудитории, а не роскошью для богатых.
                            Кроме этого, мы обеспечиваем работой проверенных специалистов,
                            которые любят и умеют заниматься уборкой. Связывая вас
                            и профессиональных клинеров, мы хотим помочь сделать
                            вашу квартиру еще уютнее по доступным ценам.</p>
                        <p>Мы в Qlean стремимся сделать услуги профессиональной уборки
                            доступными для широкой аудитории, а не роскошью для богатых.
                            Кроме этого, мы обеспечиваем работой проверенных специалистов,
                            которые любят и умеют заниматься уборкой. Связывая вас
                            и профессиональных клинеров, мы хотим помочь сделать
                            вашу квартиру еще уютнее по доступным ценам.</p>
                    </div>
                </div>
                <!-- /.why-us__desc -->
            </div>
            <!-- /.about about_clmn -->
        </div>
        <!-- /.about__wrapper -->

    </div>
    <!-- /.about about-page -->



    <section class="our-team">
        <div class="our-team__wrapper">
            <div class="our-team__text">
                <div class="our-team__title title title_color_white">
                    Команда Lime Cleaning
                </div>
                <!-- /.our-team__title -->
                <div class="our-team__block-text title_color_white">
                    Мы в Qlean стремимся сделать услуги профессиональной уборки
                    доступными для широкой аудитории, а не роскошью для богатых.
                    Кроме этого, мы обеспечиваем работой проверенных специалистов,
                    которые любят и умеют заниматься уборкой. Связывая вас
                    и профессиональных клинеров, мы хотим помочь сделать
                    вашу квартиру еще уютнее по доступным ценам.
                </div>
                <!-- /.our-team__block-text -->

                <div class="our-team__sign">
                    <i></i>
                    <!-- /.our-team__img -->
                    <div class="our__advantages">
                        Мы в используем только экологичные
                        чистящие средства профессиональной
                        доступными для широкой аудитории,
                        а не роскошью для богатых.
                    </div>
                    <!-- /.our__advantages -->
                </div>
                <!-- /.our__sign -->
            </div>
            <!-- /.our-team__text -->
        </div>
        <!-- /.static-wrapper -->
    </section>
    <!-- /.statistic -->

    <section class="worksteps worksteps_about_page">
        <h2 class="worksteps__title title">
            С нами просто работать
        </h2>
        <div class="step-wrapper">
            <div class="step">
                <div class="step__number"><span class="step__value">1</span></div>
                <div class="step__description">Сделайте заказ</div>
            </div>
            <!-- /.step -->
            <div class="step">
                <div class="step__number"><span class="step__value">2</span></div>
                <div class="step__description">Дождитесь клинера</div>
            </div>
            <!-- /.step -->
            <div class="step">
                <div class="step__number"><span class="step__value">3</span></div>
                <div class="step__description">Оплатите результат</div>
            </div>
            <!-- /.step -->
        </div>
        <!-- /.step-wrapper -->
        <div class="step__text">
            Мы в Qlean стремимся сделать услуги профессиональной уборки доступными
            для широкой аудитории, а не роскошью для богатых. Кроме этого, мы обеспечиваем
            работой проверенных специалистов, которые любят и умеют заниматься уборкой.
            Связывая вас и профессиональных клинеров, мы хотим помочь сделать вашу квартиру
            еще уютнее по доступным ценам.
        </div>
        <!-- /.step__text -->
        <div class="step__getorder">
            <a class="order step__btn" href="/">
                Заказать
            </a>
        </div>
        <!-- /.step step_getorder -->
    </section>
    <!-- /.work-step -->

@endsection