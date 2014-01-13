$("#slideryear").rangeSlider({
    bounds: {min: 1995, max: 2014},
    defaultValues: {min: 2005, max: 2013},
    step: 1
});

$("#sliderprice").rangeSlider({
    bounds: {min: 0, max: 50000},
    defaultValues: {min: 5000, max: 15000},
    step: 1000
});

$("#frmshortSearchForm-search").click(function() {
    var year = $("#slideryear").rangeSlider("values");
    $("#frmshortSearchForm-yearfrom").val(year.min);
    $("#frmshortSearchForm-yearto").val(year.max);
    var price = $("#sliderprice").rangeSlider("values");
    $("#frmshortSearchForm-pricefrom").val(price.min);
    $("#frmshortSearchForm-priceto").val(price.max);
});

function vypis() {
    var basicValues = $("#slider").rangeSlider("values");
    alert(basicValues.min);
}
;

var basicSliderBounds = $("#slider").rangeSlider("bounds");
console.log(basicSliderBounds.min + " " + basicSliderBounds.max);
