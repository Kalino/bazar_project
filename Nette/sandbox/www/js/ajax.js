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

$('#frmregistrationForm-nick').blur(function(e) {
    var value;
    value = $('#frmregistrationForm-nick').val();
    $('#frmregistrationForm-nick').parent().append("<div id='usernick' class='reginfo'></div>");
    $.get("?name=" + value + "&do=user", function(data) {
        if (data == 'true') {
            $('#usernick').html("Používateľ s takýmto nickom už existuje");
            $('#usernick').css('color', 'red');
        } else {
            $('#usernick').html("Nick je v poriadku");
            $('#usernick').css('color', 'green');
        }
    });
});



$('#frmregistrationForm-mail').blur(function(e) {
    var value;
    value = $('#frmregistrationForm-mail').val();
    $('#frmregistrationForm-mail').parent().append("<div id='usermail' class='reginfo'></div>");
    $.get("?email=" + value + "&do=mail", function(data) {
        if (data == 'true') {
            $('#usermail').html("Používateľ s takýmto mailom už existuje");
            $('#usermail').css('color', 'red');
        } else {
            $('#usermail').html("");
        }
    });
});

$('.btn_remove').click(function(e) {
    e.preventDefault();
    var $this = $(this);
    var elementID = e.target.id;
    r = confirm("Naozaj chcete zmazať inzerát?");
    if (r == true) {
        $.get("?idcko=" + elementID + "&do=delete", function(data) {
        }).done(function(response) {
            $this.unbind('click').click();
        });
    }
});




