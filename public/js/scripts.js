function order(){if($popupPhone=$("input[name=popup-phone]"),$popupDate=$("input[name=popup-date]"),$(".error").remove(),$hasError=!1,$popupPhone.removeClass("border_color_red"),$popupDate.removeClass("border_color_red"),0==$popupPhone.val()&&($popupPhone.before('<p class="error">Введите номер телефона</p>'),$popupPhone.addClass("border_color_red"),$hasError=!0),0==$popupDate.val()&&($popupDate.before('<p class="error">Введите дату уборки</p>'),$popupDate.addClass("border_color_red"),$hasError=!0),$hasError)return console.log("error"),!1;$(".hidden-phone").val($popupPhone.val()),$(".hidden-date").val($popupDate.val());$(".order-cleaning").serialize();return $(".desctop-form").submit(),!1}function updateSelectList(e,i){var n=$(".cleaning-sort");n.empty(),$.each(i,function(e,i){n.append($("<option></option>").attr("value",i).text(e))})}function expandMainForm(){$(".additional-services").slideDown("slow"),$(".show_more").hide(),$(".product-more_down-arrow").hide(),$(".extra-fields").prop("checked",!0),$("html, body").animate({scrollTop:$(".additional-services").offset().top},500)}function minimizeMainForm(){$(".additional-services").slideUp("slow"),$(".return_place_get-clean").append($(".place_submit").find(".main-form-order")),$(".product-more_down-arrow").hide(),$(".show_more").show(),$(".product-more_down-arrow").show(),$(".desctop-form .type-subclean_kind_user-info").hide(),$(".desctop-form .type-subclean_kind_adress").hide(),$(".desctop-form .type_kind_area").hide(),$(".desctop-form .type_kind_object").hide(),$(".mobile-form .expand_label-group").hide(),$(".extra-fields").prop("checked",!1),$("html, body").animate({scrollTop:$(".banner").offset().top},500)}function refreshMobCleanType(e,i,n,o,t){void 0===t&&(t="rooms_number");var a=0,r=o.parent().find(".input-desc"),c=o.parent().find("."+t);switch(i){case"next":a=Number(n)+1;break;case"prev":a=Number(n)-1}$.each(e,function(e,i){i==a&&(r.html(e),c.val(i))})}function additionalServiceCalc(e){var i=($(this),"");void 0===e?(e="",targetInput=".additional-fields"):targetInput=".additional-fields-"+e,$(targetInput).val(""),$(".additional-services input:checked").each(function(){var e=$(this).data("servicevalue");i=i+$(this).val()+":"+e+";"}),$(targetInput).val(i)}function flashSimpleFlat(){$(".type_kind_object").hide(),$(".type_kind_custom").hide(),$(".type_kind_area").hide(),updateSelectList($(this),simpleOptions),$(".type_kind_date").show(),$(".type_kind_phone").show(),$(".type_kind_rooms").show(),$(".type_kind_bathroom").show()}function flashSimpleStock(){$(".type_kind_object").hide(),$(".type_kind_custom").hide(),$(".type_kind_rooms").hide(),$(".type_kind_bathroom").hide(),updateSelectList($(this),stockOptions),$(".type_kind_date").show(),$(".type_kind_phone").show(),$(".type_kind_area").show()}var currentWidth=window.screen.availWidth,breakPoint=768,breakPointD=980;$("#cleaning_date").datepicker({showOn:"both",buttonImage:"img/calendar.png",dateFormat:"dd.mm.y"}),$(".version__link").on("click",function(e){$(".version__desc").slideDown("slow"),e.preventDefault()}),$(".version__close").on("click",function(e){$(".version__desc").slideUp("slow"),e.preventDefault()}),$(".order").on("click",function(){var e=$(this).attr("href").replace("#",""),i=$(this).closest(".dry-clean__block").find(".subclean_type_dry-clean .values-donor").val();$("input[name="+e+"]").val(i)}),$(".popup__body .get-clean").on("click",function(){order()}),$(".close-modal").on("click",function(e){var i=$.remodal.lookup[$("[data-remodal-id=mainform]").data("remodal")];i.close(),e.preventDefault()}),$(document).ready(function(){var e=!0,i=".statistic";$(window).on("scroll load resize",function(){if(!e)return!1;var n=$(window).scrollTop(),o=$(i).offset().top,t=$(window).height(),a=$(document).height(),r=$(i).outerHeight();(n+200>=o||t+n==a||r+o<t)&&($(".spincrement").spincrement({thousandSeparator:" ",duration:1500}),e=!1)})}),$(".type_flat input").on("click",function(){minimizeMainForm(),flashSimpleFlat()}),$(".type_house input").on("click",function(){minimizeMainForm(),flashSimpleFlat()}),$(".type_office input").on("click",function(){minimizeMainForm(),flashSimpleFlat()}),$(".type_stock input").on("click",function(){minimizeMainForm(),flashSimpleStock()}),$(".service_view_ironing input").on("click",function(){$(this).prop("checked")?$(".ironing-time").show():$(".ironing-time").hide()}),$(".ironing-time .subclean-type__label").on("click",function(){$(".ironing-time").hide(),$(".service_view_ironing input").prop("checked",!1)}),$(".service_view_key input").on("click",function(){$(this).prop("checked")&&$(".delivery-key").show()}),$(".delivery-key__btn").on("click",function(e){var i=$(this),n=i.parent(),o=n.find(".delivery-key__text");n.hide(),$(".service_view_key input").data("servicevalue",o.val()),additionalServiceCalc(),e.preventDefault()}),$(".service_view_window input").on("click",function(){$(this).prop("checked")?$(".windows-quant").show():$(".windows-quant").hide()}),$(".service_view_window .subclean-type__label").on("click",function(){$(".windows-quant").hide(),$(".service_view_window input").prop("checked",!1)}),$(".quant-button").on("click",function(){var e=$(this),i=e.parent().find("input").val();if("+"==e.text())var n=parseFloat(i)+1;else if(i>0)var n=parseFloat(i)-1;else n=0;return e.parent().find("input").val(n),!1}),$(".desctop-form .show_more").on("click",function(){return $(".place_submit").append($(".desctop-form .get-clean")),!1}),$(".mobile-form .show_more").on("click",function(){return $(".place_submit").append($(".mobile-form .get-clean")),!1}),$(".mobile-form .product-more_down-arrow").on("click",function(){return $(".place_submit").append($(".mobile-form .get-clean")),!1}),$(".show_more").on("click",function(){return expandMainForm(),!1}),$(".show_less").on("click",function(){return minimizeMainForm(),!1}),$(".product-more_down-arrow").on("click",function(){return expandMainForm(),!1}),$(".product-more_up-arrow").on("click",function(){return minimizeMainForm(),!1}),$(".mobile-nav-popup__close").on("click",function(){$(".mobile-nav-popup").hide("slow")}),$(".mobile-nav__button").on("click",function(){$(".mobile-nav-popup").show("slow")}),$(".subclean-type__elaboration .quant-button").on("click",function(){var e=$(this),i=e.parents(".icons-lists__item").find(".additional-services__input").data("servicevalue");"+"==e.text()?e.parents(".icons-lists__item").find(".additional-services__input").data("servicevalue",i+1):e.parents(".icons-lists__item").find(".additional-services__input").data("servicevalue",i-1),additionalServiceCalc()}),$(".subclean_type_dry-clean .quant-button").on("click",function(){var e=$(this),i=e.parents(".min-bl").find(".min-order-bl__input").data("servicevalue");"+"==e.text()?e.parents(".min-bl").find(".min-order-bl__input").data("servicevalue",i+1):e.parents(".min-bl").find(".min-order-bl__input").data("servicevalue",i-1),additionalServiceCalc()}),$(".additional-services__input").on("click",function(){additionalServiceCalc()}),$(".button-group__link").on("click",function(e){e.preventDefault();var i=$(this),n=$(".clean"),o=i.data("clean");i.addClass("link_active").siblings().removeClass("link_active"),n.filter(".cleane_tag_"+o).add(i).addClass("clean_visible_true").siblings().removeClass("clean_visible_true")}),$(".tabs__link").on("click",function(e){e.preventDefault();var i=$(this).closest(".tabs__control-item"),n=$(".tabs__desc"),o=i.data("content");n.filter(".tabs_content_"+o).add(i).addClass("tabs_active").siblings().removeClass("tabs_active")}),$(".min-bl").on("click",function(e){e.preventDefault(),$(this).toggleClass("min-bl_checked"),$(this).find(".min-order-bl__input").prop("checked")?$(this).find(".min-order-bl__input").prop("checked",!1):$(this).find(".min-order-bl__input").prop("checked",!0),additionalServiceCalc()});var simpleOptions={"Генеральная уборка":"1","Стандартная уборка (каждодневная)":"2","Уборка после ремонта":"3"},stockOptions={"Стандартная уборка (каждодневная)":"4","Уборка после ремонта":"5"};$(".type_other input").on("click",function(){minimizeMainForm(),updateSelectList($(this),customOptions),$(".type_kind_object").show(),$(".type_kind_rooms").hide(),$(".type_kind_bathroom").hide(),$(".type_kind_area").hide()});var customOptions={"Химчистка":"6","Стрижка газонов":"7","Мойка окон, фасадов, витрин":"8","Уборка прилегающей территории":"9","Удаление высолов":"10"};$(".order-cleaning .type_clean-choose .sort-button").on("click",function(){var e=$(this).parent().find(".rooms_number").val(),i=$(this);"+"==i.text()?refreshMobCleanType(mobileCleaningSort,"next",e,i):refreshMobCleanType(mobileCleaningSort,"prev",e,i)});var mobileCleaningSort={"Генеральная":"1","Стандартная":"2","После ремонта":"3"};$(".type_stockclean-choose .sort-button").on("click",function(){var e=$(this),i=e.parent().find(".stockclean_number").val();"+"==e.text()?refreshMobCleanType(mobileStockClean,"next",i,e,"stockclean_number"):refreshMobCleanType(mobileStockClean,"prev",i,e,"stockclean_number")});var mobileStockClean={"Стандартная":"4","После ремонта":"5"};$(".type_otherclean-choose .sort-button").on("click",function(){var e=$(this).parent().find(".other-clean-number").val(),i=$(this);"+"==i.text()?refreshMobCleanType(mobileOtherClean,"next",e,i,"other-clean-number"):refreshMobCleanType(mobileOtherClean,"prev",e,i,"other-clean-number")});var mobileOtherClean={"Химчистка":"6","Стрижка газонов":"7","Мойка окон, фасадов":"8","Уборка территории":"9","Удаление высолов":"10"};$(".order-cleaning .type-button").on("click",function(){var e=$(this),i=e.parent().find(".mobile_clean_type"),n=i.val();"+"==e.text()?refreshMobCleanType(mobileCleaningType,"next",n,e,"mobile_clean_type"):refreshMobCleanType(mobileCleaningType,"prev",n,e,"mobile_clean_type");var o=i.val();return o<4?($(".type_otherclean-choose").hide(),$(".type_kind_area").hide(),$(".type_stockclean-choose").hide(),$(".type_kind_rooms").show(),$(".type_kind_bathroom").show(),$(".type_clean-choose").show()):4==o?($(".type_otherclean-choose").hide(),$(".type_kind_rooms").hide(),$(".type_kind_bathroom").hide(),$(".type_clean-choose").hide(),$(".type_kind_area").show(),$(".type_stockclean-choose").show()):o>4&&($(".type_otherclean-choose").show(),$(".type_kind_rooms").hide(),$(".type_kind_bathroom").hide(),$(".type_clean-choose").hide(),$(".type_kind_area").hide(),$(".type_stockclean-choose").hide()),!1});var mobileCleaningType={"Квартира":"1","Дом":"2","Офис":"3","Склад":"4","Другое":"5"};$(".cleane_tag_outside .description__model .sort-button").on("click",function(){var e=$(this).parent().find(".description_mobile").val(),i=$(this);if("+"==i.text())refreshMobCleanType(mobileOutsideType,"next",e,i),$(".tabs__desc").eq(e).addClass("tabs_active").siblings().removeClass("tabs_active");else{refreshMobCleanType(mobileOutsideType,"prev",e,i);var n=$(this).parent().find(".description_mobile").val()-1;$(".tabs__desc").eq(n).addClass("tabs_active").siblings().removeClass("tabs_active")}});var mobileOutsideType={"Промышленный альпинизм":"1","С земли до 21м":"2","Мойка окон":"3","Мехрука":"4"};$(".cleane_tag_general .description__model .sort-button").on("click",function(){var e=$(this).parent().find(".description_mobile").val(),i=$(this);if("+"==i.text())refreshMobCleanType(mobileDescriptionType,"next",e,i),$(".tabs__desc").eq(e).addClass("tabs_active").siblings().removeClass("tabs_active");else{refreshMobCleanType(mobileDescriptionType,"prev",e,i);var n=$(this).parent().find(".description_mobile").val()-1;console.log("Val: "+n),$(".tabs__desc").eq(n).addClass("tabs_active").siblings().removeClass("tabs_active")}});var mobileDescriptionType={"Жилые комнаты":"1","Кухня":"2","Ванная и туалет":"3","Коридор":"4"};