/**
 * ИЗМЕНЕНИЕ СПИСКОВ В ДЕСКТОПНОЙ ВЕРСИИ
 */

function flashSimpleFlat() {

    $('.type_kind_object').hide();
    $('.type_kind_custom').hide();
    $('.type_kind_area').hide();
    updateSelectList($(this), simpleOptions);
    $('.type_kind_date').show();
    $('.type_kind_phone').show();
    $('.type_kind_rooms').show();
    $('.type_kind_bathroom').show();

}


var simpleOptions = {
    "Генеральная уборка": "1",
    "Стандартная уборка (каждодневная)": "2",
    "Уборка после ремонта": "3"
    /*"Уборка квартиры к рождению ребенка": "Babyclean"*/
};


function flashSimpleStock() {

    $('.type_kind_object').hide();
    $('.type_kind_custom').hide();
    $('.type_kind_rooms').hide();
    $('.type_kind_bathroom').hide();
    updateSelectList($(this), stockOptions);
    $('.type_kind_date').show();
    $('.type_kind_phone').show();
    $(".type_kind_area").show();

}


var stockOptions = {
    "Стандартная уборка (каждодневная)": "4",
    "Уборка после ремонта": "5"
};

/** Нажали на кнопку другое**/
$('.type_other input').on('click', function () {

    minimizeMainForm();
    updateSelectList($(this), customOptions);

    $('.type_kind_object').show();
    $('.type_kind_rooms').hide();
    $('.type_kind_bathroom').hide();
    $(".type_kind_area").hide();

});


var customOptions = {
    "Химчистка": "6",
    "Стрижка газонов": "7",
    "Мойка окон, фасадов, витрин": "8",
    "Уборка прилегающей территории": "9",
    "Удаление высолов": "10"
};