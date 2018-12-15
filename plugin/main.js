/**
 * Custom JS
 */

 ; (function ($) {
 	'use strict'

// preloader
  var PreLoader = (function() {
        $('.animsition').animsition({
            // loadingClass: 'loader',
            inDuration: 900,
            outDuration: 500,
            linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([href^="javascript:void(0);"])',
        });
  });


// animation scroll page
  var AnimationScrollPage = (function() {
        $('.animation').waypoint(function (direction) {
            $(this).addClass('animation-active');
        }, {
            offset: '100%',
            triggerOnce: true
        });
  });




// count to
  var CountTo = (function() {
        var itemCount = $('.vk-counter .number-count');
        $(itemCount).waypoint({
            handler: function (direction) {
                $(this.element).countTo({
                    from: 0,
                    speed: 2000,
                    refreshInterval: 50,
                    formatter: function (value, options) {
                        return numeral(value).format('0,0');
                    }
                });
            },
            offset: '100%',
            triggerOnce: true,
        });
  });




// parallax background
  var ParallaxBackground = (function() {
        $('.vk-parallax').attr('data-stellar-background-ratio', '0.1');
        $.stellar({
            verticalOffset: 1,
            horizontalScrolling: false,
        });
  });






// masonry item



    var MasonryItem = (function() {

    var masonry_item = ['.vk-masonry-layout',];
    var slider_filter = ['.vk-slider-filter',];
    var listFilterFix = ['.vk-filter-fix']

    var buttonFilter = '.vk-filter';
    var buttonFilterDefault = '.vk-filter-button';
    var buttonFilterFix = '.vk-filter-button-fix';



        $('.slick-slider-homepage').slick({
            nextArrow: '<button  class="vk-btn vk-arrow next"><i class="fa fa-chevron-right"></i></button>',
            prevArrow: '<button  class="vk-btn vk-arrow prev"><i class="fa fa-chevron-left"></i></button>',
            slidesToShow: 3,
            rows: 2,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: false,
                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                    }
                }, {

                    breakpoint: 768,
                    settings: "unslick",

                }],
        });




        $(slider_filter.toString()).isotope({
            filter: '.all',
        });


        $(buttonFilterDefault)
            .on('click', ' li', function () {
                var filterValue = $(this).attr('data-filter');
                $(slider_filter.toString()).isotope({
                    filter: filterValue,
                });

                return false;
            });




        var currentWidth = $(window).outerWidth();

        if (currentWidth > 992 && $('.vk-slider-what-we-do.slick-slider').length == 0) {
            $('.vk-slider-what-we-do.vk-filter-fix').isotope('destroy');
            $('.vk-slider-what-we-do').removeClass('vk-filter-fix');

            $('.vk-slider-what-we-do .item').css('display', 'block');
            $('.vk-slider-what-we-do').slick({
                nextArrow: '<button  class="vk-btn vk-arrow next"><i class="fa fa-chevron-right"></i></button>',
                prevArrow: '<button  class="vk-btn vk-arrow prev"><i class="fa fa-chevron-left"></i></button>',
            });
        }

        if (currentWidth < 992 && $('.vk-slider-what-we-do.vk-filter-fix').length == 0) {
            if ($('.vk-slider-what-we-do.slick-slider').length == 1) {
                $('.vk-slider-what-we-do').slick('destroy');
            }

            $('.vk-slider-what-we-do').addClass('vk-filter-fix');


        }


        $(listFilterFix.toString()).isotope({
            filter: '.first',
        });

        $(buttonFilterFix)
            .on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                $(listFilterFix.toString()).isotope({
                    filter: filterValue,
                });

                return false;
            })
            .on('change', function () {
                // get filter value from option value
                var filterValue = this.value;
                $(listFilterFix.toString()).isotope({
                    filter: filterValue,

                });

                return false;
            });




        for (var i = 0; i < masonry_item.length; i++) {

            $(masonry_item[i]).isotope({
                // options...
                itemSelector: '.item',
                masonry: {
                    columnWidth: '.item',
                }
            });
        }




        //filter items on button click
        $(buttonFilterDefault)
            .on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                //console.log(filterValue);
                $(masonry_item.toString()).isotope({
                    filter: filterValue,

                });

                return false;
            })

            .on('change', function () {
                // get filter value from option value
                var filterValue = this.value;
                $(masonry_item.toString()).isotope({
                    filter: filterValue,

                });

                return false;
            });



        $(buttonFilter).find('li:first-child').addClass('active');
        $(buttonFilter).on('click', 'li', function (e) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            return false;
        });

  });




// google maps

    var initMap = (function() {
    var myLatLng = {lat: 38.5397102, lng: -93.6881803};
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 4
    });
    // Create a marker and set its position.
    var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'WICON!'
    });
  });











// input file
var InputFile = function () {
    var _initInstances = function () {
        var inputs = document.querySelectorAll('.vk-input-file');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });

            // Firefox bug fix
            input.addEventListener('focus', function () {
                input.classList.add('has-focus');
            });
            input.addEventListener('blur', function () {
                input.classList.remove('has-focus');
            });
        });
    }
    return {
        init: function () {
            _initInstances();
        }
    };
}();







// menu mobile
var MenuMobile = function () {
    var _initInstances = function () {

        $('#menu').slicknav({
            label: '.vk-navbar-toggle',
            duration: 500,
            prependTo: 'section'
        });
    };
    return {
        init: function () {
            _initInstances();
        }
    };
}();





// mega menu
var MegaMenu = function () {

    var _initInstances = function () {

        var menu = $('.vk-navbar-nav.child');
        var valueAction = 'shortcodes';
        var target = '.vk-header .container';

        var array = menu.siblings();

        for (var i = 0; i < array.length; i++) {

            var itemCurrent = $(array[i]).text().toLowerCase();

            if (itemCurrent == valueAction) {

                $(array[i]).siblings().addClass('vk-mega-menu');

            }
        }

    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();




//scroll up
  var ScrollToTop = (function() {
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            scrollSpeed: 500,
            zIndex: 1,
        });
  });




//lightbox otion
  var LightBox = (function() {
        lightbox.option({
            disableScrolling: true,
            showImageNumberLabel: false,
            wrapAround: true,
            alwaysShowNavOnTouchDevices: true
        });
  });



// custom theme
var MediaPlayer = function () {
    var _initInstances = function () {
        $('audio').mediaelementplayer({
            audioWidth: '100%',
            audioHeight: 60,

        });
        $('video').mediaelementplayer({
            defaultVideoWidth: 800,
            defaultVideoHeight: 400,
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();




// price range
    var PriceRange = (function() {
      var slider_range = '#slider-range';
        var amount1 = '#amount1';
        var amount2 = '#amount2';
        $(slider_range).slider({
            range: true,
            min: 0,
            max: 1000,
            values: [59, 799],
            slide: function (event, ui) {
                $(amount1).val(ui.values[0]);
                $(amount2).val(ui.values[1]);
            }
        });
        $(amount1).val($(slider_range).slider("values", 0));
        $(amount2).val($(slider_range).slider("values", 1));
  });





// calculator quantity
  var CalcQuantity = (function() {

        $(".quantity button").on("click", function () {
            var $button = $(this);
            var oldValue = $button.parent().siblings().find("input").val();

            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }

            $button.parent().siblings().find("input").val(newVal);

            return false;
        });
  });





// Tooltip

  var Tooltip = (function() {
        var _initInstances = function () {
        $('[data-toggle="tooltip"]').tooltip();
    }
});





// custom theme
  var CustomTheme = (function() {
        if ($('.vk-home-dark').length) {
            $('#scrollUp').addClass('inverse');
        }

        if ($('.vk-header-left-menu').length) {
            $('body').addClass('vk-left-menu');
            $('#menu .child').prepend('<li class="back"> <span class="fa fa-angle-double-left"></span></li>');
            $('#menu .vk-navbar-nav:not(.child)').on('click', 'li', function () {
                console.log($(this));
                $(this).find('.child').fadeIn();
                $('#menu').css('transform', 'translateX(-95%)');

                $('.back').on('click', function () {
                    $('#menu').css('transform', 'translateX(0%)');
                    $(this).parent().fadeOut();
                    return false;
                });
            });
        }

        if ($('.vk-home-one-page').length) {
            $('body').addClass('vk-one-page');
        }

        $("#navScroll2Id a").mPageScroll2id();
        $('.vk-one-page .section').css('min-height', $(window).height());

});




  var homepageSlider = (function() {
       $('.recent-blog-slider').slick({
           nextArrow: '<button  class="vk-btn vk-arrow next"><i class="fa fa-chevron-right"></i></button>',
           prevArrow: '<button  class="vk-btn vk-arrow prev"><i class="fa fa-chevron-left"></i></button>',
           slidesToShow: 2,
           dots: true,
           dotsClass: 'vk-arrow-dots',
           responsive: [{

               breakpoint: 992,
               settings: {
                   slidesToShow: 1,
                   arrows: false
               }

           }]
       })
           .on('setPosition', function (event, slick) {
               arrowDotNav();
           });
});





  var aboutPageSlider = (function() {

    $('.customer-slider').slick({
        nextArrow: '<button  class="vk-btn vk-arrow next"><i class="fa fa-chevron-right"></i></button>',
        prevArrow: '<button  class="vk-btn vk-arrow prev"><i class="fa fa-chevron-left"></i></button>',
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false
            }

        }]
    });
});


var arrowDotNav = (function() {

    var arrowDots = $('.vk-arrow-dots');
    if (arrowDots.length > 0) {
        var dots = arrowDots.find('>li');
        var numDots = dots.length;

        dots.css('width', 'calc(100% / ' + numDots + ')')

    }
});


// menu mobile
  var MenuMobile = (function() {


        $('#menu').slicknav({
            label: '.vk-navbar-toggle',
            duration: 500,
            prependTo: 'section'
        });

});





var isotope = (function() {
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'li', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'li', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
});





var singleProjectSlider = (function() {

  $('.vk-slider-project .slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '<button  class="vk-btn vk-arrow next"><i class="fa fa-chevron-right"></i></button>',
      prevArrow: '<button  class="vk-btn vk-arrow prev"><i class="fa fa-chevron-left"></i></button>',
      fade: true,
      asNavFor: '.slider-nav',
      focusOnSelect: true,
  });
  $('.vk-slider-project .slider-nav').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      focusOnSelect: true,
      arrows: false,
      responsive: [{

          breakpoint: 992,
          settings: {
              slidesToShow: 3,
          }

      }]
  });

  });




var serviseFix = (function() {

  setTimeout(function(){
      $('.servise_button_container').find('li:first-child').trigger("click");
  }, 1000);

});


var firstWordFooter = (function() {

  $(".st-word").each(function() {
    var elText,
        openSpan = '<span class="first-word">',
        closeSpan = '</span>';
    elText = $(this).text().split(" ");
    elText.unshift(openSpan);
    elText.splice(2, 0, closeSpan);
    elText = elText.join(" ");
    $(this).html(elText);
  });


});


$(function (){
serviseFix();
PreLoader();
AnimationScrollPage();
CountTo();
ParallaxBackground();
MasonryItem();
PriceRange();
MenuMobile();
CalcQuantity();
AnimationScrollPage();
ScrollToTop();
Tooltip();
CustomTheme();
homepageSlider();
aboutPageSlider();
arrowDotNav();
isotope();
singleProjectSlider();
firstWordFooter();


	});
})(jQuery);
