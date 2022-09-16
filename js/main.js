// [^o^]<Aquí nuestros scripts chulos!


// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
// PLAY VÍDEOS
// -------------------------------------------------------------------------------------------------------

// Single

var url = $('.single-videos .contenedor-iframe iframe').attr('src'); // pasamos en una variable la url inicial del src del iframe de Vimeo

$('.cartela__play').click(function() {
	$('.single-videos .contenedor-iframe iframe').attr("id","vimeoplayer");
	$('.single-videos .contenedor-iframe iframe').attr('src', url+"&autoplay=1&player_id=vimeoplayer" ); // añadimos "&autoplay=1" al final de la url del src del iframe de Vimeo
	$('.single-videos .cartela').addClass('ocultar');
	$('.single-videos .video').addClass('full');
	$("#vimeoplayer").on("finish", function(){
		$( ".single-videos .footer" ).addClass('down');
		setTimeout(function(){
			var urlProx = $('.otros_proyectos .prev-posts a').attr('href');
			window.location.href = urlProx;
		}, 1000);
    });
});
$('.video__cerrar').click(function() {
	// script para detener iframe (realmente lo carga de nuevo)
	// Fuente: http://jsfiddle.net/JxBE4/
	vimeoWrap = $('.single-videos .contenedor-iframe');
   	vimeoWrap.html( vimeoWrap.html() );

   	$('.single-videos .contenedor-iframe iframe').attr('src', url ); // volvemos a usar como src del iframe la url inicial (sin autoplay)

	$('.single-videos .cartela').removeClass('ocultar');
	$('.single-videos .video').removeClass('full');
});

// Archive

$(document).on("mouseenter",  ".post-type-archive-videos .imagen", function() {
	var url_iframe =  $(this).find( "iframe" ).attr('src'); // pasamos en una variable la url inicial del src del iframe de Vimeo

	$(this).find( "iframe" ).attr('src', url_iframe+"&autoplay=1" ); // añadimos "&autoplay=1" al final de la url del src del iframe de Vimeo
});

$('.post-type-archive-videos .imagen').click(function(){
		var url_post = $(this).find( "a" ).attr('href'); // pasamos en una variable la url del link al vídeo individual
		window.location.href = url_post;
});

/*$( ".post-type-archive-videos .imagen" ).mouseleave(function() {
	var contenedor_iframe = $(this).find( ".contenedor-iframe" );

	function stopvideo(){
		vimeoWrap = contenedor_iframe;
	   	vimeoWrap.html( vimeoWrap.html() );
	}

	setTimeout(stopvideo, 700);
});*/
$(document).ready(function(){
	$.fn.randomize = function (selector) {
    var $elems = selector ? $(this).find(selector) : $(this).children(),
        $parents = $elems.parent();

    $parents.each(function () {
        $(this).children(selector).sort(function (childA, childB) {
            // * Prevent last slide from being reordered
            if($(childB).index() !== $(this).children(selector).length - 1) {
                return Math.round(Math.random()) - 0.5;
            }
        }.bind(this)).detach().appendTo(this);
    });

    return this;
	};
			$('.slider').randomize().slick({
				arrows: false,
				dots: true,
				fade: true,
				speed: 900,
				customPaging : function(slider, i) {
			        var thumb = $(slider.$slides[i]).data('thumb');
			        var text = $(slider.$slides[i]).data('text');
			        return '<a><span><h6 class="centrado">'+text+'</h6><img src="'+thumb+'"></span><div class="linea"></div></a>';
			    },
			});


			$('.slider').init(function(slick){
				setTimeout(function(){
					var $current = $(".slider .slick-active");
					var urlIframe = $current.find( "iframe" ).attr('src');
					$current.find( "iframe" ).attr('src', urlIframe+"?autoplay=1&loop=1" ); // añadimos "&autoplay=1" al final de la url del src del
					var $video = $current.find( "video[autoplay]" );

					setTimeout(function(){
						$video.each(function(){this.play();});
						$current.find( "img" ).fadeOut(400);
					}, 3000);
				}, 1000);
			});

			$('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
				var $next = $(".slider .slick-slide[data-slick-index='" + nextSlide + "']");
				var urlIframe = $next.find( "iframe" ).attr('src');
				$(".slider .slick-slide img").show();
				$next.find( "iframe" ).attr('src', urlIframe+"?autoplay=1&loop=1" ); // añadimos "&autoplay=1" al final de la url del src del
				var $video = $next.find( "video[autoplay]" );

				setTimeout(function(){
					$video.each(function(){this.play();});
					$next.find( "img" ).fadeOut(400);
				}, 3000);
			});

			$('.slick-dots li a').click(function() {
				//vimeoWrap = $('.home .contenedor-iframe');
			   	//vimeoWrap.html( vimeoWrap.html() );

			   	// Animación del título del vídeo en Slider Home //
				// Wrap every letter in a span
				$('.ml11 .letters').each(function(){
				  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
				});

				anime.timeline()
				  .add({
				    targets: '.ml11 .line',
				    scaleY: [0,1],
				    opacity: [0.5,1],
				    easing: "easeOutExpo",
				    duration: 700
				  })
				  .add({
				    targets: '.ml11 .line',
				    translateX: [0,$(".ml11 .letters").width()],
				    easing: "easeOutExpo",
				    duration: 700,
				    delay: 100
				  }).add({
				    targets: '.ml11 .letter',
				    opacity: [0,1],
				    easing: "easeOutExpo",
				    duration: 600,
				    offset: '-=775',
				    delay: function(el, i) {
				      return 34 * (i+1)
				    }
				  }).add({
				    targets: '.ml11',
				    opacity: 1,
				    duration: 1000,
				    easing: "easeOutExpo",
				    delay: 1000
				  });
			});

			$('.slider-works').slick({
				arrows: true,
				dots: false,
				fade: true,
				speed: 900,
				autoplay: true,
				autoplaySpeed: 2000,
			});

    $(".post-type-archive-studio .mobmenu-right-bt img, .single-studio .mobmenu-right-bt img").attr("src","https://www.icecreampictures.tv/wp-content/uploads/2019/03/hamburger-menu-black.png");


});
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
// BOTÓN REDES (HOME)
// -------------------------------------------------------------------------------------------------------
$('.compartir').click(function(){
	$('.home .redes').toggleClass('abierto');
});

// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
// ACTIVAR AL HACER SCROLL
// Fuente: https://www.sitepoint.com/scroll-based-animations-jquery-css3/
// -------------------------------------------------------------------------------------------------------

$(document).ready(function(){
    var $animation_elements = $('.animation-element');
	var $window = $(window);

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

	  $.each($animation_elements, function() {
	    var $element = $(this);
	    var element_height = $element.outerHeight();
	    var element_top_position = $element.offset().top;
	    var element_bottom_position = (element_top_position + element_height);

	    //check to see if this current container is within viewport
	    if ((element_bottom_position >= window_top_position) &&
	      (element_top_position <= window_bottom_position)) {
	      $element.addClass('in-view');
	    } else {
	      $element.removeClass('');
	    }
	  });
	}

	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
})

// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
// FOOTER SINGLE VIDEOS
// -------------------------------------------------------------------------------------------------------
$(document).ready(function(){
	$('.single-videos .footer').addClass('up');
});

// Animación del título del vídeo en Slider Home //
// Wrap every letter in a span
$('.ml11 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\&|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline()
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0,$(".ml11 .letters").width()],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: function(el, i) {
      return 34 * (i+1)
    }
  }).add({
    targets: '.ml11',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

