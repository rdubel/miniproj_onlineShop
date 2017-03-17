$(document).ready(function() {

    for (var i = 0; i < catalog.length; i++) {
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
            href: 'file:///home/salwa/Code/miniproj_onlineShop/produi1.html?nom=' + i
        });
        art.append(img, prodname, prodesc, price, btn);
        $("#anch1").append(art);

    }
    

    $('#anch1').paginate({
        perPage: 12
    });

    $('#chocoNoirs').addClass('active')
    $('#anch1').removeClass('cache')
    $('#anch1').addClass('montre')

    $('#chocoNoirs').click(function() {
        $("section").addClass('cache')
        $("a").removeClass('active')
        $('#chocoNoirs').addClass('active')
        $('#anch1').removeClass('cache')
        $('#anch1').addClass('montre')

    });

    $('#chocoLait').click(function() {
        $("section").addClass('cache')
        $("a").removeClass('active')
        $('#chocoLait').addClass('active')
        $('#anch2').removeClass('cache')
        $('#anch2').addClass('montre')

    });
    $('#chocoBlanc').click(function() {
        $("section").addClass('cache')
        $("a").removeClass('active')
        $('#chocoBlanc').addClass('active')
        $('#anch3').removeClass('cache')
        $('#anch3').addClass('montre')

    });
    $('#nougats').click(function() {
        $("section").addClass('cache')
        $("a").removeClass('active')
        $('#nougats').addClass('active')
        $('#anch4').removeClass('cache')
        $('#anch4').addClass('montre')

    });
    $('#offrets').click(function() {
        $("section").addClass('cache')
        $("a").removeClass('active')
        $('#offrets').addClass('active')
        $('#anch5').removeClass('cache')
        $('#anch5').addClass('montre')

    });
    $('#paques').click(function() {
        $("section").addClass('cache')
        $("a").removeClass('active')
        $('#paques').addClass('active')
        $('#anch6').removeClass('cache')
        $('#anch6').addClass('montre')

    });

});
