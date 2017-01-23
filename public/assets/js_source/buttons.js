/**
 * НАЖАТИЯ НА КНОПКИ РАСЧЕТА ИЛИ ПЕРЕКЛЮЧЕНИЯ ЗАНЧЕНИЙ
 */


/**
 * Кнопки доп услуг и автоматического перерасчета строки для отправки формы
 */
$(".subclean-type__elaboration .quant-button").on("click", function () {

    var $button = $(this);
    var curDataValue = $button.parents('.icons-lists__item').find('.additional-services__input').data('servicevalue');

    if ($button.text() == "+") {
        $button.parents('.icons-lists__item').find('.additional-services__input').data('servicevalue', curDataValue + 1);
    } else {
        $button.parents('.icons-lists__item').find('.additional-services__input').data('servicevalue', curDataValue - 1);
    }

    additionalServiceCalc();
});


$(".subclean_type_dry-clean .quant-button").on("click", function () {

    var $button = $(this);
    var curDataValue = $button.parents('.min-bl').find('.min-order-bl__input').data('servicevalue');

    if ($button.text() == "+") {
        $button.parents('.min-bl').find('.min-order-bl__input').data('servicevalue', curDataValue + 1);
    } else {
        $button.parents('.min-bl').find('.min-order-bl__input').data('servicevalue', curDataValue - 1);
    }

    additionalServiceCalc();
});


$(".additional-services__input").on("click", function () {

    additionalServiceCalc();

});

/**
 * Удаляет все данные из скрытого поля и заново переращитывает
 * все чекнутые элементы
 */
function additionalServiceCalc(inputName) {

    var el = $(this),
        inputValue = '';

    if (inputName === undefined) {
        inputName = '';
        targetInput = '.additional-fields';
    } else {
        targetInput = '.additional-fields-' + inputName;
    }

    $(targetInput).val('');

    $('.additional-services input:checked').each(function () {
        var dataValue = $(this).data('servicevalue');
        inputValue = inputValue + $(this).val() + ':' + dataValue + ';';
    });

    $(targetInput).val(inputValue);
}