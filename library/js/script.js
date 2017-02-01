$(function(){

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

    //handle home page accordion nav
    $('.about-accordion .nav-items .nav-item').click(function() {
        var $this = $(this),
            $accordion = $this.attr('data-accordion');

        $('.about-accordion .nav-items .nav-item').removeClass('active');
        $('.about-accordion .main-accordion').removeClass('active');
        $this.addClass('active');
        $('.about-accordion .main-accordion[data-accordion="'+ $accordion +'"]').addClass('active');
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


    //init Isotope for News Index
    var $newsGrid = $('.news').isotope({
        itemSelector: '.news-item',
        percentPosition: true,
        masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer'
        }
    });

    var $imgGrid = $('.accordion-gallery').isotope({
        layoutMode: 'packery',
        itemSelector: '.img-item'
    });

    $newsGrid.imagesLoaded().progress( function() {
         $newsGrid.isotope('layout');
    });

    $imgGrid.imagesLoaded().progress( function() {
         $imgGrid.isotope('layout');
    });

    //Isotope click function
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.news').isotope({
            filter: selector
        });
        return false;
    });

    //News Filter

    $('.news-filter .filter-btn').click(function() {
       $('.news-filter').toggleClass('active');
    });
});
