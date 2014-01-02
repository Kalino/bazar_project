$(function () {
    $.nette.init();
    $("#frm-newSearchForm").animate({marginLeft:'150px'});
    $(".small_block").slideDown(600); 
});

$('#{$control["newSearchForm"][$input]->htmlId}').on('change', function() {
    $.nette.ajax({
        type: 'GET',
        url: '{link {$link}!}',
        data: {
            'value': $(this).val(),
        }
    });
});

function ShowLoginDiv() {
    $("#id_login").toggle('fast');
    $("#frmnewLoginForm-name").focus();
}

function ShowLoginDivSmall(){
    $("#id_login_small").toggle('slow');
//    if($("#id_login_small").css("display") == 'none'){
//        $("#id_login_small").slideDown('slow');
//    }
//    else{
//        $("#id_login_small").slideUp('slow');
//    }
    $("#frmnewLoginForm-name").focus();
}

function ShowSmallMenu(){
    $("#small_menu").toggle('slow');
    //    if($("#small_menu").css("display") == 'none'){
//        $("#small_menu").slideDown('slow');
//    }
//    else{
//        $("#small_menu").slideUp('slow');
//    }
}
