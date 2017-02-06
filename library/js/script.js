$(function(){
//===================================
//GENERAL
//===================================

    // Fix cta in header if waypoint hit
    if ($('#ctaBanner').length > 0) {
        new Waypoint({
            element: $('#ctaBanner'),
            handler: function() {
                $('body').toggleClass('cta-fixed');
            },
            offset: function() {
                return -this.element.height();
            }
        });
    }

    // Add class to header on scroll from top
    new Waypoint({
        element: $('body'),
        handler: function() {
            $('.header').toggleClass('fixed-header');
        },
        offset: -100
    });

    // Click to handle mobile menu
    $('.menu-btn').click(function() {
        $('body').toggleClass('menu-open');
        $('.has-child').removeClass('active');
    });

    // Hover to handle dropdown menu
    $('.nav .has-child').hover(function() {
        if ( $(window).scrollTop() <= 100 ) {
            $('.header').toggleClass('fixed-header');
        }
    });

    // Mobile Race Locations click from the menu
    $('.nav .has-child').click(function() {
        $('.has-child').toggleClass('active');
    });

    // input validation
    $('input').on('input', function() {
        if ($(this).is(':valid') == true) {
            $(this).removeClass("invalid").addClass("valid");
        } else {
            $(this).removeClass("valid").addClass("invalid");
        }
    });
    //End input validation

    //handle filters
    $('.filters .filters-btn').click(function() {
       $('.filters').toggleClass('active');
    });

    $('.filter').click(function() {
        var $this = $(this),
            $parent = $this.parent('.filter-group'),
            $selector = $this.attr('data-filter');

        if ($selector == "*"){
            $('.filter').removeClass('active');
            $this.addClass('active');
        } else {
            $selector = "";
            $parent.children('.filter').removeClass('active');
            $this.addClass('active');

            $('.filter.active').each(function(){
                $selector += $(this).attr('data-filter');
            });
        }

        $('.isotope-no-items').addClass('inactive');

        //if news page
        if ($('.news').length > 0) {
            $('.news').isotope({
                filter: $selector
            });
        }

        //if charities page
        if ($('.charities').length > 0) {
            $('.charities').isotope({
                filter: $selector
            });
        }

        //if companies page
        if ($('.companies').length > 0) {
            $('.companies').isotope({
                filter: $selector
            });
        }

        //if partners page
        if ($('.partners').length > 0) {
            $('.partners').isotope({
                filter: $selector
            });

            $('.partners').removeClass('active');
            $('.partners .race').removeClass('active');
        }

        //if gallery page
        if ($('.gallery-grid').length > 0) {
            $('.gallery-grid').isotope({
                filter: $selector
            });
        }

        //if results page
        if ($('.results-table').length > 0){
            $('.results-table tr').addClass('hide');
            $('.results-table tr'+$selector).removeClass('hide');

            //if no results
            setTimeout(function(){
                if ( $('.results-table tr:visible').length <= 0 ) {
                    $('.results-table').height($('.isotope-no-items').height() + 200);
                    $('.isotope-no-items').removeClass('inactive');
                }
            }, 500);

        } else {
            //if no results
            setTimeout(function(){
                if ( $('.grid-item:visible').length <= 0 ) {
                    $('.grid').height($('.isotope-no-items').height() + 80);
                    $('.isotope-no-items').removeClass('inactive');
                }
            }, 500)
        }

        return false;
    });

    //handle tabs
    $('.tabs-container .tab').click(function() {
        var $this = $(this),
            $tab = $this.attr('data-tab');

        $('.tabs-container .tab').removeClass('active');
        $this.addClass('active');
        $('.tabs-container .tab-wrapper').removeClass('active');
        $('.tabs-container .tab-wrapper[data-tab='+ $tab +']').addClass('active');
    });

    //handle tables
    $(".tablesorter").tablesorter();

    //hide notification
    $('.notification .close').click(function() {
        var $this = $(this),
            $notification = $this.parent('.notification');

        $notification.addClass('hide');
    });

//===================================
//HOME PAGE
//===================================

    //handle home page accordion nav
    $('.about-accordion .nav-items li').click(function() {
        var $this = $(this);

        $('.about-accordion .nav-items li').removeClass('active');
        $this.addClass('active');
    });

    $('.about-accordion .nav-items .nav-item').click(function() {
        var $this = $(this),
            $accordion = $this.attr('data-accordion');

        $('.about-accordion .nav-items .nav-item').removeClass('active');
        $('.about-accordion .main-accordion').removeClass('active');
        $this.addClass('active');
        $('.about-accordion .main-accordion[data-accordion="'+ $accordion +'"]').addClass('active');
    });

    //handle gallery in accordion
    var $imgGrid = $('.accordion-gallery').isotope({
        layoutMode: 'packery',
        itemSelector: '.img-item'
    });

    $imgGrid.imagesLoaded().progress( function() {
         $imgGrid.isotope('layout');
    });

    //handle cities accordion
    $('.race-locations .cities li').click(function() {
        var $this = $(this),
            $city = $this.attr('data-city');

        $('.race-locations .cities li').removeClass('active');
        $this.addClass('active');

        $('.race-locations .city').removeClass('active');
        $('.race-locations .city').each(function(){
            var $thisCity = $(this).attr('data-city');

            if ($thisCity == $city) {
                $(this).addClass('active');
            }

        });
    });

    //handle countdown for homepage
    $('.race-locations .city .timer').each(function(){
        var $this = $(this),
            $date = $this.attr('data-date');
        $this.countdown($date, function(event) {
            $this.text(
                event.strftime('%D:%H:%M:%S')
            );
        });
    });

//===================================
//NEWS PAGE
//===================================

    //Isotope js, NEWS PAGE:
    var $newsGrid = $('.news').isotope({
        itemSelector: '.news-item',
        percentPosition: true,
        layoutMode: 'packery'
    });

    $newsGrid.imagesLoaded().progress( function() {
         $newsGrid.isotope('layout');
    });

//===================================
//SINGLE NEWS PAGE
//===================================

    //Flickity
    $('.related-articles-slider').flickity({
        cellAlign: 'left',
        pageDots: false,
        prevNextButtons: false,
        contain: true,
        wrapAround: true,
        autoPlay: 8000
    });

//===================================
//CHARITIES PAGE
//===================================

    //Isotope, CHARITIES PAGE:
    var $charityGrid = $('.charities').isotope({
        itemSelector: '.charities-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    //images loaded
    $charityGrid.imagesLoaded().progress( function() {
        $charityGrid.isotope('layout');
    });

//===================================
//COMPANIES PAGE
//===================================

    //Isotope, COMPANIES PAGE:
    var $companiesGrid = $('.companies').isotope({
        itemSelector: '.companies-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $companiesGrid.imagesLoaded().progress( function() {
        $companiesGrid.isotope('layout');
    });

//===================================
//RESULTS PAGE
//===================================

    $('.results-table .tab').click(function() {
        var $this = $(this),
            $tab = $this.attr('data-tab');

        $('.results-table .tab').removeClass('active');
        $this.addClass('active');
        $('.results-table .table-wrapper').removeClass('active');
        $('.results-table .table-wrapper[data-tab='+ $tab +']').addClass('active');
    });

    $(".tablesorter").tablesorter();

//===================================
//MY ACCOUNT PAGE
//===================================

$('.edit-btn').click(function() {
    $('.my-profile').addClass('edit');
});

$('.save-btn').click(function() {
    var $required = 0;

    $('.required').each(function() {
        var $this = $(this).find('input');
        if ($this.val() == "" || $('.input').hasClass('invalid')){
            $required = 1;
        }
    });

    if ($required != 1){
        $('.my-profile').removeClass('edit');
    } else {
        $('.my-profile .notification.error').removeClass('hide');
    }
});

//===================================
//PARTNERS PAGE
//===================================

    //Isotope, PARTNERS PAGE:
    var $partnersGrid = $('.partners').isotope({
        itemSelector: '.race',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $('.race-title').click(function() {
        $this = $(this),
        $race = $this.parent('.race');

        $('.race').removeClass('active');
        $race.addClass('active');

        if ($('.race').hasClass('active')){
            $('.partners').addClass('active');
        } else {
            $('.partners').removeClass('active');
        }

        setTimeout(function(){
            $partnersGrid.isotope('layout');
        }, 100);

    });

    //fix slide nav menu
    if($('#partnersNav').length > 0){
        new Waypoint({
            element: $('#partnersNav'),
            handler: function() {
                $('#partnersNav').toggleClass('fixed');
            },
            offset: 140
        });
    }

    $('.slide-nav-section').each(function(){
        var $this = $(this),
            $id = $this.attr('id'),
            $slide = $this.attr('data-slide');

        new Waypoint({
            element: $('#'+$id),
            handler: function() {
                $('.slide-nav-section').removeClass('active');
                $('.slide-nav li').removeClass('active');
                $('#'+$id).addClass('active');
                $('.slide-nav li[data-slide='+ $slide +']').addClass('active');
            },
            offset: '30%'
        });
    });

//===================================
//GALLERY PAGE
//===================================

   //Isotope, GLOBAL-GALLERY PAGE
   var $globalGalleryGrid = $('.gallery-grid').isotope({
       itemSelector: '.grid-item',
       percentPosition: true,
       layoutMode: 'masonry',
       stamp: '.stamp'
   });

   $globalGalleryGrid.imagesLoaded().progress( function() {
        $globalGalleryGrid.isotope('layout');
   });

//===================================
//SINGLE CITY PAGE
//===================================

    //close call to action
    $('.city-cta .close').click(function() {
        $(this).parent('.city-cta').addClass('hide');
    });

    //select race year
    $('.races-by-year-nav li').click(function() {
        var $this = $(this),
            $year = $this.attr('data-year');

        $('.races-by-year-nav li').removeClass('active');
        $this.addClass('active');

        $('.races-by-year .race-year').removeClass('active');
        $('.races-by-year .race-year[data-year='+ $year +']').addClass('active');
    });

    //when list gets to top of screen go fixed
    new Waypoint({
        element: $('#citySlideNav'),
        handler: function() {
            $('#citySlideNav').toggleClass('fixed');
        },
        offset: '180px'
    });

    $('.race-year .section').each(function() {
        var $this = $(this),
            $id = $this.attr('id'),
            $slide = $this.attr('data-slide');

        new Waypoint({
            element: $('#'+$id),
            handler: function() {
                $('.race-year .section').removeClass('active');
                $('#'+$id).addClass('active');

                $('.slide-nav li').removeClass('active');
                $('.slide-nav li[data-slide='+ $slide +']').addClass('active');
            },
            offset: '280px'
        });
    });

//===================================
//END
//===================================
});
