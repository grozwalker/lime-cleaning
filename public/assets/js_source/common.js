
var currentWidth = window.screen.availWidth;
var breakPoint = 768;
var breakPointD = 980;

$("#cleaning_date").datepicker({

    showOn: "both",
    buttonImage: 'img/calendar.png',
    dateFormat: 'dd.mm.y'

});

$('.version__link').on('click', function (e) {

    $('.version__desc').slideDown('slow');
    e.preventDefault();

});

$('.version__close').on('click', function (e) {

    $('.version__desc').slideUp('slow');
    e.preventDefault();

});


/** Заказы с внутренних страниц **/

$(".order").on("click", function () {

    var elementClick = $(this).attr("href").replace('#', '');
    var elementValue = $(this).closest('.dry-clean__block').find('.subclean_type_dry-clean .values-donor').val();

    $('input[name=' + elementClick + ']').val(elementValue);

});


/*$(".main-form-order").on("click", function(e) {
 var msg   = $('.order-cleaning').serialize();
 $.ajax({
 type: 'POST',
 url: 'mail.php',
 data: msg,
 success: function(data) {
 //console.log($('.remodal-success').html());
 $('.modal-answear').html(data);

 //var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];

 // открыть модальное окно
 //inst.open();

 },
 error:  function(xhr, str){
 alert('Возникла ошибка: ' + xhr.responseCode);
 }
 });

 //$('.order-cleaning').submit();
 });*/


$(".popup__body .get-clean").on("click", function () {

    order();

});

//
function order() {

    $popupPhone = $('input[name=popup-phone]');
    $popupDate = $('input[name=popup-date]');

    $('.error').remove();
    $hasError = false;
    $popupPhone.removeClass('border_color_red');
    $popupDate.removeClass('border_color_red');

    if ($popupPhone.val() == 0) {
        $popupPhone.before('<p class="error">Введите номер телефона</p>');
        $popupPhone.addClass('border_color_red');

        $hasError = true;
    }

    if ($popupDate.val() == 0) {
        $popupDate.before('<p class="error">Введите дату уборки</p>');
        $popupDate.addClass('border_color_red');

        $hasError = true;
    }

    if ($hasError){
        console.log('error');
        return false;
    }

    $('.hidden-phone').val($popupPhone.val());
    $('.hidden-date').val($popupDate.val());

    var msg = $('.order-cleaning').serialize();
    $('.desctop-form').submit();
    return false;

    $.ajax({
        type: 'POST',
        url: '/order',
        data: msg,
        success: function (data) {

            $('.popup__body').html(data);
            $('.popup__body').append('<a href="#" data-remodal-action="close" class="mainform-close get-clean close-modal">OK</a>');

        },
        error: function (xhr, str) {
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });

}

$(".close-modal").on("click", function (e) {

    var inst = $.remodal.lookup[$('[data-remodal-id=mainform]').data('remodal')];
    inst.close();
    e.preventDefault();
});

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