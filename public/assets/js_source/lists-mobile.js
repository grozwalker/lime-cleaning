/**
 * ИЗМЕНЕНИЯ СПИСКОВ В МОБИЛЬНОЙ ВЕРСИИ
 */


$(".order-cleaning .type_clean-choose .sort-button").on("click", function () {

    var curValue = $(this).parent().find('.rooms_number').val();
    var $button = $(this);

    if ($button.text() == "+") {
        refreshMobCleanType(mobileCleaningSort, 'next', curValue, $button);
    } else {
        refreshMobCleanType(mobileCleaningSort, 'prev', curValue, $button);
    }

});


var mobileCleaningSort = {
    "Генеральная": "1",
    "Стандартная": "2",
    "После ремонта": "3"
};


/**
 * Список уборки склада
 */
$(".type_stockclean-choose .sort-button").on("click", function () {

    var $button = $(this);
    var curValue = $button.parent().find('.stockclean_number').val();

    if ($button.text() == "+") {
        refreshMobCleanType(mobileStockClean, 'next', curValue, $button, 'stockclean_number');
    } else {
        refreshMobCleanType(mobileStockClean, 'prev', curValue, $button, 'stockclean_number');
    }

});

var mobileStockClean = {
    "Стандартная": "4",
    "После ремонта": "5"
};

/**
 * Список уборки другое
 */
$(".type_otherclean-choose .sort-button").on("click", function () {

    var curValue = $(this).parent().find('.other-clean-number').val();
    var $button = $(this);

    if ($button.text() == "+") {
        refreshMobCleanType(mobileOtherClean, 'next', curValue, $button, 'other-clean-number');
    } else {
        refreshMobCleanType(mobileOtherClean, 'prev', curValue, $button, 'other-clean-number');
    }

});

var mobileOtherClean = {
    "Химчистка": "6",
    "Стрижка газонов": "7",
    "Мойка окон, фасадов": "8",
    "Уборка территории": "9",
    "Удаление высолов": "10"
};




/**
 *
 */
$(".order-cleaning .type-button").on("click", function () {

    var $button = $(this),
        valElem = $button.parent().find('.mobile_clean_type'),
        curValue = valElem.val();

    if ($button.text() == "+") {
        refreshMobCleanType(mobileCleaningType, 'next', curValue, $button, 'mobile_clean_type');
    } else {
        refreshMobCleanType(mobileCleaningType, 'prev', curValue, $button, 'mobile_clean_type');
    }

    var newValue = valElem.val();

    if (newValue < 4) {
        $(".type_otherclean-choose").hide();
        $(".type_kind_area").hide();
        $(".type_stockclean-choose").hide();
        $(".type_kind_rooms").show();
        $(".type_kind_bathroom").show();
        $(".type_clean-choose").show();
    } else if (newValue == 4) {
        $(".type_otherclean-choose").hide();
        $(".type_kind_rooms").hide();
        $(".type_kind_bathroom").hide();
        $(".type_clean-choose").hide();
        $(".type_kind_area").show();
        $(".type_stockclean-choose").show();
    } else if (newValue > 4) {
        $(".type_otherclean-choose").show();
        $(".type_kind_rooms").hide();
        $(".type_kind_bathroom").hide();
        $(".type_clean-choose").hide();
        $(".type_kind_area").hide();
        $(".type_stockclean-choose").hide();
    }

    return false;

});

var mobileCleaningType = {
    "Квартира": "1",
    "Дом": "2",
    "Офис": "3",
    "Склад": "4",
    "Другое": "5"
};


$(".cleane_tag_outside .description__model .sort-button").on("click", function () {

    var curValue = $(this).parent().find('.description_mobile').val();
    var $button = $(this);

    if ($button.text() == "+") {
        refreshMobCleanType(mobileOutsideType, 'next', curValue, $button);

        $('.tabs__desc').eq(curValue)
            .addClass('tabs_active')
            .siblings()
            .removeClass('tabs_active');
    } else {
        refreshMobCleanType(mobileOutsideType, 'prev', curValue, $button);

        var Value = $(this).parent().find('.description_mobile').val() - 1;

        $('.tabs__desc').eq(Value)
            .addClass('tabs_active')
            .siblings()
            .removeClass('tabs_active');
    }


});

var mobileOutsideType = {
    "Промышленный альпинизм": "1",
    "С земли до 21м": "2",
    "Мойка окон": "3",
    "Мехрука": "4"
};



$(".cleane_tag_general .description__model .sort-button").on("click", function () {

    var curValue = $(this).parent().find('.description_mobile').val();
    var $button = $(this);

    if ($button.text() == "+") {
        refreshMobCleanType(mobileDescriptionType, 'next', curValue, $button);

        $('.tabs__desc').eq(curValue)
            .addClass('tabs_active')
            .siblings()
            .removeClass('tabs_active');
    } else {
        refreshMobCleanType(mobileDescriptionType, 'prev', curValue, $button);

        var Value = $(this).parent().find('.description_mobile').val() - 1;
        console.log('Val: ' + Value);
        $('.tabs__desc').eq(Value)
            .addClass('tabs_active')
            .siblings()
            .removeClass('tabs_active');
    }


});

var mobileDescriptionType = {
    "Жилые комнаты": "1",
    "Кухня": "2",
    "Ванная и туалет": "3",
    "Коридор": "4"
};



