$('.ajax').change(function (event){
    var $value;
    $value = $(".ajax").val();
    $.get("?value=" + $value + "&do=model", function(data){
         $("#frmnewSearchForm-model").html(data);
         $("#frmnewSearchForm-model").prop('disabled', false);
    });
});




