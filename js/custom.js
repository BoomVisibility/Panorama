jQuery(function($) {
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  controls: false,
      pager: true,
	  auto: true,
	  mode: 'fade',
	  pause: 7000,
	  adaptiveHeight: false
  });
  
      $('.bxslider-testimonials').bxSlider({
	  controls: true,
      pager: true,
	  auto: true,
	  mode: 'fade',
	  pause: 10000,
	  nextSelector: '#slider-next',
	  prevSelector: '#slider-prev',
	  adaptiveHeight: false
  });

/*
    $('iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?rel=0&wmode=transparent");
    });
*/
    
    $('a[href$=".pdf"]').each(function() {
        $(this).prop('target', '_blank');
        });
        $('.entry-content a[href$=".pdf"]').each(function() {
        $(this).addClass('pdf');
    });
    
    $('#menu-primary-menu').slicknav({
			label: 'Menu',
			duration: 300,
			allowParentLinks: true,
			closedSymbol: '&#43;',
            openedSymbol: '&#8722;',
			prependTo:'#site-navigation'
	});
});


$(function() {
    //caches a jQuery object containing the header element
    var header = $(".global");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 163) {
            header.removeClass('larger').addClass("smaller");
        } else {
            header.removeClass("smaller").addClass('larger');
        }
    });
});

});

jQuery(function($) {

$(function()
    {
            overlayOn = function()
            {
                $( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
            },
            overlayOff = function()
            {
                $( '#imagelightbox-overlay' ).remove();
            },


            // ARROWS
            arrowsOn = function( instance, selector )
            {
            var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

                $arrows.appendTo( 'body' );

                $arrows.on( 'click touchend', function( e )
                {
                    e.preventDefault();

                    var $this   = $( this ),
                        $target = $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
                        index   = $target.index( selector );

                    if( $this.hasClass( 'imagelightbox-arrow-left' ) )
                    {
                        index = index - 1;
                        if( !$( selector ).eq( index ).length )
                            index = $( selector ).length;
                    }
                    else
                    {
                        index = index + 1;
                        if( !$( selector ).eq( index ).length )
                            index = 0;
                    }

                    instance.switchImageLightbox( index );
                    return false;
                });
            },
            arrowsOff = function()
            {
                $( '.imagelightbox-arrow' ).remove();
            },


// CAPTION

            captionOn = function()
            {
                var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
                if( description.length > 0 )
                    $( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
            },
            captionOff = function()
            {
                $( '#imagelightbox-caption' ).remove();
            };



        });


var selector = 'a[data-imagelightbox="f"]';
var instance = $( selector ).imageLightbox(
{
    selector:       'id="imagelightbox"',   // string
    allowedTypes:   'png|jpg|jpeg|gif',     // string;
    animationSpeed: 250,                    // integer;
    preloadNext:    true,                   // bool;            silently preload the next image
    enableKeyboard: true,                   // bool;            enable keyboard shortcuts (arrows Left/Right and Esc)
    quitOnEnd:      false,                  // bool;            quit after viewing the last image
    quitOnImgClick: false,                  // bool;            quit when the viewed image is clicked
    quitOnDocClick: true,                   // bool;            quit when anything but the viewed image is clicked
    onStart:        function(){ arrowsOn( instance, selector ); overlayOn(); },
    onEnd:          function(){ arrowsOff(); overlayOff(); captionOff(); },
    onLoadStart:    function(){ captionOff();  },
    onLoadEnd:      function(){ captionOn();  $( '.imagelightbox-arrow' ).css( 'display', 'block' );  }

});


});

