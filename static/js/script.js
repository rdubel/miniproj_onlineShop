
$(document).ready(function() {
    var cont = $("tbody")
    var panier = localStorage.getItem("panier");
    var panier_json = JSON.parse(panier);
    console.log(panier);

    $.ajax({
        url: 'https://codi-e-commerce.herokuapp.com/',
        type: 'GET',
        dataType: 'JSON',
        success: function(catalog, status) {
            function generateCart() {
                cont.empty();
                var heading = $("<tr id='label'><th>Item</th><th>QTY</th><th>Unit Price</th><th>Total Price</th></tr>");
                cont.append(heading);
                for (key in panier_json) {
                    var prod = catalog[key];
                    var prodrow = $("<tr data-id="+key+"></tr>");
                    var tdname = $("<td></td>").html(prod.name);
                    var minbtn = $("<button type='button' class='btn btn-default minus'>-</button>").click(function() {
                        var dID = $(this).parent().parent().data('id');
                        if (panier_json[dID] > 1) {
                            panier_json[dID]--
                            var upanier = JSON.stringify(panier_json)
                            localStorage.setItem("panier", upanier)
                        }
                        generateCart();
                    });
                    var qty = $("<span class='quantity'></span> ").html(panier_json[key]);
                    var plusbtn = $("<button type='button' class='btn btn-default plus'>+</button>").click(function() {
                        var dID = $(this).parent().parent().data('id');
                        panier_json[dID]++
                        var upanier = JSON.stringify(panier_json)
                        localStorage.setItem("panier", upanier)
                        generateCart();
                    });
                    var rmvbtn = $("<a href='#' class='btn btn-danger rmv'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>").click(function() {
                        var dID = $(this).parent().parent().data('id');
                        delete    panier_json[dID]
                        var upanier = JSON.stringify(panier_json)
                        localStorage.setItem("panier", upanier)
                        generateCart();
                    });
                    var tdqty = $("<td></td>").append(minbtn, qty, plusbtn, rmvbtn);
                    var uprice = $("<td></td>").addClass("uprice");
                    uprice.html(prod.price + " €");
                    var tprice = $("<td></td>").addClass('tprice');
                    tprice.html(prod.price * panier_json[key] + " €");
                    prodrow.append(tdname, tdqty, uprice, tprice);
                    cont.append(prodrow);
                }
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
            generateCart()
        }
    });






});
