<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <title>@yield('title')</title>
    <meta content="@yield('description')" name="description" />
    <meta content="@yield('keywords')" name="keywords" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/screen.css?version=8">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/jquery.remodal.css">

    <link rel="shortcut icon" href="favicon.png" />

</head>
<body>
<header class="header">
    <div class="logo">
        <a class="logo__link" href="/">
            <img src="/img/logo.svg" alt="Уборка квартир и домов в Краснодаре">
        </a>
    </div>
    <div class="t-r-wrapper">
        <div class="mobile-nav">
            <button class="mobile-nav__button">
                <div class="mobile-nav__stripes">
                    <span class="first-stripe"></span>
                    <span class="second-stripe"></span>
                    <span class="third-stripe"></span>
                </div>
                <!-- /.mobile-nav__stripes -->
            </button>
            <!-- /.mobile-nav__button -->
        </div>
        <!-- /.mobile-nav -->

        <nav class="top-nav">
            <ul class="nav">
                <li class="nav__item"><a class="nav__link" href="/">Главная</a></li>
                <li class="nav__item nav_has_child">
                    <a class="nav__link" href="#">Виды уборок</a>
                    <ul class="nav__sub sub-nav">
                        <li class="sub-nav__item">
                            <a href="cleanups" class="sub-nav__link">
                                Уборка квартир, домов, коттеджей
                            </a>
                            <!-- /.sub-nav__link --></li>
                        <!-- /.sub-nav__item -->
                        <li class="sub-nav__item">
                            <a href="dry-cleaning" class="sub-nav__link">
                                Химчистка
                            </a>
                        </li>
                        <!-- /.sub-nav__item -->
                        <li class="sub-nav__item">
                            <a href="outside" class="sub-nav__link">
                                Мойка окон, фасадов, витрин
                            </a>
                        </li>
                        <!-- /.sub-nav__item -->
                    </ul>
                    <!-- /.nav__sub sub-nav -->
                </li>
                <li class="nav__item"><a class="nav__link" href="work">Работа</a></li>
                <li class="nav__item"><a class="nav__link" href="equipment">Оборудование</a></li>
                <li class="nav__item"><a class="nav__link" href="blog">Блог</a></li>
                <li class="nav__item"><a class="nav__link" href="about">О нас</a></li>
            </ul>
        </nav>
        <!-- /.test -->
        <div class="phone">
            <a class="phone__number" href="tel:+79883888336">
                +7 988 38 883 36
            </a>
        </div>
    </div>
</header>

@yield('banner')

@yield('content')

<div class="communication">
		<span class="communication__text" >Вы можете связаться
				с нами через мессенджеры:</span>
    <!--<div class="clear"></div>-->
    <!-- /.clear -->
    <a class="communication__link communication_messenger" href="#"><span>Messanger</span></a>
    <a class="communication__link communication_telegram" href="#"><span>Telegram</span></a>
    <a class="communication__link communication_whatsapp" href="#"><span>WhatsApp</span></a>
</div>
<!-- /.communication -->

<footer class="footer">
    <div class="footer-wrapper">

        <div class="footer-nav">
            <ul class="nav">
                <li class="nav__item"><a class="nav__link" href="/about">О нас</a></li>
                <li class="nav__item"><a class="nav__link" href="/cleanups">Уборка квартир</a></li>
                <li class="nav__item"><a class="nav__link" href="/dry-cleaning">Химчистка</a></li>
                <li class="nav__item"><a class="nav__link" href="/outside">Мойка окон и витрин</a></li>
                <li class="nav__item"><a class="nav__link" href="/equipment">Оборудование</a></li>
                <li class="nav__item"><a class="nav__link" href="/work">Работа</a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <!-- /.clear -->
        <div class="social">
            <a href="#" class="social__link"><img src="img/icons/social/instagram.png" alt="" class="social__img"></a>
            <a href="#" class="social__link"><img src="img/icons/social/vkontakte.png" alt="" class="social__img"></a>
            <a href="#" class="social__link"><img src="img/icons/social/facebook.png" alt="" class="social__img"></a>
            <a href="#" class="social__link"><img src="img/icons/social/youtube.png" alt="" class="social__img"></a>
        </div>
        <!-- /.social -->

        <div class="footer-phone">
            <a href="tel:+79883888336" class="footer-phone__link">
                +7 988 38 883 36
            </a>
            <!-- /.footer-phone__link -->
        </div>
        <!-- /.footer footer_phone -->

        <div class="terms">
            © 2016, Lime Cleaning
        </div>
        <!-- /.terms -->


        <div class="r-footer-col">


        </div>
        <!-- /.r-footer-col -->
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=42703719&amp;from=informer"
           target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/42703719/3_0_86B762FF_86B762FF_1_pageviews"
                                               style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a>
        <!-- /Yandex.Metrika informer -->
    </div>
    <!-- /.footer-wrapper -->
</footer>
<!-- /.footer -->

@yield('popup')

<div class="pop-up mobile-nav-popup">
    <div class="pop-up__close mobile-nav-popup__close">

    </div>
    <!-- /.pop-up__close -->
    <div class="mobile-nav__wrap">
        <nav class="mobile-nav__links">
            <ul class="nav">
                <li class="nav__item"><a class="nav__link" href="/">Главная</a></li>
                <li class="nav__item"><a class="nav__link" href="/cleanups">Уборка квартир, домов, коттеджей</a></li>
                <li class="nav__item"><a class="nav__link" href="/dry-cleaning">Химчистка</a></li>
                <li class="nav__item"><a class="nav__link" href="/outside">Мойка окон, фасадов, витрин</a></li>
                <li class="nav__item"><a class="nav__link" href="/work">Работа</a></li>
                <li class="nav__item"><a class="nav__link" href="/equipment">Оборудование</a></li>
                <li class="nav__item"><a class="nav__link" href="/about">О нас</a></li>
            </ul>
        </nav>
        <div class="pop-up__bottom">
            <a href="tel:+79883888336" class="pop-up__link">
                +7 988 38 883 36
            </a>
        </div>
        <!-- /.pop-up__bottom -->
    </div>
    <!-- /.mobile-nav__wrap -->
</div>
<!-- /.pop-up mobile-nav-popup -->


<!--[if lt IE 9]>
<script src="js/libs/html5shiv/es5-shim.min.js"></script>
<script src="js/libs/html5shiv/html5shiv.min.js"></script>
<script src="js/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="js/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="js/libs/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<script src="js/libs/jquery-ui.min.js"></script>
<script src="js/libs/jquery.ui.datepicker-ru.js"></script>
<script src="js/libs/jquery.remodal.js"></script>
<script src="js/libs/jquery.simulate.js"></script>
<script src="js/libs/jquery.spincrement.min.js"></script>
<script src="js/scripts.js?version=8"></script>

<script>
    // Set CSRF token header to all ajax requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('page_scripts')

<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42703719 = new Ya.Metrika({
                    id:42703719,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42703719" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>

