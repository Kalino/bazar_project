$(function () {
    $.nette.init();
    $("#frm-newSearchForm").animate({marginLeft:'150px'});
    $(".small_block").slideDown(); 
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


