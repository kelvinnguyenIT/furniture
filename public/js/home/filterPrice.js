function showProducts(minPrice, maxPrice) {
    $("#products li").hide().filter(function() {
        var price = parseInt($(this).data("price"), 10);
        return price >= minPrice && price <= maxPrice;
    }).show();
}

$(function() {
    var options = {
        range: true,
        min: 500000,
        max: 20000000,
        values: [500000, 20000000],
        slide: function(event, ui) {
            var min = ui.values[0],
                max = ui.values[1];

            $("#amountmin").text(min.toLocaleString('vi', {style : 'currency', currency : 'VND'}));
            $("#amountmax").text(max.toLocaleString('vi', {style : 'currency', currency : 'VND'}));

            $("#pricemin").val(min);
            $("#pricemax").val(max);
            showProducts(min, max);
        }
    }, min, max;

    $("#slider-range").slider(options);

    min = $("#slider-range").slider("values", 0);
    max = $("#slider-range").slider("values", 1);

    $("#amountmin").text(min.toLocaleString('vi', {style : 'currency', currency : 'VND'}));
    $("#amountmax").text(max.toLocaleString('vi', {style : 'currency', currency : 'VND'}));

    $("#pricemin").val(min);
    $("#pricemax").val(max);

    showProducts(min, max);
});
