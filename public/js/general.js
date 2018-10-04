$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

  jQuery(document).ready(function($) {
 
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
});




/////////////////////////////////////

$(document).ready(function () {
    (function ($) {
        $('#noti').click(function () {

              var rex = new RegExp("Noticias", 'i');
              $('#buscar #busca-tra').hide();
              $('#buscar #busca-tra ').filter(function () {
                  return rex.test($(this).text());
              }).show();

        })
    }(jQuery));
});  



$(document).ready(function () {
    (function ($) {
        $('#todoC').click(function () {

              var rex = new RegExp("seguir", 'i');
              $('#buscar #busca-tra').hide();
              $('#buscar #busca-tra ').filter(function () {
                  return rex.test($(this).text());
              }).show();

        })
    }(jQuery));
});  

$(document).ready(function () {
    (function ($) {
        $('#tipC').click(function () {

              var rex = new RegExp("Tips", 'i');
              $('#buscar #busca-tra').hide();
              $('#buscar #busca-tra ').filter(function () {
                  return rex.test($(this).text());
              }).show();

        })
    }(jQuery));
});  


