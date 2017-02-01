$(function(){
//===================================
//GENERAL
//===================================

    // Fix cta in header if waypoint hit
    new Waypoint({
        element: $('#ctaBanner'),
        handler: function() {
            $('body').toggleClass('cta-fixed');
        },
        offset: function() {
            return -this.element.height();
        }
    });

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
    // email
    $('input[type="email"]').on('input', function() {
        var input=$(this);
        var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var is_email=re.test(input.val());
        if(is_email){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
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

        //if news
        if ($('.news').length > 0) {
            $('.news').isotope({
                filter: $selector
            });
        }

        //if charities
        if ($('.charities').length > 0) {
            $('.charities').isotope({
                filter: $selector
            });
        }

        //if companies
        if ($('.charities').length > 0) {
            $('.charities').isotope({
                filter: $selector
            });
        }

        return false;
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
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      pageDots: false,
      prevNextButtons: false,
      contain: true
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
//END
//===================================
});
