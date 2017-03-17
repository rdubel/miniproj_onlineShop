$(document).ready(function() {

    var panierPanier_json = sessionStorage.getItem("panier");
    var panierPanier = JSON.parse(panierPanier_json)


    var tt =0
    for (var key in panierPanier) {
        var Qty = panierPanier[key]
        var maLigne = $('<tr></tr>');
        var maDesignPanier = $('<td>' + catalog[key].name + '</td>');
        var maQTY = $('<td class="text-right">'+'<button type="button" name="button" class="less">-</button>' + '<button type="button" name="button">'+Qty+'</button>'+ '<button type="button" name="button" class="more">+</button>'+'<button type="button" name="button" class="delete">'+'<i class="fa fa-trash" aria-hidden="true"></i>'+'</button>'+'</td>');


        var monPrixPanier = $('<td class="prix">' + catalog[key].price + ' €' + '</td>');

        totalP = (catalog[key].price* Qty)

        tt += totalP
        var totalPrice = $('<td>' +totalP + ' €' + '</td>')
        $("#lePanier").append(maLigne);
        maLigne.append(maDesignPanier);
        maLigne.append(maQTY);
        maLigne.append(monPrixPanier);
        maLigne.append(totalPrice);
    }
    // var totalDeuda +=parseInt($('.prix').html()) || 0;

    var totalLine = $('<tr></tr>');

    var total= $('<th colspan="3"></th>');

    var spanTotal = $("<span class='pull-right'>Total</span>");

    var totalPrice = $('<th>'+tt+' € </th>')

    $("#lePanier").append(totalLine);
    $(totalLine).append(total);
    $(total).append(spanTotal);
    $(totalLine).append(totalPrice);

    $('.delete').click(function() {

        $(this).parent().parent().remove();

    });
    $('.less').click(function() {

        console.log($(this).parent().parent().parent().parent())

        for (var key in panierPanier) {
            console.log(panierPanier[key]);
        }
    });

});
