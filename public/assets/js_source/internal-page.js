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