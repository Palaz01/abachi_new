


$(document).ready(function() {
  var owl = $('.owl-carousel');

  owl.owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
  	items: 1,
  	loop:true,
  	autoplay:true,
    autoplayTimeout:5000,
    margin: 0,
    responsiveClass:true,
    smartSpeed:400,
    nav: true,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  });


  owl.on('changed.owl.carousel', function(event) {
      var item = event.item.index - 2;     // Position of the current item
      $('h3').removeClass('animated fadeIn');
 $('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated fadeIn');
  });

  // Services page more/less

  // Configure/customize these variables.
    var showChar = 450;  // How many characters are shown by default
    var ellipsestext = "...";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + app_script_data.moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html( app_script_data.moretext );
        } else {
            $(this).addClass("less");
            $(this).html( app_script_data.lesstext );
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

});