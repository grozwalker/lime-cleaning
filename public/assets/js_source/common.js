
var currentWidth = window.screen.availWidth;
var breakPoint = 768;
var breakPointD = 980;

$("#cleaning_date").datepicker({
    showOn: "both",
    buttonImage: 'img/calendar.png',
    dateFormat: 'dd.mm.y',
    minDate: new Date(),
    setDate: new Date()
});

$('.version__link').on('click', function (e) {

    $('.version__desc').slideDown('slow');
    e.preventDefault();

});

$('.version__close').on('click', function (e) {

    $('.version__desc').slideUp('slow');
    e.preventDefault();

});


/**
 * Заказы с внутренних страниц,
 * Переносим значение в инпут попапа
 **/

$(".order").on("click", function () {

    var el = $(this);
    var elementClick = el.attr("href").replace('#', '');
    var elDonor = el.closest('.dry-clean__block').find('.subclean_type_dry-clean .values-donor');
    var elementValue = elDonor.data('servicevalue') + ":" + elDonor.val();

    var inputValue = '';
    // Если донор - это составной чекбокс
    var $parentBlock = el.parent().prev();

    if ($parentBlock.hasClass('min-order-bl__btn-group')){
        $parentBlock.find('input:checked').each(function () {
            var dataValue = $(this).data('servicevalue');
            inputValue = inputValue + $(this).val() + ':' + dataValue + ';';
        });
        elementValue = inputValue;
    }

    var $tabsOrder = $('.tabs__orders');
    if ($tabsOrder.hasClass('get-value')){
        $tabsOrder.find('.services__input_type_checkbox').each(function () {
            var dataValue = $(this).data('servicevalue');
            inputValue = inputValue + $(this).val() + ':' + dataValue + ';';
        });
        elementValue = inputValue;
    }

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
        beforeSend: function () {
            $('.popup__body').html('Загрузка...');
        },
        success: function (data) {
            $('.popup__body').html(data);
        },
        error: function (xhr, str) {
            $('.popup__body').html('Произошла ошибка. Пожалуйста, попробуйте позже, либо свяжитесь с нами по телефону <a href="tel:+79883888336" class="footer-phone__link">+7 988 38 883 36</a>');
        },
        complete: function() {
            $('.popup__body').append('<a href="#" data-remodal-action="close" class="mainform-close get-clean close-modal">OK</a>');
        }
    });

}

$(".close-modal").on("click", function (e) {

    var inst = $.remodal.lookup[$('[data-remodal-id=mainform]').data('remodal')];
    inst.close();
    e.preventDefault();
});

