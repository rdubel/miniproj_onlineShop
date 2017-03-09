$(document).ready(function(){

    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
    $('.sliderPres').slick();


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

    $('#myCarousel').carousel({
               interval: 5000
       });

       $('#carousel-text').html($('#slide-content-0').html());

       //Handles the carousel thumbnails
      $('[id^=carousel-selector-]').click( function(){
           var id = this.id.substr(this.id.lastIndexOf("-") + 1);
           var id = parseInt(id);
           $('#myCarousel').carousel(id);
       });


       // When the carousel slides, auto update the text
       $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
               $('#carousel-text').html($('#slide-content-'+id).html());
       });

    $('.sliderPres').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
    });
});
