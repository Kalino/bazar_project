$('.ajax').change(function(event) {
    var $value;
    $value = $(".ajax").val();
    $.get("?value=" + $value + "&do=model", function(data) {
        $("#frmnewSearchForm-model").html(data);
        $("#frmnewSearchForm-model").prop('disabled', false);
    });
});

$('.hidden').change(function(e) {
    var elemID = e.target.id;
    var ID = elemID.substring(26);
    ID = parseInt(ID) + 1;
    if (ID > 9) {
        alert("Nahrali ste maximálny počet obrázkov");
    } else {
        var ret = '#' + elemID.substring(0, 26) + ID;
        $(ret).show()
    }
});




