$(document).ready(function() {

    var id = GET_PARAM("nom");
    console.log(catalog[id]);
    var cont = $(".carousel-inner")

    var img = $("<img>").attr({
        src: catalog[id].pictures[0],
        alt: 'img1'
    });
    var divimg = $("<div></div>").attr({
        class: 'active item',
        dataSlideNumber: 0
    });
    divimg.append(img);
    cont.append(divimg)

    for (var i = 1; i < catalog[id].pictures.length; i++) {
        var img = $("<img>").attr({
            src: catalog[id].pictures[i],
            alt: 'img' + i
        });
        var divimg = $("<div></div>").attr({
            class: 'item',
            dataSlideNumber: i
        });
        divimg.append(img);
        cont.append(divimg)

    }

    for (var i = 0; i < catalog[id].pictures.length; i++) {
        var thumbli = $("<li></li>").attr({
            class: 'col-sm-1'
        });
        var alink = $("<a></a>").attr({
            class: 'thumbnail',
            id: 'carousel-selector-' + i
        });
        var thumbimg = $("<img>").attr({
            src: catalog[id].pictures[i]
        });
        alink.append(thumbimg);
        thumbli.append(alink);
        $(".hide-bullets").append(thumbli)
    }

    $("h2").html(catalog[id].name)
    $("h3").html("Quantitée : " + catalog[id].quantity)
    $("h4").html("Prix : " + catalog[id].price + "€")
    $(".descp").html(catalog[id].description)

    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function(e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
    });



    $('#myCarousel').carousel({
        interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function() {
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        $('#myCarousel').carousel(id);
    });



});
