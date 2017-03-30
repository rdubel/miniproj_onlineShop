$(document).ready(function() {

    $.ajax({
        url: 'https://codi-e-commerce.herokuapp.com/',
        type: 'GET',
        dataType: 'JSON',
        success: function (catalog, status) {
            for (var i in catalog) {
                    var art = $("<article></article>");
                    var img = $("<img>").attr({
                        src: catalog[i].thumb,
                        alt: 'img' + i
                    });
                    var prodname = $("<h5></h5>").html(catalog[i].name);
                    var prodesc = $("<p></p>").html(catalog[i].description.substr(0, 20) + "[...]");
                    var price = $("<p></p>").html(catalog[i].price + "€")
                    var btn = $("<a>Acheter</a>").attr({
                        class: 'btn',
                        href: 'file:///home/remy/Code/miniproj_onlineShop/produi1.html?nom=' + i
                    });
                    art.append(img, prodname, prodesc, price, btn);
                    $("#anch1").append(art);
            }
            $('#anch1').paginate({
                perPage: 12
            });
        }
    });


    $("#ex2").slider({});
    $("#ex2").change(function() {
        var values = $(this).val();
        var valarray = values.split(",")
        var params = {}
        params["min"] = valarray[0]
        params["max"] = valarray    [1]
        var pars = $.param(params);
        console.log(pars);
        var url= window.location.href;
        url += "?" + pars;
    });


    $('#chocoNoirs').addClass('active')
    $('#anch1').removeClass('cache')
    $('#anch1').addClass('montre')

});
