/**
 * АНИМАЦИЯ ФОРМЫ
 */

function updateSelectList(el, options) {

    var $el = $(".cleaning-sort");
    $el.empty();

    $.each(options, function (key, value) {
        $el.append($("<option></option>")
            .attr("value", value).text(key));
    });
}

$('.type_flat input').on('click', function () {

    minimizeMainForm();
    flashSimpleFlat();

});

$('.type_house input').on('click', function () {

    minimizeMainForm();
    flashSimpleFlat();

});

$('.type_office input').on('click', function () {

    minimizeMainForm();
    flashSimpleFlat();

});

$('.type_stock input').on('click', function () {

    minimizeMainForm();
    flashSimpleStock();

});

$('.service_view_ironing input').on('click', function () {

    if ($(this).prop("checked")) {
        $('.ironing-time').show();
    } else {
        $('.ironing-time').hide();
    }

});

$('.ironing-time .subclean-type__label').on('click', function () {

    $('.ironing-time').hide();
    $('.service_view_ironing input').prop("checked", false);

});

$('.service_view_key input').on('click', function () {

    if ($(this).prop("checked")) {
        $('.delivery-key').show();
    }

});


$('.delivery-key__btn').on('click', function (e) {

    var el = $(this),
        popupWindow = el.parent(),
        textBox = popupWindow.find('.delivery-key__text');

    popupWindow.hide();

    $('.service_view_key input').data("servicevalue", textBox.val());

    additionalServiceCalc();

    e.preventDefault();
});

$('.service_view_window input').on('click', function () {

    if ($(this).prop("checked")) {
        $('.windows-quant').show();
    } else {
        $('.windows-quant').hide();
    }

});

$('.service_view_window .subclean-type__label').on('click', function () {

    $('.windows-quant').hide();
    $('.service_view_window input').prop("checked", false);

});


// Увеличиваем/уменьшаем значение в текстовых полях
$(".quant-button").on("click", function () {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // Не должно быть меньше нуля
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }

    $button.parent().find("input").val(newVal);

    return false;

});




$(".desctop-form .show_more").on("click", function () {

    $('.place_submit').append($('.desctop-form .get-clean'));
    return false;

});


$(".mobile-form .show_more").on("click", function () {

    $('.place_submit').append($('.mobile-form .get-clean'));
    return false;

});


$(".mobile-form .product-more_down-arrow").on("click", function () {

    $('.place_submit').append($('.mobile-form .get-clean'));
    return false;

});


$(".show_more").on("click", function () {

    expandMainForm();

    return false;
});


$(".show_less").on("click", function () {

    minimizeMainForm();

    return false;
});


$(".product-more_down-arrow").on("click", function () {

    expandMainForm();

    return false;
});


$(".product-more_up-arrow").on("click", function () {

    minimizeMainForm();

    return false;
});

function expandMainForm() {

    $(".additional-services").slideDown('slow');
    $(".show_more").hide();
    $(".product-more_down-arrow").hide();
    $(".extra-fields").prop("checked", true);
    $('html, body').animate({scrollTop: $('.additional-services').offset().top}, 500);

}

function minimizeMainForm() {

    $(".additional-services").slideUp("slow");
    $('.return_place_get-clean').append($('.place_submit').find('.main-form-order'));
    $(".product-more_down-arrow").hide();
    $(".show_more").show();
    $(".product-more_down-arrow").show();
    $(".desctop-form .type-subclean_kind_user-info").hide();
    $(".desctop-form .type-subclean_kind_adress").hide();
    $(".desctop-form .type_kind_area").hide();
    $(".desctop-form .type_kind_object").hide();

    /* Mobile version */
    $(".mobile-form .expand_label-group").hide();
    $(".extra-fields").prop("checked", false);
    $('html, body').animate({scrollTop: $('.banner').offset().top}, 500);

}


$('.mobile-nav-popup__close').on('click', function () {

    $('.mobile-nav-popup').hide('slow');

});

$('.mobile-nav__button').on('click', function () {

    $('.mobile-nav-popup').show('slow');

});


function refreshMobCleanType (list, direction, curValue, el, parent) {

    if (parent === undefined) {
        parent = 'rooms_number';
    }

    var newVal = 0;
    var keyEl = el.parent().find('.input-desc');
    var valEl = el.parent().find('.' + parent);

    switch (direction) {
        case 'next':
            newVal = Number(curValue) + 1;
            break;
        case 'prev':
            newVal = Number(curValue) - 1;
            break;
    }

    $.each(list, function (key, value) {
        if (value == newVal) {
            keyEl.html(key);
            valEl.val(value);
        }
    });

}

