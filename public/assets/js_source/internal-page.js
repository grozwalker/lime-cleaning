/**
 * СКРИПТЫ ВНУТРЕННИХ СТРАНИЦ
 */

/**
 * Переключение на странице видов уборки квартиры
 */
$('.button-group__link').on('click', function (e) {

    e.preventDefault();

    var item = $(this),
        contentItem = $('.clean'),
        dataItem = item.data('clean');

    item
        .addClass('link_active')
        .siblings()
        .removeClass('link_active');

    contentItem.filter('.cleane_tag_' + dataItem)
        .add(item)
        .addClass('clean_visible_true')
        .siblings()
        .removeClass('clean_visible_true');

    if (dataItem == 'repairs'){
        contentItem.filter('.cleane_tag_repairs')
            .find('.tabs__orders')
            .addClass('get-value');
    } else {
        contentItem.filter('.cleane_tag_repairs')
            .find('.tabs__orders')
            .removeClass('get-value');
    }

});


/**
 *  Переключение между табами на странице уборки квартир
 */

$('.tabs__link').on('click', function (e) {

    e.preventDefault();

    var item = $(this).closest('.tabs__control-item'),
        contentItem = $('.tabs__desc'),
        dataItem = item.data('content');

    contentItem.filter('.tabs_content_' + dataItem)
        .add(item)
        .addClass('tabs_active')
        .siblings()
        .removeClass('tabs_active');

});


/**
 * Рамка при нажатии на кнопку выбора фурнитуры
 */


$('.min-bl').on('click', function (e) {

    e.preventDefault();
    $(this).toggleClass('min-bl_checked');

    if ($(this).find('.min-order-bl__input').prop('checked')) {
        $(this).find('.min-order-bl__input').prop('checked', false);
    } else {
        $(this).find('.min-order-bl__input').prop('checked', true);
    }

    additionalServiceCalc();

});


$('.get-work').on('click', function (e) {

    e.preventDefault();

    $userPhone = $('#user-phone');
    $userName = $('#user_name');
    $citizen = $('#citizen');
    $age = $('#year-birth');

    $('.error').remove();
    $hasError = false;

    $userPhone.removeClass('border_color_red');
    $userName.removeClass('border_color_red');
    $citizen.removeClass('border_color_red');
    $age.removeClass('border_color_red');

    if ($userPhone.val() == 0) {
        $userPhone.after('<p class="error">Введите номер телефона</p>');
        $userPhone.addClass('border_color_red');

        $hasError = true;
    }

    if ($userName.val() == 0) {
        $userName.after('<p class="error">Введите ФИО</p>');
        $userName.addClass('border_color_red');

        $hasError = true;
    }

    if ($citizen.val() == 0) {
        $citizen.after('<p class="error">Введите Ваше гражданство</p>');
        $citizen.addClass('border_color_red');

        $hasError = true;
    }

    if ($age.val() == 0) {
        $age.after('<p class="error">Введите дату рождения</p>');
        $age.addClass('border_color_red');

        $hasError = true;
    }

    if ($hasError){
        console.log('error');
        return false;
    }

    var msg = $('.work-form').serialize();

    $.ajax({
        type: 'POST',
        url: '/work',
        data: msg,
        beforeSend: function () {
            $('[data-remodal-id=work-alert]').remodal().open();
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

});


$('.dryclean_order').on('click', function (e) {

    e.preventDefault();

    $form = $(this).parent('form');
    $userPhone = $form.find('#user-phone');
    $date = $form.find('#cleaning_date');

    $('.error').remove();
    $hasError = false;

    $userPhone.removeClass('border_color_red');
    $date.removeClass('border_color_red');

    if ($userPhone.val() == 0) {
        $userPhone.before('<p class="error">Введите номер телефона</p>');
        $userPhone.addClass('border_color_red');

        $hasError = true;
    }

    if ($date.val() == 0) {
        $date.before('<p class="error">Введите номер телефона</p>');
        $date.addClass('border_color_red');

        $hasError = true;
    }

    if ($hasError){
        return false;
    }
    console.log('save');
    var msg = $('.order-cleaning').serialize();
    $form.submit();
    return false;

});