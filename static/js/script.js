
$(document).ready(function() {
    var cont = $("tbody")
    var panier = localStorage.getItem("panier");
    var panier_json = JSON.parse(panier);
    console.log(panier);

    function generateCart() {
        var tstotal = $("<th colspan='3'><span class='pull-right'>Sub Total</span></th>")
        var stotal = $("<th></th>").addClass("subTotal")
        var ttva = $("<th colspan='3'><span class='pull-right'>TVA 20%</span></th>")
        var tva = $("<th></th>").addClass('tva')
        var tTotal = $("<th colspan='3'><span class='pull-right'>Total</span></th>")
        var total = $("<th></th>").addClass("total")
        var trSTotal = $("<tr></tr>").append(tstotal, stotal);
        var trTva = $("<tr></tr>").append(ttva, tva);
        var trTotal = $("<tr></tr>").append(tTotal, total)
        var sum = 0;
        $('.tprice').each(function(){
            sum += parseFloat($(this).text());
        });
        stotal.html(sum.toFixed(2) + " €");
        tva.html(((sum/100) * 20).toFixed(2) + " €");
        total.html(sum + parseFloat(tva.html()) + " €");
        var btns = $("<tr><td><a href='#' class='btn btn-primary'>Continue Shopping</a></td><td colspan='3'><a href='#' class='pull-right btn btn-success'>Checkout</a></td></tr>")
        cont.append(trSTotal, trTva, trTotal, btns);


    }

     $(".plus").click(function() {
        var idp = $(this).data("id");
        var qtty = $(this).prev().html()
        qtty++;
        var uprice = parseInt($(this).parent().next(".uprice").html());
        $(this).parent().next().next(".tprice").html(uprice * qtty + ' €');
        $(this).prev().html(qtty);
        $.post('update-cart.php', { product : idp, btn : "plus" }, function() {
            $('tbody > tr').slice(-4).remove();
            generateCart();
        });
     });
     $(".minus").click(function() {
        var idp = $(this).data("id");
        var qtty = $(this).next().html();
        if (qtty > 1) {
            qtty--;
            $.post('update-cart.php', { product : idp, btn : "minus" }, function() {
                $('tbody > tr').slice(-4).remove();
                generateCart();
            });
        }
        var uprice = parseInt($(this).parent().next(".uprice").html());
        $(this).parent().next().next(".tprice").html(uprice * qtty + ' €');
        $(this).next().html(qtty);

     });

    generateCart();


});
