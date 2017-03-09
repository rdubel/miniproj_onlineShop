$(document).ready(function() {
    var art;
    var img;
    var prodname;
    var prodesc;
    var price;
    var btn;
    var lel;

    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#", "");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
    catalog.sort(function() {
        return 0.5 - Math.random()
    });

    for (var i = 0; i < 4; i++) {
        var div = $("<div></div>").addClass("prods");
        var img = $("<img>").attr({
            src: catalog[i].thumb,
            alt: 'img' + i
        });
        var prodname = $("<h5></h5>").html(catalog[i].name);
        var prodesc = $("<p></p>").html(catalog[i].description.substr(0, 20) + "[...]");
        var price = $("<p></p>").html(catalog[i].price + "€")
        var btn = $("<button type='button' name='button' >Voir la page du produit</button>").addClass('')
        div.append(img, prodname, prodesc, price, btn);
        $(".top-products").append(div);
    }
    $('.sliderPres').slick();
    $('.top-products').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});
